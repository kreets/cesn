<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Mail\ContactFormMail;
use App\Models\Newsletter;
use App\Models\Post;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Mail;

class SiteController extends BaseController{

    public function index(Request $request){

        return view(
            "site.index", [
                "rolunk" => getPage("rolunk")
            ]
        );
    }

    public function blogpost($slug){
        $post = Post::where('slug', $slug)->first();
        return view("pages.blogpost", ["post" => $post]);
    }

    public function kapcsolat(Request $request){
        $success = false;
        if($this->validateRecaptcha($request->get('recaptcha'))){
            $validatedData = $request->validate([
                'lgxname' => 'required',
                'lgxemail' => 'required|email',
                'lgxsubject' => 'required',
                'contact_message' => 'required',
            ]);

            // Send email
            Mail::to(setting('site.contact_email_address'))
                ->send(new ContactFormMail($validatedData));
            $success = true;
        }
        return response()->json([
            'success' => $success,
            'message' => ($success ? 'Köszönjük! Hamarosan felvesszük Önnel a kapcsolatot ' : 'Hiba történt, kérjük próbálja újra később')
        ]);
    }

    public function hirlevel_feliratkozas(Request $request)
    {
        if($this->validateRecaptcha($request->get('recaptcha'))){
            $validatedData = $request->validate([
                'email' => 'required|email|unique:newsletters'
            ]);
            Newsletter::create($validatedData);
            return response()->json([
                'success' => true,
                'message' => '<i class="fa fa-check"></i> <strong>Congratulation!</strong> To complete the Subscription Process, Please Check Your Email and Follow the Instruction. '
            ]);
        }
    }

    public function hirlevel_leiratkozas(Request $request)
    {
        // Implementation for unsubscribe
    }

    private function validateRecaptcha($recaptcha){
        $client = new Client();

        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $recaptcha
            ]
        ]);

        $body = json_decode((string) $response->getBody());

        return $body->success;
    }

}
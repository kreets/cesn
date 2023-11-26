@extends('cesn_page')

@section('content')

    @include('partials._banner_inner')

    <main>
        <div class="lgx-page-wrapper">
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-6 col-md-offset-3">

                            <form method="POST" class="lgx-contactform" action="{{route('kapcsolat')}}"  data-racaptchasitekey="{{env('RECAPTCHA_SITE_KEY')}}">
                                @csrf
                                <input type="hidden" name="recaptcha" class="recaptcha">
                                <div class="form-group">
                                    <input type="text" name="lgxname" class="form-control lgxname" id="contact_name" placeholder="Név" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="lgxemail" class="form-control lgxemail" id="contact_email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="lgxsubject" class="form-control lgxsubject" id="contact_address" placeholder="Tárgy" required>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control lgxmessage" name="contact_message" id="lgxmessage" rows="5" placeholder="Írja ide üzenetét..." required></textarea>
                                </div>


                                <button type="submit" name="submit" value="contact-form" class="lgx-btn hvr-glow hvr-radial-out lgxsend lgx-send"><span>Küldés</span></button>
                            </form>

                            <!-- MODAL SECTION -->
                            <div id="lgx-form-modal" class="modal fade lgx-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content lgx-modal-content">
                                        <div class="modal-header lgx-modal-header">
                                            <button type="button" class="close brand-color-hover" data-dismiss="modal" aria-label="Close">
                                                <i class="fa fa-power-off"></i>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="alert lgx-form-msg" role="alert"></div>
                                        </div> <!--//MODAL BODY-->

                                    </div>
                                </div>
                            </div> <!-- //MODAL -->

                        </div> <!--//.COL-->
                    </div>
                </div><!-- //.CONTAINER -->
            </section>
            <!--News END-->
        </div>
    </main>

@endsection


@include('pages._meta_tags')
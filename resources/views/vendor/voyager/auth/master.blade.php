<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>@yield('title', 'Admin - '.Voyager::setting("admin.title"))</title>
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    @if (__('voyager::generic.is_rtl') == 'true')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif
    <style>
        body {
            background-color: {{ Voyager::setting("admin.bg_color", "#FFFFFF" ) }};
        }
        body.login .login-sidebar {
            border-top:5px solid {{ config('voyager.primary_color','#22A7F0') }};
        }
        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top:0px !important;
                border-left:5px solid {{ config('voyager.primary_color','#22A7F0') }};
            }
        }
        body.login .form-group-default.focused{
            border-color:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .login-button, .bar:before, .bar:after{
            background:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .remember-me-text{
            padding:0 5px;
        }
    </style>

    @yield('pre_css')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100" style="margin-top:40px">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    @if(setting('site.logo', false))
                                        <img src="/storage/{{setting('site.logo')}}"
                                             style="width: 185px;" alt="logo">
                                    @endif
                                    <h4 class="mt-1 mb-5 pb-1">Adminisztrációs felület</h4>
                                </div>

                                <form action="{{ route('voyager.login') }}" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="adminemail">Admin user</label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}" id="adminemail" class="form-control"
                                               placeholder="Email" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="adminpass">Jelszó</label>
                                        <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" id="adminpass" class="form-control" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="checkbox" name="remember" id="remember" value="1"><label for="remember" class="remember-me-text">{{ __('voyager::generic.remember_me') }}</label>
                                    </div>

                                    <div class="text-center pt-1 mb-2 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4 mt-4">Üzemi terület</h4>
                                    <p class="small mb-0">Az admin felületre történő minden belépési kísérlet naplózásra kerül.</p>

                                    <hr>
                                    <p>Amennyiben problémába ütközik, vegye fel a kapcsolatot ügyfélszolgálatunkkal:</p>
                                    <p><a class="btn btn-warning" href="https://devpartner.hu/kapcsolat">Kapcsolat</a></p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@yield('post_js')
</body>
</html>

@extends('layouts.auth')

@section('style')
<link rel="stylesheet" href="{{ asset('/theme-assets/vendor/parsleyjs/css/parsley.css') }}">
@endsection

@section('content')

<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    <img src="https://thememakker.com/templates/lucid/html/assets/images/logo-white.svg" alt="Lucid">
                </div>
                <div class="card">
                    <div class="header">
                        <p class="lead text-center">استرجاع كلمة المرور</p>
                    </div>
                    <div class="body">
                        <p>من فضلك قم بكتابة البريد الالكتروني لتصلك رسالة بكلمة المرور .</p>

                        <form
                            id="reset_pass"
                            class="form-auth-small"
                            method="POST"
                            action="{{ route('password.email') }}">

                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control"
                                    id="signup-password"
                                    placeholder="{{ __('labels.email') }}"
                                    data-parsley-type="email"
                                    data-parsley-required-message="{{ __('messages.confirm_mail') }}"
                                    data-parsley-type-message="{{ __('messages.real_pass') }}"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('labels.reset_btn') }}</button>
                            <div class="bottom">
                                <span class="helper-text">
                                    {!! __('messages.remember_pass') !!}
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->


@endsection

@section('script')
    <script src="{{ asset('/template-assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('/theme-assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
    <script>
        $(function() {

            $('#reset_pass').parsley();
        });
    </script>
@endsection

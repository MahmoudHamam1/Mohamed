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
                    @include('flash-messages')

                    <div class="header">
                        <p class="lead text-center">{{ __('labels.login') }}</p>
                    </div>
                    <div class="body">

                        <form
                            id="login_form"
                            class="form-auth-small"
                            method="post"
                            action="{{ route('login') }}"
                            novalidate>

                            @csrf

                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">{{ __('labels.email') }}</label>
                                <input
                                    id="signin-email"
                                    name="email"
                                    type="email"
                                    class="form-control"
                                    value="{{ old('email') }}"
                                    placeholder="{{ __('labels.email') }}"
                                    data-parsley-type="email"
                                    data-parsley-required-message="{{ __('messages.confirm_mail') }}"
                                    data-parsley-type-message="{{ __('messages.real_pass') }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">{{ __('labels.password') }}</label>
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    id="signin-password"
                                    placeholder="{{ __('labels.password') }}"
                                    data-parsley-required-message="{{ __('messages.pass') }}"
                                    required>
                            </div>


                            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('labels.enter_btn') }}</button>
                            <div class="bottom">
                                <span class="helper-text m-b-10"><i class="fa fa-lock"></i>
                                    {!! __('messages.forget_pass') !!}
                                </span>
                                {!! __('messages.not_have_acc') !!}
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

            $('#login_form').parsley();
        });
    </script>
@endsection

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
                            <p class="lead text-center">{{ __('titles.register') }}</p>
                        </div>
                        <div class="body">

                            <form
                                id="register_form"
                                class="form-auth-small"
                                method="POST"
                                action="{{ route('register') }}"
                                novalidate>

                                @csrf

                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">{{ __('labels.email') }}</label>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        id="signup-email"
                                        placeholder="{{ __('labels.email') }}"
                                        data-parsley-required-message="{{ __('messages.confirm_mail') }}"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">
                                        {{ __('labels.password') }}
                                    </label>

                                    <input
                                        id="password"
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        placeholder="{{ __('labels.password') }}"
                                        data-parsley-required-message="{{ __('messages.pass') }}"
                                        required>
                                </div>


                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">
                                        {{ __('labels.pass') }}
                                    </label>

                                    <input
                                        type="password"
                                        name="password_confirmation"
                                        class="form-control"
                                        id="signup-password"
                                        placeholder="{{ __('labels.confirm_pass') }}"
                                        data-parsley-equalto="#password"
                                        data-parsley-equalto-message="{{ __('messages.identical_pass') }}"
                                        data-parsley-required-message="{{ __('messages.confirm_pass') }}"
                                        required>
                                </div>


                                <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('labels.create_btn') }}</button>
                                <div class="bottom">
                                    {!! __('messages.have_acc') !!}
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
    <!-- <script src="{{ asset('/template-assets/bundles/vendorscripts.bundle.js') }}"></script> -->
    <script src="{{ asset('/theme-assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
    <!-- <script src="{{ asset('/template-assets/bundles/mainscripts.bundle.js') }}"></script> -->
    <script>
        $(function() {

            $('#register_form').parsley();
        });
    </script>
@endsection

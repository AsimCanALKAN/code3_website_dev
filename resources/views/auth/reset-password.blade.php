<x-guest-layout>
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="{{ route('dashboard') }}">
                                            <x-breakout-logo></x-breakout-logo>
                                        </a>
									</div>
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    @if (isset($status))
                                        <div class="alert alert-success">
                                            {{ $status }}
                                        </div>
                                    @endif
                                    @if (isset($errors))
                                        <div class="alert alert-{{ $danger }}">
                                            {{ $errors }}
                                        </div>
                                    @endif
                                    <form action="/reset-password" method="POST">
                                        @csrf

                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">


                                        <div class="mb-3">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com" :value="old('email', $request->email)" required autofocus>
                                        </div>

                                        <div class="mb-3">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="new-password">
                                        </div>

                                        <div class="mb-3">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password_confimation" class="form-control" placeholder="Password" required autocomplete="new-password">
                                        </div>


                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

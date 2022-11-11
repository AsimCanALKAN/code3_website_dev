<x-guest-layout>
    <div class="authincation h-100 pt-5">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                
                                <div class="auth-form">
                                <div class="row">
                                    <div class="col-4 offset-lg-4 text-center">
                                        <div class="text-center">
                                            @include('static.breakoutlogo')
                                        </div>
                                    </div>
                                </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
    
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
    
                                    @if (isset($errors))
                                        @foreach ($errors->all() as $error)
                                            <div class="mb-4 font-medium text-sm text-red-600">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
    
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <x-jet-label for="password" value="{{ __('Email') }}" />
                                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                        </div>
                                        <div class="mb-3">
                                            <x-jet-label for="password" value="{{ __('Password') }}" />
                                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" class="form-check-input" id="remember_me">
                                                    <label class="form-check-label" name="remember" for="basic_checkbox_1">{{ __('Remember me') }}</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

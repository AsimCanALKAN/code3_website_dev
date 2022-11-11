<x-guest-layout>


    <div class="authincation h-100 pt-5">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<div class="row">
                                            <div class="col-4 offset-4">
                                                <a href="{{ route('dashboard') }}">
                                                    <x-breakout-logo></x-breakout-logo>
                                                </a>
                                            </div>
                                        </div>
									</div>
                                    <h4 class="text-center mb-4">Forgot Password</h4>
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

                                    <form action="{{ route('password.email') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="hello@example.com" required autofocus>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                        </div>
                                    </form>

                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <a href="{{ route('login') }}" class="text-primary">I remember my credentials</a>
                                        </div>
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

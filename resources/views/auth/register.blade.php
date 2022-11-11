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
                                            <div class="col-4 offset-lg-4 text-center">
                                                <div class="text-center">
                                                    @include('static.breakoutlogo')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    @if (isset($errors))
                                        @foreach ($errors->all() as $error)
                                            <div class="mb-4 font-medium text-sm text-red-600">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
    
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input type="text" name="name" class="form-control" placeholder="John Doe">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password Again</strong></label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
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
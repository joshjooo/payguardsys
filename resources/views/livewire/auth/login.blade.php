<div>
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
<x-guest-layout>
    <div>
        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex">
                    <div class="card-body">
    
                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <a href="{{ route('/') }}" class="logo-dark">
                                {{-- <h1>PAYGUARD</h1> --}}
                                <span>
                                    <img src="assets/images/logo-dark.png" alt="" height="18">
                                </span>
                            </a>
                        </div>
    
                        <!-- title-->
                        <h4 class="mt-0">Sign In</h4>
                        <p class="text-muted mb-4">Enter your email address and password to access account.</p>
    
                        <!-- form -->
                       @livewire('auth.login-action')
                        <!-- end form-->
    
                        <!-- Footer-->
                        {{-- <footer class="footer footer-alt">
                            <p class="text-muted">Don't have an account? <a href="#" class="text-muted ms-1"><b>Sign Up</b></a></p>
                        </footer> --}}
    
                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->
    
            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3">Easy Pay</h2>
                    <p class="lead">
                        <i class="mdi mdi-format-quote-open"></i> Pay and get paid safely and easly arround the world. <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <p>
                        - PayGuard System - 
                    </p>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
    </div>
</x-guest-layout>

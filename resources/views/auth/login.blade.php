@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="container-fluid p-0 min-vh-100">
    <div class="row g-0">
        <!-- Custom Design Side -->
        <div class="col-xxl-7 col-lg-5 col-md-5 bg-primary d-flex align-items-center">
            <div class="d-flex flex-column h-100 py-5 px-4 align-items-center justify-content-center text-center">
                
                    <h1 class="f-600 text-white">สนามฟุตบอล</h1>
                
                <p class="text-white-50">ยินดีให้บริการทุกท่าน สนามฟุตบอลของเรา</p>
                <div class="d-flex flex-column align-items-center justify-content-center gap-3">
                    <div class="d-flex">
                       
                       
                    </div>
                    
                </div>
                
            </div>
        </div>

        <!-- Login Form Side -->
        <div class="col-xxl-5 col-lg-7 col-md-7">
            <div class="auth-bg bg-cover bg-center bg-norepeat vh-100 bg-white py-md-5 p-4 d-flex position-relative">
                <div class="bg-overlay outer-bg bg-white"></div>
                <div class="row justify-content-center g-0 align-items-center w-100">
                    <div class="col-xl-8 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-3 py-3">
                                    <div class="text-center">
                                        <h5 class="mb-0 f-600">ยินดีต้อนรับ โปรดเข้าสู่ระบบ</h5>
                                        <p class="text-muted mt-2">เข้าสู่ระบบเพื่อดำเนินการต่อไป</p>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-floating form-floating-custom mb-3">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="input-username" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <label for="input-username">อีเมลล์</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-floating form-floating-custom mb-3 auth-pass-inputgroup">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password-input" name="password" placeholder="Enter Password" required autocomplete="current-password">
                                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon" aria-label="Toggle password visibility">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye h-20 text-muted"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </button>
                                            <label for="password-input">รหัสผ่าน</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 d-flex justify-content-between align-items-center">
                                            <div class="form-check form-check-primary font-size-16 py-1">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember-check" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember-check">
                                                    จดจำฉัน
                                                </label>
                                            </div>
                                            <div class="">
                                                <a href="{{ route('password.request') }}" class="text-muted text-decoration-underline">ลืมรหัสผ่าน?</a>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-primary w-100" type="submit">เข้าสู่ระบบ</button>
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
</div>
@endsection

@section('scripts')
    <!-- ICON -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
@endsection

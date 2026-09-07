@extends('layouts.app')

@section('title', 'เข้าสู่ระบบ - WORAMAN Luxury')

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-md-7 col-lg-5">
        <div class="luxury-card">
            <div class="luxury-card-header text-center justify-content-center flex-column py-4">
                <div class="feature-icon-wrapper mb-2" style="width: 55px; height: 55px; font-size: 1.5rem;">
                    <i class="bi bi-shield-lock"></i>
                </div>
                <h3 class="gold-gradient-text mb-1">{{ __('เข้าสู่ระบบ') }}</h3>
                <span class="text-muted small">ยินดีต้อนรับสู่ระบบจัดการบทความระดับพรีเมียม</span>
            </div>

            <div class="luxury-card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">
                            <i class="bi bi-envelope text-gold me-1"></i> {{ __('อีเมล (Email Address)') }}
                        </label>
                        <input id="email" type="email" 
                               class="form-control @error('email') is-invalid @enderror" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required 
                               autocomplete="email" 
                               placeholder="example@mail.com"
                               autofocus>

                        @error('email')
                            <span class="invalid-feedback d-block mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="password" class="form-label mb-0">
                                <i class="bi bi-key text-gold me-1"></i> {{ __('รหัสผ่าน (Password)') }}
                            </label>
                            @if (Route::has('password.request'))
                                <a class="text-gold text-decoration-none small opacity-75" href="{{ route('password.request') }}">
                                    {{ __('ลืมรหัสผ่าน?') }}
                                </a>
                            @endif
                        </div>
                        <input id="password" type="password" 
                               class="form-control @error('password') is-invalid @enderror" 
                               name="password" 
                               required 
                               placeholder="••••••••"
                               autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback d-block mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-muted small" for="remember">
                                {{ __('จดจำการเข้าสู่ระบบ') }}
                            </label>
                        </div>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-gold btn-lg">
                            <i class="bi bi-box-arrow-in-right me-1"></i> {{ __('เข้าสู่ระบบ') }}
                        </button>
                    </div>

                    @if (Route::has('register'))
                        <div class="text-center mt-3 text-muted small">
                            ยังไม่มีบัญชีใช้งาน? 
                            <a href="{{ route('register') }}" class="text-gold text-decoration-none fw-semibold ms-1">
                                สมัครสมาชิกที่นี่
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

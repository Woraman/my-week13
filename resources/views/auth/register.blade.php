@extends('layouts.app')

@section('title', 'สมัครสมาชิก - WORAMAN Luxury')

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-md-8 col-lg-6">
        <div class="luxury-card">
            <div class="luxury-card-header text-center justify-content-center flex-column py-4">
                <div class="feature-icon-wrapper mb-2" style="width: 55px; height: 55px; font-size: 1.5rem;">
                    <i class="bi bi-person-plus-fill"></i>
                </div>
                <h3 class="gold-gradient-text mb-1">{{ __('สมัครสมาชิก') }}</h3>
                <span class="text-muted small">สร้างบัญชีเพื่อเข้าถึงระบบจัดการบทความพรีเมียม</span>
            </div>

            <div class="luxury-card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            <i class="bi bi-person text-gold me-1"></i> {{ __('ชื่อ-นามสกุล (Name)') }}
                        </label>
                        <input id="name" type="text" 
                               class="form-control @error('name') is-invalid @enderror" 
                               name="name" 
                               value="{{ old('name') }}" 
                               required 
                               autocomplete="name" 
                               placeholder="กรอกชื่อผู้ใช้..."
                               autofocus>

                        @error('name')
                            <span class="invalid-feedback d-block mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

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
                               placeholder="example@mail.com">

                        @error('email')
                            <span class="invalid-feedback d-block mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">
                            <i class="bi bi-key text-gold me-1"></i> {{ __('รหัสผ่าน (Password)') }}
                        </label>
                        <input id="password" type="password" 
                               class="form-control @error('password') is-invalid @enderror" 
                               name="password" 
                               required 
                               placeholder="กำหนดรหัสผ่านอย่างน้อย 8 ตัวอักษร"
                               autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback d-block mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label">
                            <i class="bi bi-check-circle text-gold me-1"></i> {{ __('ยืนยันรหัสผ่าน (Confirm Password)') }}
                        </label>
                        <input id="password-confirm" type="password" 
                               class="form-control" 
                               name="password_confirmation" 
                               required 
                               placeholder="พิมพ์รหัสผ่านอีกครั้ง"
                               autocomplete="new-password">
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-gold btn-lg">
                            <i class="bi bi-stars me-1"></i> {{ __('สร้างบัญชีสมาชิก') }}
                        </button>
                    </div>

                    <div class="text-center mt-3 text-muted small">
                        มีบัญชีอยู่แล้ว? 
                        <a href="{{ route('login') }}" class="text-gold text-decoration-none fw-semibold ms-1">
                            เข้าสู่ระบบที่นี่
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'แผงควบคุม - WORAMAN Luxury')

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-lg-9">
        <div class="luxury-card mb-4">
            <div class="luxury-card-header">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-speedometer2 text-gold fs-5"></i>
                    <h4 class="mb-0 text-gold">{{ __('แผงควบคุมระบบ (Dashboard)') }}</h4>
                </div>
                <span class="badge bg-transparent border border-warning text-gold" style="font-size: 0.75rem; border-color: rgba(212,175,55,0.4) !important;">
                    ONLINE
                </span>
            </div>

            <div class="luxury-card-body">
                @if (session('status'))
                    <div class="alert alert-success border-0 mb-4" style="background: rgba(32,153,97,0.2); color: #4ade80; border-left: 4px solid #4ade80 !important;" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>{{ session('status') }}
                    </div>
                @endif

                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="feature-icon-wrapper mb-0" style="width: 55px; height: 55px; font-size: 1.5rem;">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div>
                        <h4 class="text-light mb-1">ยินดีต้อนรับกลับ, {{ Auth::user()->name }}</h4>
                        <p class="text-muted small mb-0">คุณได้เข้าสู่ระบบบัญชีผู้ดูแลเรียบร้อยแล้ว พร้อมจัดการบทความและข้อมูลทั้งหมด</p>
                    </div>
                </div>

                <hr class="luxury-divider my-4">

                <h5 class="text-gold mb-3"><i class="bi bi-grid-fill me-2"></i>เมนูลัดสำหรับคุณ</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <a href="/author/blogs" class="luxury-glass-panel text-decoration-none d-block">
                            <div class="text-gold fs-4 mb-2"><i class="bi bi-journal-richtext"></i></div>
                            <h6 class="text-light mb-1">บทความทั้งหมด</h6>
                            <p class="text-muted small mb-0">ดูและจัดการสถานะบทความในระบบ</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/author/cerate" class="luxury-glass-panel text-decoration-none d-block">
                            <div class="text-gold fs-4 mb-2"><i class="bi bi-feather"></i></div>
                            <h6 class="text-light mb-1">เขียนบทความ</h6>
                            <p class="text-muted small mb-0">เพิ่มบทความใหม่สู่คลังข้อมูล</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/author/abouts" class="luxury-glass-panel text-decoration-none d-block">
                            <div class="text-gold fs-4 mb-2"><i class="bi bi-person-badge"></i></div>
                            <h6 class="text-light mb-1">เกี่ยวกับเรา</h6>
                            <p class="text-muted small mb-0">ดูข้อมูลผู้พัฒนาและระบบ</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

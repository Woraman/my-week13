@extends('layouts.app')

@section('title', 'เกี่ยวกับเรา - WORAMAN Luxury')

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-lg-8">
        <div class="luxury-card text-center p-4 p-md-5">
            <!-- Profile Avatar with Gold Frame -->
            <div class="profile-avatar-frame">
                <div class="profile-avatar-inner">
                    <i class="bi bi-person-fill"></i>
                </div>
            </div>

            <!-- Profile Name & Title -->
            <div class="mb-2">
                <span class="hero-badge">
                    <i class="bi bi-award me-1"></i> SYSTEM CREATOR & DEVELOPER
                </span>
            </div>
            <h2 class="gold-gradient-text display-6 mb-2">{{ $name }}</h2>
            <p class="text-gold opacity-90 fw-medium mb-4">Web Application Developer & UI Designer</p>

            <hr class="luxury-divider my-4">

            <!-- Meta Information Grid (High Contrast) -->
            <div class="row g-3 text-start mb-4">
                <div class="col-md-6">
                    <div class="profile-meta-item">
                        <div class="profile-meta-icon">
                            <i class="bi bi-person-check-fill"></i>
                        </div>
                        <div>
                            <div class="profile-meta-label">ผู้พัฒนาระบบ</div>
                            <div class="profile-meta-val">{{ $name }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="profile-meta-item">
                        <div class="profile-meta-icon">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div>
                            <div class="profile-meta-label">วันที่พัฒนา / อัปเดต</div>
                            <div class="profile-meta-val">{{ $date }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="profile-meta-item">
                        <div class="profile-meta-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <div>
                            <div class="profile-meta-label">เทคโนโลยีหลัก</div>
                            <div class="profile-meta-val">Laravel 11 & Modern Blade</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="profile-meta-item">
                        <div class="profile-meta-icon">
                            <i class="bi bi-palette-fill"></i>
                        </div>
                        <div>
                            <div class="profile-meta-label">ธีมการออกแบบ</div>
                            <div class="profile-meta-val">Modern Luxury Gold Design</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="luxury-glass-panel text-start mb-4 p-4">
                <h5 class="text-gold mb-3 fw-bold">
                    <i class="bi bi-quote fs-4 me-1"></i>วิสัยทัศน์และการพัฒนา
                </h5>
                <p class="text-secondary leading-relaxed mb-0" style="color: #e2e8f0 !important; font-size: 0.98rem;">
                    ระบบจัดการบทความนี้ถูกพัฒนาขึ้นด้วยความตั้งใจในการผสมผสานประสิทธิภาพของเฟรมเวิร์กสมัยใหม่เข้ากับศิลปะการออกแบบอินเทอร์เฟซระดับพรีเมียม โทนสีทองและองค์ประกอบหรูหราสะท้อนถึงมาตรฐานระดับสูงในการนำเสนอข้อมูล เพื่อให้ผู้ใช้งานได้รับประสบการณ์ที่ล้ำสมัยและประทับใจที่สุด
                </p>
            </div>

            <!-- Navigation Buttons -->
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ url('/') }}" class="btn btn-gold-outline">
                    <i class="bi bi-house-door"></i> กลับหน้าแรก
                </a>
                <a href="/author/blogs" class="btn btn-gold">
                    <i class="bi bi-journal-text"></i> สำรวจบทความ
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
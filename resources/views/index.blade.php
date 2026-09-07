@extends('layouts.app')

@section('title', 'หน้าแรก - หรูหรา ทันสมัย')

@section('content')
<div class="py-4">
    <!-- Hero Section -->
    <div class="row align-items-center justify-content-center text-center py-4 mb-5">
        <div class="col-lg-9">
            <div class="hero-badge">
                <i class="bi bi-stars"></i> EXCLUSIVE EDITORIAL PLATFORM
            </div>
            
            <h1 class="hero-heading">
                รังสรรค์เรื่องราว<span class="gold-gradient-text">ระดับพรีเมียม</span><br>
                สู่มุมมองที่สง่างามและทันสมัย
            </h1>
            
            <p class="hero-lead mx-auto">
                ยินดีต้อนรับสู่ระบบจัดการบทความชั้นเลิศ สัมผัสประสบการณ์การเขียนและบริหารจัดการคอนเทนต์ในบรรยากาศ Modern Luxury โทนสีทองล้ำสมัย เรียบหรู และสมบูรณ์แบบ
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                <a href="/author/blogs" class="btn btn-gold btn-lg">
                    <i class="bi bi-journal-richtext"></i> สำรวจบทความทั้งหมด
                </a>
                <a href="/author/cerate" class="btn btn-gold-outline btn-lg">
                    <i class="bi bi-pencil-square"></i> เริ่มเขียนบทความใหม่
                </a>
                <a href="/author/abouts" class="btn btn-gold-outline btn-lg">
                    <i class="bi bi-person-badge"></i> เกี่ยวกับเรา
                </a>
            </div>
        </div>
    </div>

    <!-- Feature Showcase Grid -->
    <div class="row g-4 mt-2">
        <div class="col-md-4">
            <div class="luxury-feature-card">
                <div class="feature-icon-wrapper">
                    <i class="bi bi-gem"></i>
                </div>
                <h4 class="text-gold mb-3">ดีไซน์หรูหรา สีทอง</h4>
                <p class="text-secondary small leading-relaxed mb-0">
                    ออกแบบด้วยความประณีต ผสมผสานประกายสีทองอร่ามกับพื้นหลังเข้มและ Glassmorphism สื่อถึงภาพลักษณ์ระดับพรีเมียม
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="luxury-feature-card">
                <div class="feature-icon-wrapper">
                    <i class="bi bi-lightning-charge"></i>
                </div>
                <h4 class="text-gold mb-3">จัดการบทความรวดเร็ว</h4>
                <p class="text-secondary small leading-relaxed mb-0">
                    เขียน แก้ไข เผยแพร่ หรือเปลี่ยนสถานะบทความได้อย่างราบรื่นและคล่องตัว ผ่านแดชบอร์ดที่ใช้งานง่ายและทันสมัย
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="luxury-feature-card">
                <div class="feature-icon-wrapper">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h4 class="text-gold mb-3">มาตรฐานความปลอดภัย</h4>
                <p class="text-secondary small leading-relaxed mb-0">
                    ขับเคลื่อนด้วยสถาปัตยกรรม Laravel พร้อมระบบยืนยันตัวตนและการจัดการสิทธิ์ที่ได้มาตรฐานสากล
                </p>
            </div>
        </div>
    </div>

    <!-- Quick Stats Bar -->
    <div class="luxury-glass-panel mt-5 p-4">
        <div class="row text-center align-items-center g-4">
            <div class="col-6 col-md-3 border-end border-secondary border-opacity-25">
                <div class="gold-gradient-text display-6 fw-bold">100%</div>
                <div class="text-muted small mt-1">Modern Luxury Theme</div>
            </div>
            <div class="col-6 col-md-3 border-end-md border-secondary border-opacity-25">
                <div class="gold-gradient-text display-6 fw-bold">PROMPT</div>
                <div class="text-muted small mt-1">Modern Thai Typography</div>
            </div>
            <div class="col-6 col-md-3 border-end border-secondary border-opacity-25">
                <div class="gold-gradient-text display-6 fw-bold">RESPONSIVE</div>
                <div class="text-muted small mt-1">รองรับทุกหน้าจอ</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="gold-gradient-text display-6 fw-bold">ACTIVE</div>
                <div class="text-muted small mt-1">ระบบพร้อมใช้งาน</div>
            </div>
        </div>
    </div>
</div>
@endsection

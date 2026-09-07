@extends('layouts.app')

@section('title', 'เกี่ยวกับเรา - WORAMAN Luxury')

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-lg-8">
        <div class="luxury-card text-center p-5">
            <div class="feature-icon-wrapper mx-auto mb-3">
                <i class="bi bi-info-circle"></i>
            </div>
            <h2 class="gold-gradient-text mb-3">เกี่ยวกับแพลตฟอร์ม</h2>
            <p class="text-secondary leading-relaxed mb-4">
                แพลตฟอร์มการจัดการเนื้อหาและบทความระดับพรีเมียม สไตล์ Modern Luxury Gold รังสรรค์ขึ้นเพื่อตอบสนองการเผยแพร่ข้อมูลอย่างมีระดับ ปลอดภัย และทรงประสิทธิภาพสูงสุด
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ url('/') }}" class="btn btn-gold-outline">
                    <i class="bi bi-house-door"></i> หน้าแรก
                </a>
                <a href="/author/abouts" class="btn btn-gold">
                    <i class="bi bi-person-badge"></i> ข้อมูลผู้พัฒนา
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
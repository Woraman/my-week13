@extends('layouts.app')

@section('title', 'บทความ - WORAMAN Luxury')

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-lg-8">
        <div class="luxury-card text-center p-5">
            <div class="feature-icon-wrapper mx-auto mb-3">
                <i class="bi bi-journal-bookmark-fill"></i>
            </div>
            <h2 class="gold-gradient-text mb-3">คลังบทความสาธารณะ</h2>
            <p class="text-secondary leading-relaxed mb-4">
                คุณสามารถเข้าสู่ระบบเพื่อดูบทความ จัดการเนื้อหา และเขียนบทความใหม่ได้ที่ส่วนการจัดการ
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ url('/') }}" class="btn btn-gold-outline">
                    <i class="bi bi-house-door"></i> หน้าแรก
                </a>
                <a href="/author/blogs" class="btn btn-gold">
                    <i class="bi bi-collection"></i> เข้าสู่หน้าจัดการบทความ
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
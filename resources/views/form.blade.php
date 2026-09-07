@extends('layouts.app')

@section('title', 'เขียนบทความใหม่ - WORAMAN Luxury')

@section('content')
<div class="row justify-content-center py-3">
    <div class="col-lg-8">
        <!-- Breadcrumb / Nav hint -->
        <div class="mb-3">
            <a href="{{ route('blogs') }}" class="btn btn-sm btn-gold-outline">
                <i class="bi bi-arrow-left me-1"></i> ย้อนกลับไปบทความทั้งหมด
            </a>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-header d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <div class="feature-icon-wrapper mb-0" style="width: 48px; height: 48px; font-size: 1.3rem;">
                        <i class="bi bi-feather"></i>
                    </div>
                    <div>
                        <h3 class="mb-0 gold-gradient-text" style="font-size: 1.5rem;">เขียนบทความใหม่</h3>
                        <span class="text-muted small fw-semibold">กรอกรายละเอียดเพื่อสร้างบทความของคุณ</span>
                    </div>
                </div>
                <span class="badge bg-transparent border border-warning text-gold" style="font-size: 0.75rem; border-color: rgba(255,215,0,0.5) !important;">
                    NEW ENTRY
                </span>
            </div>

            <div class="luxury-card-body">
                <form method="POST" action="{{ route('insert') }}">
                    @csrf

                    <!-- Title Field -->
                    <div class="mb-4">
                        <label for="title" class="form-label d-flex align-items-center gap-2">
                            <i class="bi bi-card-heading text-gold"></i>
                            <span>ชื่อบทความ</span>
                            <span class="text-danger small">*</span>
                        </label>
                        <input type="text" 
                               id="title"
                               name="title" 
                               class="form-control form-control-lg @error('title') is-invalid @enderror" 
                               placeholder="พิมพ์ชื่อหัวข้อบทความที่ต้องการ..."
                               value="{{ old('title') }}"
                               autocomplete="off"
                               style="color: #ffffff !important; background-color: #141924 !important;">
                        @error('title')
                            <div class="text-danger mt-2 d-flex align-items-center gap-1 small fw-semibold">
                                <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Content Field -->
                    <div class="mb-4">
                        <label for="content" class="form-label d-flex align-items-center gap-2">
                            <i class="bi bi-body-text text-gold"></i>
                            <span>เนื้อหาบทความ</span>
                            <span class="text-danger small">*</span>
                        </label>
                        <textarea id="content" 
                                  name="content" 
                                  class="form-control @error('content') is-invalid @enderror" 
                                  rows="8" 
                                  placeholder="เขียนเนื้อหา สาระ หรือเรื่องราวของคุณที่นี่..."
                                  style="color: #ffffff !important; background-color: #141924 !important;">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="text-danger mt-2 d-flex align-items-center gap-1 small fw-semibold">
                                <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <hr class="luxury-divider my-4">

                    <!-- Actions -->
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <a href="{{ route('blogs') }}" class="btn btn-gold-outline">
                            <i class="bi bi-journal-text"></i> บทความทั้งหมด
                        </a>
                        <button type="submit" class="btn btn-gold px-4">
                            <i class="bi bi-cloud-arrow-up-fill me-1"></i> บันทึกและเผยแพร่
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
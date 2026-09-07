@extends('layouts.app')

@section('title', 'บทความทั้งหมด - WORAMAN Luxury')

@section('content')
<div class="py-2">
    <!-- Header Section -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge bg-transparent border border-warning text-gold" style="font-size: 0.75rem; letter-spacing: 0.08em; border-color: rgba(255,215,0,0.6) !important;">
                    <i class="bi bi-collection-play me-1"></i> ARTICLE MANAGEMENT
                </span>
                <span class="text-muted small fw-semibold">• ทั้งหมด {{ $blogs->total() ?? count($blogs) }} บทความ</span>
            </div>
            <h2 class="mb-0 gold-gradient-text" style="font-size: 2rem;">บทความทั้งหมด</h2>
        </div>

        <div>
            <a href="{{ route('cerate') }}" class="btn btn-gold">
                <i class="bi bi-plus-circle me-1"></i> เขียนบทความใหม่
            </a>
        </div>
    </div>

    @if (count($blogs) > 0)
        <!-- Luxury Table Card -->
        <div class="luxury-table-wrapper">
            <div class="table-responsive">
                <table class="table luxury-table align-middle text-center mb-0">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 80px;" class="text-center">#</th>
                            <th scope="col" class="text-start" style="min-width: 280px;">
                                <i class="bi bi-card-heading text-gold me-1"></i> ชื่อบทความ / เนื้อหา
                            </th>
                            <th scope="col" style="min-width: 150px;">
                                <i class="bi bi-toggle-on text-gold me-1"></i> สถานะการแสดง
                            </th>
                            <th scope="col" style="min-width: 110px;">
                                <i class="bi bi-pencil-square text-gold me-1"></i> แก้ไข
                            </th>
                            <th scope="col" style="min-width: 110px;">
                                <i class="bi bi-trash3 text-gold me-1"></i> จัดการ
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $index => $item)
                            <tr>
                                <td class="table-row-num text-center">
                                    {{ $blogs->firstItem() ? $blogs->firstItem() + $index : $index + 1 }}
                                </td>

                                <td class="text-start">
                                    <div class="table-blog-title mb-1">
                                        <i class="bi bi-file-earmark-text text-gold me-2"></i>{{ $item->title }}
                                    </div>
                                    <div class="table-blog-snippet" style="max-width: 480px;">
                                        {{ Str::limit($item->content, 85, '...') }}
                                    </div>
                                </td>

                                <td>
                                    @if ($item->status)
                                        <a href="/change/{{ $item->id }}" class="luxury-status-badge status-active" title="คลิกเพื่อเปลี่ยนเป็นไม่เผยแพร่">
                                            <span class="status-dot"></span> เผยแพร่แล้ว
                                        </a>
                                    @else
                                        <a href="/change/{{ $item->id }}" class="luxury-status-badge status-inactive" title="คลิกเพื่อเปลี่ยนเป็นเผยแพร่">
                                            <span class="status-dot"></span> ฉบับร่าง
                                        </a>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ Route('edit', $item->id) }}" class="btn btn-luxury-edit btn-sm" title="แก้ไขบทความ">
                                        <i class="bi bi-pencil-fill"></i> แก้ไข
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ Route('delete', $item->id) }}" class="btn btn-luxury-delete btn-sm"
                                       onclick="return confirm('ยืนยันการลบบทความ: \n\n\"{{ $item->title }}\" ?\nการกระทำนี้ไม่สามารถย้อนกลับได้')"
                                       title="ลบบทความ">
                                        <i class="bi bi-trash3-fill"></i> ลบ
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination Section -->
        <div class="d-flex justify-content-center mt-4">
            {{ $blogs->links() }}
        </div>

    @else
        <!-- Empty State -->
        <div class="luxury-card text-center py-5 px-4 my-4">
            <div class="feature-icon-wrapper mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2.2rem;">
                <i class="bi bi-journal-x"></i>
            </div>
            <h3 class="text-gold mb-2">ยังไม่มีบทความในระบบ</h3>
            <p class="text-muted mx-auto mb-4" style="max-width: 420px;">
                เริ่มต้นสร้างสรรค์เนื้อหาชิ้นแรกของคุณด้วยการคลิกปุ่มด้านล่าง
            </p>
            <div>
                <a href="{{ route('cerate') }}" class="btn btn-gold btn-lg">
                    <i class="bi bi-plus-circle me-1"></i> เริ่มเขียนบทความแรก
                </a>
            </div>
        </div>
    @endif
</div>
@endsection

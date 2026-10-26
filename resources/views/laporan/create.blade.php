@extends('layouts.app')

@section('title', 'Kirim Laporan')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="fas fa-bullhorn me-2"></i>Form Kirim Laporan Warga</h5>
            </div>
            <div class="card-body">
                <p class="text-muted">Halaman ini bisa diakses oleh siapa saja (publik) tanpa perlu login.</p>
                
                <!-- Nanti form input judul laporan, deskripsi, dll ditaruh di sini -->
                <div class="alert alert-info">
                    Form input laporan (judul, deskripsi, foto) dari modul sebelumnya bisa kamu masukkan ke bagian ini.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
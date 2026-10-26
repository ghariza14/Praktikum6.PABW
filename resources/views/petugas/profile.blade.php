@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Profil Petugas</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Tanggal Akun Dibuat:</strong> {{ Auth::user()->created_at->format('d M Y H:i') }}</p>
        </div>
    </div>
</div>
@endsection
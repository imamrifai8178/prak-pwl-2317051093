@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">📋 Daftar User</h4>
            <a href="{{ route('user.create') }}" class="btn btn-light btn-sm">
                ➕ Tambah User
            </a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- Panggil komponen tabel user --}}
            @include('components.user-table', ['users' => $users])
        </div>
    </div>
</div>
@endsection

@extends('auth.layouts')

@section('content')

<div class="min-vh-100 d-flex justify-content-center align-items-center" style="background-color: #f59bdc;">
    <div class="bg-white p-4 rounded-4 shadow w-100" style="max-width: 450px;">

        <div class="text-center mb-4">
            
            <h4 class="fw-bold text-uppercase">Login Point-Siswa</h4>
        </div>

        <form action="{{ route('authenticate') }}" method="post">
            @csrf

            <div class="mb-3">
                <input type="text" name="email" id="email" class="form-control form-control-lg" placeholder="User Name" value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password">
            </div>

            <div class="mb-3">
                <select name="role" class="form-select form-select-lg">
                    <option value="">Pilih Hak Akses</option>
                    <option value="admin">Admin</option>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
            </div>
<a href="{{ route('admin.dashboard')}}">
            <div class="d-grid">
                <button type="submit" class="btn btn-lg fw-bold text-white" style="background-color: #fbaecb;">
                    Login
                </button>
            </div>
            </a>
        </form>

        <div class="text-center mt-3">
            <span class="text-muted">Don’t have account? </span>
            <a href="{{ route('register') }}" class="fw-bold" style="color: #fbaecb;">Register</a>
        </div>
    </div>
</div>

@endsection

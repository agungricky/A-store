@extends('layout.index')
@section('content')
    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
            data-kt-sticky-offset="{default: '200px', lg: '300px'}">

            {{-- Header Halaman --}}
            <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
                <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0"
                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                    <h1 class="text-dark fw-bold my-0 fs-2">User Management</h1>
                    <ul class="breadcrumb breadcrumb-line text-muted fw-bold fs-base my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="../dist/index.html" class="text-muted">Admin</a>
                        </li>
                        <li class="breadcrumb-item text-dark">User</li>
                    </ul>
                </div>

                <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                    <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                    fill="black" />
                            </svg>
                        </span>
                    </div>
                    <a href="../dist/index.html" class="d-flex align-items-center">
                        <img alt="Logo" src="assets/media/logos/logo-default.svg" class="h-40px" />
                    </a>
                </div>

                <div class="d-flex flex-shrink-0">
                    <div class="d-flex ms-3">
                        <a href="{{ route('user.create') }}"
                            class="btn btn-info text-white d-flex align-items-center gap-2 shadow-sm">
                            <svg width="15" height="15" viewBox="0 0 178 178" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M140.917 96.4166H96.4166V140.917H81.5833V96.4166H37.0833V81.5833H81.5833V37.0833H96.4166V81.5833H140.917V96.4166Z"
                                    fill="white" />
                            </svg>
                            <span>New User</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="container-xxl" id="kt_content_container">
                <div class="row gy-5 g-xl-8">
                    <div class="col-12">
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <div class="card-body py-3">
                                <div class="card-header text-white d-flex align-items-center"
                                    style="height: 10px !important;">
                                    <h5 class="mb-0">Tambah User Baru</h5>
                                </div>

                                <div class="card-body">
                                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Nomor KTP</label>
                                                <input type="text" name="ktp"
                                                    class="form-control @error('ktp') is-invalid @enderror"
                                                    value="{{ old('ktp') }}" required>
                                                @error('ktp')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Nama Lengkap</label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}" required>
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" required>
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Jenis Kelamin</label>
                                                <select name="jk" class="form-select @error('jk') is-invalid @enderror"
                                                    required>
                                                    <option value="">Pilih...</option>
                                                    <option value="L" {{ old('jk') == 'L' ? 'selected' : '' }}>
                                                        Laki-laki</option>
                                                    <option value="P" {{ old('jk') == 'P' ? 'selected' : '' }}>
                                                        Perempuan</option>
                                                </select>
                                                @error('jk')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">No. Telepon</label>
                                                <input type="text" name="no_telp"
                                                    class="form-control @error('no_telp') is-invalid @enderror"
                                                    value="{{ old('no_telp') }}">
                                                @error('no_telp')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir"
                                                    class="form-control @error('tgl_lahir') is-invalid @enderror"
                                                    value="{{ old('tgl_lahir') }}">
                                                @error('tgl_lahir')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Alamat</label>
                                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3">{{ old('alamat') }}</textarea>
                                            @error('alamat')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Username</label>
                                                <input type="text" name="username"
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    value="{{ old('username') }}" required>
                                                @error('username')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror" required>
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-5">
                                            <div class="col-md-6">
                                                <label class="form-label">Role</label>
                                                <select name="role"
                                                    class="form-select @error('role') is-invalid @enderror" required>
                                                    <option value="">Pilih...</option>
                                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>
                                                        Admin</option>
                                                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>
                                                        User</option>
                                                </select>
                                                @error('role')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Foto</label>
                                                <input type="file" name="photo"
                                                    class="form-control @error('photo') is-invalid @enderror">
                                                @error('photo')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('user.index') }}" class="btn btn-secondary me-2">Batal</a>
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
            <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
                <div class="text-dark order-2 order-md-1">
                    <span class="text-gray-400 fw-bold me-1">Created by</span>
                    <a href="https://keenthemes.com" target="_blank"
                        class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
                </div>

                <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://keenthemes.com/products/seven-html-pro" target="_blank"
                            class="menu-link px-2">Purchase</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
@endsection

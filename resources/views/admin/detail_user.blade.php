@extends('layout.index')
@section('content')
    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

        <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
            data-kt-sticky-offset="{default: '200px', lg: '300px'}">
            <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
                <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0"
                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                    <h1 class="text-dark fw-bold my-0 fs-2">Detail User</h1>
                    <ul class="breadcrumb breadcrumb-line text-muted fw-bold fs-base my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="../dist/index.html" class="text-muted">Admin</a>
                        </li>
                        <li class="breadcrumb-item text-muted">User</li>
                        <li class="breadcrumb-item text-dark">Detail</li>
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


                {{-- <div class="d-flex flex-shrink-0">
                    <div class="d-flex ms-3">
                        <a href="#" class="btn bg-body btn-color-gray-600 btn-active-info" tooltip="New Member"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">New User</a>
                    </div>

                    <div class="d-flex ms-3">
                        <a href="#" class="btn btn-info" tooltip="New App" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">New Goal</a>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">

                            <div class="me-7 mb-4">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="{{ asset('storage/' . $data->photo) }}" alt="image" class="img-fluid" />
                                    <div
                                        class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px">
                                    </div>
                                </div>
                            </div>

                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-2">
                                            <h2 class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1">
                                                {{ $data->name }}</h2>
                                            <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                        fill="#00A3FF" />
                                                    <path class="permanent"
                                                        d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </div>

                                        {{-- <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                            fill="black" />
                                                        <path
                                                            d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                {{$data->ktp}}
                                            </a>
                                            <a href="#"
                                                class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="black" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                {{$data->alamat}}
                                            </a>
                                            <a href="#"
                                                class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                            fill="black" />
                                                        <path
                                                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                {{$data->no_telp}}
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap flex-stack">
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <div class="d-flex flex-wrap">
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">

                                                <div class="fw-bold fs-6 text-gray-400">Total Berat</div>

                                                <div class="d-flex align-items-center">
                                                    <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="{{ $totalBerat }}"
                                                        data-kt-countup-decimal-places="2">0</div>
                                                    <span class="fw-bold fs-6 ms-2">Kg</span>
                                                </div>


                                            </div>


                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">

                                                <div class="fw-bold fs-6 text-gray-400">Kapasitas</div>
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="{{ $kapasitas }}">0</div>
                                                    <span class="fw-bold fs-6 ms-2">Kg</span>
                                                </div>
                                            </div>


                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <div class="fw-bold fs-6 text-gray-400">Jumlah Rak</div>
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                        data-kt-countup-value="{{ $rakCount }}">0</div>
                                                    <span class="fw-bold fs-6 ms-2">Rak</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                            <span class="fw-bold fs-6 text-gray-400">Kapasitas digunakan</span>
                                            <span class="fw-bolder fs-6">{{ $beratCount }}%</span>
                                        </div>
                                        <div class="h-5px mx-3 w-100 bg-light mb-3">
                                            <div class="bg-success rounded h-5px" role="progressbar"
                                                style="width: {{ $beratCount }}%;" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Profile Details</h3>
                        </div>

                        <a href="{{ route('user.qrcode', $data->id) }}" class="btn btn-primary align-self-center">Cetak QR
                            Code</a>
                    </div>

                    <div class="card-body p-9">
                        <div class="row mb-7">
                            @php
                                $ktp = $data->ktp == null ? '-' : $data->ktp;
                            @endphp
                            <label class="col-lg-4 fw-bold text-muted">Ktp</label>
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6 text-gray-800">{{ $ktp }}</span>
                            </div>
                        </div>

                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Full Name</label>

                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-gray-800">{{ $data->name }}</span>
                            </div>
                        </div>

                        <div class="row mb-7">
                            @php
                                $jk = $data->jk == 'L' ? 'Laki-laki' : 'Perempuan';
                            @endphp
                            <label class="col-lg-4 fw-bold text-muted">Jenis Kelamin</label>

                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-gray-800">{{ $jk }}</span>
                            </div>
                        </div>

                        <div class="row mb-10">
                            <label class="col-lg-4 fw-bold text-muted">Tanggal Lahir</label>

                            <div class="col-lg-8">
                                <span class="fw-bold fs-6">{{ $data->tgl_lahir }}</span>
                            </div>
                        </div>

                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">No Telp
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Phone number must be active"></i></label>

                            <div class="col-lg-8 d-flex align-items-center">
                                <span class="fw-bolder fs-6 me-2 text-gray-800">{{ $data->no_telp }}</span>
                            </div>
                        </div>

                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Email</label>

                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ $data->email }}</span>
                            </div>
                        </div>

                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Alamat
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Country of origination"></i></label>

                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-gray-800">{{ $data->alamat }}</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row gy-10 gx-xl-10">
                    <div class="col-12">
                        <div class="card card-xxl-stretch mb-5 mb-xl-10">

                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
                                </h3>
                                <div class="card-toolbar">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bolder px-4 me-1"
                                                data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Barang</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1"
                                                data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Tambah Barang</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4"
                                                data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Ambil Barang</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4"
                                                data-bs-toggle="tab" href="#kt_table_widget_5_tab_4">Riwayat</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="card-body py-3">
                                <div class="tab-content">
                                    {{-- List Barang --}}
                                    <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr class="border-0">
                                                        <th class="p-0 w-50px text-center">Foto</th>
                                                        <th class="p-0 min-w-150px text-center">Nama Barang</th>
                                                        <th class="p-0 min-w-140px text-center">Keterang</th>
                                                        <th class="p-0 min-w-110px text-center">Lokasi Rak</th>
                                                        <th class="p-0 min-w-50px text-center">Tanggal Masuk</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($rak as $item)
                                                        @foreach ($item->barang as $value)
                                                            <tr>
                                                                <td class="text-center">
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="{{ asset('storage/' . $value->foto) }}"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                                                        {{ $value->nama_barang }}
                                                                    </div>
                                                                    <span
                                                                        class="text-muted fw-bold d-block">{{ $value->berat }}
                                                                        Kg</span>
                                                                </td>
                                                                <td class="text-muted fw-bold text-center">
                                                                    {{ $value->keterangan }}</td>
                                                                <td class="text-center">
                                                                    <span
                                                                        class="badge badge-light-success">{{ $item->brand == null ? '' : $item->brand }}</span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div>
                                                                        {{ $value->created_at->translatedFormat('d F Y') }}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    {{-- Tambah Barang --}}
                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                        <div class="card-body p-4">
                                            <h4 class="fw-bold text-primary mb-4">
                                                <i class="bi bi-box-seam me-2"></i>Tambah Data Barang
                                            </h4>

                                            <hr class="mb-5 opacity-10" style="margin-bottom: 20px !important;" />
                                            <form action="{{ route('barang.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row g-3">

                                                    <div class="col-md-6">
                                                        <label for="nama_barang" class="form-label fw-semibold">Nama
                                                            Barang</label>
                                                        <input type="text" name="nama_barang" id="nama_barang"
                                                            class="form-control" placeholder="Masukkan nama barang"
                                                            value="{{ old('nama_barang') }}" required>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="berat" class="form-label fw-semibold">Berat
                                                            (kg)</label>
                                                        <input type="number" step="0.01" name="berat"
                                                            id="berat" class="form-control"
                                                            placeholder="Masukkan berat barang"
                                                            value="{{ old('berat') }}" required>
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="keterangan"
                                                            class="form-label fw-semibold">Keterangan</label>
                                                        <textarea name="keterangan" id="keterangan" class="form-control" rows="3"
                                                            placeholder="Tambahkan keterangan atau deskripsi barang">{{ old('keterangan') }}</textarea>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="foto" class="form-label fw-semibold">Foto
                                                            Barang</label>
                                                        <input type="file" name="foto" id="foto"
                                                            class="form-control" accept="image/*">
                                                        @if ($errors->has('foto'))
                                                            <small
                                                                class="text-danger">{{ $errors->first('foto') }}</small>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="storage_id" class="form-label fw-semibold">Lokasi
                                                            Penyimpanan</label>
                                                        <select name="storage_id" id="storage_id" class="form-select"
                                                            required>
                                                            <option value="-" disabled
                                                                {{ old('storage_id') ? '' : 'selected' }}>Pilih lokasi
                                                                penyimpanan...</option>
                                                            @foreach ($storageList as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ old('storage_id') == $item->id ? 'selected' : '' }}>
                                                                    {{ $item->brand }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <input type="hidden" name="user_id" value="{{ $data->id }}">

                                                    <div class="col-12 text-end mt-4">
                                                        <button type="reset"
                                                            class="btn btn-light border me-2">Batal</button>
                                                        <button type="submit" class="btn btn-primary px-4">Simpan
                                                            Data</button>
                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    {{-- Ambil Barang --}}
                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                        <div class="card-body p-4">
                                            <h4 class="fw-bold text-primary mb-4">
                                                <i class="bi bi-box-seam me-2"></i>Ambil Barang
                                            </h4>

                                            <hr class="mb-5 opacity-10" style="margin-bottom: 20px !important;" />

                                            <form action="{{ route('barang.ambil') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row g-3">

                                                    <div class="col-md-6">
                                                        <label for="id_barang" class="form-label fw-semibold">Nama
                                                            Barang</label>
                                                        <select name="id_barang" id="id_barang" class="form-select"
                                                            required>
                                                            <option value="" disabled
                                                                {{ old('id_barang') ? '' : 'selected' }}>
                                                                Pilih Barang penyimpanan...
                                                            </option>
                                                            @foreach ($rak as $item)
                                                                @foreach ($item->barang as $value)
                                                                    <option value="{{ $value->id }}"
                                                                        {{ old('id_barang') == $value->id ? 'selected' : '' }}>
                                                                        {{ $value->nama_barang }}
                                                                    </option>
                                                                @endforeach
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <label for="berat" class="form-label fw-semibold">Berat
                                                            (kg)</label>
                                                        <input type="number" step="0.01" name="berat"
                                                            id="berat" class="form-control"
                                                            placeholder="Masukkan berat barang"
                                                            value="{{ old('berat') }}" required>
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="keterangan"
                                                            class="form-label fw-semibold">Keterangan</label>
                                                        <textarea name="keterangan" id="keterangan" class="form-control" rows="3"
                                                            placeholder="Tambahkan keterangan atau deskripsi barang">{{ old('keterangan') }}</textarea>
                                                    </div>

                                                    <input type="hidden" name="user_id" value="{{ $data->id }}">

                                                    <div class="col-12 text-end mt-4">
                                                        <button type="reset"
                                                            class="btn btn-light border me-2">Batal</button>
                                                        <button type="submit" class="btn btn-primary px-4">Simpan
                                                            Data</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- Ambil Barang --}}
                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_4">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr class="border-0">
                                                        <th class="p-0 w-50px text-center">Foto</th>
                                                        <th class="p-0 min-w-150px text-center">Nama Barang</th>
                                                        <th class="p-0 min-w-140px text-center">Keterang</th>
                                                        <th class="p-0 min-w-110px text-center">Lokasi Rak</th>
                                                        <th class="p-0 min-w-50px text-center">Tanggal Masuk</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($riwayat as $item)
                                                        <tr>
                                                            <td class="text-center">
                                                                <div class="symbol symbol-45px me-2">
                                                                    <span class="symbol-label">
                                                                        <img src="{{ asset('storage/' . $item->barang->foto) }}"
                                                                            class="h-50 align-self-center"
                                                                            alt="" />
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div
                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                                                    {{ $item->barang->nama_barang }}
                                                                </div>
                                                                <span
                                                                    class="text-muted fw-bold d-block">{{ $item->berat }}
                                                                    Kg</span>
                                                            </td>
                                                            <td class="text-muted fw-bold text-center">
                                                                {{ $item->keterangan }}</td>
                                                            <td class="text-center">
                                                                <span
                                                                    class="badge badge-light-success">{{ $item->storage->brand }}</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <div>
                                                                    {{ $item->created_at->translatedFormat('d F Y') }}
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end::Tables Widget 2-->
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

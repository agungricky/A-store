@extends('layout.index')
@section('content')
    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

        <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
            data-kt-sticky-offset="{default: '200px', lg: '300px'}">
            <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
                <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0"
                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                    <h1 class="text-dark fw-bold my-0 fs-2">Halaman User</h1>
                    <ul class="breadcrumb breadcrumb-line text-muted fw-bold fs-base my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="../dist/index.html" class="text-muted">User</a>
                        </li>
                        <li class="breadcrumb-item text-muted">Dashboard</li>
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

                    <a href="" class="d-flex align-items-center">
                        <img alt="Logo" src="{{ asset('assets/media/logos/logo-default.svg') }}" class="h-40px" />
                    </a>
                </div>
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
                        <div class="row g-3 align-items-center justify-content-between">
                            <div class="col-auto">
                                <h1 class="app-page-title mb-0">Barang Saya</h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-9">
                        <div class="app-content pt-3 p-md-3 p-lg-4">

                            <div class="row g-5">
                                @foreach ($barang as $key => $item)
                                    @if ($item->isNotEmpty())
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2 mb-4">
                                            <div
                                                class="card border-0 shadow-sm h-100 position-relative overflow-hidden rounded-4">

                                                <div class="p-3 position-relative">
                                                    <img src="{{ asset('storage/' . $item[$key]->foto) }}"
                                                        alt="Foto Barang"
                                                        class="img-fluid rounded-3 w-100 object-fit-cover"
                                                        style="height: 160px; object-fit: cover;">
                                                </div>

                                                <div class="card-body px-3 pt-2 pb-3">
                                                    <h6 class="card-title mb-1 fw-semibold text-truncate">
                                                        <div class="text-dark text-decoration-none">
                                                            {{ $item[$key]->nama_barang ?? 'Tanpa Nama' }}</div>
                                                    </h6>
                                                    <ul class="list-unstyled small text-muted mb-0">
                                                        <li><span class="fw-semibold">Berat :</span>
                                                            {{ $item[$key]->berat ?? 'N/A' }} Kg</li>
                                                        <li><span class="fw-semibold">Keterangan :</span>
                                                            {{ $item[$key]->keterangan ?? 'Tidak Diketahui' }}</li>
                                                        <li>
                                                            <span class="fw-semibold">Tercatat :</span>
                                                            {{ $item[$key]->created_at ? $item[$key]->created_at->format('d M Y') : 'Baru saja' }}
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    @else
                                        <div class="flex justify-center items-center w-full h-72">
                                            <h4 class="text-center text-gray-400">Tidak ada data barang</h4>
                                        </div>
                                    @endif
                                @endforeach
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
                        class="text-muted text-hover-primary fw-bold me-2 fs-6">A-Store</a>
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

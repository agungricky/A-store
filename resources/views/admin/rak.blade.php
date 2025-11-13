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
                    <h1 class="text-dark fw-bold my-0 fs-2">Dashboard</h1>
                    <ul class="breadcrumb breadcrumb-line text-muted fw-bold fs-base my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="../dist/index.html" class="text-muted">Admin</a>
                        </li>
                        <li class="breadcrumb-item text-dark">Storage</li>
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
                        <a href="{{ route('storage.create') }}"
                            class="btn btn-info text-white d-flex align-items-center gap-2 shadow-sm">
                            <svg width="15" height="15" viewBox="0 0 178 178" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M140.917 96.4166H96.4166V140.917H81.5833V96.4166H37.0833V81.5833H81.5833V37.0833H96.4166V81.5833H140.917V96.4166Z"
                                    fill="white" />
                            </svg>
                            <span>New Rak</span>
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
                                <div class="table-responsive my-3">
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
                                        id="example">
                                        <thead>
                                            <tr class="fw-bolder text-muted">
                                                <th class="min-w-110px text-center">Icon</th>
                                                <th class="min-w-150px text-center">Storage</th>
                                                <th class="min-w-110px text-center">Status</th>
                                                <th class="min-w-140px text-center">Kepemilikan</th>
                                                <th class="min-w-120px text-center text-end">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-45px me-5">
                                                                <img src="{{ asset($item->icon->lokasi) }}" alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <span
                                                                    class="text-dark fw-bolder text-hover-primary fs-6">{{ $item->name }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="text-dark fw-bolder d-block fs-6">{{$item->brand}}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="text-dark fw-bolder d-block fs-6"> {{$item->user_id == null ? 'Kosong' : 'Terisi'}}</span>
                                                    </td>
                                                     <td class="text-center">
                                                        <span class="text-dark fw-bolder d-block fs-6"> {{$item->user_id == null ? '-' : $item->user->name}}</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-end flex-shrink-0">
                                                            <form method="POST"
                                                                action="{{ route('storage.destroy', ['storage' => $item->id]) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                                    onclick="return confirm('Anda Yakin Data akan diHapus?')">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path
                                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                fill="black" />
                                                                            <path opacity="0.5"
                                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                fill="black" />
                                                                            <path opacity="0.5"
                                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </form>
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

@section('style')
    <style>
        .dt-search label,
        .dt-input {
            margin-right: 5px;
        }

        .dt-info {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #555;
            font-weight: 500;
        }

        .dt-paging nav {
            display: flex;
            justify-content: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .dt-paging-button {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            color: #333;
            padding: 5px 12px;
            margin: 0 2px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s;
        }

        .dt-paging-button:hover:not(.disabled) {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .dt-paging-button.current {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
            pointer-events: none;
        }

        .dt-paging-button.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .dt-paging-button.first,
        .dt-paging-button.previous,
        .dt-paging-button.next,
        .dt-paging-button.last {
            font-weight: bold;
        }
    </style>
@endsection
@endsection

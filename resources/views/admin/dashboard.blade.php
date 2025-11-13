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
                        <li class="breadcrumb-item text-dark">Home</li>
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
                        <img alt="Logo" src="assets/media/logos/logo-default.svg" class="h-40px" />
                    </a>
                </div>

                <div class="d-flex flex-shrink-0">
                    <div class="d-flex ms-3">
                        <a href="{{ route('user.create') }}"
                            class="btn bg-body btn-color-gray-600 btn-active-info border shadow-bottom-sm"
                            tooltip="New Member">New
                            User</a>
                    </div>
                    <div class="d-flex ms-3">
                        <a href="{{ route('storage.create') }}"
                            class="btn bg-body btn-color-gray-600 btn-active-info border shadow-bottom-sm"
                            tooltip="New Member">New
                            Storage</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="container-xxl" id="kt_content_container">
                <div class="row gy-5 g-xl-8">
                    <div class="col-xl-8">
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">User</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">{{ $userConunt }} User Terdaftar</span>
                                </h3>
                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-trigger="hover">
                                    <button id="btnScan" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_invite_friends">
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.71875 6.71875V17.4688H9.40625V20.1562H12.0938V17.4688H17.4688V6.71875H6.71875ZM17.4688 17.4688V20.1562H20.1562V22.8438H14.7812V25.5312H6.71875V36.2812H17.4688V25.5312H25.5312V22.8438H22.8438V20.1562H28.2188V17.4688H30.9062V20.1562H33.5938V17.4688H36.2812V6.71875H25.5312V17.4688H17.4688ZM33.5938 20.1562V22.8438H36.2812V20.1562H33.5938ZM33.5938 22.8438H30.9062V25.5312H33.5938V22.8438ZM33.5938 25.5312V28.2188H36.2812V25.5312H33.5938ZM33.5938 28.2188H30.9062V25.5312H28.2188V28.2188H21.5V36.2812H24.1875V30.9062H29.5625V33.5938H32.25V30.9062H33.5938V28.2188ZM29.5625 33.5938H26.875V36.2812H29.5625V33.5938ZM30.9062 22.8438V20.1562H28.2188V22.8438H30.9062ZM14.7812 22.8438V20.1562H12.0938V22.8438H14.7812ZM9.40625 20.1562H6.71875V22.8438H9.40625V20.1562ZM20.1562 6.71875V12.0938H18.8125V14.7812H20.1562V16.125H22.8438V12.0938H24.1875V9.40625H22.8438V6.71875H20.1562ZM9.40625 9.40625H14.7812V14.7812H9.40625V9.40625ZM28.2188 9.40625H33.5938V14.7812H28.2188V9.40625ZM10.75 10.75V13.4375H13.4375V10.75H10.75ZM29.5625 10.75V13.4375H32.25V10.75H29.5625ZM9.40625 28.2188H14.7812V33.5938H9.40625V28.2188ZM10.75 29.5625V32.25H13.4375V29.5625H10.75ZM33.5938 33.5938V36.2812H36.2812V33.5938H33.5938Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        Scan QR Code</button>
                                </div>
                            </div>

                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                        <thead>
                                            <tr class="fw-bolder text-muted">
                                                <th class="min-w-150px">Owner</th>
                                                <th class="min-w-110px">Total Berat</th>
                                                <th class="min-w-140px">Kapasitas</th>
                                                <th class="min-w-120px">Digunakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $item)
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-45px me-5">
                                                                <img src="{{ asset('/storage/' . $item->photo) }}" alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bolder text-hover-primary fs-6">{{ $item->name }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        @php
                                                            $totalBerat = 0;
                                                            foreach ($item->storage as $key => $value) {
                                                                foreach ($value->barang as $nilai) {
                                                                    $totalBerat += $nilai->berat;
                                                                }
                                                            }
                                                        @endphp
                                                        <span class="text-dark fw-bolder d-block fs-6">{{ $totalBerat }}
                                                            Kg</span>
                                                    </td>
                                                    <td class="text-center">
                                                        @php
                                                            $rakCount = 0;
                                                            foreach ($item->storage as $key => $value) {
                                                                $rakCount++;
                                                            }

                                                            $kapasitas = $rakCount * 50;
                                                        @endphp
                                                        <span class="text-dark fw-bolder d-block fs-6"> {{ $kapasitas }}
                                                            Kg</span>
                                                    </td>
                                                    <td class="text-end">
                                                        @php
                                                            $beratCount = 0;
                                                            foreach ($item->storage as $key => $value) {
                                                                foreach ($value->barang as $nilai) {
                                                                    $beratCount += $nilai->berat;
                                                                }
                                                            }

                                                            if ($kapasitas != 0) {
                                                                $beratCount = ($beratCount / $kapasitas) * 100;
                                                            } else {
                                                                $beratCount = 0;
                                                            }
                                                        @endphp
                                                        <div class="d-flex flex-column w-100 me-2">
                                                            <div class="d-flex flex-stack mb-2">
                                                                <span
                                                                    class="text-muted me-2 fs-7 fw-bold">{{ $beratCount }}%</span>
                                                            </div>
                                                            <div class="progress h-6px w-100">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: {{ $beratCount }}%"
                                                                    aria-valuenow="{{ $beratCount }}" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
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

                    <div class="col-xl-4">
                        <div class="card card-xl-stretch mb-5 mb-xl-8">

                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Sensor</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Realtime Data</span>
                                </h3>
                                <div class="card-toolbar">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1"
                                                        fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1"
                                                        fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1"
                                                        fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body pt-5">
                                <div class="d-flex align-items-sm-center mb-7 indikator_lamp">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="{{ asset('assets/media/icon/3_lamp.png') }}"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <div class="text-gray-800 text-hover-primary fs-6 fw-bolder">Lamp</div>
                                            <span class="text-muted fw-bold d-block fs-7">Indikator Lampu &ensp;</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2"><span
                                                id="lamp">loading</span></span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-sm-center mb-7 indikator_fan">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="{{ asset('assets/media/icon/4_fan.png') }}"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <div class="text-gray-800 text-hover-primary fs-6 fw-bolder">Fan</div>
                                            <span class="text-muted fw-bold d-block fs-7">Indikator Fan &ensp; &ensp;
                                                &ensp; &ensp; </span>
                                        </div> <br>
                                        <span class="badge badge-light fw-bolder my-2"><span
                                                id="fan">loading</span></span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-sm-center mb-7">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="{{ asset('assets/media/icon/1_kelembapan.png') }}"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <div class="text-gray-800 text-hover-primary fs-6 fw-bolder">Kelembapan</div>
                                            <span class="text-muted fw-bold d-block fs-7">Sensor Kelembapan &ensp; &ensp;
                                                &ensp; &ensp;</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2"><span
                                                id="kelembapan">loading</span></span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-sm-center mb-7">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="{{ asset('assets/media/icon/2_temprature.png') }}"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-6 fw-bolder">Temprature</a>
                                            <span class="text-muted fw-bold d-block fs-7">Sensor Suhu &ensp; &ensp;
                                                &ensp; &ensp;</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2"><span
                                                id="temprature">loading</span></span>
                                    </div>
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

    <!-- Modal -->
    <div class="modal fade" id="scanModal" tabindex="-1" aria-labelledby="scanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="scanModalLabel">Pindai QR Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="reader" style="width: 350px; margin: auto;"></div>
                    <div id="result" class="p-3 bg-light border rounded mt-3">Arahkan kamera ke QR Code</div>
                </div>
            </div>
        </div>
    </div>

@section('js')
    <script type="module">
        import {
            db
        } from '/js/firebase.js';
        import {
            ref,
            onValue,
            set,
            getDatabase
        } from "https://www.gstatic.com/firebasejs/12.5.0/firebase-database.js";

        $(document).ready(function() {
            const dbRealtime = getDatabase();
            const usersRef = ref(dbRealtime, '/');

            onValue(usersRef, (snapshot) => {
                const data = snapshot.val();
                if (!data || !data.dht) return;

                const temp = data.dht.temp;
                const hum = data.dht.hum;

                let lamp = 0;
                let fan = 0;
                let kondisi = '';

                if (temp >= 25 && temp <= 28 && hum >= 60 && hum <= 65) {
                    kondisi = 'Normal / Aman';
                    lamp = 0;
                    fan = 0;
                    $('.indikator_lamp').removeClass('bg-warning rounded p-3');
                    $('.indikator_fan').removeClass('bg-warning rounded p-3');
                } else if (temp >= 25 && temp <= 30 && hum > 70 && hum <= 75) {
                    kondisi = 'Lembap';
                    lamp = 0;
                    fan = 1;
                    $('.indikator_fan').addClass('bg-warning rounded p-3');
                    $('.indikator_lamp').removeClass('bg-warning rounded p-3');
                } else if (temp < 26 && hum > 75) {
                    kondisi = 'Lembap & Dingin (malam)';
                    lamp = 1;
                    fan = 1;
                    $('.indikator_lamp').addClass('bg-warning rounded p-3');
                    $('.indikator_fan').addClass('bg-warning rounded p-3');
                } else if (temp > 32 && hum < 65) {
                    kondisi = 'Panas (siang)';
                    lamp = 0;
                    fan = 1;
                    $('.indikator_fan').addClass('bg-warning rounded p-3');
                    $('.indikator_lamp').removeClass('bg-warning rounded p-3');
                } else if (temp >= 25 && temp <= 28 && hum > 80) {
                    kondisi = 'Sangat lembap & hujan';
                    lamp = 1;
                    fan = 0;
                    $('.indikator_lamp').addClass('bg-warning rounded p-3');
                    $('.indikator_fan').removeClass('bg-warning rounded p-3');
                } else {
                    kondisi = 'Tidak terdefinisi';
                    lamp = data.btn?.lamp || 0;
                    fan = data.btn?.fan || 0;
                }

                // update Firebase
                set(ref(dbRealtime, 'btn'), {
                    lamp,
                    fan
                });

                // update tampilan
                $('#lamp').text(lamp ? 'ON' : 'OFF');
                $('#fan').text(fan ? 'ON' : 'OFF');
                $('#kelembapan').text(hum + ' %');
                $('#temprature').text(temp + ' °C');
                $('#kondisi').text(kondisi);

            }, (error) => {
                console.error("Error Firebase:", error);
            });
        });
    </script>


    {{-- <script src="{{ asset('js/html5-qrcode.min.js') }}"></script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let html5QrCode;
            const resultElement = document.getElementById("result");

            // Saat tombol diklik → buka modal
            document.getElementById("btnScan").addEventListener("click", function() {
                const modal = new bootstrap.Modal(document.getElementById("scanModal"));
                modal.show();

                // Tunggu sedikit sebelum kamera aktif
                setTimeout(() => {
                    html5QrCode = new Html5Qrcode("reader");
                    html5QrCode.start({
                            facingMode: "environment"
                        }, {
                            fps: 10,
                            qrbox: 250
                        },
                        onScanSuccess,
                        onScanError
                    ).catch(err => {
                        resultElement.innerText = "Tidak bisa akses kamera: " + err;
                    });
                }, 500);
            });

            // Hentikan kamera kalau modal ditutup
            document.getElementById("scanModal").addEventListener("hidden.bs.modal", function() {
                if (html5QrCode) {
                    html5QrCode.stop().then(() => {
                        html5QrCode.clear();
                    });
                }
            });

            let sudahScan = false;
            let qrData = null;

            function onScanSuccess(decodedText) {
                if (sudahScan) return;
                sudahScan = true;

                try {
                    qrData = JSON.parse(decodedText);

                    const id = qrData.id;

                    if (!id) {
                        resultElement.innerText = "QR tidak memiliki ID";
                        return;
                    }

                    resultElement.innerText = "QR Terdeteksi, ID: " + id;

                    console.log("Data lengkap:", qrData);

                    window.location.href = `/admin/user/${id}`;

                    setTimeout(() => {
                        html5QrCode.stop().catch(err => console.warn("Gagal stop kamera:", err));
                    }, 500);

                } catch (error) {
                    console.error("Gagal parse JSON dari QR:", error);
                    resultElement.innerText = "Format QR bukan JSON valid";
                }
            }

            function onScanError(err) {
                console.warn("Scan error:", err);
            }
        });
    </script>
@endsection
@endsection

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> A-Store Login </title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/auth/style.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JS (Popper + Bootstrap Bundle) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <section class="containerr forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="{{ route('login.process') }}" method="POST">
                    @csrf

                    <div class="field input-field">
                        <input type="text" name="username" placeholder="username" class="input" required
                            value="{{ old('username') }}">
                    </div>

                    <div class="field input-field position-relative">
                        <input type="password" name="password" placeholder="Password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    @error('email')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit">Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <button id="btnScan"
                    class="btn w-100 d-flex justify-content-center align-items-center gap-2 py-2 rounded-3 bg-primary text-white border-0 shadow-sm hover-scale">
                    <i class='bx bx-qr-scan fs-4'></i>
                    <span class="">Login with QR Code</span>
                </button>
            </div>

        </div>
    </section>

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

    <!-- JavaScript -->
    <script src="{{ asset('assets/auth/script.js') }}"></script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            let html5QrCode;
            const resultElement = document.getElementById("result");
            let sudahScan = false;

            // Tombol untuk buka modal & aktifkan kamera
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
                    html5QrCode.stop().then(() => html5QrCode.clear());
                }
            });

            // Fungsi dipanggil saat QR berhasil dibaca
            function onScanSuccess(decodedText) {
                console.log("QR terdeteksi:", decodedText);
                if (sudahScan) return;
                sudahScan = true;

                let qrData;
                try {
                    qrData = JSON.parse(decodedText);
                } catch (error) {
                    console.error("QR bukan JSON valid:", error);
                    resultElement.innerText = "Format QR tidak valid.";
                    resetScannerDelay();
                    return;
                }

                const username = qrData.username || null;
                const password = qrData.password || null;

                if (!username || !password) {
                    resultElement.innerText = "QR tidak memiliki username atau password!";
                    resetScannerDelay();
                    return;
                }

                resultElement.innerText = "QR terdeteksi, sedang login...";

                // Kirim ke backend Laravel
                fetch('/login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content'),
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            username,
                            password
                        })
                    })
                    .then(response => {
                        // Jika respons bukan JSON, backend mungkin redirect
                        if (!response.headers.get('content-type')?.includes('application/json')) {
                            resultElement.innerText = "Login berhasil (non-JSON).";
                            setTimeout(() => location.reload(), 1000);
                            return null;
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (!data) return;
                        if (data.success) {
                            resultElement.innerText = "Login berhasil!";
                            setTimeout(() => location.reload(), 1000);
                        } else {
                            resultElement.innerText = data.message || "Login gagal, cek data QR!";
                            resetScannerDelay();
                        }
                    })
                    .catch(error => {
                        console.error(error);
                        resultElement.innerText = "Terjadi kesalahan saat login.";
                        resetScannerDelay();
                    });
            }

            // Fungsi error scanning
            function onScanError(err) {
                // console.warn("Scan error:", err);
            }

            // Aktifkan ulang scanner setelah 2 detik
            function resetScannerDelay() {
                setTimeout(() => {
                    sudahScan = false;
                }, 2000);
            }
        });
    </script> --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let html5QrCode;
            const resultElement = document.getElementById("result");
            let sudahScan = false;

            document.getElementById("btnScan").addEventListener("click", function() {
                const modal = new bootstrap.Modal(document.getElementById("scanModal"));
                modal.show();

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

            document.getElementById("scanModal").addEventListener("hidden.bs.modal", function() {
                if (html5QrCode) html5QrCode.stop().then(() => html5QrCode.clear());
            });

            function onScanSuccess(decodedText) {
                if (sudahScan) return;
                sudahScan = true;

                let qrData;
                try {
                    qrData = JSON.parse(decodedText);
                } catch {
                    resultElement.innerText = "Format QR tidak valid.";
                    return resetScannerDelay();
                }

                const username = qrData.username;
                const password = qrData.password;

                if (!username || !password) {
                    resultElement.innerText = "QR tidak memiliki username atau password!";
                    return resetScannerDelay();
                }

                resultElement.innerText = "QR terdeteksi, sedang login...";

                fetch('/login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content'),
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            username,
                            password
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            resultElement.innerText = "Login berhasil!";

                            // Redirect berdasarkan role user
                            if (data.role === 'admin') {
                                window.location.href = '/admin/dashboard';
                            } else if (data.role === 'user') {
                                window.location.href = '/user/customer';
                            } else {
                                window.location.href = '/dashboard';
                            }

                        } else {
                            resultElement.innerText = data.message || "Login gagal.";
                            resetScannerDelay();
                        }
                    })
                    .catch(() => {
                        resultElement.innerText = "Terjadi kesalahan saat login.";
                        resetScannerDelay();
                    });
            }

            function onScanError(err) {
                /* biarkan kosong */ }

            function resetScannerDelay() {
                setTimeout(() => {
                    sudahScan = false;
                }, 2000);
            }
        });
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login SPMB SMKNAA</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #1f2937;
        }

        .login-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 12px;
        }

        .login-card {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            max-width: 950px;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
        }

        /* LEFT SIDE */
        .left-side {
            flex: 1;
            min-width: 300px;
            background: linear-gradient(180deg, #eef8f0 0%, #f8fbf8 100%);
            padding: 24px;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .brand-top {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 28px;
        }

        .brand-top img {
            width: 52px;
            height: 52px;
            object-fit: contain;
        }

        .brand-text h4 {
            font-size: 16px;
            font-weight: 700;
            color: #16a34a;
            margin-bottom: 2px;
        }

        .brand-text p {
            font-size: 12px;
            color: #6b7280;
            margin: 0;
        }

        .welcome-title {
            font-size: 30px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 12px;
            color: #111827;
        }

        .welcome-title span {
            color: #16a34a;
        }

        .welcome-desc {
            font-size: 15px;
            line-height: 1.5;
            color: #4b5563;
            max-width: 90%;
        }

        .school-image {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: auto;
            object-fit: contain;
            z-index: 0;
            pointer-events: none;
        }

        /* RIGHT SIDE */
        .right-side {
            flex: 1;
            min-width: 300px;
            padding: 26px;
            display: flex;
            justify-content: center;
            background: #fff;
        }

        .login-form-wrapper {
            width: 100%;
            max-width: 400px;
        }

        .login-form-wrapper h2 {
            font-size: 26px;
            font-weight: 800;
            color: #111827;
            margin-bottom: 6px;
        }

        .subtitle {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 22px;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 6px;
        }

        .input-group {
            border: 1px solid #d1d5db;
            border-radius: 12px;
            overflow: hidden;
            height: 46px;
            background: #fff;
            margin-bottom: 16px;
        }

        .input-group:focus-within {
            border-color: #16a34a;
            box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.10);
        }

        .input-group-text {
            border: none;
            background: transparent;
            padding-left: 14px;
            color: #16a34a;
            font-size: 16px;
        }

        .form-control {
            border: none;
            box-shadow: none !important;
            font-size: 14px;
            color: #374151;
        }

        .form-control::placeholder {
            color: #9ca3af;
        }

        .toggle-password {
            border: none;
            background: transparent;
            padding-right: 14px;
            color: #6b7280;
            font-size: 16px;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .form-check-label {
            font-size: 13px;
            color: #374151;
        }

        .forgot-link {
            text-decoration: none;
            color: #16a34a;
            font-size: 13px;
            font-weight: 600;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            height: 46px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(90deg, #0f9d58, #16a34a);
            color: #fff;
            font-size: 15px;
            font-weight: 700;
            transition: 0.3s;
            margin-bottom: 18px;
        }

        .btn-login:hover {
            transform: translateY(-1px);
            background: linear-gradient(90deg, #0d8b4e, #15803d);
        }

        .access-box {
            border: 1px solid #d8eadc;
            background: #f6fbf7;
            border-radius: 14px;
            padding: 14px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 18px;
        }

        .access-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e8f7ed;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #16a34a;
            font-size: 18px;
            flex-shrink: 0;
        }

        .access-box h5 {
            font-size: 15px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 4px;
        }

        .access-box p {
            margin: 0;
            color: #4b5563;
            font-size: 13px;
            line-height: 1.5;
        }

        .secure-text {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: #6b7280;
        }

        /* FOOTER FIXED */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            color: #6b7280;
            font-size: 12px;
            background: #f4f6f9;
        }

        /* RESPONSIVE */
        @media(max-width:992px) {
            .left-side {
                display: none;
            }

            .login-card {
                flex-direction: column;
            }

            .right-side {
                padding: 24px 18px;
            }

            .login-wrapper {
                max-width: 500px;
                margin: auto;
            }
        }

        @media(max-width:576px) {
            .right-side {
                padding: 20px 16px;
            }

            .login-form-wrapper h2 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">

        <div class="login-card">

            <!-- LEFT SIDE -->
            <div class="left-side">
                <div class="brand-top">
                    <img src="{{ asset('images/logo.webp') }}" alt="Logo SMKNAA">
                    <div class="brand-text">
                        <h4>SPMB SMKNAA</h4>
                        <p>Sistem Penerimaan Murid Baru</p>
                    </div>
                </div>
                <h1 class="welcome-title">Selamat Datang <br> di <span>SPMB SMKNAA</span></h1>
                <p class="welcome-desc">Sistem terintegrasi untuk memudahkan proses penerimaan murid baru di SMKNAA.</p>
                <img src="{{ asset('images/okfix.png') }}" alt="Ilustrasi Sekolah" class="school-image">
            </div>

            <!-- RIGHT SIDE -->
            <div class="right-side">
                <div class="login-form-wrapper">
                    <h2>Masuk ke Akun</h2>
                    <p class="subtitle">Silakan masuk untuk melanjutkan ke dashboard</p>
                    <form>
                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Masukkan email Anda">
                            </div>
                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Masukkan password Anda">
                                <button type="button" class="toggle-password" onclick="togglePassword()">
                                    <i class="bi bi-eye-slash" id="eyeIcon"></i>
                                </button>
                            </div>
                        </div>

                        <div class="options">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Ingat saya</label>
                            </div>
                            <a href="#" class="forgot-link">Lupa Password?</a>
                        </div>

                        <button type="submit" class="btn btn-login">Masuk</button>

                        <div class="access-box">
                            <div class="access-icon"><i class="bi bi-shield-check"></i></div>
                            <div>
                                <h5>Akses Terbatas</h5>
                                <p>Sistem ini hanya dapat diakses oleh Admin dan Panitia SPMB SMKNAA.</p>
                            </div>
                        </div>

                        <div class="secure-text"><i class="bi bi-lock"></i>Aman dan terpercaya</div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <footer>
        © 2026 SPMB SMKNAA. All rights reserved.
    </footer>

    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            const eyeIcon = document.getElementById("eyeIcon");
            if (password.type === "password") {
                password.type = "text";
                eyeIcon.classList.remove("bi-eye-slash");
                eyeIcon.classList.add("bi-eye");
            } else {
                password.type = "password";
                eyeIcon.classList.remove("bi-eye");
                eyeIcon.classList.add("bi-eye-slash");
            }
        }
    </script>

</body>

</html>

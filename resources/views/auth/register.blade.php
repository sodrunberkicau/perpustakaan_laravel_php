@extends('components.head')

@section('content')
<div class="container-fluid p-0" style="min-height: 100vh;">
    <div class="row g-0">
        <!-- Left Column - Form -->
        <div class="col-12 col-lg-5 d-flex align-items-center justify-content-center" 
             style="background: linear-gradient(135deg, #123332 0%, #1a4d4b 100%); min-height: 100vh; padding: 2rem 0;">
            <div class="w-100 px-3 px-sm-4 px-md-5" style="max-width: 500px;">
                <!-- Logo Mobile -->
                <div class="d-block d-lg-none text-center mb-4 mb-sm-5">
                    <img src="/img/icon/ic_logo.png" alt="logo" class="img-fluid mb-3" style="max-height: 100px; width: auto;">
                    <h1 class="amaranth-regular mb-3" style="color: white; font-size: 1.8rem; line-height: 1.2;">
                        Bergabung dengan<br>
                        <span style="color: #4CAF50;">International School</span>
                    </h1>
                    <p class="urbanist-medium mb-0" style="color: #BDBDBD; font-size: 1rem;">
                        Daftar untuk mulai meminjam buku
                    </p>
                </div>

                <!-- Welcome Text Desktop -->
                <div class="d-none d-lg-block text-center mb-5">
                    <h1 class="amaranth-regular mb-3" style="color: white; font-size: 2.5rem; line-height: 1.2;">
                        Bergabung dengan <br>
                        <span style="color: #4CAF50;">International School</span> Library
                    </h1>
                    <p class="urbanist-medium mb-0" style="color: #BDBDBD; font-size: 1.1rem;">
                        Daftar untuk mulai meminjam buku yang kamu inginkan
                    </p>
                </div>

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert" style="border-radius: 12px;">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill me-3" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <div style="flex: 1;">
                                @foreach ($errors->all() as $error)
                                    <div class="urbanist-medium">{{ $error }}</div>
                                @endforeach
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Success Message (if any) -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert" style="border-radius: 12px;">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill me-3" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            <div class="urbanist-medium">{{ session('success') }}</div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Register Form -->
                <form action="{{ route('register') }}" method="post" class="mt-4">
                    @csrf
                    
                    <!-- NISN Input -->
                    <div class="mb-3 mb-sm-4">
                        <label for="nisn" class="form-label urbanist-semibold mb-2" style="color: white; font-size: 1rem;">
                            NISN
                        </label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-transparent border-end-0" style="border-color: rgba(255,255,255,0.3); min-width: 50px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#BDBDBD" class="bi bi-person-badge" viewBox="0 0 16 16">
                                    <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                </svg>
                            </span>
                            <input type="number" 
                                   name="nisn" 
                                   class="form-control border-start-0 urbanist-medium" 
                                   placeholder="Masukkan NISN" 
                                   id="nisn" 
                                   required
                                   value="{{ old('nisn') }}"
                                   style="background: #BDBDBD; border-color: rgba(255,255,255,0.3); color: white; font-size: 16px; min-height: 56px;">
                        </div>
                        <small class="form-text urbanist-regular mt-1" style="color: rgba(255,255,255,0.6); font-size: 0.85rem;">
                            Masukkan NISN yang valid dan terdaftar
                        </small>
                    </div>

                    <!-- Full Name Input -->
                    <div class="mb-3 mb-sm-4">
                        <label for="name" class="form-label urbanist-semibold mb-2" style="color: white; font-size: 1rem;">
                            Nama Lengkap
                        </label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-transparent border-end-0" style="border-color: rgba(255,255,255,0.3); min-width: 50px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#BDBDBD" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4 1 1 1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </span>
                            <input type="text" 
                                   name="name" 
                                   class="form-control border-start-0 urbanist-medium" 
                                   placeholder="Masukkan Nama Lengkap" 
                                   id="name" 
                                   required
                                   value="{{ old('name') }}"
                                   style="background: #BDBDBD; border-color: rgba(255,255,255,0.3); color: white; font-size: 16px; min-height: 56px;">
                        </div>
                        <small class="form-text urbanist-regular mt-1" style="color: rgba(255,255,255,0.6); font-size: 0.85rem;">
                            Gunakan nama sesuai dokumen resmi
                        </small>
                    </div>
    <!-- Password Inputs Column (STACK VERTICAL) -->
<div class="row g-3 g-sm-4 mb-3 mb-sm-4">

    <!-- Password -->
    <div class="col-12">
        <label for="password" class="form-label urbanist-semibold mb-2" style="color: white; font-size: 1rem;">
            Kata Sandi
        </label>
        <div class="input-group input-group-lg">
            <span class="input-group-text bg-transparent border-end-0" 
                  style="border-color: rgba(255,255,255,0.3); min-width: 50px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-lock-fill" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                </svg>
            </span>

            <input type="password" 
                   name="password" 
                   class="form-control border-start-0 urbanist-medium" 
                   placeholder="Kata sandi" 
                   id="password" 
                   required
                   style="background: #BDBDBD; 
                          border-color: rgba(255,255,255,0.3); 
                          color: white; 
                          font-size: 16px; 
                          min-height: 56px;">

            <button class="btn btn-outline-secondary border-start-0 px-3" 
                    type="button" 
                    id="togglePassword"
                    style="background: #BDBDBD; 
                           border-color: rgba(255,255,255,0.3); 
                           min-width: 60px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-eye" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5z"/>
                </svg>
            </button>
        </div>
    </div>

                <!-- Konfirmasi Password -->
                <div class="col-12">
                    <label for="password_confirmation" class="form-label urbanist-semibold mb-2" style="color: white; font-size: 1rem;">
                        Konfirmasi Kata Sandi
                    </label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent border-end-0" 
                            style="border-color: rgba(255,255,255,0.3); min-width: 50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                            </svg>
                        </span>

                        <input type="password" 
                            name="password_confirmation" 
                            class="form-control border-start-0 urbanist-medium" 
                            placeholder="Konfirmasi kata sandi" 
                            id="password_confirmation" 
                            required
                            style="background: #BDBDBD; 
                                    border-color: rgba(255,255,255,0.3); 
                                    color: white; 
                                    font-size: 16px; 
                                    min-height: 56px;">

                        <button class="btn btn-outline-secondary border-start-0 px-3" 
                                type="button" 
                                id="toggleConfirmPassword"
                                style="background: #BDBDBD; 
                                    border-color: rgba(255,255,255,0.3); 
                                    min-width: 60px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5z"/>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>

                    <!-- Terms Agreement -->
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terms" id="terms" required style="width: 20px; height: 20px;">
                            <label class="form-check-label urbanist-medium ms-2" for="terms" style="color: #BDBDBD; font-size: 0.95rem;">
                                Saya setuju dengan 
                                <a href="#" class="urbanist-semibold text-decoration-none" style="color: #4CAF50;">
                                    Syarat & Ketentuan
                                </a>
                                dan 
                                <a href="#" class="urbanist-semibold text-decoration-none" style="color: #4CAF50;">
                                    Kebijakan Privasi
                                </a>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button class="btn btn-primary w-100 py-3 urbanist-semibold mb-3 mb-sm-4" 
                            type="submit"
                            style="background: linear-gradient(135deg, #4CAF50 0%, #2E7D32 100%); 
                                   border: none; 
                                   font-size: 1rem;
                                   border-radius: 12px;
                                   min-height: 56px;"
                            id="submitBtn">
                        Daftar
                    </button>

                    <!-- Login Link -->
                    <div class="text-center pt-3 pt-sm-4 border-top" style="border-color: rgba(255,255,255,0.1) !important;">
                        <p class="urbanist-medium mb-0" style="color: white; font-size: 0.95rem;">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="urbanist-semibold text-decoration-none ms-1" style="color: #4CAF50;">
                                Masuk Sekarang
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Column - Hero Image (Desktop Only) -->
        <div class="col-lg-7 d-none d-lg-flex align-items-center justify-content-center position-relative"
             style="background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%); min-height: 100vh;">
            <!-- Decorative Elements -->
            <div class="position-absolute top-0 end-0 p-5">
                <div class="rounded-circle" style="width: 200px; height: 200px; background: linear-gradient(135deg, rgba(76, 175, 80, 0.1) 0%, rgba(46, 125, 50, 0.1) 100%);"></div>
            </div>
            <div class="position-absolute bottom-0 start-0 p-5">
                <div class="rounded-circle" style="width: 150px; height: 150px; background: linear-gradient(135deg, rgba(18, 51, 50, 0.1) 0%, rgba(26, 77, 75, 0.1) 100%);"></div>
            </div>

            <!-- Hero Content -->
            <div class="text-center position-relative" style="z-index: 1;">
                <div class="mb-5">
                    <img src="/img/icon/ic_logo.png" 
                         alt="Library Logo" 
                         class="img-fluid mb-4"
                         style="max-height: 300px;">
                </div>
                
                <div class="px-5">
                    <h2 class="amaranth-regular mb-4" style="color: #123332; font-size: 2.5rem;">
                        Mulai Petualangan Membaca
                    </h2>
                    <p class="urbanist-medium lead" style="color: #666; font-size: 1.2rem;">
                        Dapatkan akses ke ribuan buku dan mulai perjalanan literasi Anda bersama kami
                    </p>
                    
                    <!-- Benefits -->
                    <div class="row mt-5">
                        <div class="col-md-4 mb-3">
                            <div class="p-3 rounded" style="background: rgba(76, 175, 80, 0.1);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#2E7D32" class="bi bi-bookmark-check mb-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                </svg>
                                <h5 class="urbanist-semibold mb-2">Pinjam Buku</h5>
                                <p class="urbanist-medium mb-0 small" style="color: #666;">
                                    Akses koleksi lengkap
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="p-3 rounded" style="background: rgba(18, 51, 50, 0.1);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#123332" class="bi bi-calendar-check mb-2" viewBox="0 0 16 16">
                                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                                <h5 class="urbanist-semibold mb-2">Jadwal Fleksibel</h5>
                                <p class="urbanist-medium mb-0 small" style="color: #666;">
                    </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="p-3 rounded" style="background: rgba(41, 123, 38, 0.1);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#297b26" class="bi bi-shield-check mb-2" viewBox="0 0 16 16">
                                    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                    <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                                <h5 class="urbanist-semibold mb-2">Aman Terpercaya</h5>
                                <p class="urbanist-medium mb-0 small" style="color: #666;">
                                    Data Anda terlindungi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS for Mobile Optimization -->
<style>
    /* Mobile First Approach */
    @media (max-width: 576px) {
        .px-3 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
        
        /* Input optimization */
        .input-group-lg {
            flex-direction: row !important;
        }
        
        .input-group-lg .form-control {
            font-size: 16px !important;
            min-height: 52px !important;
            padding: 0.75rem !important;
        }
        
        .input-group-lg .input-group-text {
            min-width: 48px !important;
            padding: 0.75rem !important;
        }
        
        #togglePassword, #toggleConfirmPassword {
            min-width: 52px !important;
            padding: 0.75rem !important;
        }
        
        /* Password row on mobile */
        .row.g-3.g-sm-4 {
            margin-bottom: 1rem !important;
        }
        
        .col-12.col-sm-6 {
            margin-bottom: 1rem;
        }
        
        .col-12.col-sm-6:last-child {
            margin-bottom: 0;
        }
        
        /* Password requirements */
        .mb-4[style*="background: rgba"] {
            padding: 12px !important;
            margin-bottom: 1.5rem !important;
        }
        
        /* Button */
        .btn-primary {
            min-height: 52px !important;
            font-size: 1rem !important;
        }
        
        /* Terms checkbox */
        .form-check-input {
            width: 18px !important;
            height: 18px !important;
        }
        
        .form-check-label {
            font-size: 0.85rem !important;
            line-height: 1.4;
        }
    }
    
    @media (max-width: 400px) {
        .px-3 {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }
        
        .input-group-lg .form-control {
            font-size: 14px !important;
            min-height: 48px !important;
        }
        
        .btn-primary {
            min-height: 48px !important;
        }
    }
    
    /* Tablet optimization */
    @media (min-width: 577px) and (max-width: 992px) {
        .px-sm-4 {
            padding-left: 2rem !important;
            padding-right: 2rem !important;
        }
        
        .input-group-lg .form-control {
            min-height: 54px !important;
        }
        
        .btn-primary {
            min-height: 54px !important;
        }
        
        /* Password row */
        .col-12.col-sm-6 {
            margin-bottom: 0;
        }
    }
    
    /* Password validation styles */
    #lengthCheck.valid,
    #matchCheck.valid {
        color: #4CAF50;
    }
    
    #lengthCheck.invalid,
    #matchCheck.invalid {
        color: #f44336;
    }
    
    /* Disable number input spinner */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    
    input[type=number] {
        -moz-appearance: textfield;
    }
    
    /* Form validation */
    .form-control:invalid:not(:focus):not(:placeholder-shown) {
        border-color: #f44336 !important;
    }
    
    .form-control:valid:not(:focus):not(:placeholder-shown) {
        border-color: #4CAF50 !important;
    }
    
    /* Button loading state */
    .btn-primary.loading {
        position: relative;
        color: transparent !important;
    }
    
    .btn-primary.loading::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        top: 50%;
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        border: 2px solid rgba(255,255,255,0.3);
        border-radius: 50%;
        border-top-color: white;
        animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
</style>

<!-- JavaScript for enhanced functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password toggle functionality
        function setupPasswordToggle(buttonId, inputId) {
            const toggleBtn = document.getElementById(buttonId);
            const passwordInput = document.getElementById(inputId);
            
            if (toggleBtn && passwordInput) {
                toggleBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    const icon = this.querySelector('svg');
                    if (type === 'text') {
                        icon.innerHTML = '<path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/><path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/><path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>';
                    } else {
                        icon.innerHTML = '<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>';
                    }
                });
            }
        }
        
        setupPasswordToggle('togglePassword', 'password');
        setupPasswordToggle('toggleConfirmPassword', 'password_confirmation');
        
        // Password validation
        const passwordInput = document.getElementById('password');
        const confirmInput = document.getElementById('password_confirmation');
        const lengthCheck = document.getElementById('lengthCheck');
        const matchCheck = document.getElementById('matchCheck');
        const submitBtn = document.getElementById('submitBtn');
        
        function validatePassword() {
            const password = passwordInput.value;
            const confirm = confirmInput.value;
            
            // Check length
            if (password.length >= 8) {
                lengthCheck.innerHTML = '✅';
                lengthCheck.classList.add('valid');
                lengthCheck.classList.remove('invalid');
            } else {
                lengthCheck.innerHTML = '❌';
                lengthCheck.classList.add('invalid');
                lengthCheck.classList.remove('valid');
            }
            
            // Check match
            if (confirm && password === confirm) {
                matchCheck.innerHTML = '✅';
                matchCheck.classList.add('valid');
                matchCheck.classList.remove('invalid');
            } else {
                matchCheck.innerHTML = '❌';
                matchCheck.classList.add('invalid');
                matchCheck.classList.remove('valid');
            }
            
            // Enable/disable submit button
            const termsChecked = document.getElementById('terms').checked;
            const isValid = password.length >= 8 && password === confirm && termsChecked;
            
            submitBtn.disabled = !isValid;
            submitBtn.style.opacity = isValid ? '1' : '0.7';
            submitBtn.style.cursor = isValid ? 'pointer' : 'not-allowed';
        }
        
        // Check terms agreement
        function checkTerms() {
            validatePassword();
        }
        
        if (passwordInput && confirmInput) {
            passwordInput.addEventListener('input', validatePassword);
            confirmInput.addEventListener('input', validatePassword);
            
            // Initial validation
            validatePassword();
        }
        
        const termsCheckbox = document.getElementById('terms');
        if (termsCheckbox) {
            termsCheckbox.addEventListener('change', checkTerms);
        }
        
        // Form submission loading state
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function() {
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
            });
        }
        
        // Auto-focus on first input on mobile
        if (window.innerWidth <= 768) {
            setTimeout(() => {
                const firstInput = document.getElementById('nisn');
                if (firstInput) {
                    firstInput.focus();
                }
            }, 300);
        }
        
        // Real-time NISN validation (prevent non-numeric input)
        const nisnInput = document.getElementById('nisn');
        if (nisnInput) {
            nisnInput.addEventListener('input', function(e) {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        }
    });
</script>
@endsection
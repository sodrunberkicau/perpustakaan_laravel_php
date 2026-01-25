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
                        Selamat Datang di<br>
                        <span style="color: #4CAF50;">International School</span>
                    </h1>
                    <p class="urbanist-medium mb-0" style="color: #BDBDBD; font-size: 1rem;">
                        Masuk untuk meminjam buku
                    </p>
                </div>

                <!-- Welcome Text Desktop -->
                <div class="d-none d-lg-block text-center mb-5">
                    <h1 class="amaranth-regular mb-3" style="color: white; font-size: 2.5rem; line-height: 1.2;">
                        Selamat Datang di <br>
                        <span style="color: #4CAF50;">International School</span> Library
                    </h1>
                    <p class="urbanist-medium mb-0" style="color: #BDBDBD; font-size: 1.1rem;">
                        Masuk untuk meminjam buku yang kamu inginkan
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

                <!-- Login Form -->
                <form method="post" action="{{ route('login') }}" autocomplete="on" class="mt-4">
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
                                   style="background: #BDBDBD; border-color: rgba(255,255,255,0.3); color: #BDBDBD; font-size: 16px; min-height: 56px;">
                        </div>
                        <small class="form-text urbanist-regular mt-1" style="color: rgba(255,255,255,0.6); font-size: 0.85rem;">
                            Gunakan NISN yang terdaftar
                        </small>
                    </div>

                    <!-- Password Input -->
                    <div class="mb-3 mb-sm-4">
                        <label for="password" class="form-label urbanist-semibold mb-2" style="color: white; font-size: 1rem;">
                            Kata Sandi
                        </label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-transparent border-end-0" style="border-color: rgba(255,255,255,0.3); min-width: 50px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#BDBDBD" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                </svg>
                            </span>
                            <input type="password" 
                                   name="password" 
                                   class="form-control border-start-0 urbanist-medium" 
                                   placeholder="Masukkan kata sandi" 
                                   id="password" 
                                   required
                                   style="background: #BDBDBD; border-color: rgba(255,255,255,0.3); color: white; font-size: 16px; min-height: 56px;">
                            <button class="btn btn-outline-secondary border-start-0 px-3" 
                                    type="button" 
                                    id="togglePassword"
                                    style="background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.3); min-width: 60px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#BDBDBD" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>
                            </button>
                        </div>
                        <small class="form-text urbanist-regular mt-1" style="color: rgba(255,255,255,0.6); font-size: 0.85rem;">
                            Minimal 8 karakter
                        </small>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-sm-4 gap-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" style="width: 20px; height: 20px;">
                            <label class="form-check-label urbanist-medium ms-2" for="remember" style="color: #BDBDBD; font-size: 0.95rem;">
                                Ingat saya
                            </label>
                        </div>
                        <a href="#" class="urbanist-medium text-decoration-none mt-1 mt-sm-0" style="color: #4CAF50; font-size: 0.95rem;">
                            Lupa kata sandi?
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <button class="btn btn-primary w-100 py-3 urbanist-semibold mb-3 mb-sm-4" 
                            type="submit"
                            style="background: linear-gradient(135deg, #4CAF50 0%, #2E7D32 100%); 
                                   border: none; 
                                   font-size: 1rem;
                                   border-radius: 12px;
                                   min-height: 56px;">
                        Masuk
                    </button>

                    <!-- Register Link -->
                    <div class="text-center pt-3 pt-sm-4 border-top" style="border-color: rgba(255,255,255,0.1) !important;">
                        <p class="urbanist-medium mb-0" style="color: white; font-size: 0.95rem;">
                            Belum punya akun?
                            <a href="{{ route('register') }}" class="urbanist-semibold text-decoration-none ms-1" style="color: #4CAF50;">
                                Daftar Sekarang
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Column - Hero Image (Desktop Only) -->
        <div class="col-lg-7 d-none d-lg-flex align-items-center justify-content-center position-relative"
             style="background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%); min-height: 100vh;">
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
                        Jelajahi Dunia Pengetahuan
                    </h2>
                    <p class="urbanist-medium lead" style="color: #666; font-size: 1.2rem;">
                        Akses ribuan buku digital dan fisik dari koleksi perpustakaan kami. 
                        Mulai petualangan membaca Anda hari ini!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS for Mobile Optimization -->
<style>
    /* Mobile First Approach */
    @media (max-width: 576px) {
        /* Adjust container padding */
        .px-3 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
        
        /* Input optimization for mobile */
        .input-group-lg {
            flex-direction: row !important;
        }
        
        .input-group-lg .form-control {
            font-size: 16px !important; /* Prevents zoom on iOS */
            min-height: 52px !important;
            padding: 0.75rem !important;
        }
        
        .input-group-lg .input-group-text {
            min-width: 48px !important;
            padding: 0.75rem !important;
        }
        
        #togglePassword {
            min-width: 52px !important;
            padding: 0.75rem !important;
        }
        
        /* Button optimization */
        .btn-primary {
            min-height: 52px !important;
            font-size: 1rem !important;
        }
        
        /* Form label spacing */
        .form-label {
            font-size: 0.95rem !important;
            margin-bottom: 0.5rem !important;
        }
        
        /* Help text */
        .form-text {
            font-size: 0.8rem !important;
        }
        
        /* Alert optimization */
        .alert {
            padding: 0.75rem !important;
            border-radius: 10px !important;
        }
        
        .alert .bi {
            margin-right: 0.5rem !important;
        }
        
        /* Checkbox optimization */
        .form-check-input {
            width: 18px !important;
            height: 18px !important;
        }
        
        .form-check-label {
            font-size: 0.9rem !important;
        }
        
        /* Links optimization */
        a {
            font-size: 0.9rem !important;
        }
        
        /* Logo mobile */
        .d-block.d-lg-none img {
            max-height: 80px !important;
        }
        
        .d-block.d-lg-none h1 {
            font-size: 1.5rem !important;
        }
        
        .d-block.d-lg-none p {
            font-size: 0.9rem !important;
        }
    }
    
    @media (max-width: 400px) {
        /* Extra small devices */
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
        
        /* Stack checkbox and forgot password on very small screens */
        .d-flex.flex-column.flex-sm-row {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 0.75rem !important;
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
    }
    
    /* Global input styles for better touch targets */
    .form-control, 
    .btn, 
    .form-check-input {
        -webkit-tap-highlight-color: transparent;
        touch-action: manipulation;
    }
    
    /* Input focus states */
    .form-control:focus {
        box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.2) !important;
        border-color: #4CAF50 !important;
        outline: none;
    }
    
    /* Password toggle button hover */
    #togglePassword:hover,
    #togglePassword:active {
        background: rgba(255,255,255,0.2) !important;
    }
    
    /* Disable number input spinner on mobile */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    
    input[type=number] {
        -moz-appearance: textfield;
    }
    
    /* Smooth transitions */
    .form-control,
    .btn,
    .input-group-text {
        transition: all 0.2s ease;
    }
    
    /* Button active state */
    .btn-primary:active {
        transform: scale(0.98);
    }
</style>

<!-- JavaScript optimizations -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password toggle functionality
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        
        if (togglePassword && passwordInput) {
            togglePassword.addEventListener('click', function(e) {
                e.preventDefault();
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                // Toggle icon with smooth transition
                const icon = this.querySelector('svg');
                if (type === 'text') {
                    icon.innerHTML = '<path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/><path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/><path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>';
                    this.setAttribute('aria-label', 'Sembunyikan password');
                } else {
                    icon.innerHTML = '<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>';
                    this.setAttribute('aria-label', 'Tampilkan password');
                }
            });
            
            // Add touch feedback for mobile
            togglePassword.addEventListener('touchstart', function() {
                this.style.transform = 'scale(0.95)';
            });
            
            togglePassword.addEventListener('touchend', function() {
                this.style.transform = 'scale(1)';
            });
        }
        
        // Prevent form zoom on iOS
        const inputs = document.querySelectorAll('input[type="text"], input[type="password"], input[type="number"]');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                window.scrollTo(0, 0);
                document.body.style.zoom = "1";
            });
        });
        
        // Auto-focus on first input on mobile for better UX
        if (window.innerWidth <= 768) {
            const firstInput = document.getElementById('nisn');
            if (firstInput) {
                setTimeout(() => {
                    firstInput.focus();
                }, 300);
            }
        }
    });
</script>
@endsection
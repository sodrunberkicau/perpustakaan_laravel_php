@extends('components.head')

@section('content')

@include('components.nav')

<div class="container-fluid px-3 px-md-4 px-lg-5">
    <!-- Hero Section -->
    <div class="row align-items-center g-4 g-lg-5 py-4 py-lg-5">
        <div class="col-12 col-lg-6 order-2 order-lg-1">
            <div class="pe-lg-4">
                <h1 class="amaranth-regular display-4 display-lg-3 mb-3" style="color: #ffd9be; line-height: 1.2;">
                    Sumber Pengetahuan<br> 
                    <span class="d-block" style="color: #ef9c82;">Tanpa Batas</span>
                </h1>
                
                <p class="urbanist-medium lead mb-4 mb-lg-5" style="color: #7F7F7F; font-size: 1.1rem; line-height: 1.6;">
                    Perpustakaan International School adalah platform digital yang memberikan akses pengetahuan 
                    kepada seluruh komunitas sekolah. Temukan ribuan buku digital dan fisik untuk memperluas 
                    wawasan Anda.
                </p>

                <!-- Stats Counter -->
                <div class="row g-3 g-md-4 mb-4 mb-lg-5">
                    <div class="col-4">
                        <div class="text-center p-3 rounded" style="background: rgba(255, 217, 190, 0.1);">
                            <div class="amaranth-regular" style="font-size: 2rem; color: #ef9c82;">10K+</div>
                            <div class="urbanist-medium" style="color: #7F7F7F; font-size: 0.9rem;">Buku Tersedia</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center p-3 rounded" style="background: rgba(41, 123, 38, 0.1);">
                            <div class="amaranth-regular" style="font-size: 2rem; color: #297b26;">500+</div>
                            <div class="urbanist-medium" style="color: #7F7F7F; font-size: 0.9rem;">Peminjam Aktif</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center p-3 rounded" style="background: rgba(100, 153, 233, 0.1);">
                            <div class="amaranth-regular" style="font-size: 2rem; color: #6499E9;">24/7</div>
                            <div class="urbanist-medium" style="color: #7F7F7F; font-size: 0.9rem;">Akses Digital</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-3">
                    <a href="{{route('dashboard')}}" class="btn btn-lg px-4 px-md-5 py-3 urbanist-semibold" 
                       style="background: linear-gradient(135deg, #297b26 0%, #1e5c1c 100%); 
                              color: white; 
                              border: none;
                              border-radius: 12px;
                              font-size: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-book me-2" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                        Mulai Sekarang
                    </a>
                    
                    <a href="#features" class="btn btn-outline-primary btn-lg px-4 px-md-5 py-3 urbanist-semibold" 
                       style="color: #297b26; 
                              border-color: #297b26;
                              border-radius: 12px;
                              font-size: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-circle me-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                        </svg>
                        Lihat Demo
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-lg-6 order-1 order-lg-2">
            <div class="position-relative">
                <img src="/img/cover/side_illustration.png" alt="Library Illustration" class="img-fluid rounded-4 shadow-lg">
                
                <!-- Floating Elements -->
                <div class="position-absolute top-0 start-0 translate-middle d-none d-md-block">
                    <div class="rounded-circle p-3 shadow" style="background: white; width: 120px; height: 120px;">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#297b26" class="bi bi-award-fill mb-2" viewBox="0 0 16 16">
                                <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                            </svg>
                            <div class="urbanist-semibold" style="color: #297b26;">Award 2025</div>
                        </div>
                    </div>
                </div>
                
                <div class="position-absolute bottom-0 end-0 translate-middle d-none d-md-block">
                    <div class="rounded-circle p-3 shadow" style="background: white; width: 100px; height: 100px;">
                        <div class="text-center">
                            <div class="amaranth-regular" style="font-size: 1.5rem; color: #6499E9;">4.9</div>
                            <div class="urbanist-medium" style="color: #7F7F7F; font-size: 0.8rem;">Rating</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="row py-5 py-lg-6">
        <div class="col-12 text-center mb-5">
            <h2 class="amaranth-regular mb-3" style="color: #123332; font-size: 2.5rem;">
                Kenapa Memilih Kami?
            </h2>
            <p class="urbanist-medium lead mx-auto" style="color: #7F7F7F; max-width: 600px;">
                Platform perpustakaan digital dengan fitur lengkap untuk kebutuhan belajar dan penelitian
            </p>
        </div>

        <div class="col-12">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="h-100 p-4 rounded-4 shadow-sm border-0" 
                         style="background: linear-gradient(135deg, rgba(255, 217, 190, 0.1) 0%, rgba(239, 156, 130, 0.05) 100%);">
                        <div class="mb-3">
                            <div class="rounded-circle d-inline-flex align-items-center justify-content-center" 
                                 style="width: 60px; height: 60px; background: rgba(239, 156, 130, 0.2);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ef9c82" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8s3.58 8 8 8 8-3.58 8-8S12.42 0 8 0zm0 14.5c-3.59 0-6.5-2.91-6.5-6.5S4.41 1.5 8 1.5s6.5 2.91 6.5 6.5-2.91 6.5-6.5 6.5z"/>
                                    <path d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H5a.5.5 0 0 1 0-1h2.5V4a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="amaranth-regular mb-3" style="color: white;">Akses 24/7</h4>
                        <p class="urbanist-medium" style="color: #7F7F7F;">
                            Buka buku kapan saja, di mana saja melalui platform digital kami
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="h-100 p-4 rounded-4 shadow-sm border-0" 
                         style="background: linear-gradient(135deg, rgba(41, 123, 38, 0.1) 0%, rgba(30, 92, 28, 0.05) 100%);">
                        <div class="mb-3">
                            <div class="rounded-circle d-inline-flex align-items-center justify-content-center" 
                                 style="width: 60px; height: 60px; background: rgba(41, 123, 38, 0.2);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#297b26" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM4.5 7.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="amaranth-regular mb-3" style="color: white">Pinjam Cepat</h4>
                        <p class="urbanist-medium" style="color: #7F7F7F;">
                            Proses peminjaman buku yang mudah dan cepat hanya dengan beberapa klik
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="h-100 p-4 rounded-4 shadow-sm border-0" 
                         style="background: linear-gradient(135deg, rgba(100, 153, 233, 0.1) 0%, rgba(57, 98, 215, 0.05) 100%);">
                        <div class="mb-3">
                            <div class="rounded-circle d-inline-flex align-items-center justify-content-center" 
                                 style="width: 60px; height: 60px; background: rgba(100, 153, 233, 0.2);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#6499E9" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM5 8a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="amaranth-regular mb-3" style="color: white">Komunitas Aktif</h4>
                        <p class="urbanist-medium" style="color: #7F7F7F;">
                            Diskusikan buku dengan komunitas pembaca yang aktif dan inspiratif
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="h-100 p-4 rounded-4 shadow-sm border-0" 
                         style="background: linear-gradient(135deg, rgba(255, 217, 190, 0.1) 0%, rgba(239, 156, 130, 0.05) 100%);">
                        <div class="mb-3">
                            <div class="rounded-circle d-inline-flex align-items-center justify-content-center" 
                                 style="width: 60px; height: 60px; background: rgba(255, 217, 190, 0.2);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffd9be" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm0 14.5c-3.59 0-6.5-2.91-6.5-6.5S4.41 1.5 8 1.5s6.5 2.91 6.5 6.5-2.91 6.5-6.5 6.5z"/>
                                    <path d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H5a.5.5 0 0 1 0-1h2.5V4a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="amaranth-regular mb-3" style="color: white">Rekomendasi Personal</h4>
                        <p class="urbanist-medium" style="color: #7F7F7F;">
                            Dapatkan rekomendasi buku berdasarkan minat dan riwayat membaca Anda
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Books Section -->
    <div class="row py-5 py-lg-6">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h2 class="amaranth-regular mb-2" style="color: #123332; font-size: 2.5rem;">
                        Buku Terpopuler
                    </h2>
                    <p class="urbanist-medium mb-0" style="color: #7F7F7F;">
                        Telusuri koleksi buku paling banyak dipinjam
                    </p>
                </div>
                <a href="{{ route('dashboard') }}" class="btn btn-outline-primary px-4 py-2 urbanist-semibold d-none d-md-inline-flex"
                   style="color: #297b26; border-color: #297b26; border-radius: 8px;">
                    Lihat Semua
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile View All Button -->
            <div class="text-center mt-4 d-md-none">
                <a href="{{ route('dashboard') }}" class="btn btn-primary px-4 py-2 urbanist-semibold"
                   style="background: #297b26; border: none; border-radius: 8px;">
                    Lihat Semua Buku
                </a>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="row py-5 py-lg-6">
        <div class="col-12 text-center mb-5">
            <h2 class="amaranth-regular mb-3" style="color: #123332; font-size: 2.5rem;">
                Kata Pengguna
            </h2>
            <p class="urbanist-medium lead mx-auto" style="color: #7F7F7F; max-width: 600px;">
                Lihat apa yang dikatakan oleh pengguna tentang pengalaman mereka
            </p>
        </div>

        <div class="col-12">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 shadow-sm border-0 h-100" 
                         style="background: linear-gradient(135deg, rgba(255, 217, 190, 0.1) 0%, rgba(239, 156, 130, 0.05) 100%);">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3" 
                                 style="width: 60px; height: 60px; background: #D9D9D9;"></div>
                            <div>
                                <h5 class="amaranth-regular mb-1" style="color: #123332;">Alexandra</h5>
                                <p class="urbanist-medium mb-0" style="color: #7F7F7F; font-size: 0.9rem;">Siswa Kelas 12</p>
                            </div>
                        </div>
                        <p class="urbanist-medium" style="color: #7F7F7F;">
                            "Platform ini sangat membantu penelitian saya. Koleksi buku akademiknya lengkap dan akses 24/7 memudahkan belajar di luar jam sekolah."
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 shadow-sm border-0 h-100" 
                         style="background: linear-gradient(135deg, rgba(41, 123, 38, 0.1) 0%, rgba(30, 92, 28, 0.05) 100%);">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3" 
                                 style="width: 60px; height: 60px; background: #D9D9D9;"></div>
                            <div>
                                <h5 class="amaranth-regular mb-1" style="color: #123332;">David</h5>
                                <p class="urbanist-medium mb-0" style="color: #7F7F7F; font-size: 0.9rem;">Guru Matematika</p>
                            </div>
                        </div>
                        <p class="urbanist-medium" style="color: #7F7F7F;">
                            "Sebagai guru, saya sangat menghargai kemudahan dalam menemukan referensi bahan ajar. Sistem peminjaman yang efisien menghemat waktu."
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 shadow-sm border-0 h-100" 
                         style="background: linear-gradient(135deg, rgba(100, 153, 233, 0.1) 0%, rgba(57, 98, 215, 0.05) 100%);">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle me-3" 
                                 style="width: 60px; height: 60px; background: #D9D9D9;"></div>
                            <div>
                                <h5 class="amaranth-regular mb-1" style="color: #123332;">Sarah</h5>
                                <p class="urbanist-medium mb-0" style="color: #7F7F7F; font-size: 0.9rem;">Orang Tua</p>
                            </div>
                        </div>
                        <p class="urbanist-medium" style="color: #7F7F7F;">
                            "Anak saya sekarang lebih semangat membaca berkat rekomendasi buku yang personal. Interface yang user-friendly membuatnya mandiri."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Card hover effect */
    .hover-lift {
        transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }

    /* Responsive typography */
    @media (max-width: 768px) {
        .display-4 {
            font-size: 2.5rem !important;
        }
        
        h2.amaranth-regular {
            font-size: 2rem !important;
        }
        
        .lead {
            font-size: 1rem !important;
        }
        
        .btn-lg {
            padding: 0.75rem 1.5rem !important;
            font-size: 0.95rem !important;
        }
    }

    @media (max-width: 576px) {
        .display-4 {
            font-size: 2rem !important;
        }
        
        h2.amaranth-regular {
            font-size: 1.75rem !important;
        }
        
        .col-6.col-md-4.col-lg-3 {
            margin-bottom: 1rem;
        }
    }

    /* Button animations */
    .btn {
        transition: all 0.3s ease;
    }
    
    .btn:hover {
        transform: translateY(-2px);
    }
    
    .btn-primary:hover {
        box-shadow: 0 8px 20px rgba(41, 123, 38, 0.3);
    }
    
    .btn-outline-primary:hover {
        box-shadow: 0 8px 20px rgba(41, 123, 38, 0.2);
        background-color: rgba(41, 123, 38, 0.05);
    }

    /* Section spacing */
    .py-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    
    .py-6 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
    }

    @media (max-width: 768px) {
        .py-5 {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }
        
        .py-6 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }
    }

    /* Image optimization */
    .card-img-top {
        transition: transform 0.3s ease;
    }
    
    .card:hover .card-img-top {
        transform: scale(1.05);
    }
    
    /* Accessibility */
    .btn:focus,
    .form-control:focus {
        box-shadow: 0 0 0 3px rgba(41, 123, 38, 0.2) !important;
        outline: none;
    }

    /* Loading animation for images */
    .card-img-top {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }

    @keyframes loading {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }
</style>

<!-- JavaScript for interactivity -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        // Add click animation to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                // Ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.7);
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                `;
                
                this.appendChild(ripple);
                setTimeout(() => ripple.remove(), 600);
            });
        });

        // Add to CSS
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.card, .feature-card, .testimonial').forEach(el => {
            observer.observe(el);
        });

        // Book button functionality
        document.querySelectorAll('.card .btn').forEach(button => {
            button.addEventListener('click', function() {
                const bookTitle = this.closest('.card-body').querySelector('h5').textContent;
                alert(`Buku "${bookTitle}" telah ditambahkan ke daftar peminjaman!`);
                
                // You can replace this with actual API call
                this.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check me-1" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                    </svg>
                    Ditambahkan
                `;
                this.disabled = true;
                this.style.backgroundColor = '#297b26';
                this.style.color = 'white';
            });
        });

        // Mobile menu handling for dashboard
        if (window.innerWidth <= 768) {
            // Add active state to current section in view
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            window.addEventListener('scroll', () => {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= (sectionTop - 100)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });
        }
    });
</script>

@endsection
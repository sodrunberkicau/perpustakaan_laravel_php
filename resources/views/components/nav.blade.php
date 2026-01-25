<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2 py-md-0">
    <div class="container-fluid px-3 px-md-5">
        <!-- Logo & Brand -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <div class="d-flex align-items-center">
                <img src="/img/icon/ic_logo.png" alt="logo" height="56" width="56" class="me-2">
                <div>
                    <div class="amaranth-regular" style="font-size: 20px; color: #ef9c82; line-height: 1;">
                        {{ config('app.school_name') }}
                    </div>
                    <div class="urbanist-medium" style="font-size: 14px; color: #ffd9be; line-height: 1.2;">
                        {{ config('app.app_category') }}
                    </div>
                </div>
            </div>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side -->
            <ul class="navbar-nav me-auto"></ul>

            <!-- Right Side -->
            <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center gap-3 gap-md-2 py-3 py-md-0">
                <!-- Guest Links -->
                @guest
                    <a class="nav-link urbanist-semibold text-center text-md-start {{ request()->is('/') ? 'active' : '' }}"
                       style="font-size: 16px; color: {{ request()->is('/') ? '#3962D7' : '#BDBDBD' }};"
                       href="{{ route('index') }}">
                        Beranda
                    </a>

                    <a class="nav-link urbanist-semibold text-center text-md-start {{ request()->is('contacts') ? 'active' : '' }}"
                       style="font-size: 16px; color: {{ request()->is('contacts') ? '#3962D7' : '#BDBDBD' }};"
                       href="{{ route('contacts') }}">
                        Kontak
                    </a>

                    <div class="d-flex flex-column flex-md-row gap-2 w-100 w-md-auto">
                        <a class="btn urbanist-semibold text-center"
                           style="background-color: #ffd9be; color: black; font-size: 16px; padding: 12px 24px; border-radius: 8px;"
                           href="{{ route('login') }}">
                            Masuk
                        </a>

                        <a class="btn btn-primary urbanist-semibold text-center"
                           style="background-color: #6499E9; color: black; font-size: 16px; padding: 12px 24px; border-radius: 8px;"
                           href="{{ route('register') }}">
                            Daftar
                        </a>
                    </div>
                @endguest

                <!-- Authenticated Links -->
                @auth
                    <a class="nav-link urbanist-semibold text-center text-md-start {{ request()->is('dashboard') ? 'active' : '' }}"
                       style="font-size: 16px; color: {{ request()->is('dashboard') ? '#3962D7' : '#BDBDBD' }};"
                       href="{{ route('dashboard') }}">
                        Koleksi Buku
                    </a>

                    <a class="nav-link urbanist-semibold text-center text-md-start {{ Route::is('user.peminjaman.list') ? 'active' : '' }}"
                       style="font-size: 16px; color: {{ Route::is('user.peminjaman.list') ? '#3962D7' : '#BDBDBD' }};"
                       href="{{ route('user.peminjaman.list') }}">
                        Aktivitas
                    </a>

                    <div class="d-flex align-items-center gap-3">
                        <!-- Notification -->
                        <a href="#" class="position-relative">
                            <img height="32" width="32" src="/img/icon/ic_bell.webp" alt="notification" class="img-fluid">
                        </a>

                        <!-- User Profile -->
                        <div class="d-flex align-items-center gap-2">
                            <!-- Avatar -->
                            <div class="rounded-circle overflow-hidden" style="height: 40px; width: 40px; background-color: #D9D9D9;">
                                <!-- You can add user avatar image here -->
                                <!-- <img src="{{ Auth::user()->avatar }}" alt="profile" class="w-100 h-100"> -->
                            </div>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <div class="d-flex align-items-center gap-1 dropdown-toggle" 
                                     data-bs-toggle="dropdown" 
                                     aria-expanded="false"
                                     style="cursor: pointer;">
                                    <div class="d-none d-md-block">
                                        <div class="urbanist-semibold" 
                                             style="font-size: 14px; color: black; white-space: nowrap;">
                                            {{ Auth::user()->name }}
                                        </div>
                                        <div class="urbanist-regular" 
                                             style="font-size: 12px; color: #7F7F7F;">
                                            {{ Auth::user()->nisn }}
                                        </div>
                                    </div>
                                    <img src="/img/icon/ic_arrow_down.webp" height="20" width="20" alt="more options">
                                </div>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu dropdown-menu-end mt-2 border-0 shadow-lg" style="border-radius: 12px; padding: 8px; min-width: 200px;">
                                    <li>
                                        <a class="dropdown-item urbanist-medium d-flex align-items-center py-2 px-3 rounded-2"
                                           href="#"
                                           style="color: #123332;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6499E9" class="me-2" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                            </svg>
                                            Profil Saya
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item urbanist-medium d-flex align-items-center py-2 px-3 rounded-2"
                                           href="{{ route('user.peminjaman.list') }}"
                                           style="color: #123332;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ef9c82" class="me-2" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                            </svg>
                                            Riwayat Pinjam
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item urbanist-medium d-flex align-items-center py-2 px-3 rounded-2"
                                           href="#"
                                           style="color: #123332;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffd9be" class="me-2" viewBox="0 0 16 16">
                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                            Daftar Baca
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider my-2" style="border-color: rgba(0,0,0,0.1);"></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item p-0 m-0">
                                            @csrf
                                            <button type="submit" 
                                                    class="dropdown-item urbanist-medium d-flex align-items-center w-100 py-2 px-3 rounded-2 border-0"
                                                    style="background: transparent; color: #ff6b6b;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff6b6b" class="me-2" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                                </svg>
                                                Keluar
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- Add this CSS for better responsiveness -->
<style>
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .navbar-collapse {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            margin-top: 10px;
        }
        
        .navbar-nav .nav-link {
            padding: 14px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            font-size: 16px;
        }
        
        .navbar-nav .nav-link:last-child {
            border-bottom: none;
        }
        
        .btn {
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
        }
        
        /* User dropdown in mobile */
        .dropdown-menu {
            position: static !important;
            transform: none !important;
            width: 100%;
            margin-top: 10px;
            box-shadow: none;
            border: 1px solid rgba(0,0,0,0.1);
        }
    }
    
    @media (min-width: 769px) {
        .navbar-nav .nav-link {
            padding: 8px 16px;
            margin: 0 4px;
        }
        
        .btn {
            min-width: 120px;
        }
        
        /* Dropdown menu positioning */
        .dropdown-menu {
            animation: fadeIn 0.2s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    }
    
    /* Hover effects for desktop */
    @media (hover: hover) {
        .nav-link:hover:not(.active) {
            color: #6499E9 !important;
        }
        
        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: all 0.2s ease;
        }
        
        .dropdown-item:hover {
            background: linear-gradient(135deg, rgba(100, 153, 233, 0.1) 0%, rgba(239, 156, 130, 0.05) 100%);
            transform: translateX(5px);
            transition: all 0.2s ease;
        }
        
        /* Notification badge */
        .position-relative::after {
            content: '';
            position: absolute;
            top: -2px;
            right: -2px;
            width: 8px;
            height: 8px;
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            border-radius: 50%;
            border: 2px solid white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .position-relative:hover::after {
            opacity: 1;
        }
    }
    
    /* Active state for nav links */
    .nav-link.active {
        font-weight: 600;
        position: relative;
    }
    
    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60%;
        height: 3px;
        background: linear-gradient(135deg, #6499E9 0%, #3962D7 100%);
        border-radius: 2px;
    }
    
    @media (max-width: 768px) {
        .nav-link.active::after {
            width: 30%;
            left: 0;
            transform: none;
        }
    }
    
    /* Enhanced dropdown styling */
    .dropdown-toggle::after {
        display: none;
    }
    
    .dropdown-item {
        transition: all 0.2s ease;
        margin: 2px 0;
    }
    
    /* Avatar styling */
    .rounded-circle.overflow-hidden {
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }
    
    .rounded-circle.overflow-hidden:hover {
        border-color: #6499E9;
        transform: scale(1.05);
    }
    
    /* Logo hover effect */
    .navbar-brand:hover img {
        transform: rotate(-5deg);
        transition: transform 0.3s ease;
    }
    
    /* Mobile toggle button */
    .navbar-toggler:focus {
        box-shadow: 0 0 0 2px rgba(100, 153, 233, 0.25);
    }
    
    /* Button active states */
    .btn:active {
        transform: translateY(0);
    }
    
    /* Smooth transitions */
    .navbar-collapse {
        transition: all 0.3s ease;
    }
    
    /* Custom scrollbar for dropdown */
    .dropdown-menu {
        max-height: 400px;
        overflow-y: auto;
    }
    
    .dropdown-menu::-webkit-scrollbar {
        width: 6px;
    }
    
    .dropdown-menu::-webkit-scrollbar-track {
        background: rgba(0,0,0,0.05);
        border-radius: 10px;
    }
    
    .dropdown-menu::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #6499E9 0%, #3962D7 100%);
        border-radius: 10px;
    }
    
    /* Responsive avatar text */
    @media (max-width: 768px) {
        .d-none.d-md-block {
            display: none !important;
        }
        
        .d-flex.align-items-center.gap-2 {
            justify-content: center;
            width: 100%;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid rgba(0,0,0,0.05);
        }
    }
    
    /* Tablet adjustments */
    @media (min-width: 769px) and (max-width: 992px) {
        .container-fluid {
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
        }
        
        .nav-link {
            font-size: 15px !important;
            padding: 8px 12px !important;
        }
        
        .btn {
            font-size: 15px !important;
            padding: 10px 20px !important;
        }
    }
</style>

<!-- Optional JavaScript for enhanced interactions -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add ripple effect to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple element
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
                    pointer-events: none;
                `;
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                setTimeout(() => ripple.remove(), 600);
            });
        });
        
        // Add CSS for ripple animation
        if (!document.querySelector('#ripple-style')) {
            const style = document.createElement('style');
            style.id = 'ripple-style';
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        }
        
        // Mobile menu close on click
        if (window.innerWidth <= 768) {
            document.querySelectorAll('.nav-link, .dropdown-item').forEach(link => {
                link.addEventListener('click', function() {
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse.classList.contains('show')) {
                        const toggleBtn = document.querySelector('.navbar-toggler');
                        toggleBtn.click();
                    }
                });
            });
        }
        
        // Dropdown hover effect for desktop
        if (window.innerWidth >= 769) {
            const dropdowns = document.querySelectorAll('.dropdown');
            
            dropdowns.forEach(dropdown => {
                const toggle = dropdown.querySelector('.dropdown-toggle');
                const menu = dropdown.querySelector('.dropdown-menu');
                
                dropdown.addEventListener('mouseenter', function() {
                    const bsDropdown = bootstrap.Dropdown.getInstance(toggle);
                    if (!bsDropdown) {
                        new bootstrap.Dropdown(toggle).show();
                    } else {
                        bsDropdown.show();
                    }
                });
                
                dropdown.addEventListener('mouseleave', function() {
                    const bsDropdown = bootstrap.Dropdown.getInstance(toggle);
                    if (bsDropdown) {
                        setTimeout(() => {
                            if (!dropdown.matches(':hover')) {
                                bsDropdown.hide();
                            }
                        }, 100);
                    }
                });
            });
        }
        
        // Notification badge animation
        const notification = document.querySelector('.position-relative[href="#"]');
        if (notification) {
            setInterval(() => {
                notification.style.transform = 'scale(1.1)';
                setTimeout(() => {
                    notification.style.transform = 'scale(1)';
                }, 300);
            }, 10000); // Animate every 10 seconds
        }
        
        // Add loading state to logout button
        const logoutForms = document.querySelectorAll('form[action*="logout"]');
        logoutForms.forEach(form => {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                form.addEventListener('submit', function() {
                    submitBtn.innerHTML = `
                        <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                        Memproses...
                    `;
                    submitBtn.disabled = true;
                });
            }
        });
    });
</script>
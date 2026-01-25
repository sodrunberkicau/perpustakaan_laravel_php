@extends('components.head')

@section('style')
    <style>
        /* Custom scrollbar for dropdown */
        .dropdown-menu {
            max-height: 300px;
            overflow-y: auto;
        }
        
        .dropdown-menu::-webkit-scrollbar {
            width: 6px;
        }
        
        .dropdown-menu::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .dropdown-menu::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #6499E9 0%, #3962D7 100%);
            border-radius: 10px;
        }
    </style>
@endsection

@section('content')
    @include('components.nav')

    <!-- Hero Section -->
    <div class="container-fluid px-3 px-md-5 py-5 py-md-6" 
         style="background: linear-gradient(135deg, #123332 0%, #1a4d4b 100%); margin-top: 81px;">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h1 class="amaranth-regular display-4 display-md-3 mb-3" style="color: white; line-height: 1.2;">
                    Daftar Koleksi Buku
                </h1>
                <p class="urbanist-medium lead mb-4 mb-lg-5" style="color: rgba(255,255,255,0.9); font-size: 1.25rem;">
                    Cari buku yang kamu inginkan untuk dipelajari lebih lanjut sekarang.
                    Temukan pengetahuan tanpa batas di perpustakaan digital kami.
                </p>
                
                <!-- Stats Cards -->
                <div class="row g-3 g-md-4">
                    <div class="col-6 col-md-4">
                        <div class="text-center p-3 rounded-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                            <div class="amaranth-regular mb-1" style="color: white; font-size: 1.75rem;">{{ $paginator->total() }}</div>
                            <div class="urbanist-medium" style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">Total Buku</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="text-center p-3 rounded-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                            <div class="amaranth-regular mb-1" style="color: white; font-size: 1.75rem;">{{ $categories->count() }}</div>
                            <div class="urbanist-medium" style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">Kategori</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 d-none d-md-block">
                        <div class="text-center p-3 rounded-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                            <div class="amaranth-regular mb-1" style="color: white; font-size: 1.75rem;">24/7</div>
                            <div class="urbanist-medium" style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">Akses</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="bg-white rounded-4 shadow-lg p-4 p-md-5">
                    <div class="row g-3">
                        <!-- Search Bar -->
                        <div class="col-12">
                            <form action="{{ route('dashboard') }}">
                                <div class="input-group input-group-lg shadow-sm">
                                    <span class="input-group-text bg-transparent border-end-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#6499E9" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg>
                                    </span>
                                    <input type="text" 
                                           class="form-control border-start-0 urbanist-medium" 
                                           placeholder="Cari judul buku, penulis, atau penerbit..."
                                           name="search" 
                                           value="{{ request('search') }}"
                                           style="font-size: 1rem;">
                                    <button type="submit" class="btn btn-primary urbanist-semibold px-4"
                                            style="background: linear-gradient(135deg, #6499E9 0%, #3962D7 100%); 
                                                   border: none; border-radius: 0 8px 8px 0;">
                                        Cari
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        
                        <!-- Active Filters -->
                        @if(request('search') || request('category'))
                        <div class="col-12">
                            <div class="d-flex flex-wrap gap-2">
                                @if(request('search'))
                                <div class="badge px-3 py-2 urbanist-medium" 
                                     style="background: rgba(239, 156, 130, 0.1); color: #ef9c82;">
                                    <span class="me-2">"{{ request('search') }}"</span>
                                    <a href="{{ route('dashboard', ['category' => request('category')]) }}" 
                                       class="text-decoration-none" style="color: inherit;">×</a>
                                </div>
                                @endif
                                
                                @if(request('category') && $categories->where('id', request('category'))->first())
                                <div class="badge px-3 py-2 urbanist-medium" 
                                     style="background: rgba(100, 153, 233, 0.1); color: #6499E9;">
                                    <span class="me-2">{{ $categories->where('id', request('category'))->first()->category }}</span>
                                    <a href="{{ route('dashboard', ['search' => request('search')]) }}" 
                                       class="text-decoration-none" style="color: inherit;">×</a>
                                </div>
                                @endif
                                
                                @if(request('search') || request('category'))
                                <a href="{{ route('dashboard') }}" 
                                   class="urbanist-medium text-decoration-none ms-auto" 
                                   style="color: #6499E9;">
                                    Hapus semua filter
                                </a>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Books Grid Section -->
    <div class="container-fluid px-3 px-md-5 py-5">
        <div class="row">

            <!-- Books Grid -->
            <div class="col-lg-9">
                <!-- Results Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="amaranth-regular mb-1" style="color: white; font-size: 1.75rem;">
                            List Buku
                        </h3>
                        <p class="urbanist-medium mb-0" style="color: #7F7F7F;">
                            Menampilkan {{ $paginator->count() }} dari {{ $paginator->total() }} buku
                            @if(request('search'))
                                untuk "{{ request('search') }}"
                            @endif
                        </p>
                    </div>
                    
                    <!-- Sort Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle urbanist-medium" 
                                type="button" data-bs-toggle="dropdown" 
                                style="border-color: #ddd; color: #7F7F7F;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#7F7F7F" class="me-2" viewBox="0 0 16 16">
                                <path d="M3.5 3.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 12.293V3.5zm4 .5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1h-1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1h-3zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1h-5zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z"/>
                            </svg>
                            Urutkan
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-3">
                            <li><a class="dropdown-item urbanist-medium" href="#">Terbaru</a></li>
                            <li><a class="dropdown-item urbanist-medium" href="#">Terpopuler</a></li>
                            <li><a class="dropdown-item urbanist-medium" href="#">A-Z</a></li>
                            <li><a class="dropdown-item urbanist-medium" href="#">Z-A</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Books Grid -->
                @if($paginator->count() > 0)
                <div class="row g-4">
                    @foreach ($paginator->items() as $book)
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="card border-0 shadow-sm h-100 book-card">
                            <div class="position-relative overflow-hidden" style="border-radius: 12px 12px 0 0;">
                                <!-- Book Image -->
                                <img src="{{ $book->cover }}" 
                                     class="card-img-top book-cover" 
                                     alt="{{ $book->title }}"
                                     style="height: 280px; object-fit: cover;">
                                
                                <!-- Book Status Badge -->
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge px-3 py-2 urbanist-semibold" 
                                          style="background: rgba(41, 123, 38, 0.9); color: white;">
                                        Tersedia
                                    </span>
                                </div>
                                
                                <!-- Quick Action Overlay -->
                                <div class="book-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                     style="background: rgba(18, 51, 50, 0.9); opacity: 0; transition: opacity 0.3s;">
                                    <div class="text-center">
                                        <a href="{{ route('book.detail', ['id' => base64_encode(strval($book->id))]) }}" 
                                           class="btn btn-primary urbanist-semibold mb-2 px-4"
                                           style="background: #6499E9; border: none; border-radius: 8px;">
                                            Detail Buku
                                        </a>
                                        <button class="btn btn-outline-light urbanist-medium px-4"
                                                style="border-radius: 8px;"
                                                onclick="addToWishlist({{ $book->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-1" viewBox="0 0 16 16">
                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body p-4">
                                <!-- Category Badge -->
                                <div class="mb-2">
                                    <span class="badge px-3 py-1 urbanist-medium" 
                                          style="background: rgba(255, 217, 190, 0.2); color: #ef9c82;">
                                        {{ $book->category->category ?? 'Umum' }}
                                    </span>
                                </div>
                                
                                <!-- Book Title -->
                                <h5 class="amaranth-regular mb-2" style="color: white; font-size: 1.1rem; line-height: 1.4;">
                                    {{ Str::limit($book->title, 50) }}
                                </h5>
                                
                                <!-- Book Author -->
                                <p class="urbanist-medium mb-3" style="color: white; font-size: 0.9rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#7F7F7F" class="me-1" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                    </svg>
                                    {{ $book->author }}
                                </p>
                                
                                <!-- Rating -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex me-2">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= rand(3,5))
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#ffd700" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#ddd" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="urbanist-medium" style="color: #7F7F7F; font-size: 0.85rem;">
                                        {{ rand(35, 498) }} ulasan
                                    </span>
                                </div>
                                
                                <!-- Action Button -->
                                <div class="d-grid">
                                    <a href="{{ route('book.detail', ['id' => base64_encode(strval($book->id))]) }}" 
                                       class="btn btn-primary urbanist-semibold py-2"
                                       style="background: linear-gradient(135deg, #6499E9 0%, #3962D7 100%); 
                                              border: none; border-radius: 8px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                        </svg>
                                        Pinjam Buku
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Pagination -->
                @if($paginator->hasPages())
                <div class="mt-5 pt-4 border-top">
                    <nav aria-label="Page navigation">
                        {{ $paginator->withQueryString()->links('pagination::bootstrap-5') }}
                    </nav>
                </div>
                @endif
                
                @else
                <!-- Empty State -->
                <div class="text-center py-5 my-5">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#ddd" viewBox="0 0 16 16">
                            <path d="M3 2.5A2.5 2.5 0 0 1 5.5 0h5A2.5 2.5 0 0 1 13 2.5V3h1.5A2.5 2.5 0 0 1 17 5.5v8a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 1 13.5v-8A2.5 2.5 0 0 1 3.5 3H5v-.5A2.5 2.5 0 0 1 7.5 0h5zm0 1A1.5 1.5 0 0 0 3.5 3h9A1.5 1.5 0 0 0 14 1.5v-1A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v1zM3 5.5A1.5 1.5 0 0 1 4.5 4h7A1.5 1.5 0 0 1 13 5.5V6H3v-.5zM4.5 7A1.5 1.5 0 0 0 3 8.5v5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 11.5 7h-7z"/>
                        </svg>
                    </div>
                    <h3 class="amaranth-regular mb-3" style="color: #123332;">Tidak ditemukan</h3>
                    <p class="urbanist-medium mb-4" style="color: #7F7F7F; max-width: 500px; margin: 0 auto;">
                        Maaf, tidak ada buku yang sesuai dengan pencarian Anda. 
                        Coba kata kunci lain atau lihat semua kategori.
                    </p>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary urbanist-semibold px-4">
                        Lihat Semua Buku
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Featured Categories Section -->
    <div class="container-fluid px-3 px-md-5 py-5" style="background: rgba(255, 217, 190, 0.05);">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="amaranth-regular mb-3" style="color: #123332;">Jelajahi Kategori</h2>
                <p class="urbanist-medium lead" style="color: #7F7F7F; max-width: 600px; margin: 0 auto;">
                    Temukan buku berdasarkan kategori yang menarik bagi Anda
                </p>
            </div>
            
            <div class="col-12">
                <div class="row g-3">
                    @foreach ($categories->take(6) as $category)
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="{{ route('dashboard', ['category' => $category->id]) }}" 
                           class="text-decoration-none">
                            <div class="card border-0 shadow-sm text-center h-100 category-card">
                                <div class="card-body p-4">
                                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                         style="width: 60px; height: 60px; background: linear-gradient(135deg, #ffd9be 0%, #ef9c82 100%);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 16 16">
                                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                        </svg>
                                    </div>
                                    <h6 class="amaranth-regular mb-2" style="color: #123332;">{{ $category->category }}</h6>
                                    <p class="urbanist-medium mb-0" style="color: #7F7F7F; font-size: 0.85rem;">
                                        {{ rand(10, 100) }} buku
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Styles -->
    <style>
        /* Book Card Hover Effects */
        .book-card {
            transition: all 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
        }
        
        .book-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
        }
        
        .book-card:hover .book-cover {
            transform: scale(1.05);
            transition: transform 0.5s ease;
        }
        
        .book-card:hover .book-overlay {
            opacity: 1;
        }
        
        /* Category Card Hover */
        .category-card {
            transition: all 0.3s ease;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            background: linear-gradient(135deg, rgba(255, 217, 190, 0.1) 0%, rgba(239, 156, 130, 0.05) 100%);
        }
        
        /* Active Category */
        .active-category {
            color: #6499E9 !important;
            font-weight: 600;
        }
        
        /* Pagination Customization */
        .pagination .page-link {
            border: none;
            color: #7F7F7F;
            border-radius: 8px;
            margin: 0 2px;
        }
        
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #6499E9 0%, #3962D7 100%);
            color: white;
        }
        
        .pagination .page-link:hover {
            background: rgba(100, 153, 233, 0.1);
            color: #6499E9;
        }
        
        /* Custom Badges */
        .badge {
            border-radius: 20px;
            font-weight: 500;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .display-4 {
                font-size: 2.5rem !important;
            }
            
            .lead {
                font-size: 1.1rem !important;
            }
            
            .book-cover {
                height: 220px !important;
            }
            
            .sticky-top {
                position: static !important;
            }
        }
        
        @media (max-width: 576px) {
            .display-4 {
                font-size: 2rem !important;
            }
            
            .col-sm-6 {
                margin-bottom: 1.5rem;
            }
            
            .hero-section {
                padding: 2rem 0 !important;
            }
            
            .input-group-lg {
                flex-direction: column;
            }
            
            .input-group-lg > .form-control {
                border-radius: 8px !important;
                margin-bottom: 0.5rem;
            }
            
            .input-group-lg > .btn {
                border-radius: 8px !important;
                width: 100%;
            }
        }
        
        /* Smooth Animations */
        .card, .btn, .badge {
            transition: all 0.3s ease;
        }
        
        /* Loading Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .book-card {
            animation: fadeIn 0.5s ease-out;
        }
    </style>

    <script>
        // Book card interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Add to wishlist function
            window.addToWishlist = function(bookId) {
                const btn = event.target;
                const originalHTML = btn.innerHTML;
                
                btn.innerHTML = `
                    <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                    Menyimpan...
                `;
                btn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    btn.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ef9c82" class="me-1" viewBox="0 0 16 16">
                            <path d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                        Tersimpan
                    `;
                    btn.classList.remove('btn-outline-light');
                    btn.classList.add('btn-success');
                    btn.style.background = '#ef9c82';
                    btn.style.borderColor = '#ef9c82';
                    
                    // Show success toast
                    showToast('Buku telah ditambahkan ke daftar favorit!');
                }, 1000);
            };
            
            // Toast notification function
            function showToast(message) {
                const toast = document.createElement('div');
                toast.className = 'position-fixed bottom-0 end-0 m-3 p-3 rounded-3 urbanist-medium';
                toast.style.background = 'linear-gradient(135deg, #297b26 0%, #1e5c1c 100%)';
                toast.style.color = 'white';
                toast.style.zIndex = '9999';
                toast.style.minWidth = '300px';
                toast.innerHTML = `
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        <div>${message}</div>
                    </div>
                `;
                
                document.body.appendChild(toast);
                
                setTimeout(() => {
                    toast.remove();
                }, 3000);
            }
            
            // Book card hover effects
            const bookCards = document.querySelectorAll('.book-card');
            bookCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.zIndex = '1';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.zIndex = '0';
                });
            });
            
            // Filter functionality
            const filterCheckboxes = document.querySelectorAll('input[type="checkbox"]');
            filterCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    // Implement filter logic here
                    console.log('Filter changed:', this.id, this.checked);
                });
            });
            
            // Search input auto-focus
            const searchInput = document.querySelector('input[name="search"]');
            if (searchInput && searchInput.value) {
                searchInput.focus();
                searchInput.select();
            }
            
            // Mobile filter toggle
            const mobileFilterBtn = document.createElement('button');
            mobileFilterBtn.className = 'btn btn-primary w-100 mb-3 d-lg-none urbanist-semibold';
            mobileFilterBtn.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                    <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                </svg>
                Tampilkan Filter
            `;
            
            const booksGrid = document.querySelector('.col-lg-9');
            if (booksGrid && window.innerWidth < 992) {
                booksGrid.parentNode.insertBefore(mobileFilterBtn, booksGrid);
                
                mobileFilterBtn.addEventListener('click', function() {
                    const sidebar = document.querySelector('.col-lg-3');
                    if (sidebar) {
                        sidebar.classList.toggle('d-block');
                        sidebar.classList.toggle('d-none');
                        this.innerHTML = sidebar.classList.contains('d-block') ? 
                            'Sembunyikan Filter' : 'Tampilkan Filter';
                    }
                });
            }
            
            // Lazy load images
            const images = document.querySelectorAll('.book-cover');
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.getAttribute('data-src') || img.src;
                        observer.unobserve(img);
                    }
                });
            });
            
            images.forEach(img => imageObserver.observe(img));
        });
    </script>
@endsection
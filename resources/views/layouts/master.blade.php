<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title', 'Laravel Admin')</title>
    
    
    @vite('resources/scss/App.scss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" />

@stack('styles')
</head>
<body>
    <div class="container-scroller">
        <!-- Navbar -->
        @include('layouts.partials.navbar')
        
        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            @include('layouts.partials.sidebar')
            
            <!-- Main Panel -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Page Header -->
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="@yield('page-icon', 'mdi mdi-home')"></i>
                            </span> 
                            @yield('page-title', 'Dashboard')
                        </h3>
                        
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                @yield('breadcrumb')
                            </ul>
                        </nav>
                    </div>
                    
                    <!-- Main Content -->
                    @yield('content')
                </div>
                
                <!-- Footer -->
                @include('layouts.partials.footer')
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    
    <!-- Page Specific JS -->
    @stack('scripts')
</body>
</html>
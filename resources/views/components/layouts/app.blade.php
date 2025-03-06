<!doctype html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('partials.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        @include('partials.header')
        <!--  Header End -->
        <div class="container-fluid">
            <!--  Row 1 -->
            {{ $slot }}
        </div>
    </div>
</div>
<script src=" {{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src=" {{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src=" {{ asset('assets/js/sidebarmenu.js') }} "></script>
<script src=" {{ asset('assets/js/app.min.js') }}"></script>
<script src=" {{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }} "></script>
<script src=" {{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
<script src=" {{ asset('assets/js/dashboard.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
@livewireScripts
</body>

</html>


@include('sidebar')

<!-- ========== Left Sidebar Start ========== -->

<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


            @yield('content')


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('footer')

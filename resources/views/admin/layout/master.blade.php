<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('admin.layout.partial.head')
    @yield('style')
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Left menu area -->
@include('admin.layout.partial.left-menu')
<!-- End Left menu area -->

<div class="all-content-wrapper">

    <!-- Start header area -->
    @include('admin.layout.partial.header')


    <!-- Start breadcrumb area -->
    @yield('breadcrumb')


    <!-- Start content area -->
    @yield('content')


    <!-- Start footer area -->
    @include('admin.layout.partial.footer')
</div>
<!-- jquery
    ============================================ -->
@include('admin.layout.partial.script')
@yield('page-script')
</body>

</html>

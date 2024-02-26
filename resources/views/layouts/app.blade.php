@include('layouts.head')

<body class="bg-primary">
    <!-- Navbar -->
    @include('layouts.header')

    <!--  Main Content -->

    @yield('content')

    @include('layouts.footer')
</body>
@yield('layouts.scripts')
@include('layouts.foot')
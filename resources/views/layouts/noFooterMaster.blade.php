@include('layouts.head')

<body class="bg-primary mx-auto "> 
    {{-- style="background-image: url({{asset('assets/images/background.jpg')}})" --}}
    <!-- Navbar -->
    @include('layouts.header')

    <!--  Main Content -->

    @yield('content')

</body>
@yield('scripts')
@include('layouts.foot')
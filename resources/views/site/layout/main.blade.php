<!DOCTYPE html>
<html lang="en">

<head>
    @yield('meta_data')
    @include('site.include.head')
</head>

<body>
    <div>
        @include('site.include.header')
        <div class="main-content pl-0 ">
            @yield('content')
        </div>
        @include('site.include.footer')
    </div>

    <!-- initiate scripts-->
    @include('site.include.script')
    @stack('script')
</body>

</html>

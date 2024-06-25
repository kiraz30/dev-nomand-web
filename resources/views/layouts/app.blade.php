<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.style')
  </head>
<body>
    <!-- navbar -->
  @include('includes.navbar')
    <!-- end navbar -->

<!-- headeer and content -->
    @yield('content')

<!-- footer -->
@include('includes.footer')
<!-- end footer -->

<!-- script -->
@include('includes.script')
@stack('add-on-script')
</body>
</html>

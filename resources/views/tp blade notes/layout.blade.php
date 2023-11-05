<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    @include('partials.header') <!-- Include a header partial -->
    <div class="container">

    @if(!Request::is('notes'))
    <img src="{{ asset('images/bg.jpg') }}" width="100%"  height="75%" alt="Top Image">
    @endif

        @yield('content') <!-- This is where the content will be inserted -->
    </div>
    @include('partials.footer') <!-- Include a footer partial -->
</body>
</html>

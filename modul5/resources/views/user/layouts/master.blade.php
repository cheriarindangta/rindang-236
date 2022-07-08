<!DOCTYPE html>
<html lang="en">

<head>
    <title>When We Were Young Festival</title>
    <link rel="stylesheet" href="{{asset('assets/dropdown.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
    @include('user.layouts.header')
    </div>


    <div>
        @yield('content')
    </div>
</body>

<footer>
@include('user.layouts.footer')
</footer>

</html>
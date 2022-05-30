<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>@include('Admin/Partials/_header')</title>

</head>
<body>
    @include('Admin/Partials/_navbar')

    @yield('contents')

    @include('Admin/Partials/_footer')
</body>
</html>
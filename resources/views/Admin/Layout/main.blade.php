<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/all.css">
    <title>@include('Admin/Partials/_header')</title>

</head>
<body>
    @include('Admin/Partials/_navbar')

    @yield('contents')

    @include('Admin/Partials/_footer')

    <!-- plugins -->
    <script src="/assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="/assets/js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/app.css">

    {{-- Favicon --}}
    <link rel="icon" href="../../assets/images/edusupport-favicon.png">
    <title>@yield('page_title')</title>
</head>
<body>
    @include('crm/inc/header')
@yield('main_content')
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin-css/app.css') }}">
</head>
<body>
<?php phpinfo() ?>
<div class="container">
    <div class="wrapper">
        <div class="sidebar">
            f
            @include('admin.components.sidebar')
        </div>
        <div class="main">f</div>
    </div>
</div>
</body>
</html>

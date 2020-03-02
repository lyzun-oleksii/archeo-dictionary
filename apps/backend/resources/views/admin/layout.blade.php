<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/admin/app.js') }}"></script>
</head>
<body>
<div class="container">
    <div class="wrapper">
        @section('sidebar')
        <div class="sidebar">
            <div class="caption">
                <h1>Dictionary Admin</h1>
            </div>
            <div class="profile">
                <div class="avatar"></div>
                <div class="navigation-toggle">
                    <button
                        data-toggle="collapse"
                        data-target="#main_navigation"
                    >
                        <i class="fas fa2x fa-bars"></i>
                    </button>
                </div>
                <div class="name mr-top-10">
                    Oleksii Lyzun
                </div>
            </div>
            <nav class="main-navigation collapse show" id="main_navigation">
                <ul class="main">
                    <li>
                        <i class="fas fa2x fa-bars mr-right-10"></i>
                        Dashboard
                    </li>
                    <li
                        data-toggle="collapse"
                        data-target="#nav_dictionary"
                    >
                        <i class="fas fa2x fa-book mr-right-10"></i>
                        Dictionary
                        <ul class="dictionary collapse" id="nav_dictionary">
                            <li>Concepts</li>
                            <li>Categories</li>
                            <li>Words</li>
                        </ul>
                    </li>
                    <li>
                        <i class="fas fa2x fa-users mr-right-10"></i>
                        Users
                    </li>
                </ul>
            </nav>
        </div>
        @show
        <div class="main">
            @section('main')
            <div class="page-header mr-bottom-20">
                <h2>{{ $page }}</h2>
            </div>
            @show
        </div>
    </div>
</div>
</body>
</html>

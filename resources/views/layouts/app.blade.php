<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyApp')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Custom CSS jika diperlukan -->
    <style>
        body {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .footer {
            padding-top: 20px;
            border-top: 1px solid #e5e5e5;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Header / Navbar -->
    @include('partials.header')
    
    <!-- Content Area -->
    <div class="container mt-4">
        @yield('content')
    </div>
    
    <!-- Footer -->
    <div class="container">
        <div class="footer">
            @include('partials.footer')
        </div>
    </div>
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
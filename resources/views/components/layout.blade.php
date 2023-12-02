<!DOCTYPE html>
<html>
<head>
    <title>Login And Registration Form</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Yug Shrestha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Register</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="">Logout</a>
                    </li>
                    
                </ul>
        </div> </div>
    </nav>
    {{$slot}}
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <nav>
        <div class="left">
            <a href=""><img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/shoe-store-logo-design-template-da7acb3f6546068cbc2272814166e8a4_screen.jpg?ts=1635317713" alt=""></a>
        </div>
        <div class="right">
            <a href="#">Home</a>
            <a href="/product">Product</a>
            <a href="/contact-us">Contact Us</a>
            <a href="/login" class="login">Login</a>
        </div>
    </nav>

    <div class="image">
        <img src="{{ asset('asset/Store.jpg') }}" alt="">
    </div>
</body>
</html>
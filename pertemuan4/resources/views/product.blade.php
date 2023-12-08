<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <nav>
        <div class="left">
            <a href=""><img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/shoe-store-logo-design-template-da7acb3f6546068cbc2272814166e8a4_screen.jpg?ts=1635317713" alt=""></a>
        </div>
        <div class="right">
            <a href="/home">Home</a>
            <a href="#">Product</a>
            <a href="/contact-us">Contact Us</a>
            <a href="/login" class="login">Login</a>
        </div>
    </nav>

    <div class="wrapper">
        <div class="manShoes">
            <h1>Man Shoes</h1>
            <div class="product">
                <div> 
                    <img src="{{ ('asset/Man Formal Shoes.webp') }}" alt="">
                    <h2>Name: Man Formal Shoes</h2>
                    <h2>Price: Rp300.000</h2>
                    <h2>Size: 40-45</h2>
                    <h2>Color: Black</h2>
                </div>

                <div> 
                    <img src="{{ ('asset/Man Running Shoes.webp') }}" alt="">
                    <h2>Name: Man Running Shoes</h2>
                    <h2>Price: Rp600.000</h2>
                    <h2>Size: 40-45</h2>
                    <h2>Color: Gray</h2>
                </div>

                <div> 
                    <img src="{{ ('asset/Man Sneaker.jpg') }}" alt="">
                    <h2>Name: Man Sneaker</h2>
                    <h2>Price: Rp450.000</h2>
                    <h2>Size: 40-45</h2>
                    <h2>Color: White</h2>
                </div>
            </div>
        </div>
        <br>
        <div class="womanShoes">
            <h1>Woman Shoes</h1>
            <div class="product">
                <div>
                    <img src="{{ ('asset/Woman Formal Shoes.jpg') }}" alt="">
                    <h2>Name: Woman Formal Shoes</h2>
                    <h2>Price: Rp300.000</h2>
                    <h2>Size: 37-42</h2>
                    <h2>Color: Black</h2>
                </div>

                <div>
                    <img src="{{ ('asset/Woman Running Shoes.jpg') }}" alt="">
                    <h2>Name: Woman Running Shoes</h2>
                    <h2>Price: Rp600.000</h2>
                    <h2>Size: 37-42</h2>
                    <h2>Color: Purple</h2>
                </div>

                <div>
                    <img src="{{ ('asset/Woman Sneaker.jpg') }}" alt="">
                    <h2>Name: Woman Sneaker Shoes</h2>
                    <h2>Price: Rp450.000</h2>
                    <h2>Size: 37-42</h2>
                    <h2>Color: White</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
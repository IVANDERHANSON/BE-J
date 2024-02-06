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
        <a href="/add-product">Add Product</a>
        <div class="product">
            @forelse ($shoes as $shoe)
                <div>
                    <img src="{{ asset('/storage'.'/'.$shoe->Photo) }}" alt="{{ $shoe->Photo }}">
                    <h1>Name: {{ $shoe->Name }}</h1>
                    <h1>Price: Rp.{{ $shoe->Price }}</h1>
                    <h1>Size: {{ $shoe->Size }}</h1>
                    <h1>Color: {{ $shoe->Color }}</h1>
                    <a href="/edit-product/{{ $shoe->id }}">Edit</a>
                    <form action="/delete-product/{{ $shoe->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            @empty
                <p>Data is emtpy.</p>
            @endforelse
        </div>
    </div>
</body>
</html>
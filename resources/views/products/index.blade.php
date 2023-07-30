<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="antialiased">
    <div style="display: flex; gap: 4rem">
        @foreach ($products as $product)
            <div class="flex: 1">
                <img src="{{ $product->image }}" style="max-width: 100%">
                <h5>{{ $product->name }}</h5>
                <strong style="color: red">Ksh. {{ $product->price }}</strong>
            </div>
        @endforeach
    </div>

    <form action="{{ route('checkout') }}" method="post">
        @csrf
        <button>Checkout</button>
    </form>

</body>

</html>

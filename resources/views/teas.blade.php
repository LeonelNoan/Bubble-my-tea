<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea Shop</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="container">

    <h1 class="mt-5">All Teas</h1>

    @if (!empty($cart))
    <h1>Votre Panier</h1>
    @foreach ($cart as $item)
    <p>
        Tea Name: {{ $teas->where('id', $item['tea_id'])->first()->name ?? 'Unknown Tea' }},
        Sugar: {{ $sugars->where('id', $item['sugar_id'])->first()->sugar_level ?? 'Unknown Tea' }},
        Topping : {{ $toppings->where('id', $item['topping_id'])->first()->topping_name ?? 'Unknown Tea' }},
        Tea Price: {{ $teas->where('id', $item['tea_id'])->first()->price ?? 'Unknown Tea' }},
    </p>
    @endforeach

    <form action="{{ route('storeOrder') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Confirm Order</button>
    </form>
    @else
    <p>Your cart is empty.</p>
    @endif


    <a href="{{ route('redirect') }}" class="btn btn-primary mt-3">Dashboard</a>

    




    @foreach ($teas as $tea)
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title"> Name: {{ $tea->name }}</h5>
            <p class="card-text">Description: {{ $tea->description }}</p>
            <p class="card-text">Price: {{ $tea->price }}</p>
            <select name="topping_id">
            @foreach ($toppings as $topping)
                <option value="{{ $topping->id }}">
                {{ $topping->topping_name }}
            </option>
             @endforeach
            </select>
            <select name="sugar_id">
            @foreach ($sugars as $sugar)
                <option value="{{ $sugar->id }}">
                {{ $sugar->sugar_level }}  
                </option>
             @endforeach
            </select>
            <img src="{{ asset('storage/' . $tea->picture) }}" class="img-fluid" alt="{{ $tea->name }}">
            <form action="{{ route('addToCart') }}" method="POST" class="mt-3">
                @csrf
                <input type="hidden" name="tea_id" value="{{ $tea->id }}">
                <input type="hidden" name="sugar_id" value="{{ $sugar->id }}">
                <input type="hidden" name="topping_id" value="{{ $topping->id }}">
                <button type="submit" class="btn btn-success">Add to Cart</button>
            </form>
        </div>
    </div>
    @endforeach

    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

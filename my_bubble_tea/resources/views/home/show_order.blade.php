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

    <a href="{{ url('/Teashop') }}" class="btn btn-primary mt-3">Back to shop</a>

    @foreach ($tea as $tea)
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title"> Name: {{ $tea->name }}</h5>
            <p class="card-text">Description: {{ $tea->description }}</p>
            <p class="card-text">Price: {{ $tea->price }}</p>
            <img src="{{ asset('storage/' . $tea->picture) }}" class="img-fluid" alt="{{ $tea->name }}">
        </div>
    </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

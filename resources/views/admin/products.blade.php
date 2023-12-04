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

    <a href="{{ route('redirect') }}" class="btn btn-primary mt-3">Dashboard</a>

    @foreach ($teas as $tea)
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title"> Name: {{ $tea->name }}</h5>
            <p class="card-text">Description: {{ $tea->description }}</p>
            <p class="card-text">Price: {{ $tea->price }}</p>
            <img src="{{ asset('storage/' . $tea->picture) }}" class="img-fluid" alt="{{ $tea->name }}">
            <a href="{{ route('admin.updateTea', $tea) }}" class="btn btn-warning">Edit</a>
          
            <form action="{{ route('admin.teas.destroy', $tea) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

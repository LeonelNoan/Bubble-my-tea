<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Tea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body class="container mt-5">

<form action="{{ route('admin.teas.update', $tea) }}" method="POST" enctype="multipart/form-data" class="mt-3">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $tea->name) }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" class="form-control" required>{{ old('description', $tea->description) }}</textarea>
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="{{ old('price', $tea->price) }}" class="form-control" required>
    </div>

  
    <div class="form-group">
        <label>Current Picture:</label>
        <img src="{{ asset('storage/' . $tea->picture) }}" class="img-fluid" alt="Tea Picture">
    </div>

 
    <div class="form-group">
        <label for="picture">New Picture:</label>
        <input type="file" id="picture" name="picture" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

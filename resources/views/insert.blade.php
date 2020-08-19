<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akij IT</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;0,800;1,100;1,300;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h2 class="text-center">Insert Products</h2>
            <form action="{{route('add')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
            <span>Product Name</span>
            <input type="text" name="name" class="form-control" required>
            <span>Product Image</span>
            <input type="file" name="media" class="form-control" required>
            <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>

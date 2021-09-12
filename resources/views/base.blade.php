<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: Poppins;
    background: #ffffff;
}
.container .card .form-control{
    border-radius: 0;
    border: 2px solid rgb(196, 196, 196);
}
</style>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a href="" class="navbar-brand"><h2 style="font-family: fantasy;">CrudWork</h2></a>

            <ul class="navbar-nav ms-auto mb-0">
                <li class="nav-item"><a href="" class="nav-link mt-1 fw-bold text-white me-3">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link mt-1 fw-bold text-white me-3">About</a></li>
                <li class="nav-item"><a href="" class="nav-link mt-1 fw-bold text-white me-3">Services</a></li>
                <li class="nav-item"><a href="" class="nav-link mt-1 fw-bold text-white me-3">Contact</a></li>
                <li class="nav-item"><a href="{{route('add-info')}}" class="nav-link"><button class="btn btn-outline-dark fw-bold">Add Info</button></a></li>
            </ul>
        </div>
    </nav>


    @section('content')

    @show


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

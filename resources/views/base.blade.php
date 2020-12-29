<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phonebook Store @yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a href="" class="navbar-header">
            <img src="{{asset('logo1.jpg')}}" alt="" width="50px" height="30px">
        </a>
        <a href="" class="navbar-brand text-white"><b><i>Phonebook Store</i></b></a>


        <form action="" method="GET" class="d-flex ms-auto">
            <input type="text" name="search" class="form-control" placeholder="Search here phonebook store" size="70">
            <input type="submit" class="btn btn-danger" value="Search">
        </form>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="{{route('phonebookstore.index')}}" class="btn btn-light btn-sm me-2">Home</a></li>
            <li class="nav-item"><a href="{{route('phonebookstore.create')}}" class="btn btn-light btn-sm me-2">Insert</a></li>
            <li class="nav-item"><a href="" class="btn btn-light btn-sm me-2">About Us</a></li>
        </ul>

    </nav>

    @yield('content')
</body>

</html>

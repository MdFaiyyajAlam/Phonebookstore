@extends('base')

@section('title')

@endsection

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-4">
            <div class="logo">
                <img src="services.png" alt="" width="300px" height="300px">
            </div>
        </div>
        <div class="col-lg-4">
    <div class="card bg-light">
        <div class="card-header bg-dark text-white">
            <h5>Login Phonebook Store</h5>
        </div>
        <div class="card-body">
            <form action="" method="GET">
                <div class="mb-3">
                    <label for="">User Id</label>
                    <input type="text" name="user_id" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="email" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" name="search" class="btn btn-warning" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="logo">
        <img src="services.png" alt="" width="300px" height="300px">
    </div>
</div>
</div>
</div>
<div class="cover" style="background-image:url('phonebook1.jpg');background-size:cover;">
  
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    @foreach ($phonebookstores as $p)
                    <div class="col-lg-6">
                        <div class="card m-4" style="background-image:url('phone.jpg');background-size:cover;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h5>Name :- {{$p->name}}</h5>
                                        <h5>Contact :- {{$p->contact}}</h5>
                                        <h5>Email :- {{$p->email}}</h5> 
                                        <h5>Address :- {{$p->address}}</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="{{asset('covers/'.$p->cover)}}" alt="" width="200px" height="200px">
                                        <a href="" class="btn btn-success">View</a>
                                        <a href="{{route('phonebookstore.edit',['phonebookstore' =>$p->id])}}" class="btn btn-success">Edit</a>
                                        
                                        <div class="float-end">
                                        <form action="{{route('phonebookstore.destroy',['phonebookstore' =>$p->id])}}" class="form-inline" method="POST">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

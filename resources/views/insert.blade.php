@extends('base')

@section('title')
    
@endsection

@section('content')



<div class="container mt-4">
    <div class="cover" style="background-image:url('laptop.jpg');background-size:cover">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5>Insert Phonebook Store</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('phonebookstore.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                            <small class="text-danger">{{$errors->first('name')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                            <small class="text-danger">{{$errors->first('contact')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{old('email')}}">
                            <small class="text-danger">{{$errors->first('email')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Cover</label>
                            <input type="file" name="cover" class="form-control">
                            <small class="text-danger">{{$errors->first('cover')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" value="{{old('address')}}">
                            <small class="text-danger">{{$errors->first('address')}}</small>
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="send" class="btn btn-danger w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    
@endsection
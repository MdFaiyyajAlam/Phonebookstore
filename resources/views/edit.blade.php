@extends('base')

@section('title')
    
@endsection

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-9 ms-center">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5>Welcome To Edit Phonebook Store</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('phonebookstore.update',['phonebookstore'=>$record->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$record->name}}">
                            <small class="text-danger">{{$errors->first('name')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" class="form-control" value="{{$record->contact}}">
                            <small class="text-danger">{{$errors->first('contact')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{$record->email}}">
                            <small class="text-danger">{{$errors->first('email')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Cover</label>
                            <input type="file" name="cover" class="form-control">
                            <small class="text-danger">{{$errors->first('cover')}}</small>
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$record->address}}">
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
    
@endsection
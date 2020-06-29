@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="py-3">
                <button class="btn btn-outline-success">
                    <a href="{{ route('home') }}"> 
                        <i class="fas fa-arrow-left"></i> Go back
                    </a>
                </button>
            </div>

            <div class="card">
                <div class="card-header alert-primary">Create new user</div>
                
                <!-- Form here -->
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="row justify-content-center form-group">
                        <label for="name" class="mx-2">User name: 
                            <input type="text" name="name" placeholder="John Deere" class="form-control" 
                                value="{{ old('name') }}">
                        </label>
    
                        <label for="address" class="mx-2">Address:
                            <input type="text" name="address" placeholder="San Benito"class="form-control" 
                                value="{{ old('address') }}">
                        </label>
                    </div>

                    <div class="row justify-content-center form-group">
                        <label for="email" class="mx-2">Email:
                            <input type="email" name="email" placeholder="example@mail.com" class="form-control" 
                                value="{{ old('email') }}">
                        </label>
    
                        <label for="phone" class="mx-2">Phone:
                            <input type="tel" name="phone" placeholder="6620123456" class="form-control"
                                value="{{ old('phone') }}">
                        </label>
                    </div>

                    <div class="row justify-content-center form-group">
                        <label for="password" class="mx-2">Password:
                            <input type="password" name="password" class="form-control">
                        </label>
    
                        <label for="admin" class="mx-2">Admin privileges:
                            <input type="checkbox" name="admin" class="form-control">
                        </label>
                    </div>

                    <div class="d-flex justify-content-end">
                        <input type="submit" value="Save" class="btn btn-primary mr-4">
                    </div>
                </form>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <strong>{{ $error }}</strong>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
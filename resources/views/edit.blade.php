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
                <div class="card-header alert-primary">Editing {{ $user->name }}</div>
                
                <!-- Form here -->
                <form class="my-3" action="{{ route('user.update', $user) }}" method="POST">
                    @csrf @method('PATCH') 

                    <div class="row d-flex justify-content-around form-group">
                        <label for="name" class="">User name: 
                            <input type="text" name="name" placeholder="John Deere" class="form-control" 
                                value="{{ old('name', $user->name) }}">
                        </label>
    
                        <label for="address" class="">Address:
                            <input type="text" name="address" placeholder="San Benito" class="form-control" 
                                value="{{ old('address', $user->address) }}">
                        </label>
                    </div>
                    
                    <dic class="row justify-content-around form-group">
                        <label for="email" class="">Email:
                            <input type="email" name="email" placeholder="example@mail.com" class="form-control" 
                                value="{{ old('email', $user->email) }}">
                        </label>
    
                        <label for="phone" class="">Phone:
                            <input type="tel" name="phone" placeholder="6620123456" class="form-control" 
                                value="{{ old('phone', $user->phone) }}">
                        </label>
                    </dic>

                    <div class="row justify-content-center form-group">
                        <label for="admin"class="" >Admin privileges:
                            <input type="checkbox" name="admin" class="form-control"
                                @if ($user->admin) {!! 'checked' !!} @endif>
                        </label>
                    </div>

                    <div class="d-flex justify-content-end">
                        <input type="submit" value="Update" class="btn btn-primary mr-4">
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
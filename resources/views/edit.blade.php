@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <a href="{{ route('home') }}"> 
                    <i class="fas fa-arrow-left"></i> Go back
                </a>
            </div>

            <div class="card">
                <div class="card-header">Edit user</div>
                
                <!-- Form here -->
                <form action="{{ route('user.update', $user) }}" method="POST">
                    @csrf @method('PATCH') 

                    <label for="name">User name: 
                        <input type="text" name="name" placeholder="John Deere" value="{{ old('name', $user->name) }}">
                    </label>

                    <label for="address">Address:
                    <input type="text" name="address" placeholder="San Benito" value="{{ old('address', $user->address) }}">
                    </label>
                    
                    <label for="email">Email:
                        <input type="email" name="email" placeholder="example@mail.com" value="{{ old('email', $user->email) }}">
                    </label>

                    <label for="phone">Phone:
                        <input type="tel" name="phone" placeholder="6620123456" value="{{ old('phone', $user->phone) }}">
                    </label>

                    <label for="password">Password:
                        <input type="password" name="password">
                    </label>

                    <label for="admin">Admin privileges:
                        <input type="checkbox" name="admin" @if ($user->admin) {!! 'checked' !!} @endif>
                    </label>

                    <input type="submit" value="Update">
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
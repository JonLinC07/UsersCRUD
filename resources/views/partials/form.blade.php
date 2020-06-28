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
                <div class="card-header">Create new user</div>
                
                <!-- Form here -->
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <label for="name">User name: 
                        <input type="text" name="name" placeholder="John Deere" value="{{ old('name') }}">
                    </label>

                    <label for="address">Address:
                    <input type="text" name="address" placeholder="San Benito" value="{{ old('address') }}">
                    </label>
                    
                    <label for="email">Email:
                        <input type="email" name="email" placeholder="example@mail.com" value="{{ old('email') }}">
                    </label>

                    <label for="phone">Phone:
                        <input type="tel" name="phone" placeholder="6620123456" value="{{ old('phone') }}">
                    </label>

                    <label for="password">Password:
                        <input type="password" name="password">
                    </label>

                    <label for="admin">Admin privileges:
                        <input type="checkbox" name="admin">
                    </label>

                    <input type="submit" value="Save">
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
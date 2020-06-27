@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- HERE put add new user button -->
            <a href=""> <i class="fas fa-plus-circle"></i> Add new user</a>

            <div class="card">
                <div class="card-header">List of users</div>
                
                @forelse ($users as $user)
                    <div class="card-body">
                        <i class="fas fa-user"></i> <p>{{ $user->name }}</p> <p>{{ $user->email }}</p> <p>{{ $user->phone }}</p>
                    </div>
                @empty
                    <div class="card-body">
                        <i class="fas fa-user-times"></i> We have no users yet
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</div>
@endsection

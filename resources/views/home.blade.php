@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- HERE put add new user button -->
            @if (auth()->user()->admin)
                <div class="new-user py-2">
                    <button class="btn btn-outline-success">
                        <a href="{{ route('user.create') }}"> 
                            <i class="fas fa-plus-circle"></i> Add new user
                        </a>
                    </button>
                </div>
            @endif
            
            <div class="card">
                <div class="card-header alert-primary">List of users</div>
                
                @forelse ($users as $user)
                    <div class="card-body self-card row border-bottom">
                        <div class="col-sm-10 d-flex align-items-center">
                            <a class="w-100 row" href="{{ route('user.show', $user) }}">
                                <spam class="col-sm-4"><i class="fas fa-user"></i>  {{ $user->name }}</spam> 
                                <spam class="col-sm-4">{{ $user->email }}</spam> 
                                <spam class="col-sm-4">{{ $user->phone }}</spam>
                            </a>
                        </div>
                        <div class="user-actions col-sm-2">
                            @if (auth()->user()->admin)
                                <button class="btn btn-outline-warning">
                                    <a href="{{ route('user.edit', $user) }}"> 
                                        <i class="fas fa-edit"></i> 
                                    </a>
                                </button>
                                
                                <form action="{{ route('user.destroy', $user)  }}" method="POST">
                                    @csrf @method('DELETE')
                                    
                                    <button class="btn btn-outline-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="card-body self-card">
                        <i class="fas fa-user-times"></i> We have no users yet
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</div>
@endsection

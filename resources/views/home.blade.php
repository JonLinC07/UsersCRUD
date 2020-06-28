@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- HERE put add new user button -->
            <div class="new-user">
                <a href="{{ route('user.create') }}"> 
                    <i class="fas fa-plus-circle"></i> Add new user
                </a>
            </div>
            
            <div class="card">
                <div class="card-header">List of users</div>
                
                @forelse ($users as $user)
                    <div class="card-body self-card row">
                        <div class="col-sm-10">
                            <a class="user-info" href="{{ route('user.show', $user) }}">
                                <p><i class="fas fa-user"></i>  {{ $user->name }}</p> 
                                <p>{{ $user->email }}</p> 
                                <p>{{ $user->phone }}</p>
                            </a>
                        </div>
                        <div class="user-actions col-sm-2">
                            @if (auth()->user()->admin)
                                <a href="{{ route('user.edit', $user) }}"> <i class="fas fa-edit"></i> </a>
                                
                                <form action="{{ route('user.destroy', $user)  }}" method="POST">
                                    @csrf @method('DELETE')
                                    
                                    <button><i class="fas fa-trash-alt"></i></button>
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

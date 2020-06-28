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
                <div class="card-header d-flex flex-row justify-content-between">{{ $user->name }}
                    @if (auth()->user()->admin)
                    <div class="user-actions justify-content-around">
                        <a href="{{ route('user.edit', $user) }}"> <i class="fas fa-edit"></i> </a>

                        <form action="{{ route('user.destroy', $user)  }}" method="POST">
                            @csrf @method('DELETE')
                            
                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                    @endif
                </div>
            <p><i class="fas fa-envelope"></i>  {{ $user->email }}</p>
            <p><i class="fas fa-phone-alt"></i>  {{ $user->phone }}</p>
            <p><i class="fas fa-map-marker-alt"></i>  {{ $user->address }}</p>
            
            @if ($user->admin == 0)
                <p><i class="fas fa-user"></i>  Admin priviliges: OFF</p>
            @else
            <p><i class="fas fa-users-cog"></i>  Admin priviliges: ON</p>
            @endif

                <div class="card-body self-card row">
                    <div class="col-sm-10">

                    </div>
                    <div class="user-actions col-sm-2">

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
    
@endsection
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

            <div class="h-100 card">
                <div class="card-header d-flex flex-row justify-content-between align-items-center alert-primary">{{ $user->name }}
                    @if (auth()->user()->admin)
                    <div class="w-50 user-actions justify-content-around">
                        <button class="btn btn-outline-warning mx-1">
                            <a href="{{ route('user.edit', $user) }}"> 
                                <i class="fas fa-edit"></i> 
                            </a>
                        </button>
                        
                        <form action="{{ route('user.destroy', $user)  }}" method="POST">
                            @csrf @method('DELETE')
                            
                            <button type="submit" class="btn btn-outline-danger mx-1">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                    @endif
                </div>

                <div class="h-100 d-flex flex-column align-items-start justify-content-around mx-auto">
                    <spam><i class="fas fa-envelope text-primary"></i>  {{ $user->email }}</spam>
                    <spam><i class="fas fa-phone-alt text-primary"></i>  {{ $user->phone }}</spam>
                    <spam><i class="fas fa-map-marker-alt text-primary"></i>  {{ $user->address }}</spam>
                
                    @if ($user->admin == 0)
                        <p><i class="fas fa-user text-primary"></i>  Admin priviliges: OFF</p>
                    @else
                        <p><i class="fas fa-users-cog text-primary"></i>  Admin priviliges: ON</p>
                    @endif
                </div>

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
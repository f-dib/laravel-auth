@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <div class="d-flex flex-wrap gap-3"> 
            @foreach($projects as $project)
    
                <div class="card" style="width: 18rem;">
                    <img src="{{ $project->src }}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Mostra di più</a>
                    </div>
                </div>
    
                
            @endforeach
        </div>

        <div class="text-center py-5"><a href="{{ route('admin.projects.create') }}"><button>Aggiungi Comic</button></a></div>
            
    </div>

@endsection
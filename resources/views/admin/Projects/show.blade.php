@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <div class="card" style="width: 18rem;">
            <img src="{{ $project->src }}" class="card-img-top p-3" alt="...">
            <div class="card-body">
                <h5 class="card-title text-uppercase">{{ $project->name }}</h5>
                <p class="card-text">{{ $project->description }}</p>
            </div>
        </div>

    </div>

@endsection
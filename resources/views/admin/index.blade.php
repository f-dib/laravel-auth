@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <h1>Pagina di amministrazione</h1>

        <a class="text-decoration-none py-5" href="{{ route('admin.projects.index') }}">
            <h3>Visita i tuoi progetti</h3>
        </a>
    </div>

@endsection
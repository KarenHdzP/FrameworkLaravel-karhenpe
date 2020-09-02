@extends('layout')

@section( 'title','Portafolio')

@section( 'content')

<div class="container">
    <div class="d-flex justify-content-between aling-items-center mb-3">
        <h1 clas="display-4 mb-0" > @lang('Projects')</h1>
        @auth
            <a class="btn btn-primary" 
                href="{{route('projects.create')}}">
            Crear Proyecto</a>
        @endauth
    </div>                                                                                                              
    <p class="lead text-secondary">Proyectos realizados por el 
    autor para su clasificacion
    </p>

    <ul class="list-group">
    @forelse($projects as $project)
    <li class="list-group-item border-0 md-3 shadow-sm">
        <a class="text-secondary d-flex justify-content-between
        align-items-center"
            href="{{route('projects.show', $project) }}">
            <span class="font-weight-bold">
                {{ $project->title }}
            </span>
            <span class="text-black-50">
                {{\Carbon\Carbon::parse( $project-> create_at)-> format('d/m/Y') }}
            </span>
        </a>
    </li>

    @empty
    <li class="list-group-item border-0 md-3 shadow-sm">
        No hay proyectos para mostrar</li>
    @endforelse
    {{$projects->links()}}
    </ul>
</div>
@endsection

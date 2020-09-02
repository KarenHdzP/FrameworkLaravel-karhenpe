@extends('layout')

@section( 'title','Portafolio | '. $project->title)

@section( 'content')
<div Class="container">

    <div class="bg-white p-5 shadow rounded">
        <h1 class="display-7"> {{$project->title}}</h1>
        <p class="text-secondary">
            {{$project->description}} 
        </p>
        <p class="text-black-50">
        {{ \Carbon\Carbon::parse($project->created_at)->diffForHumans()}}
        </p>
        <div class="d-flex justify-content-between 
        aling-items-center">

            <a class="shadow-sm  py-1 px-3 " href="{{route('projects.index')}}" >
                Regresar
            </a>
            @auth
                <div class="btn-group btn-group-sm ">
                <a class="btn btn-primary " 
                    href="{{ route('projects.edit',$project)}}">Editar</a>
                <a class="btn btn-danger"
                    href="#"
                    onclick="document.getElementById('delete-project').
                    submit()">Eliminar</a>
                </div>
                <form  id="delete-project" 
                    class="d-none"
                    method="POST" 
                    action="{{route('projects.destroy',$project)}}">
                @csrf @method('DELETE')
                </form>
            @endauth
        </div>
    </div>
</div>
@endsection
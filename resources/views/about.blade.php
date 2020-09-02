@extends('layout')
@section( 'title','About')
@section( 'content')

<div class="container">
    <div class="row">
        <div  class="col-12 col-lg-6">         
            <h1 class="display-4 text-primary">¿Quién soy?</h1>
            <p class="lead text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing
             elit.Tenetur praesentium voluptate perspiciatis delectus. Sed temporibus voluptatum 
             necessitatibus amet cumque culpa architecto umquam neque vel provident rem hic 
             accusamus, enim veniam.
             </p>
                
            <a class="btn btn-primary btn-lg btn-block"
            href="{{route('contact')}}">
            Contáctame</a>

            <a  class="btn btn-outline-primary btn-lg btn-block" 
            href="{{route('projects.index')}}">
            Portafolio</a>
        </div>
            <div  class="col-12 col-lg-6">
                <img class="img-fluid md-4" src="/img/about.svg" alt=
                "Quien soy">
            </div>
    </div>  
</div>

@endsection 
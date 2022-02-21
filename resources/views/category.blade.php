@extends('layout')

@section('content')


    
    <article>

       <h1>{{ $category->name; }}</h1>
    
        <div>
            
            {!! $category->slug; !!}
        </div>

    </article>
  
<br />
    <a href="">Go back</a>

@endsection

@extends('admin.layout')    



@section('content')
    

    <h1>Edita post: {{ $post->title }}</h1>

    <!--mostrar errors del formulari-->
    @include('admin.fragment._errors-form')
    <!--final mostrar errors...-->




    <form action="{{ route('post.update', $post->id) }}" method="post">
  
        @method('PUT')
    
        @include('admin.post._form')
    
        <button class="btn btn-success" type="submit">enviar</button>
    </form>




@endsection
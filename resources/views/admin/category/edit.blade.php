@extends('admin.layout')    



@section('content')
    

    <h1>Edita categoria: {{ $category->title }}</h1>

    <!--mostrar errors del formulari-->
    @include('admin.fragment._errors-form')
    <!--final mostrar errors...-->




    <form action="{{ route('category.update', $category->id) }}" method="post">
  
        @method('PUT')
    
        @include('admin.category._form')
    
        <button type="submit">enviar</button>
    </form>




@endsection
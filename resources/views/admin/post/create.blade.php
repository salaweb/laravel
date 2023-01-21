@extends('admin.layout')    



@section('content')
    

    <h1>Crear post</h1>

    <!--mostrar errors del formulari-->
    @include('admin.fragment._errors-form')
    <!--final mostrar errors...-->




    <form action="{{ route('post.store') }}" method="post">
       
    
        @include('admin.post._form')


        <button type="submit">enviar</button>
    </form>




@endsection
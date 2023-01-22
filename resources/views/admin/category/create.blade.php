@extends('admin.layout')


@section('content')
    

    <h1>Crear Categoria</h1>

    <!--mostrar errors del formulari-->

    @include('admin.fragment._errors-form')

    <!--final mostrar errors...-->

    <form action="{{ route('category.store') }}" method="post">       
    
        @include('admin.category._form')

        <button type="submit">enviar</button>
    </form>




@endsection
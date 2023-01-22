@extends('admin.layout')

@section('content')

    <a href="{{ route('category.create') }}">Crear</a>   
    
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    

    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Títol</th>                              
                <th scope="col">Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                
            <tr>
                <th scope="row">{{ $c->title }}</th>
                <td></td>                
                <td>
                    <a href="{{ route('category.edit', $c->id) }}">Edita</a>
                    <a href="{{ route('category.show', $c->id) }}">Mostra</a>
                    <form action="{{ route('category.destroy', $c->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

  

@endsection
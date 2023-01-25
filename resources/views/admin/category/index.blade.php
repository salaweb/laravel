@extends('admin.layout')

@section('content')

    <a class="btn btn-success my-3" href="{{ route('category.create') }}">Crear</a>


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
                <td scope="row">{{ $c->title }}</td>                               
                <td>
                    <a class="btn btn-primary my-2" href="{{ route('category.edit', $c->id) }}">Edita</a>
                    <a class="btn btn-primary my-2" href="{{ route('category.show', $c->id) }}">Mostra</a>
                    <form action="{{ route('category.destroy', $c->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        
                        <button class="btn btn-danger my-2" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <td scope="row"></td>
                <td></td>
                
            </tr>
        </tbody>
    </table>

    {{ $categories->links() }}
 

@endsection
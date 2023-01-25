@extends('admin.layout')

@section('content')

    <a class="btn btn-success my-3" href="{{ route('post.create') }}">Crear</a>  
    

    <table class="table mb-3">
        <thead>
            <tr>
                <th scope="col">Títol</th>
                <th scope="col">Categoria</th>
                <th scope="col">Posted</th>
                <th scope="col">Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                
            <tr>
                <td scope="row">{{ $p->title }}</td>
                <td>{{ $p->category->title }}</td>
                <td>{{ $p->posted }}</td>
                <td>
                    <a class="btn btn-primary my-2" href="{{ route('post.edit', $p->id) }}">Edita</a>
                    <a class="btn btn-primary my-2" href="{{ route('post.show', $p->id) }}">Mostra</a>
                    <form action="{{ route('post.destroy', $p->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection
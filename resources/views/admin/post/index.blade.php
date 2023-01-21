@extends('admin.layout')

@section('content')

    <a href="{{ route('post.create') }}">Crear</a>   
    
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    

    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
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
                <th scope="row">{{ $p->title }}</th>
                <td>{{ $p->category->title }}</td>
                <td>{{ $p->posted }}</td>
                <td>
                    <a href="{{ route('post.edit', $p->id) }}">Edita</a>
                    <a href="{{ route('post.show', $p->id) }}">Mostra</a>
                    <form action="{{ route('post.destroy', $p->id) }}" method="post">
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

    {{ $posts->links() }}

@endsection
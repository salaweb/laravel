<div>
    {{ $slot }}

    @foreach ($posts as $p)

        <div class="card card-white mt-3">    
            <h3>{{ $p->title }}</h3>
            <p>{{ $p->description }}</p>
            <a href="{{ route('web.blog.show',$p) }}">Anar</a>
        </div>

    @endforeach

{{ $posts->links() }}
</div>
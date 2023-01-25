@csrf

<div>
    <label for="">Títol</label>
    <input class="form-control" type="text" name="title" value="{{ old('title', $post->title) }}">            
</div>

<div>
    <label for="" >Slug</label>
    <input class="form-control" type="text" name="slug" value="{{ old('slug', $post->slug) }}">
</div>

<div>
    <label for="">Categorias: </label>

    <option value=""></option>

    <select name="category_id" class="form-control" aria-label="Default select example">
            <option value=""></option>
        @foreach ($categories as $title => $id)
            <option {{ old('category_id', $post->category_id) == $id ? "selected" : "" }} value="{{ $id }}">{{ $title }}</option>
        @endforeach 
        
    </select>
</div>

<div>
    <label for="">Posted: </label>
    <select name="posted" class="form-control" aria-label="Default select example">
        <option {{ old('posted', $post->poste) == 'not' ? "selected" : "" }} value="not">No</option>
        <option {{ old('posted','') == 'yes' ? "selected" : "" }} value="yes">Si</option>
    </select>
</div>

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Contenido</label>
    <textarea class="form-control" name="content">{{ old('content', $post->content) }}</textarea>
</div>        

<div class="mb-3">            
    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
    <textarea class="form-control" name="description">{{ old('description', $post->description) }}</textarea>
</div>

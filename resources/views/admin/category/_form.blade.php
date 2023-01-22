@csrf

<div>
    <label for="">Títol</label>
    <input type="text" name="title" value="{{ old('title', $category->title) }}">            
</div>

<div>
    <label for="" >Slug</label>
    <input class="bg-secondary" type="text" name="slug" value="{{ old('slug', $category->slug) }}">
</div>
       


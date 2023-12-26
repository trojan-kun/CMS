@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input value="{{old('title')}}" type="text" name='title' class="form-control" id="title" placeholder="Заголовок">
            @error('title')
                <p class="text-danger">Ошибка заполнения</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="author_id" class="form-label">Автор</label>
            <input type="text" name='author_id' class="form-control" id="author_id" placeholder="Заголовок">
            @error('author_id')
                <p class="text-danger">Ошибка заполнения</p>
            @enderror       
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Пост</label>
            <textarea name="body" class="form-control" id="body" rows="3">{{old('body')}}</textarea>
            @error('body')
                <p class="text-danger">Ошибка заполнения</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input value="{{old('image')}}" type="text" name='image' class="form-control" type="image" id="formFile">
            @error('image')
                <p class="text-danger">Ошибка заполнения</p>
            @enderror
        </div>
        
        <div>
            <button class="btn btn btn-success" type="submit" class="btn btn-prymary">Опубликовать</button>
        </div>
        
    </form>
</div>
@endsection
    
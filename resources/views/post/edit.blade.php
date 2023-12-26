@extends('layouts.app')
@section('content')
<div class="mt-3">
    <form action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name='title' class="form-control" id="title" placeholder="Заголовок" value="{{$post->title}}">
            @error('title')
                <p class="text-danger">Ошибка заполнения</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Пост</label>
            <textarea value="{{old('body')}}" name="body" class="form-control" id="body" rows="3">{{$post->body}}</textarea>
            @error('body')
                <p class="text-danger">Ошибка заполнения</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input name='image' class="form-control" type="text" id="formFile" value="{{$post->image}}">
            @error('image')
                <p class="text-danger">Ошибка заполнения</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Изменить</button>
    </form>
</div>
@endsection
    
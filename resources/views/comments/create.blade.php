@extends('layouts.app')
@section('content')
<div>
    <form action="{{route('post.comment.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name='title' class="form-control" id="title" placeholder="Заголовок">
            @error('title')
                <p class="text-danger">{{$massage}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="author_id" class="form-label">Fdnjh</label>
            <input type="text" name='author_id' class="form-control" id="author_id" placeholder="Заголовок">            
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Пост</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
            @error('body')
                <p class="text-danger">{{$massage}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input type="text" name='image' class="form-control" type="image" id="formFile">
            @error('image')
                <p class="text-danger">{{$massage}}</p>
            @enderror
        </div>
        
        <div>
            <button class="btn btn btn-success" type="submit" class="btn btn-prymary">Опубликовать</button>
        </div>
        
    </form>
</div>
@endsection
    
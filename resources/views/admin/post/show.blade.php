   
@extends('layouts.admin')
@section('content')
<div class="main">
    <div class="container">
        <div class="row card mt-3 p-3">
            <h4>{{$post->title}}</h4>
            <p>Автор: {{$users->find($post->author_id)->name}}</p>
            <p class="text-break">{{$post->body}}</p>
            <figure class="figure"><img src="{{$post->image}}" alt=""></figure>
            <div>
                <a href="#" class=" link-offset-2 link-underline link-underline-opacity-0 card-link">{{$post->like}}</a>
                <a href="#" class=" link-offset-2 link-underline link-underline-opacity-0 card-link">{{$post->dislike}}</a>
            </div>
            
            <div>
                <div class="mt-3"> <a class="card-link btn btn-warning" href="{{route('admin.post.edit', $post->id)}}">Редактировать</a> </div>
                <div class="mt-3">
                    <form action="{{route('admin.post.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input class=" card-link btn btn-danger" type="submit" value = "Удалить">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="mt-3">Комментарии</h3>
        <div>
            @foreach ($post_comments as $comment)
                <div class="row card mt-3 p-2">
                    <div class="card-body">
                        <h5 class="card-subtitle text-body-secondary">{{ $users->find($comment->author_id)->name }}</h5>
                        <p class="text-break">{{$comment->body}}</p>  

                        <a href="#" class="card-link">{{$comment->like}}</a>
                        <a href="#" class="card-link">{{$comment->dislike}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
@extends('layouts.admin')
@section('content')

<div class="container">
  <div class="row">
      <div class="col-sm-6 w-100">
          @foreach ($posts as $post)
        <div class="card  mt-3">
          <div class="card-body">
              <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{route('admin.post.show', $post->id)}}">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Автор: {{$users->find($post->author_id)->name}}</h6>
                  
                  <a class="link-offset-2 link-underline link-underline-opacity-0 card-link" href="#">{{$post->like}}</a>
                  <a class="link-offset-2 link-underline link-underline-opacity-0 card-link" href="#">{{$post->dislike}}</a>
              </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>

@endsection
    
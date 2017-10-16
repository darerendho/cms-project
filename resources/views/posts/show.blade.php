@extends ('layouts.master')
@section('content')
<div class="col-sm-8 blog-main">

<h1>{{$post->title}}</h1>     <!-- Post Title -->

@if(count($post->tags))

<ul>
  @foreach ($post->tags as $tag)
  <li>
    <a href="/posts/tags/{{$tag->name}}"> {{$tag->name}}  </a>
  </li>
  @endforeach
</ul>

@endif
<p>
{{$post->body}}               <!-- Post Body -->
</p>

<hr />

  <div class="comments">
    <ul>
      @foreach($post->comments as $comment)
      <li class="list-group-item">
        <strong>
            {{$comment->created_at->diffForHumans()}}: &nbsp; <!-- Post Comment time created -->
        </strong>
          {{$comment->body}} <!-- Post Comments -->
      </li>
      @endforeach
    </ul>
  </div>

  <div class="card">
    <div class="card-block">
      <form method="POST" action="/posts/{{$post->id}}/comments">
          {{ csrf_field() }}
        <div class="form-group">
            <textarea name="body" placeholder="Your comment here." class="form-control" required>

            </textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Submit</button>
        </div>
      </form>
      @include('layouts.partials.errors')
    </div>
  </div>

  <nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
  </nav>
</div><!-- /.blog-main -->
@endsection

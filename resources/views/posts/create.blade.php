@extends('layouts.master')
@section('content')
<div class="col-sm-8 blog-main">
<h1>  Create a form</h1>
<hr/>

<div class="bd-example" data-example-id="">
<form method="POST" action="/posts">

  {{ csrf_field() }}

  <div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" id="title" aria-describedby="emailHelp" type="text" name="title" >
  </div>

  <div class="form-group">

    <label for="exampleTextarea">Body</label>
    <textarea class="form-control" id="body" rows="3" name="body"></textarea>

  </div>

  <button type="submit" class="btn btn-primary">Publish</button>

  @include('layouts.partials.errors')
</form>

  </div>
</div> <!--End of Main Content-->
@endsection

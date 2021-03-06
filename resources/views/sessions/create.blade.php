@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
  <form method = "POST" action="/login">
    {{csrf_field()}}

    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="email" id="email" name= "email" required/>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name= "password" required/>
    </div>

    <div class="form-group">
        <button type="submit" class= "btn btn-primary">Log In</button>
    </div>
    @include('layouts.partials.errors')

  </form>
</div> <!--End of Main Content-->
@endsection

@extends('layout')
@section('content')
<h1>create a task</h1>
 <p>You can create a task here.
</p>
 
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="/store" method="POST">
                @csrf
                <div class="form-group">
                <label class="">title</label>
  <input type="text" class="form-control" name="title"/>
  </div>
  <br/>
                  <div class="form-group">
                <label class="">body</label>
  <textarea class="form-control" name="body"/></textarea>
  <br/
  </div>
  <div class="form-group">
  <label class="radio-inline">done</label>
  <label class="radio-inline"><input type="radio" name="done" checked value="1">yes</label>
<label class="radio-inline"><input type="radio" name="done" value="0">no</label>
  <br/>
  </div>
  <br/>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="register"/>

    <a href="/showtask">back</a>
  </div>
</form>
</div>
</div>
</div>
</div>
@endsection

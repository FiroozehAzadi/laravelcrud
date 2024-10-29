@extends('layout')
@section('content')
<div class="panel panel-default">
<div class="panel-heading">

<h1>edit task</h1>
 <p>You can edit the task here.
</p>
 
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="/edit" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $task->id }}">

                <div class="form-group">
                <label class="">title</label>
  <input type="text" class="form-control" name="title" value="{{$task->title}}"/>
  </div>
  <br/>
                  <div class="form-group">
                <label class="">body</label>
  <textarea class="form-control" name="body"/>{{$task->body}}</textarea>
  <br/
  </div>
  <div class="form-group">
  <label class="radio-inline">done</label>
  <label class="radio-inline"><input type="radio" name="done" {{$task->done?'checked':''}} value="1">yes</label>
<label class="radio-inline"><input type="radio" name="done" {{$task->done?'':'checked'}} value="0">no</label>
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
</section>
</div>
@endsection
<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
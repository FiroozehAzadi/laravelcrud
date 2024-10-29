
@extends('layout')
@section('content')
<h1>Welcome-Home</h1>
<p>You can find everything about laravel here</p>

<section class="header section-padding">
 <div class="background">&nbsp;</div>
 <div class="container">
<div class="header-text">
 <h1>Learning Laravel: The Easiest Way</h1>
<p>
This is our to do list!<br>
built using laravel 11 framework
</p>
</div>
</div>
</section>
 <div class="container">
 <section class="section-padding">
 <div class="jumbotron text-center">
<div class="panel panel-default">
<div class="panel-heading">
<h1>
<span class="grey">Our</span> To-do List
</h1>
</div>
 @if ($tasks->isEmpty())
 <p> Currently, there is no task!</p>
@else
<table class="table table-striped">
<thead>
<tr>
<th></th>
<th>Title</th>
<th>Body</th>
<th>Finish</th>
<th>edit</th>
<th>delete</th>

</tr>
</thead>
<tbody>
@foreach($tasks as $task)
<tr>
<td>{{$task->id}}</td>
<td>{{$task->title}}</td>
<td>{{$task->body}}</td>
<td class="{{$task->done?'text-success':'text-danger'}}">{{$task->done?'Yes':'No'}}</td>
<td><a href="{{action('App\Http\Controllers\TaskController@edit',[$task->id]),$absolute = true}}" class="">edit</a></td>
<td><a href="/delete/{{$task->id}}" class="">delete</a></td>

</tr>
@endforeach

</tbody>
</table>
@endif
</div>

</div>
</section>
</div>
<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
@endsection

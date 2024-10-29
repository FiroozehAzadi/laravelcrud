@extends('layout')
@section('content')
<h1>Contact Us</h1>
<p>Please contact us by sending a message using the form below
</p>
@if($errors->any())
<ul id="errors">
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<h3>{{$subject}}</h3>
<h4>{{$message}}</h4>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

<form action="/contact" method="POST">
    @csrf
    <div class="form-group">
<label>subject</label>
<input type="text" id="subject" name="subject" class="form-control">
<br/>
</div>
    <div class="form-group">
<label>message</label>
<textarea id="message" name="message" class="form-control"></textarea>
<br/>
</div>
<button type="submit" class="btn btn-primary">submit</button>
</form>
</div>
</div>
</div>
@endsection
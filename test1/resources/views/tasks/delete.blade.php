@extends('layout')
@section('content')
<h1>Welcome-Home</h1>
<p>You can find everything about laravel here</p>

<section class="header section-padding">
 <div class="background">&nbsp;</div>
 <div class="container">
<div class="header-text">
 <h1>Delete</h1>
<p>
delete task page
</p>
</div>
</div>
</section>
 <div class="container">
 <section class="section-padding">
 <div class="jumbotron text-center">
<h3>Do you want to delete Task {{ $id }}? </h3>

<form action="/delete" method="POST">
@csrf
    <input type="hidden" name="id" value="{{ $id }}">

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="delete"/>
    <a href="/showtask" class="btn btn-danger">no</a>
  </div>
 </form>
        </div>
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
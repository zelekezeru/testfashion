@extends('home.layout')
@section('content')
<ul class="nav nav-tabs">

  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="userRegistration">User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="designerRegistration">Designer</a>
  </li>
</ul>
<br><br>
<h1 >User Registration</h1>
<form  action="/register" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label><br>
        <input type="text" name="name" class="form-control"  required ><br>
    </div>
    <div class="form-group">
        <label for="password">Password</label><br>
        <input type="password" name="password" class="form-control" required><br>
    </div>
    <div class="form-group">
        <label for="email">Email</label><br>
        <input type="text" name="email" class="form-control" required><br>
    </div>

    <button type="submit" class="btn btn-primary" style="margin-top: 7px;">Submit</button>
</form>
@endsection

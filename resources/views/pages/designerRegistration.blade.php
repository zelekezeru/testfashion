@extends('home.layout')
@section('content')
<ul class="nav nav-tabs">

  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="userRegistration">User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="designerRegistration">Designer</a>
  </li>
</ul>
<br><br>
<h1 >Designer Registration</h1>
<form action="/designerRegistration" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label><br>
        <input type="text" name="name"  class="form-control"  required ><br>
    </div>
    <div class="form-group">
        <label for="password">Password</label><br>
        <input type="password" name="password" class="form-control"  required><br>
    </div>
    <div class="form-group">
        <label for="email">Email</label><br>
        <input type="text" name="email" class="form-control"  required><br>
    </div>
    <div class="form-group">
        <label for="payment">Payment option</label><br>
        <select name="payment" id="payment" class="form-control" required>
            <option value="" disabled>Select payment option</option>
            <option value="1">Manual</option>
            <option value="2">creditcard</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary" style="margin-top: 7px;">Submit</button>
</form>
@endsection

@extends('layouts.main')

@section('container')
     
<main class="container text-center form-signin card border-bottom shadow-lg" style="border-radius: 10px">
  <form>
    <img class="mb-4" src="img/person-circle.svg" width="72" height="72">
    <h1 class="page-title mb-0 mt-0" style="font-size: 40px">Login</h1>

    <br>
    <div class=" form-floating mb-2 text-muted">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email Address</label>
    </div>
    <div class="form-floating text-muted">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

 
    <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Login</button>
    <small class="text-muted"> <a href="#">Forgot your password?<br></a></small>
    <small class="text-muted" >Or<br></small>
    <small class="text-muted">Not registered? <a href="/register">Register Now!</a></small>
  </form>
</main>

@endsection   

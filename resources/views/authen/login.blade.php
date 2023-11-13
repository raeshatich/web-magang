@extends('layout.auth')
@section('auth')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<main class="form-signin">
  <form method="POST" action="/login">
    @csrf
    
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control rounded-top @error('email')
      is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus>
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" class="form-control rounded-top @error('password')
      is-invalid @enderror" id="password" placeholder="Password" name="password">
      <label for="password">Password</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <small class="text-muted">
    Tidak punya akun?<a href="/register">Register</a>
  </small>
  </form>
</main>

@endsection

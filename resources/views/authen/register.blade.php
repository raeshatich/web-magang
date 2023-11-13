@extends('layout.auth')
@section('auth')

<main class="form-signin">
  <form method="POST" action="/register">
    @csrf
  
    
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control rounded-top @error('name')
      is-invalid @enderror" id="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
      <label for="name">Nama</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="email" class="form-control rounded-top @error('email')" 
      is-invalid @enderror id="email" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password"id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    <small class="text-muted">
      Sudah punya akun?<a href="/login">Login</a>
    </small>
  </form>
</main>

@endsection

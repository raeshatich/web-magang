<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
  </head>
  <body>
    
<main>
  
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #BEE5E5;" aria-label="Eighth navbar example">
    <div class="container">
      <img src="assets/images/logo.png" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/anggota">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/syarat">Persyaratan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/info">Informasi</a>
            </li>
            
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
          </li>
          @can('admin')

        </ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Anggota</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown07">

            <li><a class="dropdown-item" href="/anggotacrud">Anggota</a></li>
            <li><a class="dropdown-item" href="/unitcrud">Unit</a></li>
            <li><a class="dropdown-item" href="/posisicrud">Posisi</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Persyaratan</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown07">
            <li><a class="dropdown-item" href="/crud">Syarat</a></li>
            <li><a class="dropdown-item" href="/tatacrud">Tata Cara</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Informasi</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown07">

            <li><a class="dropdown-item" href="/infocrud">Informasi</a></li>
            <li><a class="dropdown-item" href="/ketentuancrud">Ketentuan</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/daftar">Daftar</a>
        </li>
        @endcan
        <li class="nav-item" >
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </div>
    </div>
  </nav>
</main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <a href="{{ route('root') }}"><span class="navbar-brand mb-0 h1">Larabuk</span></a>
        <div class="form-inline">
          <span class="navbar-brand"><h6>Login</h6></span>
          <span class="navbar-brand"><h6>Daftar</h6></span>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Hello, World!</h1>
        <p class="lead">Selamat datand di Larabuk, Belajar Laravel gaya Batuk</p>
        <p class="lead">Ceritanya ini perpustakaan. Silahkan daftar dan mulai pinjam buku biar ndak panik</p>
      </div>
    </div>
    <script type="text/javascript" src="{{ url('bootstrap.min.js') }}"></script>
  </body>
</html>

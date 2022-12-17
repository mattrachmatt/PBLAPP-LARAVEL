<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link href="{{ asset('img/icon.ico') }}" rel="icon">
</head><title>Home</title>
<body>
  <!-- <nav>
  <a href="{{ route('home') }}">Home</a> |
  <a href="{{ route('logbooks.index') }}">Logbooks</a> |

  @can('lihat-data-user')
  <a href="{{ route('users.index') }}">Users</a> 
  @endcan
</nav> -->

<!-- new navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light bordered-dark justify-content-around shadow-sm">
        <!-- navigasi -->
    <div class="container">
      <a class="navbar-brand" href="#"> 
        <img src="{{ asset('img/logoipsum-212.svg') }}" alt="logoipsum" />
      </a>
    <div class="collapse navbar-collapse mb-3 mb-lg-0" id="menuToggler">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3 gap-2">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home') }}"> <i class="bi bi-house-fill"></i> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('logbooks.index') }}"> <i class="bi bi-journals"></i> Logbooks </a>
        </li>
        @can('lihat-data-user')
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('users.index') }}"> <i class="bi bi-person-circle"></i> Users </a>
        </li>
        @endcan
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST">
          @csrf    
          <button class="btn btn-danger text-dark type="submit">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </nav>
<!-- new navbar -->
</body>

  <div class="container-fluid">  
   <div class="container" style="min-height: 2rem">
   </div>
    @yield('kontenku')
  </div>


<footer class="bg-light border-dark mt-lg-5 text-dark p-1 text-center sticky-bottom">2022 &copy Template By Mr. Idris</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>

<!-- <form action="{{ route('logout') }}" method="POST">
    @csrf
    
    <button type="submit">Logout</button>
</form>

<hr>

<img src="{{ asset('gambar/ascii.png') }}" width="50px" alt=""> -->
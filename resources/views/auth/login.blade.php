<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link href="{{ asset('img/icon.ico') }}" rel="icon">

  </head>
  <body>
    <div class="bungkus">
      <img class="logo" src="{{ asset('img/logoipsum-280.svg') }}" alt="" srcset="" />
      <div class="form-login">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('login') }}" method="post">
            @csrf

          <div class="kotak-form">
            <label class="label" for="email"> <i class="bi bi-envelope"></i> Email Address: </label>
            <input type="email" name="email" id="email" placeholder="Email" />
          </div>

          <div class="kotak-form">
            <label class="label" for="password"> <i class="bi bi-key"></i> Password: </label>
            <input type="password" name="password" id="password" placeholder="Password" />
          </div>

          <div class="kotak-form">
            <button class="btn-login" type="submit">Sign In</button>
          </div>
        </form>
        <!-- Belum punya akun?? <a href="{{ route('register') }}">Registrasi disini</a> -->
      </div>
    </div>
  </body>
</html>


<!-- <h1>Halaman Login</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('login') }}" method="post">
    @csrf
    
    <input type="email" name="email">
    <br><br>
    <input type="password" name="password">
    <br><br>
  
    <button type="submit">Sign In</button>
</form>
<hr>
Belum punya akun?? <a href="{{ route('register') }}">Registrasi disini</a> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link href="{{ asset('img/icon.ico') }}" rel="icon">

<div class="container" style="min-height: 40rem">
      <main class="row justify-content-around align-items-center mt-5">
        <section class="col-lg-12">
          <h3 class="display-5 mb-3">Register User</h3>

          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('register') }}" method="POST">
            @csrf
              <div class="form-register"> 

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" />
                </div>

                <div class="mb-3">
                    <label for="topik" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>

                <div class="mb-3">
                    <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" />
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" aria-label=select name="role">
                    <option value="1">Mahasiswa</option>
                    <option value="2">Dosen</option>
                    </select>
                </div>
              <button class="btn-registrasi btn-success" type="submit">Simpan</button>
            </div>
          </form> 
        </section>
      </main>
</div>

<!-- <h1>Register User</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('register') }}" method="POST">
    Nama: <input type="text" name="name" >  <br><br>
    Email: <input type="email" name="email" >  <br><br>
    Password: <input type="password" name="password" >  <br><br>
    Konfirmasi Password: <input type="password" name="password_confirmation"> <br><br>
    Role: 
    <select name="role">
        <option value="1">Mahasiswa</option>
        <option value="2">Dosen</option>
    </select>
    <br><br>
    <button type="submit">Simpan</button>
</form> -->
@extends('layouts.admin')
<title> Create Logbooks </title>
@section('kontenku')

<h1> Form Create Logbook</h1>

@include('pesan_error')

     <form action="{{ route('logbooks.store') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="mb-3">
            <label for="Judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul"/>
        </div>

        <div class="mb-3">
            <label for="Judul" class="form-label">NIM Ketua</label>
            <input type="text" name="nim_ketua" class="form-control" id="nim_ketua"/>
        </div>

        <div class="mb-3">
            <label for="Judul" class="form-label">Topik</label>
            <input type="text" name="topik" class="form-control" id="topik"v/>
        </div>

        <div class="mb-3">
            <label for="Judul" class="form-label">Deksripsi</label>
            <textarea name="deskripsi_progress" class="form-control" rows="5" id="deskripsi_progress"></textarea>
        </div>

        <div class="mb-3">
            <label for="file_laporan" class="form-label">Upload File</label>
            <input class="form-control" type="file" name="file_laporan" id="file_laporan"/>
        </div>

        <button class="btn btn-success type="submit">Simpan</button>
        <button class="btn btn-danger type="reset">Reset</button>


    <!-- Judul: <input type="text" name="judul" >  <br><br>

    NIM Ketua: <input type="text" name="nim_ketua"> <br><br>

    Topik: <input type="text" name="topik"> <br><br>

    Deksripsi Progress: <textarea name="deskripsi_progress"> </textarea> <br><br>

    Upload File: 
    <input type="file" name="file_laporan"> <br><br>
    
    <button type="submit">Simpan</button>
    <button type="reset">Reset</button>

    
    <br><br> -->
     <!-- </form> -->

@endsection
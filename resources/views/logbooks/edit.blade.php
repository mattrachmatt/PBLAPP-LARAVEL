@extends('layouts.admin')

@section('kontenku')
<title> Edit Logbook </title>
<h1> Form Edit Logbook</h1>

@include('pesan_error')

<form action="{{ route('logbooks.update', $logbook->id) }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')

    <div class="mb-3">
            <label for="Judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" value="{{ $logbook->judul }}"/>
        </div>

        <div class="mb-3">
            <label for="Judul" class="form-label">NIM Ketua</label>
            <input type="text" name="nim_ketua" class="form-control" id="nim_ketua" value="{{ $logbook->nim_ketua }}"/>
        </div>

        <div class="mb-3">
            <label for="Judul" class="form-label">Topik</label>
            <input type="text" name="topik" class="form-control" id="topik" value="{{ $logbook->topik }}"/>
        </div>

        <div class="mb-3">
            <label for="Judul" class="form-label">Deksripsi</label>
            <textarea name="deskripsi_progress" class="form-control" rows="5" id="deskripsi_progress" > {{ $logbook->deskripsi_progress }} </textarea>
        </div>

        <div class="mb-3">
            <label for="file_laporan" class="form-label">Upload File (kosongkan jika tidak ingin diubah) </label>
            <input class="form-control" type="file" name="file_laporan"/>
        </div>

        File saat ini: 
        @if ($logbook->file_laporan == NULL) 
        <span> </span>Tidak ada file laporan
        @else
            <a href="{{ asset("storage/fileku/$logbook->file_laporan") }}"> lihat file</a>
        @endif
        <br><br><br>

        <button class="btn btn-success type="submit">Simpan</button>
        <button class="btn btn-danger type="reset">Reset</button>

    <!-- Judul: <input type="text" name="judul" value="{{ $logbook->judul }}">  <br><br>
    NIM Ketua: <input type="text" name="nim_ketua" value="{{ $logbook->judul }}"> <br><br>
    Topik: <input type="text" name="topik" value="{{ $logbook->topik }}"> <br><br>
    Deksripsi Progress: 
    <textarea name="deskripsi_progress"> {{ $logbook->deskripsi_progress }} 
    </textarea> <br><br>
    Upload File (kosongkan jika tidak ingin diubah): <br> <br>
    <input type="file" name="file_laporan"> 
    File saat ini: 
    @if ($logbook->file_laporan == NULL) 
    <span> </span>Tidak ada file laporan
    @else
       <a href="{{ asset("storage/fileku/$logbook->file_laporan") }}"> Download Laporan</a>
    @endif
    <br><br><br>
    <button type="submit">Simpan</button>
    <button type="reset">Reset</button>

    <br><br> -->
</form>

@endsection
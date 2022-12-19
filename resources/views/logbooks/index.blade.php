@extends('layouts.admin')
<title> Logbooks </title>
@section('kontenku')

   <h1>Daftar Logbook</h1>

@include('pesan_error')

<hr>

<table class="table table-bordered"  border=1 width="80%">
   <thead>
      <tr>
      <th>Judul</th>
      <th>NIM Ketua</th>
      <th>Topik</th>
      <th>Deksripsi</th>
      <th>File Laporan</th>
      <th></th>
   </tr>
   </thead>
   
   @forelse ($logbooks as $log)
   <tr>
      <th>{{ $log->judul }}</th>
      <th>{{ $log->nim_ketua }}</th>
      <th>{{ $log->topik }}</th>
      <th>{{ $log->deskripsi_progress }}</th>
      <td>
      @if ($log->file_laporan == NULL) 
      <span> Tidak ada file laporan </span>
      @else
         <a href="{{ asset("storage/fileku/$log->file_laporan") }}"> Download file</a>
      @endif
      
      </td>
      <td>
         <a class="btn btn-success" type="button" href="{{ route('logbooks.edit', $log->id) }}">Edit</a> 
         <br><br>
         <a></a>
         <form action="{{ route('logbooks.destroy', $log->id) }}" method="POST" onclick="confirm('yakin')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger type="submit">Delete</button>
         </form>
      </td>
   </tr>
   @empty
      <td colspan="5"> Belum ada data. </td>
   @endforelse
</table>

<hr>
<a class="btn btn-primary mx-right" href="{{ route('logbooks.create') }}">Insert Data</a>



@endsection
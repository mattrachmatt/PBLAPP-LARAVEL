@extends('layouts.admin')

<title> Users </title>

@section('kontenku')

<h1>User Management</h1>
<hr>
<h10>Hanya admin yang bisa mengakses halaman ini</h10>
</hr>

<br></br>

<table class="table table-bordered"  border=1 width="80%">
   <thead>
      <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Role</th>
      <th></th>
   </tr>
   </thead>
   
   @forelse ($users as $user)
     <tr>
      <th>{{ $user->name }}</th>
      <th>{{ $user->email }}</th>
      <th>{{ $user->role == '99' ? 'Admin':'User' }}</th>
      <td>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onclick="confirm('yakin')">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
     </tr>
   @endforeach

</table>

@endsection
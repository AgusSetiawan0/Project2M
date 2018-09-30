@extends('layouts.app')

@section('content')
<div class="container">

    {{-- @if (session('msg'))
      <div class="alert alert-succes">
        <p> {{ session('msg')}}</p>
      </div>
    @endif --}}
    <div class="table-responsive">


      <table class="table table-striped" border="solid">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id User</td>
            <th scope="col">Nama User</td>
            <th scope="col">Email User</td>
            <th scope="col">Nomor Telepon User</td>
            <th scope="col">Saldo</td>
            <th scope="col">Akun di buat pada taggal</td>
            <th scope="col">Akun di edit pada tanggal</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
                <th>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->saldo }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>


    </div>
    </div>

</div>
@endsection

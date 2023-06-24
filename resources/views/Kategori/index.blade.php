@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center mb-4"> Data Admin</h1>
        <div class="mb-2 mt-2">
            <a href="/tambahdata" type="button" class="btn btn-primary">Tambah Data +</a>
        </div>
        @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$message}}
          </div>
          @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no=1;
              @endphp
                @foreach ($data as $row)
              <tr>
                <th scope="row">{{$no++}}</th>
                <th>{{$row->nama_kategori}}</th>
                <th>
                    <a href="/deletedata/{{$row->id}}" type="button" class="btn btn-danger">Hapus</a>
                    <a href="/tampilkandata/{{$row->id}}" type="button" class="btn btn-warning">Edit</a>
                </th>
              </tr>
              @endforeach
            </tbody>
          </table>
          
    </div>
</div>


@endsection

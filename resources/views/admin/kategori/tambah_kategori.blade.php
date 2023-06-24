@extends('layouts.admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row justify-content-center">
            <div class="col-md-12">
      
                {{-- Tabel --}}
                <div class="card mb-6">
                  <h5 class="card-header">Data kategori</h5>
                  <div class="card-body">
                    <form action="{{route('simpan.kategori')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama kategori</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_kategori" class="form-control" id="basic-default-name" value="{{ old('nama_kategori')}}"/>
                                {{-- menampilkan errornya --}}
                                <span class="text-danger text-sm mt-1">{{ $errors->first('nama_kategori') }}</span>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
        {{-- Footer --}}
        @include('layouts.admin.footer')
      
        <div class="content-backdrop fade"></div>
      </div> 
@endsection
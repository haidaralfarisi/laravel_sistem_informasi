@extends('layouts.admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-6">
                  <h5 class="card-header">Update Produk</h5>
                  <div class="card-body">
                    <form action="{{route('update.produk', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama produk</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_produk" class="form-control" id="basic-default-name" value="{{$data->nama_produk}}"/>
                                <span class="text-danger text-sm mt-1">{{$errors->first('nama_produk')}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                          <div class="col-sm-10">
                              <input type="text" name="deskripsi" class="form-control" id="basic-default-name" value="{{$data->deskripsi}}"/>
                              <span class="text-danger text-sm mt-1">{{$errors->first('deskripsi')}}</span>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Harga</label>
                          <div class="col-sm-10">
                              <input type="number" name="harga" class="form-control" id="basic-default-name" value="{{$data->harga}}"/>
                              <span class="text-danger text-sm mt-1">{{$errors->first('harga')}}</span>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Link</label>
                          <div class="col-sm-10">
                              <input type="text" name="link" class="form-control" id="basic-default-name" value="{{$data->link}}"/>
                              <span class="text-danger text-sm mt-1">{{$errors->first('link')}}</span>
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
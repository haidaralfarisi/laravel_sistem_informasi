@extends('layouts.admin.master')
@section('content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center">
      <div class="col-md-12">

          {{-- Tabel --}}
          <div class="card mb-6">
            <h5 class="card-header">Data Produk</h5>
            <div class="card-body">
              <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Produk</th>
                      <th>Gambar</th>
                      <th>Deskripsi</th>
                      <th>Harga</th>
                      <th>Kategori</th>
                      <th>Link</th>
                      <th>Waktu dibuat</th>
                      <th>Waktu diupdate</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $nomor = 1 + (($produk->currentPage() - 1) * $produk->perPage());
                    @endphp
                    @foreach($produk as $item)
                    <tr>
                      <td>{{$nomor++}}</td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 164px;">{{ $item->nama_produk }}</span></td>
                      <td>
                        <div class="align-items-center">
                            <img src="{{ asset('storage/image/produk/' . $item->gambar) }}" alt="{{ $item->gambar }}" class="w-px-40 h-auto rounded-circle" />
                          </div>
                      </td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 200px;">{{ $item->deskripsi }}</span></td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 164px;">{{ $item->harga }}</span></td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 164px;">{{ $item->kategori->nama_kategori }}</span></td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 164px;">{{ $item->link }}</span></td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 164px;">{{ $item->created_at }}</span></td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 164px;">{{ $item->updated_at }}</span></td>
                      <td>
                        <a href="{{route('edit.produk', $item->id)}}" class="btn btn-secondary btn-sm">
                            Edit
                        </a>
                        <form action="{{route('delete.produk', $item->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                     </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="mt-3">
                  <!-- {{-- {{ $dataBarang->links() }} --}} -->
                  {!! $produk->appends(Request::except('page'))->render() !!}
                </div>
              </div>
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
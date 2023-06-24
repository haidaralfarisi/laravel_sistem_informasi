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
              <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama kategori</th>
                      <th>Waktu dibuat</th>
                      <th>Waktu diupdate</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $nomor = 1 + (($kategori->currentPage() - 1) * $kategori->perPage());
                    @endphp
                    @foreach($kategori as $item)
                    <tr>
                      <td>{{$nomor++}}</td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 164px;">{{ $item->nama_kategori }}</span></td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 164px;">{{ $item->created_at }}</span></td>
                      <td><span class="d-inline-block text-truncate" style="max-width: 164px;">{{ $item->updated_at }}</span></td>
                      <td>
                        <a href="{{route('edit.kategori', $item->id)}}" class="btn btn-secondary btn-sm">
                            Edit
                        </a>
                        <form action="{{route('hapus.kategori', $item->id)}}" method="POST">
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
                  {!! $kategori->appends(Request::except('page'))->render() !!}
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
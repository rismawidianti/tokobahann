@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="right"><a class="btn btn-primary" href="{{ url('/barang/create') }}">Tambah</a></div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
							<table class="table">
								<tr>
									<td>Nama Barang</td>
						            <td>Stok</td>
						            <td>Harga Barang</td>
						            <td>Gambar</td>
									<td colspan="2">Aksi</td>
								</tr>
								@php
								$no = 1;
								@endphp
								@foreach($barang as $data)
								<tr>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td>{{ $data->jumlah_barang }}</td>
                                    <td>{{ $data->harga }}</td>
                                    <td><img src="{{asset('img/'. $data->foto)}}" height="50px"></td>
									<td><a href="{{ route('barang.edit', $data->id) }}" class="btn btn-warning">Ubah</a></td>
									<td>
								<form action="{{route('barang.destroy', $data->id)}}" method="POST">
									<input type="hidden" name="_method" value="Hapus">
									<input type="hidden" name="_token">
									<input type="submit" class="btn btn-danger" value="Hapus">
									{{csrf_field()}}
								</form>
							</td>
								</tr>
								@php
								$no++;
								@endphp
								@endforeach
							</table>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

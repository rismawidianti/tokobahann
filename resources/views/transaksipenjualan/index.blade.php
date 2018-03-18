@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="right"><a class="btn btn-primary" href="{{ url('/transaksipenjualan/create') }}">Tambah</a></div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
							<table class="table">
								<tr>
									<th>Id</th>
						            <th>Tanggal Transaksi</th>
						            <th>Nama Pembeli</th>
						            <th>No Telepon</th>
						            <th>Alamat Pembeli</th>
						            <th>Nama Barang</th>
						            <th>Jumlah</th>
						            <th>Harga</th>
						            <th>Total Harga</th>
									<td colspan="2">Aksi</td>
								</tr>
								@php
								$no = 1;
								@endphp
								@foreach($transaksipenjualan as $data)
								<tr>
                                    <td>{{$data->id}}</td>   
						            <td>{{$data->tgl_transaksi}}</td>
						            <td>{{$data->nmpembeli}}</td>
						            <td>{{$data->notlp}}</td>
						            <td>{{$data->alm}}</td>
						            <td>{{$data->barang->nama_barang}}</td>
						            <td>{{$data->jumlah}}</td>
						            <td>{{$data->harga}}</td>
						            <td>{{$data->totalharga}}</td>
                                 
									<td><a href="{{ route('transaksipenjualan.edit', $data->id) }}" class="btn btn-warning">Ubah</a></td>
									<td>
								<form action="{{route('transaksipenjualan.destroy', $data->id)}}" method="POST">
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

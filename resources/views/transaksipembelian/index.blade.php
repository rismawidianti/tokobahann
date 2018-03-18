@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="right"><a class="btn btn-primary" href="{{ url('/transaksipembelian/create') }}">Tambah</a></div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
							<table class="table">
								<tr>
									 <th>Tanggal Transaksi</th>
						             <th>Id Supplier</th>
						             <th>Nama Supplier</th>
						             <th>Nama Barang</th>
						             <th>Jumlah</th>
						             <th>harga</th>
						             <th>Total</th>
						             <td colspan="3"><center>Aksi</center></td>
								</tr>
								@php
								$no = 1;
								@endphp
								@foreach($transaksipembelian as $data)
								<tr>
									<td>{{$data->tgl_transaksi}}</td>
									<td>{{$data->id}}</td>   
						            <td>{{$data->supplier->nama_supplier}}</td>
						            <td>{{$data->barang->nama_barang}}</td>
						            <td>{{$data->jumlah}}</td>
						            <td>{{$data->harga}}</td>
						            <td>{{$data->totalharga}}</td>
									<td><a href="{{ route('transaksipembelian.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
									<td>
								<form action="{{route('transaksipembelian.destroy', $data->id)}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<input type="submit" class="btn btn-danger" value="Delete">
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

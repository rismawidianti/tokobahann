@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="right"><a class="btn btn-primary" href="{{ url('/supplier/create') }}">Tambah</a></div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
							<table class="table">
								<tr>
									 <td>Id Supplier</td>
						             <td>Nama </td>
						             <td>Alamat</td>
						             <td>No Telepon</td>
						             <td>Barang</td>
						             <td>Harga</td>
						            <td colspan="2">Aksi</td>
								</tr>
								@php
								$no = 1;
								@endphp
								@foreach($supplier as $data)
								<tr>
									<td>{{$data->id}}</td>
						            <td>{{$data->nama_supplier}}</td>
						            <td>{{$data->alamat}}</td>
						            <td>{{$data->notlp}}</td>
						            <td>{{$data->barang->nama_barang}}</td>
						             <td>{{$data->harga}}</td>
									<td><a href="{{ route('supplier.edit', $data->id) }}" class="btn btn-warning">Ubah</a></td>
									<td>
								<form action="{{route('supplier.destroy', $data->id)}}" method="POST">
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

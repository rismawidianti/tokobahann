@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
							<table class="table">
			<div class="panel-heading">Laporan Data Penjualan
			<div class="panel-title pull-right"></div></div>
			<div class="panel-body">
					<button onclick="myFunction()">Print</button>

              <script>
            function myFunction() {
            window.print();
           }
           </script>
           <br>
           <br>
			<label>Dari Tanggal</label>
			<input type="date" name="">
			<label>Sampai Tanggal</label>
			<input type="date" name="">
			<a href="laporan/transaksipenjualan" class="btn btn-info">Submit</a>
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Nama Pembeli</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					?>
						@foreach($transaksipenjualan as $data)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->created_at}}</td>
							<td>{{$data->nmpembeli}}</td>
							<td>Rp.{{$data->totalharga}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				Jumlah Uang keluar dari tanggal {{$a}} sampai {{$b}}: Rp.{{$sum}}
			</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
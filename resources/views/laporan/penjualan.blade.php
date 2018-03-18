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
			<form action="{{url('penjualan/transaksipenjualan')}}" method="post">
			{{csrf_field()}}
			<label>Dari Tanggal</label>
			<input type="date" name="a" required="">
			<label>Sampai Tanggal</label>
			<input type="date" name="b" required="">
			<input type="submit" name="submit" class="btn btn-info" value="Submit"></form>
				<table class="table">
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Nama Pembeli</th>
							<th>Total</th>
						</tr>
					
				</table>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
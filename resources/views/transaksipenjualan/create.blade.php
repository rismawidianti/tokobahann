@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Transaksi Penjualan</center></div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('transaksipenjualan.store'),'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('transaksipenjualan._from')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

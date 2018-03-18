@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Transaksi Pembelian</center></div>

                <div class="panel-body">
                   {!! Form::model($transaksipembelian, ['url' => route('transaksipembelian.update', $transaksipembelian->id), 'method'=>'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('transaksipembelian._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

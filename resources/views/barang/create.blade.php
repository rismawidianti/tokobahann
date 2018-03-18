@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>barang</center></div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('barang.store'),'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('barang._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

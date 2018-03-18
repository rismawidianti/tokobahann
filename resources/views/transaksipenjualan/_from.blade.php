<div class="form-group{{ $errors->has('tgl') ? 'has-error' : '' }}">
    {!! Form::label('tgl_transaksi', 'Tanggal Transaksi', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::date('tgl_transaksi', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('tgl_transaksi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('nmpembeli') ? 'has-error' : '' }}">
    {!! Form::label('nmpembeli', 'Nama Pembeli', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('nmpembeli', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('nmpembeli', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('notlp') ? 'has-error' : '' }}">
    {!! Form::label('notlp', 'No Telepon', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('notlp', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('notlp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('alm') ? 'has-error' : '' }}">
    {!! Form::label('alm', 'Alamat', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('alm', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('alm', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('barang_id') ? 'has-error' : '' }}">
    {!! Form::label('barang_id', 'Nama Barang', ['class'=>'col-md-2 control-label','required','autofocus']) !!}
    <div class="col-md-12">
        {!! Form::select('barang_id', ["Pilih"]+App\barang::pluck('nama_barang','id')-> all() , null, ['class'=>'form-control']) !!}
        {!! $errors->first('barang_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('jumlah') ? 'has-error' : '' }}">
    {!! Form::label('jumlah', 'Jumlah', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::number('jumlah', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<div class="form-group">
    <div class="col-md-12 col-md-offset-10">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
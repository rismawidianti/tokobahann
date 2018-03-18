<div class="form-group{{ $errors->has('nama_supplier') ? 'has-error' : '' }}">
    {!! Form::label('nama_supplier', 'Nama Supplier', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('a', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('nama_supplier', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('alamat') ? 'has-error' : '' }}">
    {!! Form::label('alamat', 'Alamat', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('b', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('notlp') ? 'has-error' : '' }}">
    {!! Form::label('notlp','No Telepon', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('c', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('notlp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('barang_id') ? 'has-error' : '' }}">
    {!! Form::label('barang_id', 'Nama Barang', ['class'=>'col-md-2 control-label','required','autofocus']) !!}
    <div class="col-md-12">
        {!! Form::select('d', ["Pilih"]+App\barang::pluck('nama_barang','id')-> all() , null, ['class'=>'form-control']) !!}
        {!! $errors->first('barang_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('harga') ? 'has-error' : '' }}">
    {!! Form::label('harga', 'Harga', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('harga', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-12 col-md-offset-10">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
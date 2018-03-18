<div class="form-group{{ $errors->has('nama_barang') ? 'has-error' : '' }}">
    {!! Form::label('nama_barang', 'Nama Barang', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('nama_barang', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('nama_barang', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('foto') ? 'has-error' : '' }}">
    {!! Form::label('foto', 'Gambar', ['class'=>'col-md-1 control-label','required','autofocus']) !!}
    <div class="col-md-12">
        {!! Form::file('foto', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('harga') ? 'has-error' : '' }}">
    {!! Form::label('harga', 'Harga', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::number('harga', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('jumlah_barang') ? 'has-error' : '' }}">
    {!! Form::label('jumlah_barang', 'Jumlah Barang', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::number('jumlah_barang', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('jumlah_barang', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-12 col-md-offset-10">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
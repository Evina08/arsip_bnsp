@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New surats</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('surats.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('surats.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naomor:</strong>
                <input type="text" name="nomor" class="form-control" placeholder="Nomor">
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Kategori</label>
            <select id="inputState" class="form-control select2" name="kategori">
                <option selected="">Pilih Salah Satu</option>
                <option value="Undangan">Undangan</option>
                <option value="Pengumuman">Pengumuman</option>
                <option value="Nota Dinas">Nota Dinas</option>
                <option value="Pemberitahuan">Pemberitahuan</option>
            </select>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                <input type="text" name="judul" class="form-control" placeholder="Judul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>File:</strong>
                <input type="file" name="file_path" class="form-control" placeholder="file">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
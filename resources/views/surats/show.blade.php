@extends('layouts.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('surats.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor:</strong>
                {{ $surat->nomor }}
            </div>
            <div class="form-group">
                <strong>Kategori:</strong>
                {{ $surat->kategori }}
            </div>
            <div class="form-group">
                <strong>Judul:</strong>
                {{ $surat->judul }}
            </div>
            <div class="form-group">
                <strong>Waktu Pengerjaan:</strong>
                {{ $surat->created_at }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            
        </div>
        </div>

    </div>
@endsection
@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <center>
                <h2>Arsip Surat</h2>
            </center>
            <br />
            <center>
                <h8>Berikut adalah surat yang telah terbit</h8>
            </center>
            <p>
                <center>
                    <h8>Klik "Lihat" untuk menampilkan surat</h8>
                </center>
            </p>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('surats.create') }}"> Create New </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="row">
</div>
<div class="card-body">
    <div class="table-responsive">
        <!-- Light table -->
        <div class="table-responsive">
            <table id="myTable" class="table table-stripped">
                <thead>
                    <tr>
                        <th>Nomor Surat</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Waktu Pengarsipan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($surats as $surat)
                    <tr>
                        <td>{{ $surat->nomor }}</td>
                        <td>{{ $surat->kategori }}</td>
                        <td>{{ $surat->judul }}</td>
                        <td>{{ $surat->created_at }}</td>

                        <td>
                            <form action="{{ route('surats.destroy',$surat->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('surats.show',$surat->id) }}">Show</a>


                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
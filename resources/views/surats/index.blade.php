@extends('surats.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>arsip</h2>
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

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>INomer</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Waktu Pengerjaan</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($surats as $surat)
    <tr>
        <td>{{ ++$i }}</td>
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
</table>

{!! $surats->links() !!}

@endsection
@extends('master')

@section('breadcrumb', 'Daftar Kategori')
@section('title', 'Kategori')
@section('content')
    <div class="row mx-auto">
        <div class="card shadow" style="width: 800px">
            <div class="card-header">
                <div class="row">
                    <h5>
                        <strong>Kategori</strong>
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <a href="#" class="btn btn-success mb-3"><strong>Tambah Kategori</strong></a>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Kode</th>
                                <th>Tanggal Dibuat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="#" class="btn btn-primary btn-sm mx-1"><strong>Edit</strong></a>
                                            <form action="#" method="post">
                                                <button type="submit" class="btn btn-danger btn-sm mx-1"><strong>Hapus</strong></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

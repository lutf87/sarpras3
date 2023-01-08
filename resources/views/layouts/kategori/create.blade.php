@extends('master')

@section('breadcrumb', 'Tambah Kategori')
@section('title', 'Tambah Kategori')
@section('content')
    <div class="row mx-auto">
        <div class="card shadow" style="width: 600px">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5><strong>Form Tambah Kategori</strong></h5>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-danger">
                            <strong>Kembali</strong>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nama Kategori</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="code" class="form-label">Kode</label>
                        <input type="text" name="code" id="code" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col text-right">
                                <button type="submit" class="btn btn-success mx-1"><strong>Simpan</strong></button>
                                <button type="reset" class="btn btn-warning mx-1"><strong>Reset</strong></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layout.app')

@section('title', 'Input pengurus')

@section('content')

<div class="container">
    <a href="/pengurus" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('pengurus.update',  $pengurus->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <img src="/image/{{ $pengurus->poto }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control mb-3" name="poto">
                </div>
                @error('poto')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control mb-3" name="nama" placeholder="nama" value="{{ $pengurus->nama }}">
                </div>
                @error('nama')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" class="form-control mb-3" name="jabatan" placeholder="jabatan" value="{{ $pengurus->jabatan }}">
                </div>
                @error('jabatan')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control mb-3" placeholder="Opsional">{{ $pengurus->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>            
        </div>

    </div>
</div>

@endsection


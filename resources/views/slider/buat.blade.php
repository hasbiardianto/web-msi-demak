@extends('layout.app')

@section('title', 'Input pengurus')

@section('content')

<div class="container">
    <a href="/pengurus" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control mb-3" name="poto" >
                </div>
                @error('poto')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control mb-3" name="nama" placeholder="nama">
                </div>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" class="form-control mb-3" name="jabatan" placeholder="jabatan">
                </div>
                @error('jabatan')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control mb-3" placeholder="Opsional"></textarea>
                    <button type="submit" class="btn btn-primary btn-block ">submit</button>
                </div>       
                @error('jabatan')
                <small style="color: red">{{ $message }}</small>
                @enderror      
            </form>
        </div>

    </div>
</div>

@endsection


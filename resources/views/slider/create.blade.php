@extends('layout.app')

@section('title', 'Input Berita & Kegiatan')

@section('content')

<div class="container">
    <a href="/data" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('data.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                @error('description')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">image</label>
                    <input type="file" class="form-control mb-3" name="image" >
                    <button type="submit" class="btn btn-primary btn-block ">submit</button>
                </div>       
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror      
            </form>
        </div>

    </div>
</div>

<script>
    function handleEnter(event) {
        if (event.key === 'Enter') {
            event.preventDefault();

            // Get the current cursor position
            const cursorPos = event.target.selectionStart;

            // Get the content of the textarea
            const text = event.target.value;

            // Check if there's already a line break before the cursor position
            const lastLineBreak = text.lastIndexOf('\n', cursorPos - 1);

            // If there's no line break before the cursor position, add <br>
            if (lastLineBreak === -1) {
                event.target.value = text.substring(0, cursorPos) + '<br>' + text.substring(cursorPos);
            }
        }
    }
</script>

@endsection


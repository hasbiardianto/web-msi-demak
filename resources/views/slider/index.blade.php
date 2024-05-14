@extends('layout.app')

@section('title', 'Input Berita & Kegiatan')

@section('content')

<div class="container">
    <a href="/data/create" class="btn btn-primary mb-3">Tambah data</a>
    @if(session('message'))
    <div id="notification" class="alert alert-success mb-3">
        {{ session('message') }}
    </div>

    <script>
        setTimeout(function() {
            var notification = document.getElementById('notification');
            if (notification) {
                notification.style.display = 'none';
            }
        }, 3000);
    </script>
    @endif 
    
    <div class="mb-3">
        <h3>Total Data Berita & Kegiatan : {{ $sliders->total() }}</h3>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>no</th>
                    <th>judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = $sliders->firstItem(); // Mengambil nomor awal
                @endphp
                @foreach($sliders as $slider)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ substr(strip_tags($slider->description), 0, 100) }}...</td>
                    <td>
                        <img src="/image/{{ $slider->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td class="text-center">
                        <a href="{{ route('data.edit', $slider->id) }}" class="btn btn-warning mb-3" style="width: 70px;">Edit</a>
                        <form action="{{ route('data.destroy', $slider->id) }}" method="POST" id="deleteForm_{{ $slider->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger" style="width: 70px;" onclick="confirmDelete('{{ $slider->id }}')">Hapus</button>
                        </form>
                    </td>  
                </tr>
                @endforeach
            </tbody>                       
        </table>
        
        <ul class="d-flex justify-content-center color2">
            {{ $sliders->appends(request()->input())->links('pagination::simple-bootstrap-4') }}
        </ul>

    </div>
</div>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#FFD700',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Data berhasil dihapus.',
                    'success'
                )
                document.getElementById('deleteForm_' + id).submit();
            }
        })
    }
</script>

@endsection

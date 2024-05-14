@extends('layout.app')

@section('title', 'Pesan')

@section('content')
<div class="container">
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
        <h3>Total Pesan : {{ $sliders->total() }}</h3>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>no</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach($sliders as $slider)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $slider->nama }}</td>
                    <td>{{ $slider->email }}</td>
                    <td>{{ $slider->pesan }}</td>
                    <td>
                        <form id="deleteForm_{{ $slider->id }}" action="{{ route('kontak.destroy', $slider->id) }}" method="POST">
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

<x-admin>
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Daftar Fitur Keunggulan</h3>

                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-primary float-end btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Fitur Baru
                        </button>
                    </div>

                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> 
        <div class="container-fluid">

            @if(session('sukses'))
            <div class="alert alert-success" id="success-alert">
                {{ session('sukses') }}
            </div>
            <script>
                // Menghilangkan alert setelah 5 detik
                setTimeout(function() {
                    var alert = document.getElementById('success-alert');
                    if (alert) {
                        alert.style.display = 'none';
                    }
                }, 5000); // 5000 milliseconds = 5 seconds
            </script>
            @endif
        
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Fitur</th>
                    <th>Isi</th>
                    <th>Icon</th>
                    <th>Aksi</th>
                </tr>
                @foreach($data_fitur as $fitur)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ Str::limit($fitur->nama, 70) }}</td>
                    <td>{{ Str::limit($fitur->deskripsi, 80) }}</td>
                    <td><i class="{{ $fitur->icon }}" style="font-size: 18px;"></i> {{ $fitur->icon }}</td>
                    <td>
                        <a href="{{ route('fitur.show', $fitur->id) }}" class="btn btn-info btn-sm me-1">
                            <i class="fa fa-eye"></i> View
                        </a>
                        <a href="{{ route('fitur.edit', $fitur->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                        <form action="{{ route('fitur.destroy', $fitur->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

<!--Modal untuk tambah data-->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Berita Baru</h1>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/fitur')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Judul</label>
                          <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" placeholder="Nama">
                        </div>
                        <div class="mb-3">
                          <label for="deskripsi" class="form-label">Deskripsi</label>
                          <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="icon" class="form-label">Icon (FontAwesome Class)</label>
                          <input type="text" class="form-control" name="icon" placeholder="fa fa-star" value="fa fa-star">
                          <small class="form-text text-muted">Contoh: fa fa-graduation-cap, fa fa-book, fa fa-desktop</small>
                        </div>
                        <footer>
                         <button type="submit" class="btn btn-primary">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>   
                        </footer>
        
        
                      </form>
                </div>
        
            </div>
            </div>
        </div>
</x-admin>
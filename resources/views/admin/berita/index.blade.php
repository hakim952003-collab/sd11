<x-admin>


    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Daftar Berita</h3>

                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-primary float-end btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Berita Baru
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
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
                @foreach($data_berita as $berita)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ Str::limit($berita->nama, 70) }}</td>
                    <td>{{ Str::limit($berita->deskripsi, 80) }}</td>
                    <td>
                        <img src="{{ $berita->foto}}" alt="" style="width: 100%; height: 120px; object-fit: cover;">

                    </td>
                    <td>
                        <a href="{{url('admin/berita', $berita->id)}} /edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                        <!-- Pastikan route 'admin.berita.destroy' sudah didefinisikan di web.php -->
                        <!-- Periksa apakah metode DELETE diizinkan di server -->
                        <!-- Cek konsol browser untuk kesalahan JavaScript -->
                        <!-- Periksa logika di metode destroy di controller -->
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
                    <form action="{{ url('admin/berita')}}" method="POST">
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
                            <label for="foto" class="form-label">Upload Foto</label>
                            <input type="input" class="form-control" name="foto" placeholder="Foto">
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
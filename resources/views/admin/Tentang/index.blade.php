<x-admin>

    <main class="app-main">
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Pengaturan Tentang Kami</h3>
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
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Sejarah</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data_tentang as $tentang)
                <tr>
                    <td>{{$tentang->judul}}</td>
                    <td>{{ Str::limit($tentang->deskripsi, 50) }}</td>
                    <td>{{ Str::limit($tentang->visi, 30) }}</td>
                    <td>{{ Str::limit($tentang->misi, 50) }}</td>
                    <td>{{ Str::limit($tentang->sejarah, 30) }}</td>
                    <td> 
                        <a href="{{url('admin/tentang', $tentang->id)}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>                
                @endforeach

            </table>
        </div>

</x-admin>
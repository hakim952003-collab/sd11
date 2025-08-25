<x-admin>

    <main class="app-main">
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Pengaturan Kontak & Alamat</h3>
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
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Maps</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data_kontak as $kontak)
                <tr>
                    <td>{{$kontak->alamat}}</td>
                    <td>{{$kontak->email}}</td>
                    <td>{{$kontak->phone}}</td>
                    <td>{{ Str::limit($kontak->maps, 48) }}</td>
                    <td> 
                        <a href="{{url('admin/kontak', $kontak->id)}} /edit" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>                
                @endforeach

            </table>
        </div>

</x-admin>
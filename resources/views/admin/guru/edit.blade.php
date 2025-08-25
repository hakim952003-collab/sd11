<x-admin>
        

    <main class="app-main"> <!--begin::App Content-->
      <div class="container-fluid">
    
    
    
    
        <div class="row">
          <div class="col-6">
            <h2>Edit Guru</h2>
          </div>
          
            <form action="{{ url('admin/guru/'. $guru->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$guru->nama}}" placeholder="Nama">
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi" class="form-label">Jabatan</label>
                    <input class="form-control" name="jabatan" placeholder="Jabatan" rows="4" value="{{$guru->jabatan}}">
                  </div>
                  <div class="mb-3">
                    <img src="{{ $guru->foto}}" alt="Foto saat ini" style="height: 200px">
                  </div>
                  <div class="mb-3">
                      <label for="foto" class="form-label">Upload Foto</label>
                      <input type="input" class="form-control" name="foto" placeholder="Foto" value="{{$guru->foto}}">
                    </div>
    
                <footer>
                 <button type="submit" class="btn btn-warning">Update</button>
                </footer>
              </form>
        </div>
    
    </div>
    </main>
    
    
    </x-admin>
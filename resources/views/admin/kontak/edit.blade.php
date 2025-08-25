<x-admin>
    <main class="app-main"> <!--begin::App Content-->
        <div class="container-fluid">
      
      
      
      
          <div class="row">
            <div class="col-6">
              <h2>Edit Kontak</h2>
            </div>
            
              <form action="{{ url('admin/kontak/'. $kontak->id)}}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                      <label for="nama" class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="{{$kontak->alamat}}" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                      <label for="deskripsi" class="form-label">Email</label>
                      <input class="form-control" name="email" placeholder="Email" rows="4" value="{{$kontak->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Phone</label>
                        <input type="input" class="form-control" name="phone" placeholder="phone" value="{{$kontak->phone}}">
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Maps</label>
                        <input type="input" class="form-control" name="maps" placeholder="maps" value="{{$kontak->maps}}">
                    </div>
                  <footer>
                   <button type="submit" class="btn btn-warning">Update</button>
                  </footer>
                </form>
          </div>
      
      </div>
      </main>
      
</x-admin>
<x-admin>
    <main class="app-main"> <!--begin::App Content-->
        <div class="container-fluid">
      
      
      
      
          <div class="row">
            <div class="col-6">
              <h2>Edit Tentang Kami</h2>
            </div>
            
              <form action="{{ url('admin/tentang/'. $tentang->id)}}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                      <label for="judul" class="form-label">Judul</label>
                      <input type="text" class="form-control" name="judul" value="{{$tentang->judul}}" placeholder="Judul">
                    </div>
                    <div class="mb-3">
                      <label for="deskripsi" class="form-label">Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" rows="4">{{$tentang->deskripsi}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="visi" class="form-label">Visi</label>
                        <input type="text" class="form-control" name="visi" placeholder="Visi" value="{{$tentang->visi}}">
                    </div>
                    <div class="mb-3">
                        <label for="misi" class="form-label">Misi</label>
                        <textarea class="form-control" name="misi" placeholder="Misi" rows="4">{{$tentang->misi}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="sejarah" class="form-label">Sejarah</label>
                        <input type="text" class="form-control" name="sejarah" placeholder="Sejarah" value="{{$tentang->sejarah}}">
                    </div>
                  <footer>
                   <button type="submit" class="btn btn-warning">Update</button>
                  </footer>
                </form>
          </div>
      
      </div>
      </main>
      
</x-admin>
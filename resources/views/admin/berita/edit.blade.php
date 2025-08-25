<x-admin>
        

<main class="app-main"> <!--begin::App Content-->
<div class="container-fluid">




    <div class="row">
      <div class="col-6">
        <h2>Edit Berita</h2>
      </div>
      
        <form action="{{ url('admin/berita/'.$berita->id)}}" method="post">
          
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Judul</label>
                <input type="text" class="form-control" name="nama" value="{{$berita->nama}}" placeholder="Nama">
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" rows="4">{{$berita->deskripsi}}</textarea>
              </div>
              <div class="mb-3">
                <img src="{{ $berita->foto}}" alt="Foto saat ini" style="height: 200px">
              </div>
              <div class="mb-3">
                  <label for="foto" class="form-label">Upload Foto</label>
                  <input type="input" class="form-control" name="foto" placeholder="Foto" value="{{$berita->foto}}">
                </div>

            <footer>
             <button type="submit" class="btn btn-warning">Update</button>
            </footer>
          </form>
    </div>

</div>
</main>


</x-admin>




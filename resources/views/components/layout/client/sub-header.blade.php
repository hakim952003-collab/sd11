@php
    // Ambil data dari model Kontak
    $kontak = App\Models\Kontak::first(); // Mengambil data pertama dari tabel Kontak
@endphp

<div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>
                <i class="fa fa-map-marker"></i>
                {{ $kontak->alamat }} <!-- Mengambil kolom Alamat dari model Kontak -->
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<x-client>
    <section class="section main-banner" id="top" data-section="section1">
        <div class="bg-image" style="background-image: url('../assets/images/service-item-bg.jpg');"></div>
        
        <div class="video-overlay header-text">
          <div class="caption">
            <h2>Guru</h2>
            <h6>Beranda - Guru</h6>
          </div>
        </div>
      </section>



      <section class="berita-terbaru" id="meetings">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>Daftar Guru Tenaga Pengajar</h2> 
              </div>
            </div>
            <div class="container col-lg-10">
              <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
              @foreach ($data_guru as $guru)
                <div class="col">
                  <div class="meeting-item">
                    <div class="thumb">
                        <img src="{{ $guru->foto}}" alt="Foto Guru"  style="width: 100%; height: auto;">
                    </div>
                    <div class="down-content" style="text-align: center">
                      <h4>{{$guru->nama}}</h4>
                      <div class="info">
                        <div class="row">
                            <p style="text-align: center; margin: 0;">
                                {{$guru->jabatan}}
                              </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
    



</x-client>
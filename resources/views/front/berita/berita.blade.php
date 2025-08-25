<x-client>

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
      <div class="bg-image" style="background-image: url('../assets/images/service-item-bg.jpg');"></div>
      
      <div class="video-overlay header-text">
        <div class="caption">
          <h2>Berita</h2>
          <h6>Beranda - Berita</h6>
        </div>
      </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->
  
    <section class="berita-terbaru" id="meetings">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h2>Berita Terbaru</h2> 
            </div>
          </div>
          <div class="container col-lg-10">
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            @foreach ($data_berita as $berita)
              <div class="col">
                <div class="meeting-item">
                  <div class="thumb">
                    <a href="{{ url('berita', $berita->id) }}">
                      <img src="{{ $berita->foto}}" alt="New Lecturer Meeting" style="width: 100%; height: 200px; object-fit: cover;">
                    </a>
                  </div>
                  <div class="down-content">
                    <div class="date" style="margin-bottom: 15px;">
                      <h6>{{ $berita->created_at ? $berita->created_at->locale('id')->isoFormat('D MMMM YYYY') : '' }}</h6>
                    </div>
                    <a href="{{ url('berita', $berita->id) }}"><h4>{{ Str::limit($berita->nama, 48) }}</h4></a>
                    <p>{{ Str::limit($berita->deskripsi, 45) }}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
  
    {{-- <section class="our-facts">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-12">
                <h2>A Few Facts About Our University</h2>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-12">
                    <div class="count-area-content percentage">
                      <div class="count-digit">94</div>
                      <div class="count-title">Succesed Students</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="count-area-content">
                      <div class="count-digit">126</div>
                      <div class="count-title">Current Teachers</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-12">
                    <div class="count-area-content new-students">
                      <div class="count-digit">2345</div>
                      <div class="count-title">New Students</div>
                    </div>
                  </div> 
                  <div class="col-12">
                    <div class="count-area-content">
                      <div class="count-digit">32</div>
                      <div class="count-title">Awards</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-lg-6 align-self-center">
            <div class="video">
              <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
  
  </x-client>
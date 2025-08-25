<x-client>

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
      <div class="bg-image" style="background-image: url('../assets/images/service-item-bg.jpg');"></div>
      
      <div class="video-overlay header-text">
        <div class="caption">
          <h2>Detail Berita</h2>
          <h6>Beranda - Berita</h6>
        </div>
      </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->
  
    <section class="meetings-page" id="meetings" style="padding: 80px 0;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12">
                  <div class="meeting-single-item" style="max-width: 700px; margin: auto;">
                    <div class="thumb">
                      <div class="date">
                        <h6>{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('M') }}<span>{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d') }}</span></h6>
                      </div>
                      <a href=""><img src="{{ $berita->foto}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     <h4>{{ $berita->nama }}</h4>
                      <p class="">
                        {!! nl2br(e($berita->deskripsi)) !!}
                      </p>
            
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button-red">
                    <a href="/berita">Kembali Ke Daftar Berita</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="our-facts">
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
    </section>
  
  </x-client>
<x-client>
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner home-banner" id="top" data-section="section1">
        <div class="bg-image" style="background-image: url('../assets/images/background.jpeg');"></div>




        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption" style="text-align: left; ">
                            <h6>Selamat Datang</h6>
                            <h2>Situs Web Resmi</h2>
                            <h2>SDN 11 Delta Pawan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        <div class="item">
                            <div class="icon">
                                <img src="../assets/images/service-icon-01.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Pendidikan Terbaik</h4>
                                <p>Kami menyediakan pendidikan terbaik dengan pengajaran berkualitas dan dukungan penuh untuk setiap siswa.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="../assets/images/service-icon-02.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Guru Terbaik</h4>
                                <p>Guru terbaik kami berkomitmen untuk memberikan pengajaran yang inspiratif dan mendukung perkembangan setiap siswa.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="../assets/images/service-icon-03.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Murid Terbaik</h4>
                                <p>Murid terbaik kami menunjukkan dedikasi dan semangat belajar yang tinggi, menjadikan mereka teladan bagi yang lain.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="../assets/images/service-icon-02.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Online Meeting</h4>
                                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non
                                    vestibulum.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="../assets/images/service-icon-03.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Komunitas Belajar</h4>
                                <p>Kami membangun komunitas belajar yang inklusif, di mana siswa dan guru saling mendukung untuk mencapai kesuksesan.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Berita Terbaru</h2>
                    </div>
                </div>
                <div class="col-lg-10 container ">
                    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                        @foreach ($data_berita->take(3) as $berita)
                            <div class="col">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <a href="{{ url('berita', $berita->id) }}"><img src="{{ $berita->foto }}"
                                                style="width: 100%; height: 200px; object-fit: cover;"
                                                alt="New Lecturer Meeting"></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date" style="margin-bottom: 15px;">
                                            <h6>{{ $berita->created_at ? $berita->created_at->locale('id')->isoFormat('D MMMM YYYY') : '' }}
                                            </h6>
                                        </div>
                                        <a href="{{ url('berita', $berita->id) }}">
                                            <h4>{{ Str::limit($berita->nama, 48) }}</h4>
                                        </a>
                                        <p>{{ Str::limit($berita->deskripsi, 45) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12 text-center">
                            <div class="main-button-red">
                                <a href="/berita">Lihat Semua Berita</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--
<section class="apply-now" id="apply">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="row">
          <div class="col-lg-12">
            <div class="item">
              <h3>APPLY FOR BACHELOR DEGREE</h3>
              <p>You are allowed to use this edu meeting CSS template for your school or university or business. You can feel free to modify or edit this layout.</p>
              <div class="main-button-red">
                <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
            </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="item">
              <h3>APPLY FOR BACHELOR DEGREE</h3>
              <p>You are not allowed to redistribute the template ZIP file on any other template website. Please contact us for more information.</p>
              <div class="main-button-yellow">
                <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="accordions is-first-expanded">
          <article class="accordion">
              <div class="accordion-head">
                  <span>About Edu Meeting HTML Template</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>If you want to get the latest collection of HTML CSS templates for your websites, you may visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">Too CSS website</a>. If you need a working contact form script, please visit <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more info.</p>
                  </div>
              </div>
          </article>
          <article class="accordion">
              <div class="accordion-head">
                  <span>HTML CSS Bootstrap Layout</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna, maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                      Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>
                  </div>
              </div>
          </article>
          <article class="accordion">
              <div class="accordion-head">
                  <span>Please tell your friends</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur velit.<br><br>
                      Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                  </div>
              </div>
          </article>
          <article class="accordion last-accordion">
              <div class="accordion-head">
                  <span>Share this to your colleagues</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>
                      Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                  </div>
              </div>
          </article>
      </div>
      </div>
    </div>
  </div>
</section>
-->

    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2>Guru Kami</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        @foreach ($data_guru as $guru)
                            <div class="item" style="width: 80%;">
                                <img src="{{ $guru->foto }}" alt="Foto Guru" style="width: 100%; height: auto;">
                                <div class="down-content">
                                    <h4>{{ $guru->nama }}</h4>
                                    <div class="info">
                                        <div class="row">
                                            <p style="text-align: center;">
                                                {{ $guru->jabatan }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="main-button-red-guru">
                        <a href="/guru">Lihat Semua Guru</a>
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
                            <h2>Kontak Kami</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12 col-sm-10">
                                    <div class="count-area-content percentage" style="display: inline-block; ">
                                        <div class="alamat">Alamat</div>
                                        <div class="count-title">{{ $data_kontak->first()->alamat }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12 col-sm-10">
                                    <div class="count-area-content percentage" style="display: inline-block; ">
                                        <div class="alamat">Telepon</div>
                                        <div class="count-title">{{ $data_kontak->first()->phone }}</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-10">
                                    <div class="count-area-content percentage" style="display: inline-block; ">
                                        <div class="alamat">Email</div>
                                        <div class="count-title">{{ $data_kontak->first()->email }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        @if ($data_kontak->isNotEmpty())
                            {!! $data_kontak->first()->maps !!}
                        @else
                            <p>Data tidak tersedia.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-client>

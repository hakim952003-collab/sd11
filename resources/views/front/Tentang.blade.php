
<x-client>
  <section class="section main-banner" id="top" data-section="section1">
    <div class="bg-image" style="background-image: url('../assets/images/service-item-bg.jpg');"></div>

    <div class="video-overlay header-text">
      <div class="caption">
        <h2>Tentang Kami</h2>
        <h6>Beranda - Tentang</h6>
      </div>
    </div>
  </section>

  <!-- Tentang Sekolah Section -->
  <section class="upcoming-meetings" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h2>Tentang SDN 11 Delta Pawan</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="meeting-item">
            <div class="row">
              <div class="col-lg-6">
                <div class="thumb">
                  <img src="../assets/images/meeting-01.jpg" alt="Gedung Sekolah"
                    style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px;">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="down-content">
                  <h4>{{ $tentang->judul ?? 'SDN 11 Delta Pawan' }}</h4>
                  <p>
                    {{ $tentang->deskripsi ?? 'SDN 11 Delta Pawan adalah sekolah dasar negeri yang berlokasi di Delta Pawan,
                    Ketapang, Kalimantan Barat. Sekolah ini telah berkomitmen untuk memberikan pendidikan berkualitas
                    tinggi sejak didirikan.' }}
                  </p>
                  <p>
                    {{ $tentang->sejarah ?? 'Dengan visi menjadi sekolah unggulan yang menghasilkan generasi berkualitas,
                    SDN 11 Delta Pawan terus berinovasi dalam metode pembelajaran dan pengembangan karakter siswa.' }}
                  </p>
                  <br>
                  <div class="info">
                    <div class="row">
                      <div class="col-6"><span><i class="fa fa-calendar"></i> Berdiri Sejak: 1980</span></div>
                      <div class="col-6"><span><i class="fa fa-users"></i> Jumlah Siswa: 200+</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Visi & Misi Section -->
  <section class="our-courses" id="vision-mission">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h2>Visi & Misi</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="meeting-item">
            <div class="down-content text-center">
              <div class="icon">
                <i class="fa fa-eye" style="font-size: 48px; color: #f5a425;"></i>
              </div>
              <h4>Visi</h4>
              <p>"{{ $tentang->visi ?? 'Menjadi sekolah dasar unggulan yang menghasilkan generasi berkualitas, berakhlak mulia, dan siap menghadapi tantangan global.' }}"</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="meeting-item">
            <div class="down-content text-center">
              <div class="icon">
                <i class="fa fa-bullseye" style="font-size: 48px; color: #f5a425;"></i>
              </div>
              <h4>Misi</h4>
              @if($tentang && $tentang->misi)
                <div style="text-align: left; padding-left: 20px;">
                  {!! nl2br(e($tentang->misi)) !!}
                </div>
              @else
                <ul style="text-align: left; padding-left: 20px;">
                  <li>Menyelenggarakan pendidikan berkualitas dengan kurikulum nasional yang diperkaya</li>
                  <li>Mengembangkan karakter dan akhlak mulia siswa</li>
                  <li>Meningkatkan kompetensi guru secara berkelanjutan</li>
                  <li>Menyediakan sarana dan prasarana yang memadai</li>
                  <li>Membangun kerjasama dengan orang tua dan masyarakat</li>
                </ul>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!-- Fasilitas Section -->
   <section class="berita-terbaru" id="facilities">
     <div class="container">
       <div class="row">
         <div class="col-lg-12">
           <div class="section-heading">
             <h2>Fasilitas Sekolah</h2>
           </div>
         </div>
         <div class="container col-lg-10">
           <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
             @if($fitur && count($fitur) > 0)
               @foreach($fitur as $index => $fasilitas)
                 <div class="col">
                   <div class="meeting-item">
                     <div class="thumb">
                       <div class="icon" style="text-align: center; padding: 20px; background: #f5f5f5; border-radius: 10px;">
                         <i class="{{ $fasilitas->icon ?? 'fa fa-star' }}" style="font-size: 48px; color: #f5a425;"></i>
                       </div>
                     </div>
                     <div class="down-content">
                       <h4 style="text-align: center !important; margin-bottom: 15px;">{{ $fasilitas->nama }}</h4>
                       <p style="text-align: left !important; margin: 0;">{{ $fasilitas->deskripsi }}</p>
                     </div>
                   </div>
                 </div>
               @endforeach
             @else
               <!-- Fallback content if no facilities data -->
               <div class="col">
                 <div class="meeting-item">
                   <div class="thumb">
                     <div class="icon" style="text-align: center; padding: 20px; background: #f5f5f5; border-radius: 10px;">
                       <i class="fa fa-graduation-cap" style="font-size: 48px; color: #f5a425;"></i>
                     </div>
                   </div>
                   <div class="down-content">
                     <h4 style="text-align: center !important; margin-bottom: 15px;">Ruang Kelas</h4>
                     <p style="text-align: left !important; margin: 0;">Ruang kelas yang nyaman dan dilengkapi dengan peralatan pembelajaran modern untuk mendukung proses belajar mengajar yang efektif.</p>
                   </div>
                 </div>
               </div>

               <div class="col">
                 <div class="meeting-item">
                   <div class="thumb">
                     <div class="icon" style="text-align: center; padding: 20px; background: #f5f5f5; border-radius: 10px;">
                       <i class="fa fa-book" style="font-size: 48px; color: #f5a425;"></i>
                     </div>
                   </div>
                   <div class="down-content">
                     <h4 style="text-align: center">Perpustakaan</h4>
                     <p style="text-align: left">Perpustakaan dengan koleksi buku yang lengkap untuk mendukung minat baca dan literasi siswa.</p>
                   </div>
                 </div>
               </div>

               <div class="col">
                 <div class="meeting-item">
                   <div class="thumb">
                     <div class="icon" style="text-align: center; padding: 20px; background: #f5f5f5; border-radius: 10px;">
                       <i class="fa fa-futbol-o" style="font-size: 48px; color: #f5a425;"></i>
                     </div>
                   </div>
                   <div class="down-content">
                     <h4 style="text-align: center">Lapangan Olahraga</h4>
                     <p style="text-align: left">Lapangan olahraga yang luas untuk kegiatan fisik dan olahraga siswa dalam mengembangkan kebugaran jasmani.</p>
                   </div>
                 </div>
               </div>
             @endif
           </div>
         </div>
       </div>
     </div>
   </section>

  
</x-client>

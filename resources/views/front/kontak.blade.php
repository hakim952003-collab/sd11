<x-client>
    <section class="section main-banner" id="top" data-section="section1">
        <div class="bg-image" style="background-image: url('../assets/images/service-item-bg.jpg');"></div>
        
        <div class="video-overlay header-text">
          <div class="caption">
            <h2>Kontak Kami</h2>
            <h6>Beranda - Kontak</h6>
          </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section class="upcoming-meetings" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2>Informasi Kontak</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="meeting-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="down-content">
                                    <h4>SDN 11 Delta Pawan</h4>
                                    {{-- <p>Silakan hubungi kami untuk informasi lebih lanjut tentang sekolah, pendaftaran siswa baru, atau pertanyaan lainnya.</p> --}}
                                    
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <div class="contact-item">
                                                    <i class="fa fa-map-marker fa-2x" style="color: #f5a425; margin-right: 15px;"></i>
                                                    <div>
                                                        <h5>Alamat</h5>
                                                        <p>{{ $data_kontak->first()->alamat ?? 'Jl. Delta Pawan, Ketapang, Kalimantan Barat' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="contact-item">
                                                    <i class="fa fa-phone fa-2x" style="color: #f5a425; margin-right: 15px;"></i>
                                                    <div>
                                                        <h5>Telepon</h5>
                                                        <p>{{ $data_kontak->first()->phone ?? '0812-3456-7890' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="contact-item">
                                                    <i class="fa fa-envelope fa-2x" style="color: #f5a425; margin-right: 15px;"></i>
                                                    <div>
                                                        <h5>Email</h5>
                                                        <p>{{ $data_kontak->first()->email ?? 'sdn11deltapawan@gmail.com' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="contact-item">
                                                    <i class="fa fa-clock-o fa-2x" style="color: #f5a425; margin-right: 15px;"></i>
                                                    <div>
                                                        <h5>Jam Operasional</h5>
                                                        <p>Senin - Jumat: 07:00 - 14:00 WIB</p>
                                                        <p>Sabtu: 07:00 - 12:00 WIB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="thumb">
                                    @if ($data_kontak->isNotEmpty() && $data_kontak->first()->maps)
                                        <div class="maps-container">
                                            {!! $data_kontak->first()->maps !!}
                                        </div>
                                    @else
                                        <img src="../assets/images/meeting-02.jpg" alt="Lokasi Sekolah" style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px;">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Kontak Section -->
    {{-- <section class="services" id="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2>Kirim Pesan</h2>
                    </div>
                </div>
                <div class="col-lg-8 mx-auto">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subjek" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <style>
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        
        .contact-item i {
            margin-top: 5px;
        }
        
        .contact-item h5 {
            margin: 0 0 5px 0;
            color: #333;
            font-weight: 600;
        }
        
        .contact-item p {
            margin: 0;
            color: #666;
        }
        
        .maps-container {
            width: 100%;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .maps-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .contact-form {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #f5a425;
            box-shadow: 0 0 0 0.2rem rgba(245, 164, 37, 0.25);
        }
        
        .btn-primary {
            background-color: #f5a425;
            border-color: #f5a425;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #e0941a;
            border-color: #e0941a;
            transform: translateY(-2px);
        }
    </style>
</x-client>

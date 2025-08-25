<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <!--begin::Brand Link-->
      <a href="{{ url('/admin') }}" class="brand-link">
        <!--begin::Brand Image-->
        <img
          src="{{ asset('assets/images/tut.png') }}"
          alt="AdminLTE Logo"
          class="brand-image opacity-75 shadow"
        />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">SDN 11 Delta Pawan</span>
        <!--end::Brand Text-->
      </a>
      <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
      <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
          class="nav sidebar-menu flex-column"
          data-lte-toggle="treeview"
          role="menu"
          data-accordion="false"
        >
          <li class="nav-header">Menu Navigasi</li>
          <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link">
              <i class="nav-icon bi bi-house"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/berita') }}" class="nav-link">
              <i class="nav-icon bi bi-newspaper"></i>
              <p>Berita</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-person"></i>
              <p>
                Profil
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="nav-icon bi bi-person"></i>
                  <p>
                    Profil
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="nav-icon bi bi-info-circle"></i>
                  <p>Visi & Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Struktur</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/guru') }}" class="nav-link">
              <i class="nav-icon bi bi-people-fill"></i>
              <p>Guru</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/fitur') }}" class="nav-link">
              <i class="nav-icon bi bi-gear"></i>
              <p>Fitur Keunggulan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/tentang') }}" class="nav-link">
              <i class="nav-icon bi bi-gear"></i>
              <p>Tentang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/kontak') }}" class="nav-link">
              <i class="nav-icon bi bi-envelope-fill"></i>
              <p>Kontak Alamat</p>
            </a>
          </li>

        </ul>
        <!--end::Sidebar Menu-->
      </nav>
    </div>
    <!--end::Sidebar Wrapper-->
  </aside>
  <!--end::Sidebar-->
  
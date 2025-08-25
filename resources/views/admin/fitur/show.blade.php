<x-admin>
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Detail Fitur Keunggulan</h3>
                    </div>
                    <div class="col-6">
                        <div class="float-end">
                            <a href="{{ route('fitur.edit', $fitur->id) }}" class="btn btn-warning btn-sm me-2">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('fitur.index') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header-->

        <div class="container-fluid">
            @if(session('sukses'))
            <div class="alert alert-success" id="success-alert">
                {{ session('sukses') }}
            </div>
            <script>
                setTimeout(function() {
                    var alert = document.getElementById('success-alert');
                    if (alert) {
                        alert.style.display = 'none';
                    }
                }, 5000);
            </script>
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Informasi Fitur Keunggulan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <strong>Nama Fitur:</strong>
                                </div>
                                <div class="col-sm-9">
                                    {{ $fitur->nama }}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <strong>Deskripsi:</strong>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0">{{ $fitur->deskripsi }}</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <strong>Icon:</strong>
                                </div>
                                <div class="col-sm-9">
                                    <div class="d-flex align-items-center">
                                        <i class="{{ $fitur->icon }}" style="font-size: 24px; color: #007bff; margin-right: 10px;"></i>
                                        <span class="text-muted">{{ $fitur->icon }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <strong>Tanggal Dibuat:</strong>
                                </div>
                                <div class="col-sm-9">
                                    {{ $fitur->created_at ? $fitur->created_at->format('d M Y H:i:s') : 'N/A' }}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <strong>Terakhir Update:</strong>
                                </div>
                                <div class="col-sm-9">
                                    {{ $fitur->updated_at ? $fitur->updated_at->format('d M Y H:i:s') : 'N/A' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Preview Icon</h5>
                        </div>
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="{{ $fitur->icon }}" style="font-size: 64px; color: #007bff;"></i>
                            </div>
                            <div class="text-muted">
                                {{ $fitur->icon }}
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">
                            <h5 class="card-title">Aksi</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <a href="{{ route('fitur.edit', $fitur->id) }}" class="btn btn-warning">
                                    <i class="fa fa-edit"></i> Edit Fitur
                                </a>
                                <form action="{{ route('fitur.destroy', $fitur->id) }}" method="POST" class="d-grid">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" 
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus fitur ini?')">
                                        <i class="fa fa-trash"></i> Hapus Fitur
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin>

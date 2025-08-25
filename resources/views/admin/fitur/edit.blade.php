<x-admin>
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Edit Fitur Keunggulan</h3>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('fitur.index') }}" class="btn btn-secondary float-end btn-sm">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
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

            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Data Fitur Keunggulan</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('fitur.update', $fitur->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Fitur <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                           name="nama" id="nama" value="{{ old('nama', $fitur->nama) }}" 
                                           placeholder="Masukkan nama fitur keunggulan" required>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $error }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                              name="deskripsi" id="deskripsi" rows="4" 
                                              placeholder="Masukkan deskripsi fitur keunggulan" required>{{ old('deskripsi', $fitur->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $error }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="icon" class="form-label">Icon (FontAwesome Class) <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="{{ $fitur->icon }}"></i></span>
                                        <input type="text" class="form-control @error('icon') is-invalid @enderror" 
                                               name="icon" id="icon" value="{{ old('icon', $fitur->icon) }}" 
                                               placeholder="fa fa-star" required>
                                    </div>
                                    <small class="form-text text-muted">
                                        Contoh: fa fa-graduation-cap, fa fa-book, fa fa-desktop, fa fa-users, fa fa-chart-line
                                    </small>
                                    @error('icon')
                                        <div class="invalid-feedback">{{ $error }}</div>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('fitur.index') }}" class="btn btn-secondary">
                                        <i class="fa fa-times"></i> Batal
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save"></i> Update Fitur
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Preview Icon</h5>
                        </div>
                        <div class="card-body text-center">
                            <div id="icon-preview" class="mb-3">
                                <i class="{{ $fitur->icon }}" style="font-size: 48px; color: #007bff;"></i>
                            </div>
                            <div id="icon-text" class="text-muted">
                                {{ $fitur->icon }}
                            </div>
                            <div id="icon-status" class="mt-2">
                                <small class="text-muted">Status: <span id="status-text">Loading...</span></small>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">
                            <h5 class="card-title">Informasi</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Dibuat:</strong> {{ $fitur->created_at ? $fitur->created_at->format('d M Y H:i') : 'N/A' }}
                            </p>
                            <p class="card-text">
                                <strong>Terakhir Update:</strong> {{ $fitur->updated_at ? $fitur->updated_at->format('d M Y H:i') : 'N/A' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Simple icon preview
        document.addEventListener('DOMContentLoaded', function() {
            const iconInput = document.getElementById('icon');
            const preview = document.getElementById('icon-preview');
            const iconText = document.getElementById('icon-text');
            const statusText = document.getElementById('status-text');
            
            if (iconInput && preview && iconText && statusText) {
                
                function updatePreview() {
                    const iconClass = iconInput.value.trim();
                    
                    if (!iconClass) {
                        preview.innerHTML = '<span style="font-size: 48px; color: #6c757d;">?</span>';
                        iconText.textContent = 'Masukkan icon';
                        statusText.textContent = 'Input kosong';
                        statusText.className = 'text-muted';
                        return;
                    }
                    
                    if (iconClass.includes('fa-')) {
                        preview.innerHTML = `<i class="${iconClass}" style="font-size: 48px; color: #007bff;"></i>`;
                        iconText.textContent = iconClass;
                        statusText.textContent = 'Icon valid';
                        statusText.className = 'text-success';
                    } else {
                        preview.innerHTML = '<span style="font-size: 48px; color: #ffc107;">⚠</span>';
                        iconText.textContent = 'Format tidak valid';
                        statusText.textContent = 'Format harus mengandung "fa-"';
                        statusText.className = 'text-warning';
                    }
                }
                
                iconInput.addEventListener('input', updatePreview);
                updatePreview();
                
                setTimeout(() => {
                    const hasFA = document.querySelector('link[href*="fontawesome"]');
                    statusText.textContent = hasFA ? 'FontAwesome tersedia' : 'FontAwesome tidak terdeteksi';
                    statusText.className = hasFA ? 'text-success' : 'text-warning';
                }, 1000);
            }
        });
    </script>
</x-admin>


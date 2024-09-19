<x-layout>
  <div class="container mt-4">
    <h2 class="text-center mb-4">Tambah Data Penerima Bansos</h2>
    <form action="{{ route('masyarakat.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama :</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="nik" class="form-label">NIK :</label>
            <input type="text" id="nik" name="nik" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="nokk" class="form-label">NOKK :</label>
            <input type="text" id="nokk" name="nokk" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="fotoktp" class="form-label">Foto KTP :</label>
            <input type="file" id="fotoktp" name="fotoktp" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="fotokk" class="form-label">Foto KK :</label>
            <input type="file" id="fotokk" name="fotokk" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="umur" class="form-label">Umur :</label>
            <input type="number" id="umur" name="umur" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis Kelamin :</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="Laki-laki" name="jenis_kelamin" value="Laki-laki" required>
              <label class="form-check-label" for="Laki-laki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="Perempuan" name="jenis_kelamin" value="Perempuan" required>
              <label class="form-check-label" for="Perempuan">Perempuan</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="alasan" class="form-label">Alasan :</label>
            <textarea id="alasan" name="alasan" class="form-control" required></textarea>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi :</label>
            <select id="provinsi" name="provinsi" class="form-select" onchange="getKabupaten()" required>
              <option value="">Pilih Provinsi</option>
              <!-- Options will be populated dynamically -->
            </select>
          </div>
          <div class="mb-3">
            <label for="kabupaten" class="form-label">Kab/Kota :</label>
            <select id="kabupaten" name="kab_kota" class="form-select" onchange="getKecamatan()" required>
              <option value="">Pilih Kabupaten</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan :</label>
            <select id="kecamatan" name="kecamatan" class="form-select" onchange="getKelurahan()" required>
              <option value="">Pilih Kecamatan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="kelurahan" class="form-label">Kelurahan/Desa :</label>
            <select id="kelurahan" name="kelurahan_desa" class="form-select" required>
              <option value="">Pilih Kelurahan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat :</label>
            <textarea id="alamat" name="alamat" class="form-control" required></textarea>
          </div>
          <div class="mb-3">
            <label for="rt" class="form-label">RT/RW :</label>
            <div class="d-flex">
              <input type="number" id="rt" name="rt" class="form-control me-2" placeholder="RT" required>
              <input type="number" id="rw" name="rw" class="form-control" placeholder="RW" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="penghasilan_sebpandemi" class="form-label">Penghasilan Sebelum Pandemi :</label>
            <input type="number" id="penghasilan_sebpandemi" name="penghasilan_sebpandemi" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="penghasilan_sudpandemi" class="form-label">Penghasilan Sesudah Pandemi :</label>
            <input type="number" id="penghasilan_sudpandemi" name="penghasilan_sudpandemi" class="form-control" required>
          </div>
        </div>
      </div>
      
      <div class="text-center">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>
  </div>
</x-layout>

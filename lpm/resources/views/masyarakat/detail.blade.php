<x-layout>
  <div class="container mt-5">
    <div class=" text-center">
      <h2>Detail Data Masyarakat</h2>
    </div>
    <div class="">
    <div class="">
        <div class="row">
          <div class="col-md-6">
            <p><strong>Nama:</strong> {{ $masya->nama }}</p>
            <p><strong>NIK:</strong> {{ $masya->nik }}</p>
            <p><strong>Nomor KK:</strong> {{ $masya->nokk }}</p>
            <p><strong>Umur:</strong> {{ $masya->umur }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $masya->jenis_kelamin }}</p>
            <p><strong>Provinsi:</strong> {{ $masya->provinsi }}</p>
            <p><strong>Kab/Kota:</strong> {{ $masya->kab_kota }}</p>
            <p><strong>Kecamatan:</strong> {{ $masya->kecamatan }}</p>
            <p><strong>Kelurahan/Desa:</strong> {{ $masya->kelurahan_desa }}</p>
            <p><strong>Alamat:</strong> {{ $masya->alamat }}</p>
            <p><strong>RT:</strong> {{ $masya->rt }}</p>
            <p><strong>RW:</strong> {{ $masya->rw }}</p>
            <p><strong>Penghasilan Sebelum Pandemi:</strong> {{ $masya->penghasilan_sebpandemi }}</p>
            <p><strong>Penghasilan Setelah Pandemi:</strong> {{ $masya->penghasilan_sudpandemi }}</p>
            <p><strong>Alasan:</strong> {{ $masya->alasan }}</p>
          </div>

          <div class="col-md-6">
            <p><strong>Foto KTP:</strong></p>
            <a href="{{ asset('storage/' . $masya->fotoktp) }}" target="_blank">
              <img src="{{ asset('storage/' . $masya->fotoktp) }}" alt="Foto KTP" class="img-fluid img-thumbnail" width="300">
            </a>

            <p class="mt-3"><strong>Foto KK:</strong></p>
            <a href="{{ asset('storage/' . $masya->fotokk) }}" target="_blank">
              <img src="{{ asset('storage/' . $masya->fotokk) }}" alt="Foto KK" class="img-fluid img-thumbnail" width="300">
            </a>
          </div>
        </div>
      </div>

      <div class="card-footer text-center">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</x-layout>

<x-layout>
  <div class="container mt-4">
    <h2 class="text-center mb-4">Data Masyarakat</h2>
    @if(session('message'))
    <div class="alert alert-success w-50">
       {{ session('message') }}
    </div>
    @endif
    <table class="table table-striped table-bordered">
      <thead class="table-success">
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>NIK</th>
          <th>Umur</th>
          <th>Jenis Kelamin</th>
          <th>Provinsi</th>
          <th>Kab/Kota</th>
          <th>Kecamatan</th>
          <th>Kelurahan/Desa</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($masyarakat as $masya)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $masya->nama }}</td>
          <td>{{ $masya->nik }}</td>
          <td>{{ $masya->umur }}</td>
          <td>{{ $masya->jenis_kelamin }}</td>
          <td>{{ $masya->provinsi }}</td>
          <td>{{ $masya->kab_kota }}</td>
          <td>{{ $masya->kecamatan }}</td>
          <td>{{ $masya->kelurahan_desa }}</td>
          <td>
            <a href="{{ route('masyarakat.show', $masya->id) }}" class="btn btn-success btn-sm">Detail</a>
            <a href="{{ route('masyarakat.hapus', $masya->id) }}" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-layout>

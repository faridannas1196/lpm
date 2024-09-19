// Ambil data provinsi
fetch('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json')
  .then(response => response.json())
  .then(data => {
    let provinsiSelect = document.getElementById('provinsi');
    data.forEach(provinsi => {
      let option = document.createElement('option');
      option.value = provinsi.id;
      option.text = provinsi.name;
      provinsiSelect.appendChild(option);
    });
  })
  .catch(error => console.log(error));

// Ambil kabupaten berdasarkan provinsi
function getKabupaten() {
  let provinsiId = document.getElementById('provinsi').value;
  fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsiId}.json`)
    .then(response => response.json())
    .then(data => {
      let kabupatenSelect = document.getElementById('kabupaten');
      kabupatenSelect.innerHTML = '<option value="">Pilih Kabupaten</option>'; // Reset dropdown
      data.forEach(kabupaten => {
        let option = document.createElement('option');
        option.value = kabupaten.id;
        option.text = kabupaten.name;
        kabupatenSelect.appendChild(option);
      });
    })
    .catch(error => console.log(error));
}

// Ambil kecamatan berdasarkan kabupaten
function getKecamatan() {
  let kabupatenId = document.getElementById('kabupaten').value;
  fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kabupatenId}.json`)
    .then(response => response.json())
    .then(data => {
      let kecamatanSelect = document.getElementById('kecamatan');
      kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>'; // Reset dropdown
      data.forEach(kecamatan => {
        let option = document.createElement('option');
        option.value = kecamatan.id;
        option.text = kecamatan.name;
        kecamatanSelect.appendChild(option);
      });
    })
    .catch(error => console.log(error));
}

// Ambil kelurahan/desa berdasarkan kecamatan
function getKelurahan() {
  let kecamatanId = document.getElementById('kecamatan').value;
  fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecamatanId}.json`)
    .then(response => response.json())
    .then(data => {
      let kelurahanSelect = document.getElementById('kelurahan');
      kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>'; // Reset dropdown
      data.forEach(kelurahan => {
        let option = document.createElement('option');
        option.value = kelurahan.id;
        option.text = kelurahan.name;
        kelurahanSelect.appendChild(option);
      });
    })
    .catch(error => console.log(error));
}

$('.message a').click(function(){
  $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

$(document).ready(function() {
  $.getJSON('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json', function(data) {
      $('#provinsi').empty().append('<option>Pilih Provinsi</option>');
      $.each(data, function(key, value) {
          $('#provinsi').append('<option value="'+value.name+'">'+value.name+'</option>');
      });
  });
});
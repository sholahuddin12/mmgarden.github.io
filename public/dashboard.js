// Fungsi untuk penjumlahan real-time dan memformat angka dengan 2 angka di belakang koma
function numberFormatWithMeter(value, decimals) {
    const formattedValue = parseFloat(value).toFixed(decimals);
    return `${formattedValue} m`;
}

const panjang = document.querySelector('#panjang');
const lebar = document.querySelector('#lebar');
const total = document.querySelector('#total');
const kapasitas = document.querySelector('#kapasitas');

function restrictToNumbers() {
    this.value = this.value.replace(/[^\d.]/g, '');

    // Mencegah beberapa titik (.) dalam satu angka
    const parts = this.value.split('.');
    if (parts.length > 2) {
        this.value = parts[0] + '.' + parts.slice(1).join('');
    }
}

panjang.addEventListener('input', restrictToNumbers);
lebar.addEventListener('input', restrictToNumbers);
kapasitas.addEventListener('input', restrictToNumbers);

panjang.addEventListener('input', updateTotal);
lebar.addEventListener('input', updateTotal);
  
function updateTotal() {
    const panjangValue = panjang.value;
    const lebarValue = lebar.value;
    
    fetch(`/database/jumlah?panjang=${panjangValue}&lebar=${lebarValue}`)
        .then(response => response.json())
        .then(data => {
            // Menetapkan nilai total ke elemen total
            total.value = numberFormatWithMeter(data.total, 2);
        })
        .catch(error => console.error('Error:', error));
}


// format karakter rupiah
function formatRupiah(value, prefix = '') {
    return prefix + new Intl.NumberFormat('id-ID').format(value);
};

document.addEventListener('DOMContentLoaded', function() {
    const tunaiInput = document.getElementById('tunai');
    const cicilInput = document.getElementById('cicil');
    const bookingInput = document.getElementById('booking');

    tunaiInput.addEventListener('input', function() {
        formatRupiah(this);
    });

    cicilInput.addEventListener('input', function() {
        formatRupiah(this);
    });

    bookingInput.addEventListener('input', function() {
        formatRupiah(this);
    });

    function formatRupiah(input) {
        // Menghapus karakter selain angka
        let sanitizedValue = input.value.replace(/[^0-9]/g, '');

        // Memformat nilai rupiah
        input.value = 'Rp. ' + new Intl.NumberFormat('id-ID').format(sanitizedValue);
    }
});
  
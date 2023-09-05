@extends('layouts.main')

@section('container')
    
{{-- Jumbotron --}}
<div class="jumbotron3 d-flex align-items-center">
    <div class="grid container text-center ">
        <div class="d-beranda mx-auto">
            <h1>Panduan Pemesanan Makam dan Ziarah</h1>
            <h1><b>MADINAH MEMORIAL GARDEN</b></h1>
        </div>
    </div>
</div>
<div class="panduan0 pb-4">
    <div class="container">
        <div class="row justify-content-center text-center">
            <h1>Terdapat Beberapa Pesanan yang Dapat dilakukan :</h1>
            <div class="col-lg-6 col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Masa Berduka
                    </div>
                    <div class="card-body">
                      <p class="card-text">Merupakan panduan untuk anda yang sedang berduka dan membutuhkan makam dengan se-segera mungkin. Kami memberikan layanan 24 jam untuk membantu kebutuhan kavling makam disaat kedukaan terjadi. Kami akan membantu mengurus persiapan prosesi pemakaman mulai dari persiapan penggalian, memonitor perjalanan jenazah dari rumah duka menuju Makam Madinah Memorial Garden sampai pelaksanaan prosesi pemakaman selesai.</p>
                      <a href="#panduan1" class="btn btn-primary">Menuju Panduan</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Masa Persiapan
                    </div>
                    <div class="card-body">
                      <p class="card-text">Merupakan panduan untuk anda yang ingin membuat persiapan di masa mendatang. Kami akan memberikan penjelasan detail mengenai produk kavling makam sesuai dengan kebutuhan.</p>
                      <a href="#panduan2" class="btn btn-primary">Menuju Panduan</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Pemindahan Makam Lama
                    </div>
                    <div class="card-body">
                      <p class="card-text">Merupakan panduan untuk anda yang memilki suatu kendala atau alasan tertentu untuk memindahkan makam lama ke makam Madinah Memorial Garden.</p>
                      <a href="#panduan3" class="btn btn-primary">Menuju Panduan</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

<section id="panduan1" class="panduan1 mt-3">
    <div class="container pt-1">
        <div class="card">
            <div class="card-header">
                <h2>Panduan Pemesanan Kavling Saat Kedukaan</h2>
            </div>
            <div class="card-body">
                <p>1. <a href="https://api.whatsapp.com/send?phone={{ $noWA }}" class="whatsapp">Hubungi Kami</a> (24 jam) untuk menginformasikan kedukaan dan kami akan memberikan perincian harga dan unit kavling yang tersedia.</p>
                <p>2. Tentukan <a href="/listkavling">type kavling</a> makam sesuai kebutuhan</p>
                <p>3. Tentukan skema pembayaran: Tunai atau cicilan.</p>
                <p>4. Berikan foto KTP & NPWP, no.HP atau WA, alamat surat menyurat dan alamat email.</p>
                <p>5. Lakukan transfer pembayaran melalui rekening virtual account dan check notifikasi pembayaran melalui no.WA yang terdaftar.</p>
                <p>6. anda akan mendapatkan notifikasi fitur berupakan tautan link akun customer untuk melihat detail pemesanan, rincian pembayaran dan denak lokasi makam yang terlah dipesan.</p>
                <p>7. Siapkan data alhamrum/mah seperti foto KTP, KK, SK kematian dari RS/ RT/ RW.</p>
                <p>8. Informasikan no.HP / WA penanggungjawab dari keluarga yang dapat dihubungi oleh kami.</p>
                <p>9. Informasikan jam pemakaman dan alamat rumah duka.</p>
                <p>10. Lakukan pengisian form pemesanan kavling makam dan berkas pemakaman yang dilakukan oleh keluarga inti setelah prosesi pemakaman selesai.</p>
                <p>11. Kwitansi, video pemakaman dan sertifikat lahan makam akan dikirimkan ke alamat surat setelah diterbitkan</p>
            </div>
          </div>   
    </div>
</section>
<section id="panduan2" class="panduan2 mt-3 py-4">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Panduan Pemesanan Kavling Untuk Persiapan</h2>
            </div>
            <div class="card-body">
                <p>1. <a href="https://api.whatsapp.com/send?phone={{ $noWA }}" class="whatsapp">Hubungi Kami</a> untuk mengetahui harga dan denah unit kavling yang tersedia.</p>
                <p>2. Tentukan <a href="/listkavling">type kavling</a> makam sesuai kebutuhan.</p>
                <p>3. Tentukan skema pembayaran: tunai atau cicilan</p>
                <p>4. Berikan foto KTP & NPWP, no.HP atau WA, alamat surat menyurat dan alamat email.</p>
                <p>5. Lakukan transfer pembayaran melalui rekening virtual account dan check notifikasi pembayaran melalui no.WA yang terdaftar.</p>
                <p>6. anda akan mendapatkan notifikasi fitur berupakan tautan link akun customer untuk melihat detail pemesanan, rincian pembayaran dan denak lokasi makam yang terlah dipesan.</p>
                <p>7. Mengisi dan menandatangani form pemesanan kavling makam.</p>
                <p>8. Kwitansi pembayaran akan dikirimkan ke alamat surat setelah diterbitkan.</p>
                <p>9. Sertifikat pemanfaatan lahan makam akan diterbitkan maksimal satu bulan setelah pelunasan.</p>
            </div>
          </div> 
    </div>
</section>
<section id="panduan3" class="panduan3 mt-3">
    <div class="container pt-1">
        <div class="card">
            <div class="card-header">
                <h2>Panduan Untuk Pemindahan Makam</h2>
            </div>
            <div class="card-body">
                <p>1. <a href="https://api.whatsapp.com/send?phone={{ $noWA }}" class="whatsapp">Hubungi Kami</a> untuk menginformasikan lokasi kavling makam yang akan digunakan serta detail lokasi makam lama (TPU/Tanah wakaf) yang akan dipindahkan.</p>
                <p>2. Juka belum memilki kavling makam dapat melakukan pemesanan kavling makam terlebih dahulu.</p>
                <p>3. IPTM(Izin Penggunaan Tanah Makam) asli yang masih aktif.</p>
                <p>4. KTP dan KK pemilik IPTM</p>
                <p>5. Membuat surat kuasa bermaterai untuk administrasi pemindahan makam.</p>
                <p>6. Surat keterangan kematian & Akta kematian jenazah yang akan dipindahkan.</p>
                <p>7. KTP pemilik kavling yangg akan digunakan & No.HP/WA penanggungjawab yang dapat dihubungi.</p>
                <p>8. IPTM asli & surat kuasa beserta fotocopy berkas pendukung dikirimkan ke alamat kantor Pemakaman Madinah Memorial Garden.</p>
                <p>9. Biaya final pemindahan akan diinformasikan setelah surfey ke tempat pemakaman terkait.</p>
                <p>10. Pengisian berkas pemakaman relokasi dilakukan oleh keluarga / penanggungjawab setelah prosesi pemakaman selesai.</p>
            </div>
          </div>
    </div>
</section>
@endsection
@extends('layouts.main')

@section('container')

{{-- Jumbotron --}}
<div class="jumbotron1 d-flex align-items-center">
    <div class="grid container text-center ">
        <div class="d-beranda mx-auto ">
            <h1><b>PEMAKAMAN ISLAMI</b></h1>
            <h2>Berdasarkan <b>Syariat Islam</b> dan dikelola secara <b>Profesional</b></h2>
            <br>
            <h2>Berlokasi di <b>Kabupaten Bogor</b></h2>
            <a href="/listkavling" class="btn rounded-pill mt-4">CEK SEKARANG</a>
        </div>
    </div>
</div>

{{-- Isi --}}
<div class="container text-center mt-3">
    <h1>Alasan Utama Memilih Pemakaman Islami </h1>
    <h1><b>Madinah Memorial Garden</b></h1>
    <div class="container text-center">
        <div class="row justify-content-evenly me-0 me-lg-5">
            <br>
          <div class="col-12 col-lg-5 bg-p p-3 rounded">
            <h2><b>Berdasarkan Syariat Islam</b></h2>
            <h4 class="">Pemakaman Islam Madinah  Memori Garden Kab Bogor dikelola berdasarkan syariat Islam, mulai dari penanganan jenazah sebelum dimakamkan hingga perawatan dan penjagaan makam pasca pemakaman, seluruhnya mengikuti aturan Islam.</h4>
          </div>
          <div class="col-12 col-lg-5 bg-s p-3 rounded mt-2 mt-lg-0">
            <h2><b>Dikelola Secara Profesional</b></h2>
            <h4 class="text-justify">Selain syar’i, Pemakaman Islam  Madinah Memori Garden Kab Bogor juga dikelola secara profesional sehingga menjadi salah satu taman pemakaman di Kab Bogor yang terbaik.</h4>
          </div>
        </div>
    </div>
</div>

<div class="masjid1 my-5"></div>

{{-- Accordion --}}
<div class="container">
    <h1></h1>
    <div class="accordion" id="accordionExample">
        {{-- 1 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <strong>Pemakaman Khusus untuk Muslim</strong>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Pemakaman  Madinah Memorial Garden diperuntukkan khusus untuk muslim sehingga tidak usah khawatir akan bercampur dengan pemakaman non muslim. Hal tersebut tentunya sesuai dengan ajaran Islam yang melarang untuk menyatukan pemakaman antara warga muslim dan non muslim</p>
            </div>
          </div>
        </div>
        {{-- 2 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <strong>Dikelola oleh PT BOGOR TIMUR PERKASA Dan YAYASAN ISTANA YATIM IMCM</strong>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>PT BOGOR TIMUR PERKASA merupakan pengelola  Madinah Memori Garden. Pembangunan pemakaman Islam  Madinah Memorial Garden bertujuan untuk melayani umat Islam, baik dalam pemulasaraan dan pemakaman jenazah sekaligus sarana sosialisasi kepada masyarakat tentang tata cara pemakaman jenazah sesuai anjuran agama Islam.</p>
            </div>
          </div>
        </div>
        {{-- 3 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <strong>Menyediakan Ustadz Khusus</strong>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Madinah Memoril Garden menyediakan ustadz khusus untuk membimbing dan melayani Anda selama proses pemakaman, mulai dari memandikan jenazah hingga proses pemakaman berakhir. Jadi, para kerabat dapat mengikuti prosesi pemakaman dengan baik dan benar sesuai etika Islam.</p>
            </div>
          </div>
        </div>
        {{-- 4 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
               <strong> Lokasi yang Strategis</strong>
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Berlokasi di Bogor Timur, tepatnya di Transyogy Jakarta - Puncak membuat lokasi  Madinah Memori Garden sangat mudah untuk Anda jangkau, terutama jika ingin datang untuk berziarah.</p>
            </div>
          </div>
        </div>
        {{-- 5 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <strong>Memiliki Sertifikat Arah Kiblat</strong>
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Sertifikat arah kiblat oleh Kementrian Agama sangat menjamin kepastian posisi makam yang sesuai dengan syari’at Islam. Dam tradisi muslim, jenazah ketika dimakamkan harus menghadap ke arah kiblat sehingga sertifikat arah kiblat ini sangat membantu terjaminnya mutu pemakaman menurut ajaran Islam.</p>
            </div>
          </div>
        </div>
        {{-- 6 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
               <strong>Menyediakan Layanan dan Fasilitas Terbaik</strong> 
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Pemakaman  Madinah Memorial Garden akan membantu Anda untuk menyiapkan makam dan memberikan layanan terbaik untuk Anda selama proses pemakaman berlangsung, mulai dari memandikan, mengkafani, menunaikan shat jenazah, dan memberangkatkan ke lokasi pemakaman hingga proses pemakaman selesai. Tentunya layanan tersebut sesuai dengan syariat Islam, jadi tidak perlu khawatir.
                Selain itu, fasilitas pemakaman  Madinah Memorial Grden juga sangat lengkap, seperti masjid yang nyaman, toilet yang bersih, parkiran yang luas, pemandangan hamparan rumput yang asri, playground, lounge, dan lainnya.</p>
            </div>
          </div>
        </div>
        {{-- 7 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <strong>Menyediakan Walkaway Track</strong>
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Tersedianya walkaway track sangat memudahkan pengunjung untuk berziarah tanpa takut mengganggu tempat peristirahatan yang lain, seperti menginjak, melangkahi, maupun menduduki makam yang lain.</p>
            </div>
          </div>
        </div>
        {{-- 8 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                <strong>Memiliki Landscape Indah</strong>
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Pemakaman di sana mengusung konsep taman yang asri dan bersih, sehingga tidak memberikan kesan menyeramkan, namun malah merasa nyaman dan senang ketika datang berziarah, terutama bagi anak-anak.</p>
            </div>
          </div>
        </div>
        {{-- 9 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              <strong> Perawatan Rutin</strong> 
            </button>
          </h2>
          <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Madinah Memoril Garden melakukan perawatan area kavling pemakaman setiap hari guna memastikan tidak ada sampah, rumput liar, atau daun kering yang berserakan. Tujuannya adalah agar makam selu terlihat rapi, bersih, dan tenang sehingga peziarah dapat merasa nyaman.</p>
            </div>
          </div>
        </div>
        {{-- 10 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                <strong>Lokasi yang Tertata</strong>
            </button>
          </h2>
          <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Pemakaman di  Madinah Memoril Garden tertata dengan sebegitu apiknya, rapi, dan teratur. Bahkan setiap makam akan terdapat nomor jelas sehingga mudah untuk ditemukan. Dengan begitu, Anda tidak perlu khawatir tertukar, karena satu unit makam hanya khusus untuk satu orang/keluarga.</p>
            </div>
          </div>
        </div>
        {{-- 11 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
               <strong> Menyediakan Sertifikat Pemanfaatan Lahan Makam</strong>
            </button>
          </h2>
          <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Setiap pembeli lahan Madinah Memoril Garden akan memperoleh sertifikat pemanfaatan lahan makam dari PR BOGOR TIMUR PERKASA bertujuan agar lahan kuburan yang telah Anda beli terjamin dan secara pasti tidak akan hilang atau tertumpuk dengan kuburan yang lainnya.</p>
            </div>
          </div>
        </div>
        {{-- 12 --}}
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                <strong>Bebas Biaya Pemeliharaan</strong>
            </button>
          </h2>
          <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Pembelian lahan di pemakaman  Madinah Memorial Garden bersifat on time payment, artinya Anda hanya wajib membayar di muka. Setelahnya Anda akan terbebas dari biaya </p>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="lokasia1 my-5"></div>

<div class="container text-center">
    <h1><strong>Q & A</strong></h1>

    {{-- Accordion2 --}}
    <div class="accordion text-start" id="accordionExample2">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSatu" aria-expanded="true" aria-controls="collapseSatu">
                <strong>•	Apa Saja Syarat Pemakaman yang sesuai Syariat Islam?</strong>
            </button>
          </h2>
          <div id="collapseSatu" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
                •	Menghadap kiblat <br>
                •	Lahan makam Muslim tidak boleh bercampur dengan makam non-Muslim <br>
                •	Hanya dari gundukan tanah dan tidak boleh dibangun apapun di atasnya <br>
                •	Ada batu nisan sebagai penanda <br>
                •	Makam tidak boleh dilangkahi, diduduki, atau diinjak saat dikunjungi <br>
                •	Kedalaman makam maksimal 1.5 meter <br>
                •	Tidak boleh menumpuk jenazah dalam satu makam (berdasarkan Fatwa MUI DKI Jakarta Tahun 2011) <br>
                •	Tidak ada unsur tabzir dan israf dalam proses pembelian makam (berdasarkan Fatwa MUI No. 9 Tahun 2014)
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDua" aria-expanded="false" aria-controls="collapseDua">
               <strong> •	Apa Saja Pelayanan yang Didapatkan dari Madinah Memorial Gerden?</strong>
            </button>
          </h2>
          <div id="collapseDua" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
                Anda akan mendapatkan fasilitas yang mewah dan pelayanan terbaik selama 24 jam, seperti masjid, musala, toilet dan tempat parkir. Kami menyediakan lahan pemakaman hingga persiapan prosesi pemakaman yang khidmat dan dipimpin oleh ustad. Perawatan makam juga dilakukan dengan rutin dan Anda tidak perlu lagi memikirkan biaya perawatan rumput setiap bulan atau tahunnya. Setiap unit makam dilengkapi dengan nomor alamat sehingga mudah ditemukan saat dikunjungi.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTiga" aria-expanded="false" aria-controls="collapseTiga">
               <strong> •	Mengapa Harus Memilih Pemakaman Madinah Memorial Gerden?</strong>
            </button>
          </h2>
          <div id="collapseTiga" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
                Madinah Memorial Gerden adalah area pemakaman di Kabupaten Bogor, Jawa Barat yang memenuhi syariat Islam dalam proses pengelolaannya. Selain itu, tim kami juga senantiasa merawat setiap makam sehingga tidak ditumbuhi rumput dan asri saat dikunjungi. Area pemakaman kami dikelilingi oleh landscape pemandangan yang indah dan area wisata, sehingga anak-anak senang diajak berziarah ke makam keluarga besarnya.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmpat" aria-expanded="false" aria-controls="collapseEmpat">
              <strong>  •	Bagaimana Cara Mengunjungi Madinah Memorial Gerden?</strong>
            </button>
          </h2>
          <div id="collapseEmpat" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
                Mudah sekali. Anda hanya perlu melewati Jalan Transyogy Cibubur Cianjur dalam perjalanan lewat jalan alternative menuju Puncak dan Anda sudah tiba di Madinah Memorial Gerden dan , -+ 40 menit dari Madinah Memorial Gerden sampai di Taman Bunga Cipanas Puncak. Lokasi kami sangat strategis, sehingga pengunjung dari Jabodetabek dan sekitarnya dengan mudah menjangkau Madinah Memorial Gerden untuk berziarah.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLima" aria-expanded="false" aria-controls="collapseLima">
               <strong> •	Bagaimana Cara Berziarah di Madinah Memorial Gerden?</strong>
            </button>
          </h2>
          <div id="collapseLima" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
                Sebaiknya para pengunjung sebelum berangkat berziarah melakukan booking jadwal kedatangan Anda, terutama bagi keluarga yang Bersama rombongan besar. Waktu ziarah adalah 2 jam, dan kami menyediakan fasilitas tenda serta kursi untuk setiap pesanan yang masuk.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnam" aria-expanded="false" aria-controls="collapseEnam">
               <strong> •	Apakah Madinah Memorial Gerden Sudah memiliki legalitas lengkap?</strong>
            </button>
          </h2>
          <div id="collapseEnam" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
              Madinah Memorial Gerden adalah tempat pemakaman Islam yang dikelola oleh PT BOGOR TIMUR PERKASA dan Yayasan Istana Yatim Insan Mulia Cita Madani (YAIS IMCM) Artinya, menghadirkan rasa aman dan nyaman. 
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTujuh" aria-expanded="false" aria-controls="collapseTujuh">
               <strong> •  Apa Saja Layanan saat Prosesi Pemakaman yang Bisa Didapatkan?</strong>
            </button>
          </h2>
          <div id="collapseTujuh" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
              Kami menyediakan pelayanan yang lengkap saat prosesi pemakaman. Tim kami akan menyambut Anda dan keluarga di pintu gerbang Madinah Memorial Gerden . Berikut ini adalah layanan selama prosesi pemakaman: <br>
              •	jasa gali dan tutup lubang <br>
              •	ustadz pendamping prosesi pemakaman<br>
              •	dokumentasi video<br>
              •	tenda ukuran 6x8 meter 1 pcs<br>
              •	50 buah kursi lipat<br>
              •	tangga turun ke liang kubur<br>
              •	panggung (jika perlu) dan karpet<br>
              •	sound system dan MC<br>
              •	1 buah podium<br>
              •	2 dus air mineral<br>
              •	1 buah spanduk ucapan belasungkawa<br>
              •	nisan sementara<br>
              •	papan ari
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDelapan" aria-expanded="false" aria-controls="collapseDelapan">
               <strong> •	Untuk Kebutuhan Pemakaman, Harus Menghubungi Kemana?</strong>
            </button>
          </h2>
          <div id="collapseDelapan" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
              Untuk Pelayanan Pemakaman, Hubungi +{{ $noWA }}
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
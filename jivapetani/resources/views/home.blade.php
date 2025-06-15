@extends('layout.master')

@section('title', 'Jiva Petani')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
  <div class="container-fluid p-0">

    <style>
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .fade-in {
        opacity: 0;
        transition: opacity 1s ease;
      }

      .fade-in.show {
        animation: fadeIn 1s ease-out forwards;
      }
      .card {
            background: white;
            padding: 1.5em;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
            margin-bottom: 2em;
        }
    </style>

<div style="width: 100%; height: 250px; overflow: hidden; margin: auto;">
    <img src="{{ asset('img/bannerpetani01.jpg') }}" 
         alt="Banner Jiva Petani" 
         style="width: 100%; height: 100%; object-fit: cover; display: block;">
</div>

    <section class="py-5" id="home">
        <div class="container fade-in">
           <div class="card">
            <div class="col-md-12">
              <h3 class="text-success">Tentang Pertanian</h3>
              <div class="d-flex align-items-start flex-wrap" style="gap: 20px;">
                <div style="flex-shrink: 0;">
                  <img src="{{ asset('img/tentangpertanian.jpg') }}" alt="Sambutan Ketua Komunitas"
                      style="height: 100%; max-height: 300px; border: 3px solid #228B22;">
                </div>
                <div style="flex: 1;">
                  <p>
                    Pertanian adalah suatu kegiatan manusia yang berkaitan dengan pengelolaan sumber daya alam, khususnya tanah dan air,
                    untuk memproduksi bahan pangan, pakan, serat, dan produk-produk lainnya yang dibutuhkan manusia. Pertanian mencakup
                    berbagai aktivitas seperti bercocok tanam, beternak, perikanan, hingga kehutanan. Pertanian telah ada sejak sekitar
                    10.000 tahun yang lalu, ketika manusia mulai beralih dari gaya hidup berburu dan meramu ke kehidupan menetap dengan
                    bercocok tanam dan beternak. Revolusi pertanian pertama ini dimulai di daerah yang dikenal sebagai “Bulan Sabit Subur”
                    di Timur Tengah. Sejak itu, teknologi dan metode pertanian terus berkembang, mulai dari penggunaan bajak, irigasi,
                    pemuliaan tanaman, hingga penggunaan mesin dan teknologi canggih di era modern.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
    </section>

    <section class="py-5">
      <div class="container fade-in">
        <h2 class="mb-4 text-success">Berita Terkini</h2>
        <div class="row g-4">
          @foreach([1,2,3] as $i)
          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset("img/panen{$i}.jpg") }}" class="card-img-top" alt="Berita Pertanian {{ $i }}">
              <div class="card-body">
                <p class="card-text">
                  @if($i==1)
                    Panen raya padi organik berhasil meningkatkan pendapatan petani lokal hingga 40%.
                  @elseif($i==2)
                    Pelatihan teknologi pertanian digital sukses digelar di Desa Tunas Harapan.
                  @else
                    Komunitas Jiva Petani mulai ekspor hasil tani ke pasar Asia Tenggara.
                  @endif
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container fade-in" id="tentang">
        <h2 class="text-center text-success mb-4">Sejarah Singkat Jiva Petani</h2>
        <p><strong>Jiva Petani</strong> didirikan pada tahun <strong>2015</strong> sebagai komunitas petani muda dan wirausaha tani berbasis digital di Indonesia. Berawal dari semangat gotong-royong untuk saling membantu antar petani dalam pemasaran dan produksi, kini Jiva Petani telah memiliki ribuan anggota aktif di berbagai daerah.</p>
        <p>Visi kami adalah menciptakan ekosistem pertanian yang inklusif dan berbasis teknologi, agar petani lokal bisa naik kelas dan mandiri.</p>
        <p>Melalui pelatihan, pendampingan, dan kerja sama dengan berbagai mitra, kami terus berkembang menjadi pusat kolaborasi petani masa kini.</p>
      </div>
    </section>

    <div class="row mx-5 fade-in text-center text-light">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>10+</h3>
            <p>Komoditas Dibina</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>300</h3>
            <p>Petani Aktif</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>50</h3>
            <p>Desa Dampingan</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>95%</h3>
            <p>Hasil Tani Terserap</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5 mx-5">
      <h1 class="text-success mb-4">Visi</h1>
      <p class="fs-5">“Mewujudkan kemandirian petani Indonesia melalui kolaborasi, inovasi, dan teknologi yang berkelanjutan.”</p>

      <h2 class="text-success mt-5 mb-3">Misi</h2>
      <ol class="fs-5">
        <li>Memberikan akses informasi dan pelatihan bagi petani.</li>
        <li>Menjembatani petani dengan pasar melalui teknologi.</li>
        <li>Memperkuat jaringan komunitas tani secara nasional.</li>
        <li>Memfasilitasi kerjasama antara petani dan lembaga pendukung.</li>
        <li>Mendorong pertanian yang ramah lingkungan dan adaptif.</li>
      </ol>
    </div>

    <section class="py-5"> 
      <div class="container fade-in" id="alumni">
        <h2 class="text-center mb-4 text-success">Testimoni Petani</h2>
        <div class="row">
          @foreach([1,2,3] as $i)
          <div class="col-md-4">
            <div class="card w-75 mx-auto p-2">
              <img src="{{ asset("img/petani{$i}.jpg") }}" class="card-img-top" alt="Petani {{ $i }}">
              <div class="card-body p-2">
                <p class="card-text fs-6">
                  @if($i==1)
                    "Dengan bantuan dari Jiva Petani, saya berhasil memasarkan hasil panen ke kota besar!"
                  @elseif($i==2)
                    "Ilmu pertanian modern yang saya pelajari di komunitas ini sangat membantu usaha saya."
                  @else
                    "Kami petani kecil merasa diperhatikan dan terbantu, terutama disaat musim sulit."
                  @endif
                </p>
                <p class="fs-6">- Petani {{ $i }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

  </div>
</main>
@endsection

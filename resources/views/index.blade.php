@extends('layouts.navfott')

@section('content')

  <!-- ====== Bagian Hero ====== -->
  <section id="hero"
    style="background: url('image/bg.png') no-repeat center center/cover;   height: 115vh; color: var(--white-color); display: flex; align-items: center;">
    <div class="container">
    <div class="hero-content">
      <h2>Nikmati Kelezatan Teh Asli Jawa</h2>
      <p>Dipilih langsung dari teh tubruk terbaik dan diolah dengan resep rahasia keluarga</p>
      <a href="/produk" class="btn">Lihat Produk Kami</a>
    </div>
    </div>
  </section>

  <!-- ====== Bagian Fitur ====== -->
  <section id="fitur" class="section-padding">
    <div class="container">
    <div class="fitur-grid">
      <div class="fitur-item">
      <i class="fas fa-leaf"></i>
      <h3>100% Alami</h3>
      <p>Tanpa bahan pengawet dan pewarna buatan</p>
      </div>
      <div class="fitur-item">
      <i class="fas fa-medal"></i>
      <h3>Kualitas Premium</h3>
      <p>Hanya menggunakan teh tubruk pilihan</p>
      </div>
      <div class="fitur-item">
      <i class="fas fa-history"></i>
      <h3>Resep Sendiri</h3>
      <p>Diolah dengan resep buatan kakek Tarhadi</p>
      </div>
      <div class="fitur-item">
      <i class="fa-solid fa-money-check-dollar"></i>
      <h3>Harga Terjangkau</h3>
      <p>Rasakan Kesegaran Teh dengan Harga Ramah di Kantong</p>
      </div>
    </div>
    </div>
  </section>

  <!-- ====== Bagian produk baru ====== -->
  <section id="produk" class="section-padding bg-light">
    <div class="container">
    <div class="section-title">
      <h2>Produk Baru Dari Kita</h2>
      <p>Teh Hijau</p>
    </div>
    <div class="newproduk-grid">
      <div class="newproduk-item">
      <div class="newproduk-content">
        <div class="newproduk-image">
        <img src="image/produknew.png" alt="Logo Teh Solo Kakek Tarhadi">
        </div>
        <div class="newproduk-text">
        <div class="new-info">
          <h4>Teh Hijau</h4>
        </div>
        <p>"Rasakan kesegaran alami dari teh hijau pilihan yang diolah khusus untuk menjaga cita rasa autentik dan
          aroma khas. Dengan rasa yang ringan, menyegarkan, dan penuh manfaat, varian baru ini siap menemani
          harimu dengan sensasi yang memuaskan. Cocok dinikmati kapan saja untuk mengembalikan semangat!."</p>
        <button class="btn add-to-cart" data-id="1" data-name="Teh Hijau" data-price="25000"
          data-img="image/produknew.png">
          <i class="fas fa-cart-plus"></i> Tambahkan ke Keranjang
        </button>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  </div>
  </section>

@endsection
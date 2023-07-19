

@extends('layouts.main')

  @section('container')
          
    <!-- Banner -->
    <section class="showcase">
        <video src="images/home.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
          <h2>Wisata Purwakarta</h2>
          <h3>Explore The Kabupaten of Istimewa</h3>
          <p> Sebuah wilayah kabupaten yang terletak di Provinsi Jawa Barat, Indonesia. Ibu kotanya adalah Kecamatan Purwakarta Kota yang berjarak kurang lebih 80 km sebelah tenggara Jakarta dan 44 km sebelah barat laut Bandung.Purwakarta dikenal sebagai tempat kelahiran beberapa negarawan dan pemimpin besar asal Jawa Barat, karena pada masanya awal pendirian Republik Indonesia.</p>
          <a href="#up">Lets Go!!!</a>
        </div>
      </section>
        
      <!-- Main Container Info Panel -->
      <div class="container">
        <!-- Container Info Panel -->
        <div class="col-lg-12 info-panel pb-4 pt-2 pr-4 pl-4">
          <!-- Container Content Info Panel -->
          <div class="row workingspace" id="up">
            <!-- Heading Info Panel -->
            <h1 class="text-center mb-0 pb-4 pt-2">Purwakarta</h1>
            <!-- Content 1 Info Panel -->
            <div class="col-lg-4">
              <img src="images/book.png" alt="" class="mx-auto d-block" />
              <p class="fw-lighter">
                Purwakarta berasal dari suku kata "purwa" yang artinya permulaan dan "karta" yang berarti ramai atau hidup. Pemberian nama Purwakarta dilakukan setelah kepindahan ibu kota Kabupaten Purwakarta dari Wanayasa ke Sindang Kasih pada tahun 1834.Peristiwa kepindahan ibu kota kabupaten ini setiap tahunnya diperingati pada tanggal 20 Juli dengan melakukan napak tilas tengah malam dari Wanayasa ke Sindang Kasih.
              </p>
            </div>
            <!-- Content 2 Info Panel -->
            <div class="col-lg-4">
              <img src="images/location.png" alt="" class="mx-auto d-block" />
              <div class="embed-responsive embed-responsive-16by9">
              <iframe class="rounded d-inline" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253660.19552940188!2d107.2711899874233!3d-6.59203689708983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690f0a99d7f009%3A0x301e8f1fc28b950!2sKabupaten%20Purwakarta%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1670755205467!5m2!1sid!2sid" width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <!-- Content 3 Info Panel -->
            <div class="col-lg-4">
              <img src="images/tree.png" alt="" class="mx-auto d-block" />
              <p class="fw-lighter">
                Sebuah wilayah kabupaten yang terletak di Provinsi Jawa Barat, Indonesia. Ibu kotanya adalah Kecamatan Purwakarta Kota yang berjarak kurang lebih 80 km sebelah tenggara Jakarta dan 44 km sebelah barat laut Bandung.Purwakarta dikenal sebagai tempat kelahiran beberapa negarawan dan pemimpin besar asal Jawa Barat, karena pada masanya awal pendirian Republik Indonesia.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Image List -->
      <div class="conta">
        <div class="containerDestinasi" id="destinasi">
          <h1 class="name">Destination list</h1>
          <div class="isiPilihanDestinasi mt-5 owl-carousel ">
            
            <!-- Item Card -->
            @foreach ($post as $post)
            <div class="item">
              <div class="card-list">
                <img src="{{ asset('storage/'.$post -> image1) }}" alt="" />
                <div class="info">
                  <h1>{{ $post -> name }}</h1>
                  <div class="descript">
                    <p>{{ $post -> excert }}</p>
                  </div>
                  <a href="listdestinations/{{ $post -> slug }}" class="btn-card">Read More</a>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
        </div>
        <a class="position-absolute top-100 start-50 translate-middle" href="/listDestinations">Explore</a>
      </div>
    <!-- Footer -->
    @endsection


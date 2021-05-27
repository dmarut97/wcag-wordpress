{{--
  Template Name: Udostepniamy
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    @include('partials.nav')
    <main role="main" class="container">
      <!--NAGŁÓWEK-->
      <div class="container-naglowek-post">
        
      <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/ksiazki_online.jpg" class="image-slider">
      <div class="col-lg-12 col-sm-12 post">
            <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/udostepniamy-nowe-materialy-szkoleniowe/" class="aktualnosci-button">
            </a>
              <h2 class="text-center">Udostępniamy nowe materiały szkoleniowe</h2>
            
            <p class="text-justify">
            Wraz z wydawnictwem Polskie Książki udostępniamy darmowe książki online.
              Tematyka jest różna, nie zabraknie książek informatycznych poszerzających wiedzę 
              informatyczną od postaw. W naszych propozycjach znalazły się książki kulinarne, podróżnicze oraz
              o tematyce rozwoju osobistego.
            </p>
            <p class="text-right">
              <i>05-01-2021<br/>
                administrator</i>
            </p>
          </div>
      </div>
        <!-- DODAJ KOMENTARZ -->
      
   <!-- SEKCJA KONTAKT-->

   <div class="container-kontakt" data-aos="fade-up" data-aos-duration="600">
      <div class="border-kontakt">
      </div>
        <div class="row">
          <div class="col">

            <h2>
              Kontakt
            </h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-4 col-md-12">
            <div class="hours-background">
            </div>
            <h4>
              Godziny otwarcia
            </h4><br/>
            <h6>
              Poniedziałek - Piątek
            </h6>
            <p>8:00 - 16:00</p>
            <h6>
              Sobota
            </h6>
            <p>10:00 - 14:00</p>
          </div>
          <div class="col-lg-4 col-md-12">
          <div class="phone-background">
            </div>
            <h4>
              Telefon
            </h4><br/>
            <p>+48 721 471 268</p>
          </div>
          <div class="col-lg-4 col-md-12">
          <div class="mail-background">
            </div>
            <h4>
              E-mail
            </h4><br/>
            <p>dmarut97@gmail.com</p>
          </div>
        </div>
      </div>

      <!-- SEKCJA LOGO-->
      
    </main>
    
  @endwhile
@endsection

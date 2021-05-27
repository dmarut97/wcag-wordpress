{{--
  Template Name: Aktualnosci
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')

    @include('partials.nav')

    <main role="main" class="container">
      <!--NAGŁÓWEK-->
     
      

      <!--NAGŁÓWEK POST-->
      
      <div class="container-aktualnosci-post text-center">
        <div class="row">
         
        <div class="col-lg-8 col-sm-12 row" data-aos="fade-up" data-aos-duration="600">

          <div class="col-lg-5 col-sm-12 border-post">
            <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/trwaja-zapisy-na-szkolenie/" class="aktualnosci-button">
            <div class="image-cover">
              <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/image-02.jpg" alt="...">
            </div>
            </a>
            <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/trwaja-zapisy-na-szkolenie/" class="aktualnosci-button">
              <h4>Trwają zapisy na szkolenie z obsługi komputera</h4>
            </a>
            <p class="text-justify">
              Od początku lutego 2021 roku trwają zapisy na szkolenia z obsługi komputera dla osób niepełnosprawnych.
              Do rozpoczęcia szkolenia jest potrzeba grupa min. 20 osobowa. Szkolenie jest bezpłatne, jedynym 
              warunkiem uczestniczenia jest orzeczenie o niepełnosprawności. 
               <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/trwaja-zapisy-na-szkolenie/" class="aktualnosci-button">czytaj więcej...</a>
            </p>
            <p class="text-right">
              <i>01-02-2021<br/>
                administrator</i>
            </p>
          </div>
          <div class="col-lg-5 col-sm-12 border-post">
            <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/bezpieczenstwo/" class="aktualnosci-button">
              <div class="image-cover">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/cybersecurity1.jpg" alt="...">
              </div>
              
            
            </a>
            <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/bezpieczenstwo/" class="aktualnosci-button">
              <h4>Bezpieczeństwo w sieci Internet</h4>
            </a>
            <p class="text-justify">
              Jak należy prawidłowo użytkować sieć Internet? Jakie występują zagrożenia?
               Tak wiele zagadnień wiąże się z naszym bezpieczeństwem w sieci.
              Zapraszam do zapoznania się z tematem oraz zachęcam do komentowania. Czy dbacie o bezpieczeństwo?
              Jakie praktukujecie zasady?
               <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/bezpieczenstwo/" class="aktualnosci-button">czytaj więcej...</a>
            </p>
            <p class="text-right">
              <i>01-02-2021<br/>
                administrator</i>
            </p>
          </div>
          

          <div class="col-lg-5 col-sm-12 border-post">
            <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/zapraszamy-na-konsultacje/" class="aktualnosci-button">
            <div class="image-cover">
              <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/infolinia.jpg" alt="...">
            </div>
            </a>
            <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/zapraszamy-na-konsultacje/" class="aktualnosci-button">
              <h4>Zapraszamy na konsultacje</h4>
            </a>
            <p class="text-justify">
              Z dniem 9 stycznia 2021r. została otwarta infolinia, w której będzie można konsultować się 
              z naszym operatorem aby rozwiązać problemy dotyczące oprogramowania komputerowego oraz sprzętu
              komputerowego. Serdecznie zapraszamy również do dyskusji co chielibyście państwo dodać na 
              stronie 
               <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/zapraszamy-na-konsultacje/" class="aktualnosci-button">czytaj więcej...</a>
            </p>
            <p class="text-right">
              <i>09-01-2021<br/>
                administrator</i>
            </p>
          </div>
          <div class="col-lg-5 col-sm-12 border-post">
            <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/udostepniamy-nowe-materialy-szkoleniowe/" class="aktualnosci-button">
            <div class="image-cover">
              <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/ksiazki_online.jpg" alt="...">
            </div>
            </a>
            <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/udostepniamy-nowe-materialy-szkoleniowe/" class="aktualnosci-button">
              <h4>Udostępniamy nowe materiały szkoleniowe</h4>
            </a>
            <p class="text-justify">
              Wraz z wydawnictwem Polskie Książki udostępniamy darmowe książki online.
              Tematyka jest różna, nie zabraknie książek informatycznych poszerzających wiedzę 
              informatyczną od postaw. W naszych propozycjach znalazły się książki kulinarne, podróżnicze oraz
              o tematyce rozwoju osobistego.
               <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/udostepniamy-nowe-materialy-szkoleniowe/" class="aktualnosci-button">czytaj więcej...</a>
            </p>
            <p class="text-right">
              <i>05-01-2020<br/>
                administrator</i>
            </p>
          </div>
          
        </div>
        <div class="col-lg-4 col-sm-12 row" data-aos="fade-up" data-aos-duration="600">
        
        <div class="col-lg-12 col-sm-12">
          <h4>Reklamy</h4>
        

          <div id="carouselExampleCaptions" class="carousel slide" data-interval="4000" data-mdb-ride="carousel" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item text-center active">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/rec.jpg"  width="200px" height="200px"/>
              </div>
            

              <div class="carousel-item text-center">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/rec2.jpg"  width="200px" height="200px"/>
              </div>
            

              <div class="carousel-item text-center">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/rec3.jpg"  width="200px" height="200px"/>
              </div>
            </div>
          </div>
          <div id="carouselExampleCaptions" class="carousel slide" data-interval="4000" data-mdb-ride="carousel" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item text-center active">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/rec2.jpg"  width="200px" height="200px"/>
              </div>
            

              <div class="carousel-item text-center">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/rec.jpg"  width="200px" height="200px"/>
              </div>
            

              <div class="carousel-item text-center">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/rec3.jpg"  width="200px" height="200px"/>
              </div>
            </div>
          </div>
          <div id="carouselExampleCaptions" class="carousel slide" data-interval="4000" data-mdb-ride="carousel" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item text-center active">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/rec3.jpg"  width="200px" height="200px"/>
              </div>
            

              <div class="carousel-item text-center">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/rec2.jpg"  width="200px" height="200px"/>
              </div>
            

              <div class="carousel-item text-center">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/rec.jpg"  width="200px" height="200px"/>
              </div>
            </div>
          </div>

        </div>


        <div class="col-lg-12 col-sm-12">
          <h4>Tagi strony</h4><br>
          <span class="tag btn btn-primary btn-button">Aktualnosci </span>
          <span class="tag btn btn-primary btn-button">WCAG </span>
          <span class="tag btn btn-primary btn-button">Internet </span><br><br>
          
        <span class="tag btn btn-primary btn-button">Strona internetowa </span>
        <span class="tag btn btn-primary btn-button ">HTML </span><br><br>

        <span class="tag btn btn-primary btn-button">Bootstrap </span>
          <span class="tag btn btn-primary btn-button">WWW </span>
          <span class="tag btn btn-primary btn-button">Wiadomości</span>
        </div>
          </div>
        </div>
      </div>

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

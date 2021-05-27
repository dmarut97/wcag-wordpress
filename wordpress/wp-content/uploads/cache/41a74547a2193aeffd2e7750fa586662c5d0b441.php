<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <main role="main" class="container">

      <!--SLIDER-->
      <div class="container-slider" data-aos="fade-up" data-aos-duration="600">
        <div class="special-width">
          <div id="carouselExampleCaptions" class="carousel slide" data-interval="4000" data-mdb-ride="carousel" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item text-center active">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/image-01.jpg" alt="..." class="image-slider">
                <div class="carousel-caption">
                  <h3>Strona WWW<br/>
                  dostępna dla osób<br/>
                niepełnosprawnych</h3>
                </div>
              </div>

              <div class="carousel-item text-center">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/image-slider-2.jpg" alt="..." class="image-slider">
                <div class="carousel-caption">
                  <h3>Strona WWW<br/>
                  w pełni<br/>
                  responsywna</h3>
                </div>
              </div>

              <div class="carousel-item text-center">
                <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/image-slider-3.jpg" alt="..." class="image-slider">
                <div class="carousel-caption">
                  <h3>Strona WWW<br/>
                  czytelna, przejrzysta<br/>
                  intuicyjna, prosta</h3>
                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

      <!--SEKCJA NAGŁÓWEK-->
      <div class="container-naglowek"  data-aos="fade-up" data-aos-duration="600">
        <div class="row">
          <div class="col">
            <h2 id="hadwa">
              Czym jest standard WCAG?
            </h2>
          </div>
        </div>
        <div class="container-tekst">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/wcag-logo-01.png" class="images"><h4>WCAG - Web Content Accessibility Guidelines</h4>
              <p> Jest to zbiór standardów które dotyczą dostępności treści zamieszczanych na stronach internetowych.
                Standardy zawierają dostosowanie stron z których mogą korzystać wszyscy wraz z osobami
                niepełnosprawnymi.
              </p>
              <p> W obecnych czasach świat został mocno zinformatyzowany. Większość usług tj. opłaty, zakupy, 
                świadczenia, przeglądanie stron internetowych i wiele innych możemy załatwić drogą elektroniczną czyli prosto z domu posiadając 
                dostęp do internetu.
                Niestety nie każdy może skorzystać z tych usług elektronicznych. Jedną z tych grup są osoby niepełnosprawne
                czy również osoby w starszym wieku. Stąd powstała inicjatywa standardów tworzenia stron 
                i aplikacji internetowych które umożliwiają tym osobom korzystania z usług internetowych.
              </p>
            </div>
            <div class="col-lg-6 col-md-12">
              <p> Jest to zbiór standardów które dotyczą dostępności treści zamieszczanych na stronach internetowych.
                Standardy zawierają dostosowanie stron z których mogą korzystać wszyscy wraz z osobami
                niepełnosprawnymi.
              </p>
              <p> W obecnych czasach świat został mocno zinformatyzowany. Większość usług tj. opłaty, zakupy, 
                świadczenia, przeglądanie stron internetowych i wiele innych możemy załatwić drogą elektroniczną czyli prosto z domu posiadając 
                dostęp do internetu.
                Niestety nie każdy może skorzystać z tych usług elektronicznych. Jedną z tych grup są osoby niepełnosprawne
                czy również osoby w starszym wieku. Stąd powstała inicjatywa standardów tworzenia stron 
                i aplikacji internetowych które umożliwiają tym osobom korzystania z usług internetowych.
              </p>
              <p> Jest to zbiór standardów które dotyczą dostępności treści zamieszczanych na stronach internetowych.
                Standardy zawierają dostosowanie stron z których mogą korzystać wszyscy wraz z osobami
                niepełnosprawnymi.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- SEKCJA PHOTO -->
      <div class="container-photo" data-aos="fade-up" data-aos-duration="600">
        <div class="row">
          <div class="col">
            <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/image-02.jpg" alt="..." class="image-slider">
          </div>
        </div>
      </div>

      <!-- SEKCJA KONTAKT-->
      <div class="container-kontakt" data-aos="fade-up" data-aos-duration="600">
        
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
   
    


  <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
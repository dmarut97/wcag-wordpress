<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
  
    <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main role="main" class="container">
      <!--NAGŁÓWEK-->
      <div class="container-naglowek-realizacja haer">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <h2>
              Na co trzeba zwrócić uwagę projektując stronę w standardzie WCAG
            </h2>
            
          </div>
          <div class="col-md-6 col-sm-12">
            <p>
              Projektując stronę dostosowaną do potrzeb osób niepełnosprawnych neleży wzrócić na
              czytelność, responsywność, treści zawarte na stronie tzw. minimalizm oraz symetryczność
              elementów.
            </p>
          </div>
        </div>
      </div>

      <!--NAGŁÓWEK-->
      <div class="container-realizacja ">
        <div class="row align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="600">
          <div class="col-md-6 col-sm-12">
            <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/czytelnosc.jpg">
          </div>
          <div class="col-md-6 col-sm-12">
            <h2>
              Czytelność
            </h2>
            <p>
              Warto podkreślić tą cechę strony. Odpowiednia czcionka, zastosowanie nagłówków, akapitów,
              odpowiednie odstępy: to wszystko sprawia że czytelność naszej strony w standardzie WCAG 
              będzie odpowiednia. 
            </p>
          </div>
        </div>
      </div>

      <!--NAGŁÓWEK TWO-->
      <div class="container-realizacja">
        <div class="row align-items-center reverse aos-init aos-animate" data-aos="fade-up" data-aos-duration="600">
          <div class="col-md-6 col-sm-12">
            <h2>
              Responsywność
            </h2>
            <p>
              Projektując stronę warto pamiętać o wieloplatformowości. W obecnych czasach nie tylko 
              używamy do przeglądania stron naszych komputerów czy laptopów ale również dużą popularność 
              zdobywają tablety i telefony, dlatego warto zadbać aby nasza strona wyświetlała się 
              na wszystkich sprzętach dostępnych na rynku.
            </p>
          </div>
          <div class="col-md-6 col-sm-12">
            <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/responsywnosc-01.png">
          </div>
        </div>
      </div>

      <!--NAGŁÓWEK THREE-->
      <div class="container-realizacja">
        <div class="row align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="600">
          <div class="col-md-6 col-sm-12">
            <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/minimalizm.jpg">
          </div>
          <div class="col-md-6 col-sm-12">
            <h2>
              Minimalizm
            </h2>
            <p>
              Następna cecha która powinna być uzwględniona to minimalizm na stronie. Czym on jest? 
              Mianowicie treść która jest zamieszczona na naszej stronie powinna być konkretna czyli
              bardzo ogólna i na temat. Powinniśmy przestrzegać ile treści zamieszczamy i w jaki sposób. 

            </p>
          </div>
        </div>
      </div>

      <!--NAGŁÓWEK FOUR-->
      <div class="container-realizacja">
        <div class="row align-items-center reverse aos-init aos-animate" data-aos="fade-up" data-aos-duration="600">
          <div class="col-md-6 col-sm-12">
            <h2>
              Symetryczność
            </h2>
            <p>
              Ostanią cechą którą chcę podkreślić jest symetryczność. Polega ona na dostosowaniu elementów 
              strony aby były takiej samej rozdzielczości, elementy które się powtarzają zachowały taki 
              sam rozmiar, estatyka i dbanie o szczegóły które nie będą wychodzić poza zakładany cel.
            </p>
          </div>
          <div class="col-md-6 col-sm-12 aos-init aos-animate">
            <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/symetrycznosc.jpg">
          </div>
        </div>
      </div>

      <!-- SEKCJA KONTAKT-->
      <div class="container-kontakt aos-init aos-animate" data-aos="fade-up" data-aos-duration="600">
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

    <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
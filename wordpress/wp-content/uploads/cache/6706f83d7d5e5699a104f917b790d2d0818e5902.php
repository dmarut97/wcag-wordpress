<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main role="main" class="container">
      <!--NAGŁÓWEK-->
      <div class="container-naglowek-post">
        
      <img src="http://127.0.0.1/testwordpress/wordpress/wp-content/uploads/2021/05/cybersecurity1.jpg" class="image-slider">
      <div class="col-lg-12 col-sm-12 post">
            <a href="http://127.0.0.1/testwordpress/wordpress/aktualnosci/bezpieczenstwo/" class="aktualnosci-button">
            </a>
              <h2 class="text-center">Bezpieczeństwo w sieci Internet</h2>
            
            <p class="text-justify">
            Jak należy prawidłowo użytkować sieć Internet? Jakie występują zagrożenia? Tak wiele 
            zagadnień wiąże się z naszym bezpieczeństwem w sieci. Zapraszam do zapoznania się z 
            tematem oraz zachęcam do komentowania. Czy dbacie o bezpieczeństwo? Jakie praktukujecie zasady?
            </p><p> 
            Jest to zagadnienie, które pojawiło się wraz z wprowadzeniem do powszechnego obiegu Internetu i
             smart technologii. Wiąże się z ochroną naszej prywatności i tożsamości w świecie wirtualnym. 
             Zagadnienie to odnosi się również do płatności kartą kredytową, aby nikt nie podszywał się pod nas. 
             Jest to dziedzina bardzo rozległa i bardzo ważna ponieważ chodzi w niej o bezpieczeństwo cyfrowe 
             ludzi. </p><p>
             </p><p> 
             Każdy wie co to jest bezpieczeństwo i jak o nie dbać na co dzień. W sposób podobny należy postępować
              w cyfrowym społeczeństwie XXI wieku. Aby zachować anonimowość nie powinniśmy podawać poufnych danych
               obcym osobom poprzez środki masowego przekazu. Złym pomysłem jest otwieranie wiadomości e-mail od
                nieznanych użytkowników, zostawianie odblokowanego sprzętu elektronicznego pod naszą nieobecność 
                czy też dokonywanie płatności kartą w podejrzanych placówkach. </p><p>
                Serdecznie pozdrawiamy, redakcja.
            </p>
            <p class="text-right">
              <i>01-02-2021<br/>
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
    
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
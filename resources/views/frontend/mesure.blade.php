@extends('layouts.master')


@section('content')


<!--Page Title-->
  <section class="page-title style-two"  width="1920" height="377"  style="background-image:url(images/hh.png)">
    <div class="auto-container">
        <h1>Votre Projet</h1>
      </div>


  </section>
  <!--End Page Title-->
<section class="services-section-three">
    <div class="auto-container">
      <!--Sec Title-->
    <div class="title-box">
      <h2 id="st">Réaliser votre projet avec SpeedWin</h2>

      </div>
    <div class="sec-title">

      <div class="text">
"L’offre complète de SPEEDWIN s’étend du conseil à la pose, en passant par la planification et bien plus encore, nous ressentons l’obligation et en même temps la motivation de fournir des prestations de premier choix tous les jours, car c’est seulement lorsque vous êtes satisfait que nous le sommes aussi."</div>
    </br>
    </br>
    </div>
      <!--Appointment Info Tabs-->
    <div class="appointment-info-tabs wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
      <!--Window Tabs-->
      <div class="appointment-tabs tabs-box">

        <!--Tab Btns-->
    <div class="btns-outer text-center">
      <div class="window-nav-outer"  >

      <ul class="window-nav clearfix">
        <li><a href=votreprojet> Inspération</a></li>
        <li><a  href=budget> Budget</a></li>
        <li class="active"><a href=mesure>  Prise de mesures</a></li>
        <li><a  href=pose> Production & Pose</a></li>

        <li><a href=sav> SAV</a></li>
      </ul>
    </div>
        </div>

        <!--Tabs Content-->

      </div>

    </div>

  </div>
</section>

<!--Windows Section-->
<section class="windows-page-section">
  <div class="auto-container">
    <!--Title Box-->




    <div class="row clearfix" id="it1">

      <!--Content Column-->
      <div class="content-column col-lg-8 col-md-12 col-sm-12">
        <div class="inner-column">
        <div class="sec-title">
        <div class="title-inner"  data-wow-delay="0ms" data-wow-duration="1500ms">
          <h2>Prise de Mesure</h2>

          <div class="text">
      <p>
      Dans l’optique d’une satisfaction client optimale, <strong>nous prenons nous-même les dimensions si vous optez pour le service de pose incluse.</strong>
</p>
<p>
Un métreur qualifié Speedwin se présentera chez-vous gratuitement et selon vos disponibilités pour prendre les mesures nécessaires. La prise de mesures par un agent qualifié vous garantira un meilleur résultat esthétique et énergétique.
  </p>	<div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="image">
            <img src="images/t3.jpg" alt="" />
          </div>
        </div>


          </div>
          </div>
          </div>




          <!--Windows Blocks-->
           <div class="windows-blocks">
            <div class="row clearfix">

              <!--Window Block-->
              <div class="window-block col-lg-6 col-md-6 col-sm-12">
                <div class="inner-block">
                  <div class="clearfix">
                    <div class="content">
                      <div class="icon-box">
                        <span class="icon flaticon-window"></span>
                      </div>
                      <div class="window-heading"><a href="services.html">Nos Services</a></div>
                      <a class="download" href="services.html"><span class="arrow flaticon-right-arrow-4"></span></a>
                    </div>
                    <div class="image">
                      <img src="images/r1.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>

              <!--Window Block-->
              <div class="window-block col-lg-6 col-md-6 col-sm-12">
                <div class="inner-block">
                  <div class="clearfix">
                    <div class="content">
                      <div class="icon-box">
                        <span class="icon flaticon-doorway"></span>
                      </div>
                      <div class="window-heading"><a href="cons.html">Nos Projets</a></div>
                      <a class="download" href="cons.html"><span class="arrow flaticon-right-arrow-4"></span></a>
                    </div>
                    <div class="image">
                      <img src="images/r3.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
      </div>

      <!--Sidebar Column-->
      <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
        <div class="inner-column">

          <!--Consulting Widget-->

          <div class="services-widget brands-widget">
            <div class="widget-content">
              <h2>Témoignages</h2>
              <div class="single-item-carousel owl-carousel owl-theme">

                <div class="content">
                  <div class="image">
                    <img src="images/4.png" alt="" width="250"  height="70"/>
                  </div>
                  <h3>Client 1</h3>
                  <div class="text">texte texte texte texte.</div>
                </div>

                <div class="content">
                  <div class="brand-image">
                    <img src="images/2.png" alt="" width="250"  height="70" />
                  </div>
                  <h3>Client 2</h3>
                  <div class="text">texte texte texte texte .</div>
                </div>

                <div class="content">
                  <div class="brand-image">
                    <img src="images/3.png" alt="" width="250"  height="70"/>
                  </div>
                  <h3>Client 3</h3>
                  <div class="text">texte texte texte texte .</div>
                </div>

              </div>
            </div>
          </div>


          <!--Award Widget-->
          <div class="services-widget award-widget">
            <div class="widget-content">
              <h2>Vous avez un projet ?</h2>
              <div class="image">
                <img src="images/p.jpg" alt="" />
              </div>
              <div class="text">SpeedWin vous accueille, pour vous accompagner afin de réaliser votre projet....</div>
            </div>
          </div>

          <!--Buttons Widget-->
          <div class="services-widget buttons-widget">
            <a class="theme-btn glass-btn" href="cons.html"><span class="icon-box flaticon-doorway"></span> Portes</a>
            <a class="theme-btn color-btn" href="cons.html"><span class="icon-box flaticon-window"></span>Fenêtres</a>
          </div>

        </div>
      </div>

    </div>








  </div>
</section>



@endsection

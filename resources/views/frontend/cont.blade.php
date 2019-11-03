@extends('layouts.master')


@section('content')





<!--Page Title-->
  <section class="page-title style-two"  width="1920" height="377"  style="background-image:url(images/hh.png)">
    <div class="auto-container">
        <h1>Contactez Nous! </h1>
      </div>
  </section>
  <!--End Page Title-->

<!--Office Section-->
<section class="office-section">
  <div class="auto-container">
    <div class="inner-container">
      <!--Title Box-->
      <div class="title-box">
        <h2> Siège social</h2>
      </div>
      <div class="row clearfix">

        <!--Office Block-->
        <div class="office-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-place"></span>
            </div>
            <h3>Siège et Unité de Production</h3>
            <div class="text">Cité Ben Ammar N°04,  <br>Section 325 Hamadi, Alger.</div>
            <a class="link-btn" href="#"><span class="arrow flaticon-right-arrow-2"></span></a>
          </div>
        </div>

        <!--Office Block-->
        <div class="office-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-phone-symbol-of-an-auricular-inside-a-circle"></span>
            </div>
            <h3>Téléphone</h3>
            <div class="text">+213 560 96 17 03 <br> +213 560 96 17 03</div>
            <a class="link-btn" href="#"><span class="arrow flaticon-right-arrow-2"></span></a>
          </div>
        </div>

        <!--Office Block-->
        <div class="office-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-question"></span>
            </div>
            <h3>E-mails</h3>
            <div class="text">contact@speedwin.dz <br>contact@speedwin.dz</div>

            <a class="link-btn" href="#"><span class="arrow flaticon-right-arrow-2"></span></a>
          </div>
        </div>

      </div>
    </div>
  </div>


</section>
<!--End Office Section-->

<!--End Company Section-->
<section class="map-section">
    <!--Map Outer-->
      <!--div class="map-outer">
          <div class="google-map"
              id="contact-google-map"
              data-map-lat="36.707139"
              data-map-lng="3.2563498"
              data-icon-path="images/icons/map-marker.png"
              data-map-title="Algiers, Algeria"
              data-map-zoom="12"
              data-markers='{
                "marker-1": [36.707139, 3.2563498, "<h4>Branch Office</h4><p>Alger, Algerie</p>"],
                  "marker-2": [36.707139, 3.2563498, "<h4>Branch Office</h4><p>Alger, Algerie</p>"],
                  "marker-3": [36.707139, 3.2563498, "<h4>Branch Office</h4><p>Alger, Algerie</p>"]
              }'>

      </div>
      </div-->

  <div id="" class="google-map m-none custom-contact-pos" style=" ">


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12790.188444026295!2d3.165931299999992!3d36.73343670000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe19759cb40b8275e!2sUXO%20Group!5e0!3m2!1sfr!2sdz!4v1568210899877!5m2!1sfr!2sdz" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>






      </div>
  </section>
<!--End Map Section-->


<!--End Fullwidth Map Section-->

<!--Contact Form Section-->
<section class="contact-form-section" width="1920" height="377"  style="background-image: url(images/facade.jpg)">
  <div class="auto-container">
    <div class="row clearfix">

      <!--Title Column-->
      <div class="title-column col-lg-4 col-md-12 col-sm-12">
        <div class="inner-column">
          <h3>SpeedWin,</h3>
          <h2>Vous accueille.</h2>
          <div class="text">Pour des questions ou des préoccupations, veuillez nous contacter par téléphone
          ou simplement compléter le formulaire de contact.</div>
        </div>
      </div>

      <!--Form Column-->
      <div class="form-column col-lg-8 col-md-12 col-sm-12">
        <div class="inner-column">
          <!--Contact Form-->

          <div class="contact-form">

            <form action="{{url('cont')}}" method="POST" enctype="multipart/form-data" id="contact-form">
              {{ csrf_field() }}
              <div class="row clearfix">
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <input type="text" name="name" id="name" value="" placeholder="Nom" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <input type="email" name="email" id="email" value="" placeholder="Email" required>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <textarea name="msg" id="msg" placeholder="Message..."></textarea>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <button type="submit" name="send" class="theme-btn btn-style-four"><span class="arrow flaticon-right-arrow-4"></span>Envoyer</button>
                                  </div>
              </div>
            </form>

          </div>

        </div>
      </div>

    </div>
  </div>
</section>



@endsection

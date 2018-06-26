@extends('layouts.main')

@section('content')

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>D-SSO</h2>
                        <h3>D</h3>
                        <p style="font-size: 21px">Departamento de Seguridad y Salud Ocupacional</p>
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <div class="form-group">
                            <textarea id="duda" cols="30" rows="4" class="form-control custom-input" placeholder="Escribenos tu consulta, duda o sugerencia."></textarea>
                            <button class="submit bg-color-secundary" data-toggle="modal" data-target="#exampleModal">Consultar</button>
                        </div>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-grey" id="about">
        <div class="container">
            <div class="row section_padding_50">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-timer" aria-hidden="true"></i>
                        </div>
                        <h4>Rapidez</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-medall" aria-hidden="true"></i>
                        </div>
                        <h4>Calidad</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="ti-heart" aria-hidden="true"></i>
                        </div>
                        <h4>Comodidad</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area section_padding_50" style="background-color: white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="/template/img/bg-img/special.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h2>Centro de Salud Ocupacional</h2>
                            <p>El servicio de Salud Ocupacional contribuye a la identificación y al análisis de las condiciones que, dentro del ambiente de trabajo, pueden afectar a corto, mediano o largo plazo la salud de los trabajadores, ofreciendo estrategias de intervención y medidas preventivas para ejercer un mayor control sobre ellas.</p>
                            <p>Asimismo, un adecuado Sistema de Gestión de Seguridad y Salud Ocupacional permite evitar la aparición de enfermedades ocupacionales y disminuir los índices de accidentabilidad, facilitando así un desempeño laboral óptimo a la vez que garantiza la salud y el bienestar de los trabajadores.</p>

                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Google Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-android"></i>
                                        <p class="mb-0"><span>available on</span> Google Store</p>
                                    </a>
                                </div>
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-apple"></i>
                                        <p class="mb-0"><span>available on</span> Apple Store</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-grey section_padding_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <div class="conteiner-header">Nuestras Especialidades</div>
                        <br><br>
                        <p class="text-center"> Seleciona una especialidad la especidad que le interese, para ver mas informacion</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature bg-white-card" style="padding: 0px">
                        <a class="row holder-blue holder-blue" style="margin: 0px">
                            <div class="col-4 bg-blue" style="padding: 0px">
                              <div class="img-call" style=" background-image: url(/template/img/bg-img/auditiva.jpg)"></div> 
                            </div>
                            <div class="col-8 border-green">
                                <h4 class="title-card">Audiometría</h4>
                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature bg-white-card" style="padding: 0px">
                        <div class="row holder-blue" style="margin: 0px">
                            <div class="col-4 bg-blue" style="padding: 0px">
                              <div class="img-call" style=" background-image: url(/template/img/bg-img/img-vision.jpg)"></div> 
                            </div>
                            <div class="col-8 border-green">
                                <h4 class="title-card">Optometría</h4>
                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature bg-white-card" style="padding: 0px">
                        <div class="row holder-blue" style="margin: 0px">
                            <div class="col-4 bg-blue" style="padding: 0px">
                              <div class="img-call" style=" background-image: url(/template/img/bg-img/visiometria.jpg)"></div> 
                            </div>
                            <div class="col-8 border-green">
                                <h4 class="title-card">Visiometría</h4>
                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature bg-white-card" style="padding: 0px">
                        <div class="row holder-blue" style="margin: 0px">
                            <div class="col-4 bg-blue" style="padding: 0px">
                              <div class="img-call" style=" background-image: url(/template/img/bg-img/espirometria.jpg)"></div> 
                            </div>
                            <div class="col-8 border-green">
                                <h4 class="title-card">Espirometría</h4>
                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature bg-white-card" style="padding: 0px">
                        <div class="row holder-blue" style="margin: 0px">
                            <div class="col-4 bg-blue" style="padding: 0px">
                              <div class="img-call" style=" background-image: url(/template/img/bg-img/Electrocardiograma.jpg)"></div> 
                            </div>
                            <div class="col-8 border-green">
                                <h4 class="title-card">Electrocardiograma</h4>
                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature bg-white-card" style="padding: 0px">
                        <div class="row holder-blue" style="margin: 0px">
                            <div class="col-4 bg-blue" style="padding: 0px">
                              <div class="img-call" style=" background-image: url(/template/img/bg-img/spicologia.jpg)"></div> 
                            </div>
                            <div class="col-8 border-green">
                                <h4 class="title-card">Psicologia</h4>
                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature bg-white-card" style="padding: 0px">
                        <div class="row holder-blue" style="margin: 0px">
                            <div class="col-4 bg-blue" style="padding: 0px">
                              <div class="img-call" style=" background-image: url(/template/img/bg-img/alt.jpeg)"></div> 
                            </div>
                            <div class="col-8 border-green">
                                <h4 class="title-card">Trabajo en alturas</h4>
                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="conteiner-header">Nuestros Especialistas</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="/template/img/team-img/team-1.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Jackson Nash</h4>
                            <p>Tax Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="/template/img/team-img/team-2.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Alex Manning</h4>
                            <p>CEO-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="/template/img/team-img/team-3.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Ollie Schneider</h4>
                            <p>Business Planner</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="/template/img/team-img/team-4.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Roger West</h4>
                            <p>Financer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area bg-green section_padding_50 clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                            <h3><span class="counter">90</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-arrow-down-a"></i>
                            <p>APP <br> DOWNLOADS</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">120</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-happy-outline"></i>
                            <p>Happy <br> Clients</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                            <h3><span class="counter">40</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-person"></i>
                            <p>ACTIVE <br>ACCOUNTS</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-area">
                            <h3><span class="counter">10</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-ios-star-outline"></i>
                            <p>TOTAL <br>APP RATES</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_50 clearfix" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="conteiner-header">Conoce Nuestra App</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">
                        <div class="single-shot">
                            <img src="/template/img/scr-img/app-1.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="/template/img/scr-img/app-2.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="/template/img/scr-img/app-3.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="/template/img/scr-img/app-4.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="/template/img/scr-img/app-5.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="/template/img/scr-img/app-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** App Screenshots Area End *****====== -->

    <!-- ***** Pricing Plane Area Start *****==== -->
    <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <div class="conteiner-header">Encuentranos Aquí</div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters" id="map">
                
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plane Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="our-monthly-membership section_padding_50 bg-color-primary clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="membership-description">
                        <h2>Join our Monthly Membership</h2>
                        <p>Find the perfect plan for you — 100% satisfaction guaranteed.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                        <a href="#">¡ Suscribete !</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact" style="margin-bottom:420px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Contactanos ahora mismo</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>Le enviaremos blogs semanales épicos, libros blancos y cosas para que su aplicación empiece a prosperar, ¡todo GRATIS!</p>
                    </div>
                    <div class="address-text">
                        <p><span>Dirección:</span> 140, Hortencias, Ica, Ica</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Telefono:</span> (056) 233820 </p>
                    </div>
                    <div class="email-text">
                        <p><span>Correo:</span> info.deercreative@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Tu nombre" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="¿ Que te gustaria saber de nosotros ?" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Enviar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> ¡ Felicitaciones ! </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"><br>
            Recibiremos tu consulta. Ahora solo debes ingresar estos datos para poder responderte los mas pronto posible.
            <br><br>
            <div class="row">
                <div class="col">
                  <input type="email" id="correo" class="form-control" placeholder="Email. ejemplo@gmail.com">
                </div>
                <div class="col">
                  <input type="tel" id="telefono" class="form-control" placeholder="Telefono o Movil">
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="sendMail()">Enviar</button>
          </div>
        </div>
      </div>
    </div>

    @endsection

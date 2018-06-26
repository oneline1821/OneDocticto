<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>DSSO</title>

    <!-- Iconos -->
    <link rel="stylesheet" href="/template/css/themify-icons.css">
    
    <!-- Favicon -->
    <link rel="icon" href="/template/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="/template/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="/template/css/responsive.css" rel="stylesheet">

  

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#home" style="font-size: 21px"> 
                                <img src="/template/img/bg-img/logo-white.png" width="50" height="50"> &nbsp;&nbsp;D-SSO</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item"><a class="nav-link" href="#about">Nosotros</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#features">Servicios</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#screenshot">Aplicacion</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#pricing">Ubicanos</a></li>
                                </ul>
                                <div class="sing-up-button d-lg-none">
                                    <a href="#contact">Reserva tu Cita</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block" >
                        <a href="#contact">Reserva tu Cita</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <center>
                <img src="/template/img/bg-img/logosf.png" alt="logo DSSS" width="82" height="82">
            </center>
            <h4 class="c-blue" style="font-weight: 600">D-SSO</h4>
            
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Terminos y Condiciones</a></li>
                    <li><a href="#">Politicas de Privacidad</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="copyright-text">
            <p>Copyright ©2018 DSSO</p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="/template/js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/template/js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="/template/js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="/template/js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="/template/js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="/template/js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="/template/js/active.js"></script>
    <script>
        function sendMail(){
            console.log( 'token es:' + '{{ csrf_token() }}')
            var dataPost = {
                telefono: $('#telefono').val(),
                email:$('#correo').val(),
                msj:$('#duda').val()
            }
            var dataString = JSON.stringify(dataPost);

            $.ajax({
               type: 'POST', 
               url: '/addMail',
               headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
               data: dataPost,
               success: function(response) {
                  console.log(response);
               }
            });
        }
    </script>
    <script>
        var imagen = '/template/img/core-img/marker.png'
        var estilo = [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#ebe3cd"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#523735"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#f5f1e6"
              }
            ]
          },
          {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#c9b2a6"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#dcd2be"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#ae9e90"
              }
            ]
          },
          {
            "featureType": "landscape.natural",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dfd2ae"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dfd2ae"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#93817c"
              }
            ]
          },
          {
            "featureType": "poi.business",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#a5b076"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#447530"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f5f1e6"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#fdfcf8"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f8c967"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#e9bc62"
              }
            ]
          },
          {
            "featureType": "road.highway.controlled_access",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e98d58"
              }
            ]
          },
          {
            "featureType": "road.highway.controlled_access",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#db8555"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#806b63"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dfd2ae"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#8f7d77"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#ebe3cd"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dfd2ae"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#b9d3c2"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#92998d"
              }
            ]
          }
        ]
        function initMap() {
            var uluru = {lat: -14.0766037, lng: -75.727354};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center: uluru,
              styles: estilo
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map,
              icon:imagen
            });
        }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBVpZAAUL1n-tOzlo6p_IxssgJ6enzjpk&callback=initMap">
    </script>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Hospital Amparito</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="/paciente/create"><span>Ingresar paciente al hospital</span></a>
                        <a class="new-btn-d br-2" href="/paciente"><span>Pacientes ingresados</span></a>
						<!--<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> hospitalamparito@gmail.com</a></div>-->
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Bienvenido a la página web del Hospital Amparito</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand"><img src="images/hospital-logo.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Inicio</a></li>
                        <li><a class="nav-link" href="#about">Acerca de</a></li>
                        <li><a class="nav-link" href="#services">Servicios</a></li>
                        <li><a class="nav-link" href="#gallery">Galeria</a></li>
						<li><a class="nav-link" href="#team">Doctores</a></li>
                        <li><a class="nav-link" href="#blog">Blog</a></li>
						<li><a class="nav-link" href="#contact">Contacto</a></li>
                        <Li>
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	
	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Bienvenido al Hospital Amparito</h1>
								<p>El hospital en el que entras enfermo y sales saludable.</p>
								<!--<a href="#" class="btn">Contact Us</a>-->
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Los mejores médicos de la ciudad</h1>
								<p>Contamos con el personal más adecuado y preparado que hay.</p>
								<!--<a href="#appointment" class="btn">Appointment</a>-->
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Gran variedad de medicamentos disponibles.</h1>
								<p>Contamos con un gran número de medicamentos para atender a una extensa cantidad de pacientes. </p>
								<!--<a href="#" class="btn">Contact Us</a>-->
							</div>
						</div>
						
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
	
	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Acerca de</h2>
							<p>Un poco de la historia del origen del Hospital Amparito. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Historia del Hospital Amparito </h2>
								<p>La idea surgió en el momento de que saliera la noticia de que en México muchas familias se quedarán sin atención médica debido al poco abastecimiento de medicinas en los Hospitales locales, y sin mencionar que todos esos ya se encontraban en su máxima capacidad, por esto sentimos que era hora de traer una nueva opción para los ciudadanos.</p>
								<p>Juntando ahorros de los actuales dueños del hospital, donaciones de la gente para hacer el hospital realidad y unas cuantas inversiones extranjeras, logramos por fin construir el tan esperado Hospital Amparito con la última tencología, gran número de medicamentos y personal capacitado para atender a todo tipo de problema.</p>
			-->
                                <p>La razón del nombre de nuestro hospital no tiene mucho misterio, simplemente se basa en un local de lonches llamado "Lonches Amparito" que desafortunadamente ya cerró, sin embargo, ese local se encontraba cerca del hospital más importante de la ciudad hace tiempo y era muy famoso por la zona, por lo que quisimos reusar ese nombre por lo que significaba a las personas que iban ahí.</p>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="images/about-img-01.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-02.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-03.jpg" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->
	
	<!-- Start Services -->
	<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Servicios</h2>
						<p>En este hospital, se cuenta con una gran variedad de servicios para distintas situaciones. </p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div>
								<h3 class="title">Helipuerto</h3>
								<p class="description">
                                    Se cuenta con un helipuerto para transportar de manera rápida a pacientes graves por medio de un helicoptero.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
								<h3 class="title">Donaciones</h3>
								<p class="description">
                                    Se cuentan con donadores voluntarios de sangre e incluso organos para ayudar a los más necesitados.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
								<h3 class="title">Localización accesible</h3>
								<p class="description">
                                    La ubicación del hospital se encuentra en el centro de la ciudad para que sea un punto medio de distancia.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
								<h3 class="title">Herramientas necesarias</h3>
								<p class="description">
                                     Contamos con suficientes herramientas para que el personal de salud pueda realizar su labor de ayudar a los pacientes.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
								<h3 class="title">Accesos para discapacitados</h3>
								<p class="description">
									Las instalaciones del hospital cuentan con accesos para discapacitados.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
								<h3 class="title">Tiempos de atención</h3>
								<p class="description">
									Contamos con instalaciones grandes y con suficiente personal, por lo que los pacientes no tardarán en ser atendidos.
								</p>
							</div>
						</div>
						<div class="item"> 
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
								<h3 class="title">Medicamentos</h3>
								<p class="description">
									Contamos con un gran abastecimiento de medicamentos, por lo que no se acabarán fáiclmente.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
								<h3 class="title">Personal capacitado</h3>
								<p class="description">
                                    Contamos con personal de salud con doctorados y dispuestos a ayudar a todo tipo de pacientes que la requieran.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="serviceBox">
								<div class="service-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
								<h3 class="title">Ambulancias</h3>
								<p class="description">
									El servicio de ambulancias será gratis siempre y cuando tengas una cuenta en nuestro sitio web y pagues el seguro anual.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
	<!-- End Services -->
	
	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Galeria</h2>
						<p>Fotos e imagénes de nuestro personal de la salud haciendo su trabajo y herramientas que se usan en el hospital. </p>
					</div>
				</div>
			</div>
			
			<div class="popup-gallery row clearfix">
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-01.jpg" alt="">
						<div class="box-content">	
							<ul class="icon">
								<li><a href="images/gallery-01.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-02.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="images/gallery-02.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">					
					<div class="box-gallery">
						<img src="images/gallery-03.jpg" alt="">
						<div class="box-content">							
							<ul class="icon">
								<li><a href="images/gallery-03.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-04.jpg" alt="">
						<div class="box-content">	
							<ul class="icon">
								<li><a href="images/gallery-04.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-05.jpg" alt="">
						<div class="box-content">							
							<ul class="icon">
								<li><a href="images/gallery-05.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">					
					<div class="box-gallery">
						<img src="images/gallery-06.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="images/gallery-06.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-07.jpg" alt="">
						<div class="box-content">
							<ul class="icon">
								<li><a href="images/gallery-07.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-08.jpg" alt="">
						<div class="box-content">		
							<ul class="icon">
								<li><a href="images/gallery-08.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Team -->
	<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Nuestros doctores</h2>
						<p>Conoce a nuestros doctores más destacados en todo el Hospital Amparito</p>
					</div>
				</div>
			</div>
			
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Samantha Trejo</h3>
                            <span class="post">Neurocirujana </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Antonio Flores</h3>
                            <span class="post">Cirujano cardiotorácico</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-3.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">Pediatra</span>
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
	</div>
	
	<!-- End Team -->
	
	<!-- Start Blog -->
	<div id="blog" class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Blog</h2>
						<p>Lee las reseñas que tienen nuestros pacientes tratados en nuestro hospital </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
						</div>
						<div class="item-meta">
							<a href="#"><i class="fa fa-comments-o"></i> 91 Comentar </a>
							<a href="#"><i class="fa fa-user-o"></i> Arturo</a>
							<span class="dti">25 Julio 2022</span>
						</div>
						<h2>¡Este es el hospital en donde mejor me han tratado!</h2>
						<p>A diferencia de otros hospitales, en este no se tardaron ni 15 minutos en atenderme y el médico que me atendió muy amable</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
						</div>
						<div class="item-meta">
							<a href="#"><i class="fa fa-comments-o"></i> 73 Comentar </a>
							<a href="#"><i class="fa fa-user-o"></i> Maria</a>
							<span class="dti">19 Junio 2022</span>
						</div>
						<h2>¡Este hospital me salvó la vida y salvará la de otras personas! </h2>
						<p>Tenía una enfermedad mortal alojada en mi cerebro, pero después de muchas cirujias pudieron curarme, dios bendiga a los doctores</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="images/blog-img-03.jpg" alt="" />
						</div>
						<div class="item-meta">
							<a href="#"><i class="fa fa-comments-o"></i> 65 Comment </a>
							<a href="#"><i class="fa fa-user-o"></i> Ana</a>
							<span class="dti">02 Mayo 2022</span>
						</div>
						<h2>Me siento mucho mejor después de haber ido a este hospital. </h2>
						<p>Yo tengo osteoporosis, pero gracias a los tratamientos que me han dado en el hospital, han evitado que avance la enfermedad. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Blog -->
	
	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Contáctanos</h2>
						<p>Si tienes alguna queja, sugerencia o simplemente quieres agendar una cita, te dejamos unas opcionas para comunicarte con nosotros:</p>
					</div>
				</div>
			</div>
			<div class="row">
				
				<!--<div class="col-lg-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Send Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>-->
				
				
				<div class="col-lg-12 col-xs-12">
					<div class="left-contact">
						<!--<h2>Address</h2>-->
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Dirección</h4>
								<p>Blvd. Gral. Marcelino García Barragán 1421, Olímpica, 44430 Guadalajara, Jal.</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Correo</h4>
								<p>hospitalamparito@hotmail.com</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Teléfono</h4>
								<p>33 1923 1493</p>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	<!-- Start Subscribe -->
	<div class="subscribe-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="subscribe-inner text-center clearfix">
						<h2>Seguro anual</h2>
						<p>Si quieres tener más beneficios de los que se dan gratuitamente, te comendamos obtener el "Seguro anual", este te dará varios beneficios, entre los cuales están que no se te cobre por el servicio de transporte de ambulancia, tener comida de calidad en la sala de recuperaciones, entre otras cosas.</p>
						<!--<form action="#" method="post">
							<div class="form-group">
								<input class="form-control-1" id="email-1" name="email" placeholder="Email Address" required="" type="text">
							</div>
							<div class="form-group">
								<button type="submit" class="new-btn-d br-2">
									Subscribe
								</button>
							</div>
						</form>-->
                        <img src="images/cruz.png">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Subscribe -->
	
	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">Todos los derechos reservados. &copy; 2022 Hospital Amparito</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>
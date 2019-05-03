	<div id="top-bar" class="hidden-xs">
		<div class="container">
			<div class="top-social">
				<a class="fb" href="#"><i class="fa fa-facebook"> </i></a>
				<a class="twt" href="#"><i class="fa fa-twitter"> </i></a>
				<a class="gplus" href="#"><i class="fa fa-google-plus"> </i></a>
				<a class="linkdin" href="#"><i class="fa fa-linkedin"> </i></a>
				<a class="pint" href="#"><i class="fa fa-pinterest"> </i></a>
				<a class="drib" href="#"><i class="fa fa-dribbble"> </i></a>
			</div>
			<div class="top-right text-right">
				<div class="header-info">
					<div class="header-info-content">
						<i class="fa fa-phone"></i>
						<span class="info-title">Llamanos ahora:</span>
						<span class="info-sub">786 212 1601</span>
					</div>
				</div>
				<div class="consult">
					<a href="#"><i class="icon icon-envelop"></i> <span>Cotizacion Gratis</span></a>
				</div>
			</div>
		</div>
	</div>

	<!-- Header start -->
	<header id="header" class="header" role="banner">
		<div class="container">
			<div class="row">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    	</button>

				<!-- Logo start -->
				<div class="navbar-header">
				    <div class="navbar-brand">
					    <a href="index.php">
					    	<div class="logo"></div>
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->

				<nav class="collapse navbar-collapse" role="navigation">
					<ul class="nav navbar-nav navbar-right">
					  <li class="dropdown <?php if ($page=='home') print('active')?>">
	                   		<a href="index.php">Inicio <i class="fa fa-angle-down"></i></a>
                   		    <div class="dropdown-menu">                    	  </div>
	                    </li>
	                    <li class="dropdown <?php if ($page='service') print('active')?>">
	                   		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <i class="fa fa-angle-down"></i></a>
	                   		<div class="dropdown-menu">
								<ul>
		                            <li><a href="auto.php">Seguro para Vehiculos</a></li>
                                    <li><a href="home.php">Seguro para Vivienda</a></li>
					                <li><a href="comercial.php">Seguro Comercial</a></li>
		                        </ul>
	                    	</div>
	                   		<div class="dropdown-menu"> </div>
                        </li>

	                    <li class="dropdown">
	                   		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quienes somos?<i class="fa fa-angle-down"></i></a>
	                   		<div class="dropdown-menu">
								<ul>
		                            <li><a href="firm-overview.php">Presentacion</a></li>
                                    <li><a href="attorneys.php">Nuestros Agentes</a></li>
		                            <li><a href="clients-review.php">Nuestros Clientes</a></li>
		                            <li><a href="faq.php">Preguntas Frecuentes</a></li>
		                           <li><a href="gallery.php">Gallery</a></li>
		                        </ul>
	                    	</div>
	                    </li>

	                    <li >
	                   		<a href="news.php" >Noticias <i class="fa fa-angle-down"></i></a>
	                   		
	                    </li>

	                    <li><a href="contact.php">Contactos</a></li>
				  </ul><!--/ Navbar-nav end -->

			  </nav><!--/ Navigation end -->
				
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->
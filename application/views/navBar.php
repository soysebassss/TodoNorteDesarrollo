<body class="main">
<div id="main">
<header>
<div class="top1">
<div class="container">
<div class="row">
<div class="span12">
<div class="top1_inner clearfix">
	<div class="logo_wrapper"><a href="<?=site_url('Usuario')?>" class="logo"><img src="images/logo.png" alt=""></a></div>
	<div class="search-form-wrapper clearfix">
		<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
			<input type="text" name="s" value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''">
			<a href="#" onClick="document.getElementById('search-form').submit()"></a>
		</form>	
	</div>
	<div class="social_wrapper">
		<ul class="social clearfix">
		    <li><a href="#"><img src="images/social_ic_top1.png"></a></li>
		    <li><a href="#"><img src="images/social_ic_top2.png"></a></li>		    	    
		</ul>
	</div>
</div>	
</div>	
</div>	
</div>
</div>	
<div class="top2">
<div class="menu_wrapper">
	<div class="navbar navbar_ ">
		<div class="navbar-inner navbar-inner_">
			<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="nav-collapse nav-collapse_ collapse">
				<ul class="nav sf-menu clearfix">
					<li class="active"><a href="index.html">Servicios</a></li>
					<li><a href="index-1.html">Revista</a></li>
					<li><a href="index-2.html">Semáforo</a></li>
					<li><a href="index-3.html">Estadisticas</a></li>
					<li class="sub-menu sub-menu-1"><a href="index-4.html">Clientes / A-Z<em></em></a>
						<ul>
							<li><a href="<?=site_url('Usuario/verClientes')?>">Ver Clientes</a></li>
							<li class="sub-menu sub-menu-2"><a href="index-4.html">Administrador de Clientes<em></em></a>
								<ul>
									<li><a href="<?=site_url('Usuario/agregarCliente');?>">Agregar Nuevo Cliente</a></li>
									<li><a href="<?=site_url('Usuario/eliminarCliente');?>">Eliminar Cliente</a></li>
									<li><a href="<?=site_url('Usuario/actualizarCliente');?>">Actualizar datos de Cliente</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="<?=site_url('Login/logout')?>">Desconectar</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="slider_wrapper">
<div id="slider">
<div id="camera_wrap">
	<div data-src="images/slide01.jpg">
		<div class="camera_caption fadeIn">
			<div class="txt1">
				Improve<br>your business<br>today!
			</div>	
			<div class="txt2">
				Our work is dedicated to the prosperity of our clients!
			</div>	
			<div class="txt3">
				Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Praesent vestibu lum molestie lacus. Aenean nonummy hendrerit maurishasellus
			</div>	
			<a href="#" class="button0">read more<em></em></a>			
		</div>     
	</div>
	<div data-src="images/slide02.jpg">
		<div class="camera_caption fadeIn">
			<div class="txt1">
				Improve<br>your business<br>today!
			</div>	
			<div class="txt2">
				Our work is dedicated to the prosperity of our clients!
			</div>	
			<div class="txt3">
				Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Praesent vestibu lum molestie lacus. Aenean nonummy hendrerit maurishasellus
			</div>	
			<a href="#" class="button0">read more<em></em></a>			
		</div>     
	</div>
	<div data-src="images/slide03.jpg">
		<div class="camera_caption fadeIn">
			<div class="txt1">
				Improve<br>your business<br>today!
			</div>	
			<div class="txt2">
				Our work is dedicated to the prosperity of our clients!
			</div>	
			<div class="txt3">
				Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Praesent vestibu lum molestie lacus. Aenean nonummy hendrerit maurishasellus
			</div>	
			<a href="#" class="button0">read more<em></em></a>			
		</div>     
	</div>
	<div data-src="images/slide04.jpg">
		<div class="camera_caption fadeIn">
			<div class="txt1">
				Improve<br>your business<br>today!
			</div>	
			<div class="txt2">
				Our work is dedicated to the prosperity of our clients!
			</div>	
			<div class="txt3">
				Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Praesent vestibu lum molestie lacus. Aenean nonummy hendrerit maurishasellus
			</div>	
			<a href="#" class="button0">read more<em></em></a>		
		</div>     
	</div>			
</div>	
</div>	
</div>
</div>
</header>
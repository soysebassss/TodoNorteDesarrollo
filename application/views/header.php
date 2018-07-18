<!DOCTYPE html>
<html lang="en">
<head>
<title>Production - industry group</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="<?=base_url('resources/images/favicon.ico')?>" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?=base_url('resources/css/bootstrap.css')?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?=base_url('resources/css/bootstrap-responsive.css')?>" type="text/css" media="screen">    
<link rel="stylesheet" href="<?=base_url('resources/css/style.css')?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?=base_url('resources/css/camera.css')?>" type="text/css" media="screen">
<script type="text/javascript" src="<?=base_url('resources/js/jquery.js')?>"></script>  
<script type="text/javascript" src="<?=base_url('resources/js/jquery.easing.1.3.js')?>"></script>
<script type="text/javascript" src="<?=base_url('resources/js/superfish.js')?>"></script>
<script type="text/javascript" src="<?=base_url('resources/js/jquery.ui.totop.js')?>"></script>
<script type="text/javascript" src="<?=base_url('resources/js/camera.js')?>"></script>
<script type="text/javascript" src="<?=base_url('resources/js/jquery.mobile.customized.min.js')?>"></script>
<link type="image/png" rel="icon" href="<?=base_url('resources/images/baxter_icon_32x32.png')?>" sizes="32x32">
<script src="<?=base_url('resources/vendors/js/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('resources/vendors/js/dataTables.bootstrap.min.js')?>" type="text/javascript" charset="utf-8" >
</script>
<script>
$(document).ready(function() {
  // camera
  $('#camera_wrap').camera({
    //thumbnails: true
    autoAdvance     : true,   
    mobileAutoAdvance : true,
    height: '55%',
    hover: false,
    loader: 'none',
    navigation: false,
    navigationHover: false,
    mobileNavHover: false,
    playPause: false,
    pauseOnClick: false,
    pagination      : true,
    time: 7000,
    transPeriod: 1000,
    minHeight: '500px'
  });


}); //
$(window).load(function() {
  //

}); //
</script>   
<!--[if lt IE 8]>
    <div style='text-align:center'><a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>
  <![endif]-->    

<!--[if lt IE 9]>
  <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body>
<header>
<div class="top1">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="top1_inner clearfix">
          <div class="logo_wrapper"><a href="<?=site_url('Usuario')?>" class="logo">
            <img src="images/logo.png" alt=""></a>
          </div>
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
</div>
</header>
<!-- HOLAAAA-->
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
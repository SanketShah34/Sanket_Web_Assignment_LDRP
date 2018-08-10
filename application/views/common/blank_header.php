<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="description" content="Sanket Web Assignment">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
</head>
<body background="<?php echo base_url();?>/assets/images/bgr_login.jpeg">

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1062744347215142',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.1'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
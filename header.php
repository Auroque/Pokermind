<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title><!--Título da página-->
	<meta charset="<?php bloginfo( 'charset' ); ?>" /><!--Dinamismo do charset UTF-8 automático-->
	<meta name="viewport" content="width=device-width" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" /> <!--Link do bootstrap-->    
    <link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" /> <!--Link do bootstrap-->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /><!--Link do estilo do site, utilizando Style.css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" type="image/x-icon"/><!--Favicon-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/wow/css/libs/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=133152063916346";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="section topo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-8">
                    <ul class="social">
                        <li><a href="https://www.instagram.com/poker.mind/?hl=pt-br" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/pokermind/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/pokermindbr" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCfQ6-3qAfl29PkO_2XJMVWQ" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section sec_logo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="lg">
                        <a href="<?php echo get_option('home') ?>"><img class="img_logo wow flipInX" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logotipo Poker Mind"></a>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <div class="section menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav_bar">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
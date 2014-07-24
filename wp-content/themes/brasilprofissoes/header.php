<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="margin: 0px !important;" <?php language_attributes(); ?>>
  <head profile="http://gmpg.org/xfn/11">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
    
    
    <?php wp_head(); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body <?php body_class($class); ?>>
    <header>
		<div class="areaexclusiva">
			<div class="container">
				<div class="area area-pad">ÁREA EXCLUSIVA</div>
				<form class="area-pad" action="login.php" method="post" name="login">
					<i class="area-mail"></i><input type="email" name="email_login" placeholder="e-mail">
					<i class="area-pass"></i><input type="password" name="senha_login" placeholder="senha">
					<button type="submit" class="area-search2" name="bt_login"></button>
				</form>
				<div class="area-pad" style="float:left;">
					<a href="cadastro.php">cadastre-se</a><br>
					<a href="#">esqueci a senha</a>
				</div>
				<div class="acessibilidade area-pad" style="float:left;">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/acessibilidade.png" title="acessibilidade" alt="acessibilidade">
					ACESSIBILIDADE
				</div>
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="logos container">
			<div class="row">
				<a class="col-md-5" href="<?php echo home_url(); ?>" title="Brasil Profissões - O maior portal de profissões do Brasil">
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.jpg" alt="Brasil Profissões - O maior portal de profissões do Brasil" title="Brasil Profissões - O maior portal de profissões do Brasil">
				</a>
				<a class="col-md-7 nopad text-right" href="#" title="Microsoft Training">
					<img class="pad-y img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/img/propaganda_microsoft.jpg" alt="microsft training">
				</a>
			</div>
		</div>
		<nav>
			<div class="menu container">
				<a class="menu-home" href="<?php echo home_url(); ?>" title="home"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/link_home.jpg" alt="Home" title="Home"></a>
				<?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
				<div id="link_redes">
					<a class="fa fa-google-plus fa-2x" href="www.google.com"></a>
					<a class="fa fa-youtube fa-2x" href="#"></a>
					<a class="fa fa-linkedin fa-2x" href="#"></a>
					<a class="fa fa-twitter fa-2x" href="#"></a>
					<a class="fa fa-facebook-square fa-2x" href="#"></a>
				</div>
			</div>
		</nav>
		<div style="clear:both;"></div>
	</header>
	
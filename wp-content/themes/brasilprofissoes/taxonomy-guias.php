<?php get_header(); ?>
   <style type="text/css" media="screen">
   	#menu-menu-guias li{
	background-color: #0d6cac;
	width: 100%;
	text-align: center;
	padding: 16px;
	margin-top: 10px;
}

#menu-menu-guias li:last-child,#menu-menu-guias li:first-child{
	background-color: #2bb673;
	cursor: pointer;
}

#menu-menu-guias li:last-child:hover,#menu-menu-guias li:first-child:hover{
	background-color:#339966;
	cursor: pointer;
}

#menu-menu-guias li:hover{
	background-color:#0a5c94; 
	cursor: pointer;
}

#menu-menu-guias li a{
	color: #fff;
	font-size: 18px;
}
   </style> 
    
    <section>
	    <div class="container">
		    <div class="row">
		     <br>
			    <div class="col-md-3 col-sm-4 nopad">
				    <div class="menu_esquerdo">
				    	<?php dynamic_sidebar( 'menu-guias' ); ?>
				    </div>  
				    <div class="ad_vertical_micro">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/ad_verticalmicro.jpg" class="img-responsive">
				    </div>     
			    </div>
		    </div>      
	    </div>
    </section>
    
<?php get_footer(); ?>
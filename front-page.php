<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link href="//static.wepesi.com/default.min-0.0.1.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/front.css" type="text/css" />
    </head>
    <body class="home">
        <div class="container">
            <header class="header clearfix">
                <div class="pull-left">
                    <h1 class="logo">
                        <a>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/wepesi.png" width="189" height="40" alt="Wepesi"/>&#160;
                        </a>
                    </h1>
                </div>
                <div class="pull-right">
                    <nav class="nav color-one">
	                <?php
		                $menu_args = array(
        	                'theme_location' => 'pexeto_main_menu',
            	            'container' => false,
                	        'menu_class' => 'menu-ul');

    	            	if(has_nav_menu( 'pexeto_main_menu' )){
        	            	$menu_args['walker'] = new PexetoMenuWalker();
	            	    }
	
    	            	wp_nav_menu($menu_args); ?>
                    </nav>
                </div>
            </header>
			<main class="main">
				<h1>Your great website starts today.</h1>
				<p>Wepesi lets you build websites that are;</p>
				<ul>
					<li class="space-top"><h2>easy to create <i class="fa fa-check"></i></h2></li>
					<li class="space-top"><h2>easy to update <i class="fa fa-check"></i></h2></li>
					<li class="space-top"><h2>easy on your budget <i class="fa fa-check"></i></h2></li>
				</ul>
				<ul class="activate-links space-top row">
					<li class="color-three">
						<a href="/wp-signup.php">
							<i class="fa fa-email"></i>
							<span>Get started now</span>
						</a>
					</li>
				  </ul>
			</main>
            <footer class="text-center double-space-top">
                <p>&#169; Copyright 2014 Gereji Limited. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>

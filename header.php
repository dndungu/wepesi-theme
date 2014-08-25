<html <?php language_attributes(); ?>>
	<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link href="//static.wepesi.com/default.min-0.0.1.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
		<div class="container">
	        <header class="header clearfix">
                <div class="pull-left">
                    <h1 class="logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/wepesi.png" width="173" height="40" alt="Wepesi"/>
                        </a>
                    </h1>
                </div>
                <div class="pull-right">
                    <nav class="nav color-one">
                        <ul>
                            <li><a href="/">HOME</a></li>
                            <li><a href="/portfolio">PORTFOLIO</a></li>
                            <li><a href="/pricing">PRICING</a></li>
                            <li><a href="/blog">BLOG</a></li>
                        </ul>
                    </nav>
                </div>
    	    </header>

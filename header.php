<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
    	<?php
        //tytul
        wp_title('|', true, 'right');
        //Dodanie nazy bloga
        bloginfo('name');
        $scieszka = get_template_directory_uri();
        ?>
    </title>
    <link rel="pingback" href="<?php wp_enqueue_style ('Fundacja',get_template_directory_uri() . '/style.css'); ?>">
    <link href="<?php echo $scieszka; ?>offcanvas.css" rel="stylesheet">
    <?php	wp_head(); 	?>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark blueBox">
        <div class="container">
            <a class="navbar-brand mr-auto mr-lg-0" href="#">
        <img src="<?php echo $scieszka; ?>/images/logo.png">
        </a>
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas" style="z-index:10">
        <span class="navbar-toggler-icon"></span>
      </button>

            <div class="navbar-collapse offcanvas-collapse justify-content-end" id="navbarsExampleDefault">
                <?php
							wp_nav_menu(array(
								'theme-location'=>'TopMenu',	
								'menu_class' => 'navbar-nav mr-auto',
                                'menu_id' => 'top-menu',
								)
							);
						?>
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square" style="color:#fff;font-size:32px"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">    
<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    
<header>
    <div class="navbar">
    <?php if(get_header_image()) : ?>
        <div id="site-header">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php header_image(); ?>" 
                    width="<?php echo absint(get_custom_header()->width); ?>" 
                    height="<?php echo absint(get_custom_header()->height);?>" 
                    alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                />
            </a>
        </div>
    <?php endif; ?>
    <div class="icon-responsive">
    <div id="menu-icon"><i class="fas fa-bars"></i></div>
    <?php wp_nav_menu(
        array(
            'theme_location' => 'top-menu'
        )
    );?>
    </div>
</div>
</header>
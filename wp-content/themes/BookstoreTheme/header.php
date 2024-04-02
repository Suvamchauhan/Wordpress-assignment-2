<!DOCTYPE html>
<html>
<head>
    <title></title>


    <?php wp_head();?>

</head>

<body <?php body_class(); ?>>


<header> 
    <div class="container">
        <div class="nav-menu">
    <img src="<?php echo esc_url(home_url('wp-content/themes/BookstoreTheme/assets/images/bookstore-logo.png')); ?>" height="50px"  class="logo"/>   
    
    <?php wp_nav_menu(
        array('theme_location' => 'top-menu'
        )
    )
    ?>
    </div>

</div>
</header>

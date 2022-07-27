<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<header class="banner" role="banner">
     <nav class="navbar " style="background-color: #e3f2fd; height: 100px;">
        <div class="container-fluid">
        
        <a class="navbar-brand" >Realise </a>
        <?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' )); 
?>
          <form class="d-flex" role="search">
      
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
         
        </div>
      </nav>
    </header>
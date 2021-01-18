<!DOCTYPE html>
<html lang="en">

<head>
<title>Genre Hopper</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
	<?php wp_head(); ?>
</head>
<?php 

/* if the condition is - is_front_page() true then the class 
// $addedClasses would be added 
 this works =>>>> */
if (is_front_page()):
	$addedClasses = array('front-page-classes','other-new-class');
else: 
	$addedClasses = array('other-page-class', 'other-new-class');
endif;
?>

<!-- or body_class(array('addedClasses','my-class')); -->
<body <?php body_class($addedClasses); ?>>

<div class="empty-space"> </div>
<header class="main-header-container">
<div class="main-header-wrapper">
	<div class="logo-container"><!-- <p>
	<span>Do</span>
	<span>While</span>
	<span>Loop</span>
   </p> -->
  <?php wp_nav_menu (
  array (
      'theme_location' => 'bottom-menu',
      'menu_class' => 'nav-style-logo',
  )
);
?> 	

   </div>
	<div class="empty-block-1"> </div>

<div class="top-menu-container">
<?php wp_nav_menu (
  array (
      'theme_location' => 'top-menu',
      'menu_class' => 'nav-style',
  )
);
?>
</div>

</div>
 </header>



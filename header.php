<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fremantle art centre</title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
    
<title>
<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
?>
</title>
  
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">    
<link rel="stylesheet" href="style.css">
<?php wp_head(); ?>    
    
</head>
<body>
    
 <!-- navbar--> 
     <header class="container-fluid">
<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="#" >FREMANTLE <br>ART CENTRE </a>
    </div><!-navbar-header -->
      
       <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="file:///C:/Users/zhang/Documents/GitHub/fremantle-art-centre-web/index.html">HOME</a></li>    
         <li><a href="#">WHAT'S ON</a></li>
      <li><a href="#">ARTISTS</a></li>
        <li><a href="#">ABOUT US</a></li>
      <li><a href="#">CONTACT US</a></li>
    </ul>
  </div><!--nav-collapse -->
</nav><!--navbar -->
    </header>
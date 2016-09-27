
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="Justin Delabar">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Typography -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,700i|Varela+Round" rel="stylesheet">

    <!-- Custom styles for this template -->
     <link href="<?php bloginfo('template_directory');?>/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php wp_head();?>
  
  </head>

  <body>


<nav id="masthead" class="navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="/">

      <img src="<?php bloginfo('template_directory');?>/images/logo-white.svg" width="250" height="41">

      <h1><?php echo get_bloginfo( 'name' ); ?></h1>

    </a>


    <button type="button" class="navbar-toggle nav-btn" data-toggle="collapse" data-target=".navbar-collapse">
         <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav pull-right">
    <?php wp_list_pages( '&title_li='); ?>
    <li class="page_item"><a href="#">Follow</a></li>
    </ul>
  </div>

    <h2 class="description"><?php echo get_bloginfo( 'description' ); ?></h2>

</nav>

      </div>
    </div>

    <div class="container no-gutter">

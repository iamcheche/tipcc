<?php echo doctype('html5')?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php echo link_tag(base_url() . 'resources/login.css')?>
        <?php echo link_tag(base_url() . 'assets/css/bootstrap.min.css')?>
        <?php echo link_tag(base_url() . 'assets/css/custom.css')?>
        <?php echo link_tag(base_url() . 'resources/login-footer.css')?>
        <?php echo link_tag(base_url() . 'resources/slideshow.css')?>

        <!--Make sure page contains valid doctype at the very top!-->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/carousel.js"></script>
        <script type="text/javascript" src = "<?php echo base_url();?>js/setup.js"></script>
        <script type="text/javascript" src = "<?php echo base_url();?>js/modernizr.custom.86080.js"></script>
        
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $title ?></title>

        <!-- Bootstrap -->
       

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
  <body>
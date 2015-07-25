<nav class="navbar navbar-default" style="width:100%">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color:#ffdb19"><?php echo img(array('src'=>'img/tipcc.jpg',  'width' => '80', 'height' => '25')); ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('index.php/home'); ?>">Home</a></li>
        <li><a href="<?php echo base_url('index.php/linkages'); ?>" >Linkages Management</a></li>
        <li><a href="" >Users Management</a></li>
        <li><a href="<?php echo base_url('index.php/email')?>" >Blast Emails</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li> <h4 style="margin-top: 6.5%; color: #ffdb19;">Howdy, <?php echo $username; ?>! | <a href = "<?php echo base_url('index.php/logout');?>" style="color: #c0c0c0">Logout</a></h4></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
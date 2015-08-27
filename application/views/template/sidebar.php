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
            <li><a href="<?php echo base_url('index.php/home'); ?>" style = "color:#ffcc00;">Home</a></li>
            <li><a href="<?php echo base_url('index.php/linkages'); ?>" style = "color:#ffcc00;">Linkages Management</a></li>
            <li><a href="<?php echo base_url('index.php/users'); ?>" style = "color:#ffcc00;">Users Management</a></li>
            <li><a href="<?php echo base_url('index.php/email')?>" style = "color:#ffcc00;">Blast Emails</a></li>
            <li><a href="<?php echo base_url('index.php/email/history')?>" style = "color:#ffcc00;">Email History</a></li>
        </ul>
      
        <ul class="nav navbar-nav navbar-right">
            <li></li>
            <li> <h4 style="margin-top: 6.5%; color: #ffdb19;"> <a href = ""><?php echo img(array('src'=>'img/settings.png',  'width' => '22', 'height' => '22')); ?> </a>Howdy, <?php echo $username; ?>! | <a href = "<?php echo base_url('index.php/logout');?>" onclick = "return logoutDialog()" style="color: #c0c0c0">Logout</a></h4></li>
        </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
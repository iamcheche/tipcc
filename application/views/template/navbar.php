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
        <a class="navbar-brand" style="color:#ffdb19; padding:0 !important;"><?php echo img(array('src'=>'img/tipcc.jpg',  'width' => '120', 'height' => '50')); ?></a>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <!-- <li><a href="<?php echo base_url('index.php/home'); ?>" style = "color:#fbde43;">Events Calendar</a></li>
            <li><a href="<?php echo base_url('index.php/linkages'); ?>" style = "color:#fbde43;">Manage Linkages</a></li>
            <li><a href="<?php echo base_url('index.php/users'); ?>" style = "color:#fbde43;">Manage Users</a></li>
            <li><a href="<?php echo base_url('index.php/subscribe'); ?>" style = "color:#fbde43;">Manage Subscribers</a></li>            
            <li><a href="<?php echo base_url('index.php/email')?>" style = "color:#fbde43;">Email Linkages</a></li>
            <li><a href="#" style = "color:#fbde43;">Email Subscribers</a></li>
            <li><a href="<?php echo base_url('index.php/email/history')?>" style = "color:#fbde43;">Email History</a></li> -->
            <div class="btn-group" style = "margin-top:2.5%; margin-left: 2.5%;">
                
                <div class = "btn-group">
                    <a href="<?php echo base_url('index.php/home'); ?>"><button type="button" class="btn btn-default">Events Calendar</button></a>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" 
                    data-toggle="dropdown">
                    Manage
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('index.php/linkages'); ?>">Linkages</a></li>
                        <li><a href="<?php echo base_url('index.php/users'); ?>">Users</a></li>
                        <li><a href="<?php echo base_url('index.php/subscribe'); ?>">Subscribers</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" 
                    data-toggle="dropdown">
                    Blast Email
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('index.php/email')?>">Linkages</a></li>
                        <li><a href="<?php echo base_url('index.php/email/subscribers')?>">Subscribers</a></li>
                        <li><a href="<?php echo base_url('index.php/email/history')?>">Email Blast History</a></li>
                    </ul>
                </div>
            </div>
        </ul>
      
        <ul class="nav navbar-nav navbar-right">
            <li>
            </li>
            <li> 
                <h4 style="margin-top: 6.5%; margin-left: 2%;"> 
                Howdy, <?php echo $username; ?> | <a href = "#openLogout">Logout</a></h4></li>
                <div id="openLogout" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div id = "register_form">
                            <br>
                            <p> Are you sure you want to log out?</p>
                            <?php
                                echo form_open('index.php/logout');
                                echo form_submit('submit', 'Yes, Log me out.');
                                echo form_close();
                            ?>
                            <br>
                        </div>
                    </div>
                </div>
                
        </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
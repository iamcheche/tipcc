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
            <li><a href="<?php echo base_url('index.php/home'); ?>" style = "color:#fbde43;">Events Calendar</a></li>
            <li><a href="<?php echo base_url('index.php/linkages'); ?>" style = "color:#fbde43;">Linkages Management</a></li>
            <li><a href="<?php echo base_url('index.php/users'); ?>" style = "color:#fbde43;">Users Management</a></li>
            <li><a href="<?php echo base_url('index.php/email')?>" style = "color:#fbde43;">Blast Emails</a></li>
            <li><a href="<?php echo base_url('index.php/email/history')?>" style = "color:#fbde43;">Email History</a></li>
        </ul>
      
        <ul class="nav navbar-nav navbar-right">
            <li>
            </li>
            <li> 
                <h4 style="margin-top: 6.5%; margin-left: 2%;color: #fbde43;"> 
                Howdy, <a href="#openSetting"  style = "color:#fbde43"><?php echo $username; ?></a>! | <a href = "#openLogout">Logout</a></h4></li>
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
                <div id="openSetting" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div id = "register_form">
                            <?php
                                    $username = array('id' => 'username', 'name' => 'username');
                                    $password = array('id' => 'password', 'name' => 'password');
                                    $c_password = array('id' => 'c_password' , 'name' => 'c_password');
                                    $first_name = array('id' => 'first_name', 'name' => 'first_name');
                                    $middle_initial = array('id' => 'middle_initial', 'name' => 'middle_initial');
                                    $last_name = array('id' => 'last_name', 'name' => 'last_name');
                                    $email_address = array('id' => 'email_address', 'name' => 'email_address');
                                    $contact_number = array('id' => 'contact_number' , 'name' => 'contact_number');
                                    $role = array('id' => 'role' , 'name' => 'role', 'readonly' => 'true');
                                    $attributes = array('style' => 'font-size:13px;' );                  
                                ?>

                                <h1>Account Settings</h1><br />
                                <?php
                                    echo form_open('index.php/registration/registered');

                                    echo form_label('Username:', $username['id'], $attributes);
                                    echo form_input($username);
                                    echo '<div id = "error">' . form_error('username') . '</div>';

                                    echo form_label('First Name:', $first_name['id'], $attributes);
                                    echo form_input($first_name);                                    
                                    echo '<div id = "error">' . form_error('first_name') . '</div>';
                                     
                                    
                                    echo form_label('Middle Initial:', $middle_initial['id'], $attributes);
                                    echo form_input($middle_initial);
                                    echo '<br>';
                                    echo form_label('Last Name:', $last_name['id'], $attributes);
                                    echo form_input($last_name);                                    
                                    echo '<div id = "error">' . form_error('last_name') . '</div>';
                                     
                                    
                                    echo form_label('E-mail Address:', $email_address['id'], $attributes);
                                    echo form_input($email_address);                                    
                                    echo '<div id = "error">' . form_error('email_address') . '</div>';
                                     
                                    
                                    echo form_label('Contact Number:', $contact_number['id'], $attributes);
                                    echo form_input($contact_number);                                    
                                    echo '<div id = "error">' . form_error('contact_number') . '</div>';
                                                                         
                                    echo form_label('Role:', $role['id'], $attributes);
                                    echo form_input($role, set_value('user', 'user')) ;
                                    echo '<br><br>';
                                    echo form_submit('submit', 'Update My Account');
                                    echo form_close();  
                                    echo '<br>';                        
                                ?>
                                <?php
                                    echo form_open('');
                                    echo form_submit('submit', 'Change Password');
                                    echo form_close();  
                                    
                                ?>
                        </div>
                    </div>
                </div>
        </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
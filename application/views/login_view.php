        <div id = "container"> 
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
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

                                <h1>Create an Account</h1><br />
                                <?php
                                    echo form_open('index.php/registration/registered');

                                    echo form_label('Username:', $username['id'], $attributes);
                                    echo form_input($username);
                                    echo '<br />';
                                    echo '<br />';
                                    echo form_label('Password:', $password['id'], $attributes);
                                    echo form_password($password);
                                    echo '<br />';
                                    echo '<br />';
                                    echo form_label('Retype Password:', $c_password['id'], $attributes);
                                    echo form_password($c_password);
                                    echo '<br />';
                                    echo '<br />';
                                    echo form_label('First Name:', $first_name['id'], $attributes);
                                    echo form_input($first_name);
                                    echo '<br />';
                                    echo '<br />';
                                    echo form_label('Middle Initial:', $middle_initial['id'], $attributes);
                                    echo form_input($middle_initial);
                                    echo '<br />';
                                    echo '<br />';
                                    echo form_label('Last Name:', $last_name['id'], $attributes);
                                    echo form_input($last_name);
                                    echo '<br />';
                                    echo '<br />';
                                    echo form_label('E-mail Address:', $email_address['id'], $attributes);
                                    echo form_input($email_address);
                                    echo '<br />';
                                    echo '<br />';
                                    echo form_label('Contact Number:', $contact_number['id'], $attributes);
                                    echo form_input($contact_number);
                                    echo '<br />';
                                    echo '<br />';
                                    echo form_label('Role:', $role['id'], $attributes);
                                    echo form_input($role, set_value('user', 'user')) ;
                                    echo '<br /><br />';
                                    echo form_submit('submit', 'Sign me up!');
                                    echo form_close();                          
                                ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div id="mygallery" class="stepcarousel">
                        <div class="belt">

                            <div class="panel">
                                <img src="img/1.jpg" style = "width:25%; height:580px; " />
                            </div>

                            <div class="panel">
                                <img src="img/2.jpg" style = "width:25%; height:580px;" />
                            </div>

                            <div class="panel">
                                <img src="img/1.jpg" style = "width:25%; height:580px;" />
                            </div>

                            <div class="panel">
                                <img src="img/2.jpg" style = "width:25%; height:580px;" />
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
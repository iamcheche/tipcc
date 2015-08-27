<div class="container">
        <div class="row" style = "text-align:center;">
        <?php  
            $search = array('id' => 'search', 'name' => 'search', 'placeholder' => 'Search User(s)', 'style' => 'width:100%;'); 
        ?>
        

        <div id = "crud_form">
            <div class = "col-md-4">
                <h2>Users Management</h2>
            </div>            
            <div class = "col-md-2">
                <a href="#openAddAdmin"><?php echo img(array('src'=>'img/add.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
                <p><b>Create New Admin</b></p>

                <div id="openAddAdmin" class="modalDialog">
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

                                <h1>CREATE NEW ADMIN</h1><br />
                                <?php
                                    echo form_open('index.php/registration/registered');

                                    echo form_label('Username:', $username['id'], $attributes);
                                    echo form_input($username);
                                    echo '<div id = "error">' . form_error('username') . '</div>';
                                    echo '<br>';

                                    echo form_label('Password:', $password['id'], $attributes);
                                    echo form_password($password);
                                    echo '<div id = "error">' . form_error('password') . '</div>';
                                    echo '<br>';

                                    echo form_label('Retype Password:', $c_password['id'], $attributes);
                                    echo form_password($c_password);
                                    echo '<div id = "error">' . form_error('c_password') . '</div>';
                                    echo '<br>';

                                    echo form_label('First Name:', $first_name['id'], $attributes);
                                    echo form_input($first_name);                                    
                                    echo '<div id = "error">' . form_error('first_name') . '</div>';
                                    echo '<br>'; 
                                    
                                    echo form_label('Middle Initial:', $middle_initial['id'], $attributes);
                                    echo form_input($middle_initial);
                                    echo '<br>';
                                    echo '<br>';

                                    echo form_label('Last Name:', $last_name['id'], $attributes);
                                    echo form_input($last_name);                                    
                                    echo '<div id = "error">' . form_error('last_name') . '</div>';
                                    echo '<br>'; 
                                    
                                    echo form_label('E-mail Address:', $email_address['id'], $attributes);
                                    echo form_input($email_address);                                    
                                    echo '<div id = "error">' . form_error('email_address') . '</div>';
                                    echo '<br>';
                                    
                                    echo form_label('Contact Number:', $contact_number['id'], $attributes);
                                    echo form_input($contact_number);                                    
                                    echo '<div id = "error">' . form_error('contact_number') . '</div>';
                                    echo '<br>';

                                    echo form_label('Role:', $role['id'], $attributes);
                                    echo form_input($role, set_value('admin', 'admin')) ;
                                    echo '<br><br>';
                                    
                                    echo form_submit('submit', 'Sign me up!');
                                    echo form_close();  
                                    echo '<br>';                        
                                ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class = "col-md-2">
               <a href="pdf/user"><?php echo img(array('src'=>'img/print.png',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
               <p><b>Print</b></p> 
            </div>

            <div class = "col-md-2">
                <a href="users/csv"><?php echo img(array('src'=>'img/export.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
                <p><b>Export CSV</b></p> 
            </div>

            <div class = "col-md-2">
                <a href="users"><?php echo img(array('src'=>'img/view.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
                <p><b>View All</b></p> 
            </div>

        </div>
    </div>

                
    <br>
    <div class = "row">
        <div id = "crud_form">
            <?php
                echo form_open('index.php/users/search_user');
                echo '<div class = "col-md-1"></div>';
                echo '<div class = "col-md-7">';
                echo form_input($search);
                echo '<br><br>';
                echo '</div>';
                echo '<div class = "col-md-3">';
                echo form_submit('submit', 'Search User(s)');
                echo form_close();
                echo '<br><br>';
                echo '</div>';
            ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class = "table-responsive">
                    <table class = "table" >
                        <thead>
                            <tr style="text-align:center; ">
                                <th style="text-align:center;">ID</th>
                                <th style="text-align:center;">Username</th>
                                <th style="text-align:center;">Name</th>
                                <th style="text-align:center;">Email Address</th>
                                <th style="text-align:center;">Contact Number</th>
                                <th style="text-align:center;">Role</th>
                                <th style="text-align:center;">Date Created</th>
                                <th colspan="3" style = "text-align:center;">Actions</th>
                            </tr>
                        </thead>

                        <tbody class = "table-striped">
                            <?php if(isset($records)) : foreach ($records as $row) : ?>
                                 <tr>
                                        <td><?php echo $row->user_id ?></td>
                                        <td><?php echo $row->username ?></td>
                                        <td><?php echo $row->first_name . ' ' . $row->middle_initial . ' ' . $row->last_name ?></td>
                                        <td><?php echo $row->email_address ?></td>
                                        <td><?php echo $row->contact_number ?></td>
                                        <td><?php echo $row->role ?></td>
                                        <td><?php echo $row->date_created ?></td>
                                        
                                        <td> <?php echo anchor("index.php/users/view_user/$row->user_id", 'View'); ?></td>
                                        <td> <?php echo anchor("index.php/users/update_user/$row->user_id", 'Update '); ?></td> 
                                        <td>
                                            <a href="#openDelete">Delete</a> 
                                            <div id="openDelete" class="modalDialog">
                                                <div>
                                                    <a href="<?php echo 'users' ?>" title="Close" class="close">X</a>
                                                    <div id = "register_form">
                                                        <br>
                                                        Are you sure you want to <em>DELETE</em> this record?<br>
                                                        <?php
                                                            echo form_open('index.php/users/delete/' . $row->user_id);
                                                            echo form_submit('submit', 'Yes! I am 100% sure!');
                                                            echo form_close();
                                                        ?>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>                         
                                 <tr>
                            <?php endforeach; ?>
                        </tbody>     
                    </table>
                </div>  
                    <?php else : ?>     
                         <h2>No records were returned.</h2>
                    <?php endif; ?>      
                
                    <hr >  
                                        
    </div>
 </div>
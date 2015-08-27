<div id = "container">	
	<div class = "row">
		<div class = "col-md-12" style="background-color:#363636;color:#fbde43;text-align:center; ">
			<div id = "error">
    			<?php echo validation_errors(); ?>
    		</div>
			<h1>RECORD VIEWER</h1>
		</div>
	</div>
	<br>
	<div class = "row" style="text-align:center;">
		<div class = "col-md-12" >

			<br>
			<div class="row">
				<div id = "crud_form">
                        <?php foreach ($single_user as $user): ?>
                        <?php
                              $user_id = array('id' => 'user_id', 'name' => 'user_id', 'class' => 'form-control', 'placeholder' => 'User ID', 'value' => $user->user_id, 'readonly' => true  );
                              $username = array('id' => 'username', 'name' => 'username', 'class' => 'form-control', 'placeholder' => 'Username', 'value' => $user->username);
                              $password = array('id' => 'password', 'name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'value' => $user->password);
                              $c_password = array('id' => 'c_password', 'name' => 'c_password', 'class' => 'form-control', 'placeholder' => 'Confirm Password', 'value' => $user->c_password);
                              $first_name = array('id' => 'first_name', 'name' => 'first_name', 'class' => 'form-control', 'placeholder' => 'First Name', 'value' => $user->first_name);
                              $middle_initial = array('id' => 'middle_initial', 'name' => 'middle_initial', 'class' => 'form-control', 'placeholder' => 'Middle Initial', 'value' => $user->middle_initial);
                              $last_name = array('id' => 'last_name', 'name' => 'last_name', 'class' => 'form-control', 'placeholder' => 'Last Name', 'value' => $user->last_name);
                              $email_address = array('id' => 'email_address', 'name' => 'email_address', 'class' => 'form-control', 'placeholder' => 'Email Address', 'value' => $user->email_address);
                              $contact_number = array('id' => 'contact_number', 'name' => 'contact_number', 'class' => 'form-control', 'placeholder' => 'Contact Number', 'value' => $user->contact_number);
                              $role = array('id' => 'role', 'name' => 'role', 'class' => 'form-control', 'placeholder' => 'Role', 'value' => $user->role);
                              $date_created = array('id' => 'date_created', 'name' => 'date_created', 'class' => 'form-control', 'placeholder' => 'Date Created', 'value' => $user->date_created);          
                          ?>  

                        <?php
                              echo form_open('index.php/users/index');
                              
                              echo form_label('User ID');
                              echo form_input($user_id);
                              echo '<br /><br />';
                              echo form_label('Username');
                              echo form_input($username);
                              echo '<br /><br />';
                              echo form_label('Password');
                              echo form_input($password);
                              echo '<br /><br />';
                              echo form_label('Confirm Password');
                              echo form_input($c_password);
                              echo '<br /><br />';
                              echo form_label('First Name');
                              echo form_input($first_name);
                              echo '<br /><br />';
                              echo form_label('Middle Initial');
                              echo form_input($middle_initial);
                              echo '<br /><br />';
                              echo form_label('Last Name');
                              echo form_input($last_name);
                              echo '<br /><br />';
                              echo form_label('Email Address');
                              echo form_input($email_address);
                              echo '<br /><br />';
                              echo form_label('Contact Number');
                              echo form_input($contact_number);
                              echo '<br /><br />';
                              echo form_label('Role');
                              echo form_input($role);
                              echo '<br /><br />';
                              echo form_label('Date Created');
                              echo form_input($date_created);
                              echo '<br /><br />';      
                              echo form_submit('submit', 'Return to Users Management Page');
                              echo '<br /><br />';
                              echo form_close();                          
                    ?>
              <?php endforeach; ?>		        
                  </div>
	        </div>
		</div>
	</div>
</div>      
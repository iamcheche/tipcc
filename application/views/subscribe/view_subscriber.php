<div id = "container">	
		<div class = "col-md-12" style="background-color:#363636;color:#fbde43;text-align:center; ">
			<div id = "error">
    			<?php echo validation_errors(); ?>
    		</div>
			<h1>RECORD VIEWER</h1>
		</div>

		    
                  <div class = "col-md-1"></div>
			<br>
                  <div class = "col-md-10" style = "text-align: center;">
                        <div class="row">
                        <div id = "crud_form">
                        <?php foreach ($single_subscriber as $subscriber): ?>
                        <?php
                              $sub_id = array('id' => 'sub_id', 'name' => 'sub_id', 'class' => 'form-control', 'placeholder' => 'User ID', 'value' => $subscriber->sub_id, 'readonly' => true  );
                              $name = array('id' => 'name', 'name' => 'name', 'class' => 'form-control', 'placeholder' => 'Username', 'value' => $subscriber->name);
                              $email = array('id' => 'email', 'name' => 'email', 'class' => 'form-control', 'placeholder' => 'Password', 'value' => $subscriber->email);
                              $contact_number = array('id' => 'contact_number', 'name' => 'contact_number', 'class' => 'form-control', 'placeholder' => 'Confirm Password', 'value' => $subscriber->contact_number);
                          ?>  


                        <?php
                              echo form_open('index.php/subscribe');
                              
                              echo '<br /><br />'; 
                              echo form_label('ID');
                              echo form_input($sub_id);
                              echo '<br /><br />';
                              echo form_label('Name');
                              echo form_input($name);
                              echo '<br /><br />';
                              echo form_label('Email Address');
                              echo form_input($email);
                              echo '<br /><br />';
                              echo form_label('Confirm Password');
                              echo form_input($contact_number);
                              echo '<br /><br />';
                              echo form_submit('submit', 'Return to Subscriber Management Page');
                              echo '<br /><br />';
                              echo form_close();                          
                    ?>
              <?php endforeach; ?>                
                  </div>
            	
	        </div>
		</div>
	</div>
</div>      
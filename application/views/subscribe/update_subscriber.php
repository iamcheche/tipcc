<div id = "container">	
		<div class = "col-md-12" style="background-color:#363636;color:#fbde43;text-align:center; ">
			<div id = "error">
    			<?php echo validation_errors(); ?>
    		</div>
			<h1>UPDATE SUBSCRIBER </h1>
		</div>
	<br>
		<div class = "col-md-1"></div>
            <div class = "col-md-10" >

			<br>
			<div class="row">
				<div id = "crud_form">
                        <?php foreach ($single_subscriber as $subscriber): ?>
				<?php
                    $sub_id = array('id' => 'sub_id', 'name' => 'sub_id', 'class' => 'form-control', 'placeholder' => 'User ID', 'value' => $subscriber->sub_id, 'readonly' => true);
                    $name = array('id' => 'name', 'name' => 'name', 'class' => 'form-control', 'placeholder' => 'Username', 'value' => $subscriber->name);
                    $email = array('id' => 'email', 'name' => 'email', 'class' => 'form-control', 'placeholder' => 'Password', 'value' => $subscriber->email);
                    $contact_number = array('id' => 'contact_number', 'name' => 'contact_number', 'class' => 'form-control', 'placeholder' => 'Confirm Password', 'value' => $subscriber->contact_number);
                ?>	

    			<?php
                    echo form_open('index.php/subscribe/update_subscriber');
                      
                    echo form_label('ID');
                    echo form_input($sub_id);
                    echo '<br /><br />';
                    echo form_label('Name');
                    echo form_input($name);
                    echo '<br /><br />';
                    echo form_label('Email Address');
                    echo form_input($email);
                    echo '<br /><br />';
                    echo form_label('Contact Number');
                    echo form_input($contact_number);
                    echo '<br /><br />';    
                    echo form_submit('submit', 'Update Subscriber');
                    echo '<br /><br />';
                    echo form_close();                          
                ?>
                
                <?php endforeach; ?>
		        </div>
	        </div>
		</div>
            <div class = "col-md-1"></div>
</div>      
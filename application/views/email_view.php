<div id = "container">
	<div id = "crud_form">
		<?php
			$subject = array('id' => 'subject', 'name' => 'subject', 'class' => 'form-control', 'placeholder' => 'Insert your subject here.');
			$message = array('id' => 'message', 'name' => 'message', 'class' => 'form-control', 'rows' => 5, 'placeholder' => 'Your Message Here.');		
		?> 

 
        <?php
			echo form_open('index.php/email/sendtoall');
			
			echo form_label('Mail To: All');
			echo '<br><br>';
			
			echo form_label('Subject:');
			echo form_input($subject);
			echo '<br><br>';

			echo form_label('Message:');
			echo form_textarea($message);
			echo '<br><br>';
			
			echo form_submit('submit', 'Send Email');
			echo form_close();                          
		?>    
	</div>
</div>	
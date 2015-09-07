<div id = "container">
	<div class = "col-md-1"></div>
	<div class  = "col-md-10">
		<div id = "crud_form">
			<?php
				$subject = array('id' => 'subject', 'name' => 'subject', 'class' => 'form-control', 'placeholder' => 'Insert your subject here.');
				$message = array('id' => 'message', 'name' => 'message', 'class' => 'form-control', 'rows' => 5, 'placeholder' => 'Your Message Here.');		 
			?> 
			
	        <?php
				echo form_open('index.php/email/sendtosubscribers');
					
				echo form_label('Mail To: Subscribers');
				echo '<br><br>';

				echo form_label('Subject:');
				echo form_input($subject);
				echo '<br>';
				echo '<div id = "error">' . form_error('subject') . '</div>';
				echo '<br><br>';

				echo form_label('Message:');
				echo form_textarea($message);
				echo '<br>';
				echo '<div id = "error">' . form_error('message') . '</div>';
				echo '<br><br>';
				
				echo form_submit('submit', 'Send Email');
				echo form_close();                          
			?>

		</div>
	</div>
	<div class = "col-md-1"></div>
</div>
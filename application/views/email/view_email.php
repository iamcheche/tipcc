<div<div id = "container">
    <div id = "crud_form">
       <?php foreach ($single_email as $email): ?>
                         
        <?php
            $email_id = array('id' => 'subject', 'name' => 'subject', 'class' => 'form-control', 'placeholder' => 'Insert your subject here.','value' => $email->email_id, 'readonly' => true );
            $subject = array('id' => 'subject', 'name' => 'subject', 'class' => 'form-control', 'placeholder' => 'Insert your subject here.','value' => $email->subject, 'readonly' => true );
            $message = array('id' => 'message', 'name' => 'message', 'class' => 'form-control', 'rows' => 5, 'placeholder' => 'Your Message Here.', 'value' => $email->message, 'readonly' => true );         
            $email_sent = array('id' => 'message', 'name' => 'message', 'class' => 'form-control', 'placeholder' => 'Your Message Here.', 'value' => $email->email_sent, 'readonly' => true );         
        ?> 
        
        <?php
            echo form_open('index.php/email/history');
            
            echo form_label('Email ID:');
            echo form_input($email_id);
            echo '<br>';
            echo '<div id = "error">' . form_error('subject') . '</div>';
            echo '<br><br>';

            echo form_label('Mailed To: Linkages');
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
            
            echo form_label('Timestamp of Email:');
            echo form_input($email_sent);
            echo '<br>';
            echo '<div id = "error">' . form_error('message') . '</div>';
            echo '<br><br>';
            
            
            echo form_submit('submit', 'Return to Email History');
            echo form_close();                          
        ?>    
    <?php endforeach; ?> 
    </div>
</div>
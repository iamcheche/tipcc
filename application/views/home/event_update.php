<div id = "container">	
	<div class = "row">
		<div class = "col-md-12" style="background-color:#363636;color:#fbde43;text-align:center; ">
			<h1>UPDATE EVENT </h1>
		</div>
	</div>
	<br>
	<div class = "row" style="text-align:center;">
		<div class = "col-md-1"></div>
		<div class = "col-md-10" >

			<br>
			<div class="row">
				<div id = "crud_form">
                    <?php foreach ($single_event as $event): ?>
					<?php
                              $event_id = array('id' => 'event_id', 'name' => 'event_id', 'class' => 'form-control', 'value' => $event->event_id, 'readonly' => true  );
			            $event_name = array('id' => 'event_name', 'name' => 'event_name', 'class' => 'form-control', 'placeholder' => 'Event', 'value' => $event->event_name, 'rows' => 3);
			         ?>	

    				<?php
                        echo form_open('index.php/home/update_event');
                              
                        echo form_label('EVENT ID');
                        echo form_input($event_id);
                        echo '<br /><br />';
                                  
                        echo form_label('Event Name');
                        echo form_textarea($event_name);
                        echo '<br>';
                        echo '<div id = "error">' . form_error('event_name') . '</div>';
                        echo '<br /><br />';

                        echo form_submit('submit', 'Update Event');
                        echo '<br /><br />';
                        echo form_close();                          
                    ?>
              		<?php endforeach; ?>
		        </div>
	        </div>
		</div>
		<div class = "col-md-1"></div>
	</div>
</div>      
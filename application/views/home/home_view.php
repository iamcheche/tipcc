    
<div id = "container"> 
    <div class = "col-md-12"><H1 style = "background-color:#363636; color: #fbde43; text-align:center;">EVENTS CALENDAR</H1></div>  

    <div class  = "col-md-3">
        <h2 style = "background-color:#363636; color:#fbde43; text-align: center;">OPTIONS</h2>
        <div class = "col-md-4" style = "text-align:center;">
            <a href="#openAddEvent"><?php echo img(array('src'=>'img/add.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
            <p><b>Create Event</b></p> 
        </div>

        <div class = "col-md-4" style = "text-align: center;">
            <a href="pdf/events"><?php echo img(array('src'=>'img/print.png',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
            <p><b>Print</b></p> 
        </div>

        <div class = "col-md-4" style = "text-align: center;">
            <a href="home/csv"><?php echo img(array('src'=>'img/export.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
            <p><b>Export CSV</b></p> 
        </div>
        <br><br><br>
        
        <div id="openAddEvent" class="modalDialog">
            <div>
                <a href="<?php echo base_url() ?>" title="Close" class="close">X</a>
                <div id = "register_form">
                    <h2 style = "background-color:#363636; color:#fbde43; text-align: center;">ADD AN EVENT</h2>
                    <div class = "row">
                        <div class = "col-md-12">
                            <div id = "crud_form">
                                <?php
                                    $event_date = array('type'=>'date', 'id' => 'example1', 'name' => 'event_date', 'value' => date('20y-m-d'), 'readonly' => true, 'class' => 'form-control', 'style' => 'width:80%;');
                                    $event_name = array('id' => 'event_name', 'name'=> 'event_name', 'placeholder' => 'Enter your event here', 'rows' => 3, 'style' => 'border: 1px solid #f0f0f0;', 'class' => 'form-control');
                                ?>

                                <?php 
                                    echo form_open('index.php/home/add_event');
                                    echo form_label('Event Date:');
                                    echo form_input($event_date);
                                    echo '<br><br>';
                                    
                                    echo form_label('Event Name:');
                                    echo form_textarea($event_name);
                                    echo '<br><br>';
                                    
                                    echo form_submit('submit', 'Add This Event');
                                    echo '<br><br>';
                                    echo form_close();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<br><br>
		<h2 style = "background-color:#363636; color:#fbde43; text-align: center;">EVENTS TODAY</h2>        
            <table style="width:100%; text-align:center;">
                <thead>
                    <tr>
                        <th colspan = "4" style = "text-align:center;width:100%;">Event</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if(isset($records)) : foreach ($records as $row) : ?>
                    <tr>
                        <td style = "width:10%"><?php echo $row->event_id ?></td>
                        <td style = "width:70%"><?php echo $row->event_name ?></td>
                        <td style = "width:10%">
                            <a href="#openDelete">Delete</a> 
                            <div id="openDelete" class="modalDialog">
                                <div>
                                    <a href="<?php echo base_url() ?>" title="Close" class="close">X</a>
                                    <div id = "register_form">
                                        <br>
                                        Are you sure you want to <em>DELETE</em> this record?<br>
                                        <?php
                                            echo form_open('index.php/home/delete/' . $row->event_id);
                                            echo form_submit('submit', 'Yes! I am 100% sure!');
                                            echo form_close();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td style = "width:10%">
                            <?php echo anchor("index.php/home/update_event/$row->event_id", 'Edit'); ?>
                        </td>
                    </tr>                                                           
                    <?php endforeach; ?>
                </tbody>
                <?php else : ?>
                    <h1> NO SCHEDULED EVENTS TODAY</h1> 
                <?php endif; ?>
            </table>                            
	    <br>
        </div>		
		
	<div class = "col-md-6" style = "margin-bottom:4%;">
		<?php
			echo $calendar;                
		?>
	</div>
	
	<div class = "col-md-3">
			<h2 style = "background-color:#363636; color:#fbde43; text-align: center;">SEARCH EVENT</h2>
				<div class = "col-md-12">
	                <div id = "crud_form">
						<div class = "row">
							<?php
								$search_event = array('type'=>'date', 'id' => 'search', 'name' => 'search_event', 'placeholder' => date('20y-m-d'), 'readonly' => true, 'style' => 'width:100%' );
							?>
										
							<?php 
								echo form_open('index.php/home/search_event');
								echo '<div class = "col-md-6">';
								echo '<br>';
                                echo form_input($search_event);
								echo '</div>';
                                echo '<br>';
								echo '<div class = "col-md-6">';
								echo form_submit('submit', 'SEARCH EVENT');
								echo '</div>';
                                echo '<br><br>';
								echo form_close();
                            ?>
						</div>

						<table>
							<thead>
								<tr>
                                	<th colspan = "5" style = "text-align:center;width:100%;">Event</th>
                        		</tr>
							</thead>
							<tbody>
								<?php if(isset($event)) : foreach ($event as $row) : ?>
                    			<tr>
                                	<td style = "width:5%"><?php echo $row->event_id ?></td>
                        			<td style = "width:15%"> <?php echo $row->event_date ?></td>
                        			<td style = "width:60%"><?php echo $row->event_name ?></td>
									<td style = "width:10%">
										<?php echo anchor("index.php/home/update_event/$row->event_id", 'Edit'); ?>
									</td>
									<td style = "width:10%">
										<a href="#openDelete">Delete</a> 
                                        <div id="openDelete" class="modalDialog">
                                            <div>
                                                <a href="<?php echo base_url() ?>" title="Close" class="close">X</a>
                                                <div id = "register_form">
                                                    <br>
                                                    Are you sure you want to <em>DELETE</em> this record?<br>
                                                    <?php
                                                        echo form_open('index.php/home/delete/' . $row->event_id);
                                                        echo form_submit('submit', 'Yes! I am 100% sure!');
                                                        echo form_close();
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
									</td>
								</tr>
				    			<?php endforeach; ?>
							</tbody>
								<?php else : ?>
								<h2> NO SCHEDULED EVENTS ON THAT DAY</h2> 
                                <?php endif; ?>
						</table>
					</div>
				</div>
            </div>
</div>
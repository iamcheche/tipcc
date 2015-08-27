<div id = "container"> 
	<div class  ="col-md-1"></div>
	<div class  = "col-md-10">
		<h2 style = "background-color:#363636; color:#fbde43; text-align: center;">CREATE AN EVENT</h2>
		<div class = "row">
			<div class = "col-md-12">
				<div id = "crud_form">
					
					<?php
						$event_date = array('type'=>'date', 'id' => 'example1', 'name' => 'event_date', 'value' => date('20y-m-d'), 'readonly' => true );
						$event_name = array('id' => 'event_name', 'name'=> 'event_name', 'placeholder' => 'Enter your event here', 'rows' => 3, 'style' => 'border: 1px solid #f0f0f0;');
					?>
					
					<?php 
						echo form_open('index.php/home/add_event');
						echo form_input($event_date);
						echo '<br><br>';
						
						echo form_textarea($event_name);
						echo '<br><br>';
						
						echo form_submit('submit', 'Add This Event');
						echo '<br><br>';
						echo form_close();

					?>
				</div>
			</div>
		</div>	

			<h2 style = "background-color:#363636; color:#fbde43; text-align: center;">TODAY'S EVENTS (<?php echo date('m-d-20y'); ?>)</h2>
				<div class =  "table-reponsive">
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
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                    <td style = "width:10%"><?php echo anchor("index.php/home/update_event/$row->event_id", 'Edit'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
				</div>
				<?php else : ?>
					<h1> NO SCHEDULED EVENTS TODAY</h1> 
				<?php endif; ?>

					<h2 style = "background-color:#363636; color:#fbde43; text-align: center;">SEARCH/UPDATE AN EVENT</h2>
					<div id = "crud_form">
						<div class = "row">
							<?php
								$search_event = array('type'=>'date', 'id' => 'search', 'name' => 'search_event', 'value' => date('20y-m-d'), 'readonly' => true, 'style' => 'width:100%' );
							?>
							
							<?php 

								echo form_open('index.php/home/search_event');
								echo '<div class = "col-md-6">';
								echo form_input($search_event);
								echo '</div>';
								echo '<div class = "col-md-6">';
								echo form_submit('submit', 'SEARCH EVENT');
								echo '</div>';
								echo '<br><br>';
								echo form_close();

							?>
						</div>
						
					</div>

					<div class =  "table-reponsive">
					<table style="width:100%; text-align:center;">
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
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                    <td style = "width:10%"><?php echo anchor("index.php/home/update_event/$row->event_id", 'Edit'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
				</div>
				<?php else : ?>
					<h1> NO SCHEDULED EVENTS ON THAT DAY</h1> 
				<?php endif; ?>					
		<br><br>
		<H2 style = "background-color:#363636; color: #fbde43;">EVENTS CALENDAR</H2>
			
		<?php
			echo $calendar;                
		?>
	</div>
	<div class = "col-md-1" style = "margin-bottom:2%;"></div>
</div>
<div id = "container">	
	<div class = "row">
		<div class = "col-md-12" style="background-color:#191919;color:#ffdb19;text-align:center; ">
			<div id = "error">
    			<?php echo validation_errors(); ?>
    		</div>
			<h1>CREATE A NEW LINKAGE </h1>
		</div>
	</div>
	<br>
	<?php echo form_open('index.php/linkages/add'); ?>
	<div class = "row" style="text-align:center;">
		<div class = "col-md-12" >

			<br>
			<div class="row">
				<div id = "crud_form">
      				<?php
      			            $company_name = array('id' => 'company_name', 'name' => 'company_name', 'class' => 'form-control', 'placeholder' => 'Company Name (ex. Technological Institute of the Philippines)');
      			            $company_tel_no = array('id' => 'company_tel_no', 'name' => 'company_tel_no', 'class' => 'form-control', 'placeholder' => 'Company Telephone Number (ex. 9111111)');
      			            $address_no = array('id' => 'address_no' , 'name' => 'address_no', 'class' => 'form-control', 'placeholder' => 'Address Number (ex. 938)');
      			            $street_address = array('id' => 'street_address', 'name' => 'street_address', 'class' => 'form-control', 'placeholder' => 'Street Address (ex. Aurora Blvd., Cubao)');
      			            $city_address = array('id' => 'city_address', 'name' => 'city_address', 'class' => 'form-control', 'placeholder' => 'City/Municipality (ex. Quezon City)');
      			            $region = array('id' => 'region', 'name' => 'region', 'class' => 'form-control', 'placeholder' => 'Region (ex. NCR)');
      			            $zip = array('id' => 'zip', 'name' => 'zip', 'class' => 'form-control', 'placeholder' => 'Zip Code (ex. 1109)');
      			            $contact_fname = array('id' => 'contact_fname' , 'name' => 'contact_fname', 'class' => 'form-control', 'placeholder' => 'Contact Person\'s First Name (ex. Ernesto Jr.)');
      			            $contact_mi = array('id' => 'contact_mi' , 'name' => 'contact_mi', 'class' => 'form-control', 'placeholder' => 'Contact Person\'s Middile Initial (ex. L.) ');
      			            $contact_lname = array('id' => 'contact_lname', 'name' => 'contact_lname', 'class' => 'form-control', 'placeholder' => 'Contact Person\'s Last Name (ex. Balane)');
      			            $contact_position = array('id' => 'contact_position', 'name' => 'contact_position', 'class' => 'form-control' , 'placeholder' => 'Contact Position (ex. Student)');
      			            $contact_email = array('id' => 'contact_email' , 'name' => 'contact_email', 'class' => 'form-control', 'placeholder' => 'Contact Email (ex. ebalanejr@gmail.com)' );
      			            $contact_number = array('id' => 'contact_number', 'name' => 'contact_number', 'class' => 'form-control', 'placeholder' => 'Contact Number (ex 09123456789)');
      			            $sy_start = array('id' => 'sy_start', 'name' => 'sy_start', 'class' => 'form-control', 'placeholder' => 'School Year Start (ex 2014 - 2015)');
      			            $sy_end = array('id' => 'sy_end', 'name' => 'sy_end', 'class' => 'form-control', 'placeholder' => 'Scholl Year Ended (ex Active/Ended 2019-2020)');
      			            $program_supported = array('id' => 'program_supported', 'name' => 'program_supported', 'class' => 'form-control', 'placeholder' => 'Supported Programs(ex. Arts, Computing, Engineering, Marketing)');
      			            $brief_desc = array('id' => 'brief_desc', 'name' => 'brief_desc', 'class' => 'form-control', 'placeholder' => 'Brief Description (ex )');
      			            $slo = array('id' => 'slo' , 'name' => 'slo', 'class' => 'form-control', 'placeholder' => 'Student Learning Outcome');
      			            $grad_employability = array('id' => 'grad_employability', 'name' => 'grad_employability', 'class' => 'form-control', 'placeholder' => 'Graduates Employability');
      			            
      			        ?>	

          				<?php
                                          echo form_open('index.php/linkages/add');
       
                                          echo form_input($company_name);
                                          echo '<br /><br />';
                                          echo form_input($company_tel_no);
                                          echo '<br /><br />';
                                          echo form_input($address_no);
                                          echo '<br /><br />';
                                          echo form_input($street_address);
                                          echo '<br /><br />';
                                          echo form_input($city_address);
                                          echo '<br /><br />';
                                          echo form_input($region);
                                          echo '<br /><br />';
                                          echo form_input($zip);
                                          echo '<br /><br />';
                                          echo form_input($contact_fname);
                                          echo '<br /><br />';
                                          echo form_input($contact_mi);
                                          echo '<br /><br />';
                                          echo form_input($contact_lname);
                                          echo '<br /><br />';
                                          echo form_input($contact_position);
                                          echo '<br /><br />';
                                          echo form_input($contact_email);
                                          echo '<br /><br />';
                                          echo form_input($contact_number);
                                          echo '<br /><br />';
                                          echo form_input($sy_start);
                                          echo '<br /><br />';
                                          echo form_input($sy_end);
                                          echo '<br /><br />';
                                          echo form_input($program_supported);
                                          echo '<br /><br />';
                                          echo form_input($brief_desc);
                                          echo '<br /><br />';
                                          echo form_input($slo);
                                          echo '<br /><br />';
                                          echo form_input($grad_employability);
                                          echo '<br /><br />';
                                          
                                          echo form_submit('submit', 'Add a new Linkage');
                                          echo '<br /><br />';
                                          echo form_close();                          
                          ?>

		        </div>
	        </div>
		</div>
	</div>
</div>
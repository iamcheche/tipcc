<div class="container">         
    <div class="row" style = "text-align:center;">
        <?php  
            $search = array('id' => 'search', 'name' => 'search', 'placeholder' => 'Search Linkage(s)', 'style' => 'width:100%;'); 
        ?>
        

        <div id = "crud_form">
            <div class = "col-md-4">
                <h2>Linkages Management</h2>
            </div>            
            
            
            <div class = "col-md-2">
                <a href="linkages/create"><?php echo img(array('src'=>'img/add.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
                <p><b>Create</b></p>
            </div>

            <div class = "col-md-2">
               <a href="pdf/linkage"><?php echo img(array('src'=>'img/print.png',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%; box-shadow: 2px 1px 5px #191919;')); ?></a>
               <p><b>Print</b></p> 
            </div>

            <div class = "col-md-2">
                    <a href="linkages/csv"><?php echo img(array('src'=>'img/export.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%; box-shadow: 2px 1px 5px #191919;')); ?></a>
                    <p><b>Export CSV</b></p> 
            </div>

            <div class = "col-md-2">
                <a href="linkages"><?php echo img(array('src'=>'img/view.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%; box-shadow: 2px 1px 5px #191919;')); ?></a>
                <p><b>View All</b></p> 
            </div>
        </div>
    </div>
    <br>
    <div class = "row">
        <div id = "crud_form">
            <?php
                echo form_open('index.php/linkages/search_linkage');
                echo '<div class = "col-md-1"></div>';
                echo '<div class = "col-md-7">';
                echo form_input($search);
                echo '<br><br>';
                echo '</div>';
                echo '<div class = "col-md-3">';
                echo form_submit('submit', 'Search Linkage(s)');
                echo form_close();
                echo '<br><br>';
                echo '</div>';
            ?>
        </div>
    </div>
    <div class="col-md-12">

        <div class = "table-responsive">
            <table class = "table" style="width:100%; text-align:center; display: inline-block;">
                <thead>
                    <tr>
                        <th colspan="4" style="text-align:center;">Company Details</th>
                        <th colspan="4" style = "text-align:center;">Company Representative Details</th>
                        <th colspan="3" style = "text-align:center;">Actions</th>
                    </tr>
                    <tr style="text-align:center; ">
                        <th>ID</th>
                        <th style="text-align:center;">Company Name</th>
                        <th style="text-align:center;">Company Tel. No.</th>
                        <th style="text-align:center;">Address</th>
                        <th style="text-align:center;">Name</th>
                        <th style="text-align:center;">Position</th>
                        <th style="text-align:center;">Email Adress</th>
                        <th>Contact No.</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                    <tbody class = "table-striped">
                        <?php if(isset($records)) : foreach ($records as $row) : ?>
                             <tr>
                                <td><?php echo $row->linkage_id ?></td>                                    
                                <td><?php echo $row->company_name ?></td>
                                <td><?php echo $row->company_tel_no ?></td>                                        
                                <td><?php echo $row->address_no . ' ' . $row->street_address . ', ' .$row->city_address . ', ' . $row->region . ', ' . $row->zip ?></td>  
                                <td><?php echo $row->contact_fname . ' ' . $row->contact_mi . ' ' . $row->contact_lname ?></td>    
                                <td><?php echo $row->contact_position ?></td>
                                <td><?php echo $row->contact_email?></td>
                                <td><?php echo $row->contact_number ?></td>
                                <td>
                                    <?php echo anchor("index.php/linkages/view_linkage/$row->linkage_id", 'View'); ?>
                                    <div id="viewRecord" class="modalDialog">
                                        <div>
                                            <a href="#close" title="Close" class="close">X</a>
                                            <div id = "register_form">
                                                <div id = "container">  
                                                    <div class = "row">
                                                        <div class = "col-md-12" style="background-color:#191919;color:#ffdb19;text-align:center; ">
                                                            <h1>RECORD VIEWER</h1>
                                                        </div>
                                                    </div>
                                                    <br>
                                                <div class = "row" style="text-align:center;">
                                                    <div class = "col-md-12" >
                                                        <br>
                                                        <div class="row">
                                                            <div id = "crud_form">
                                                                <?php foreach ($single_linkage as $linkage): ?>
                                                                <?php
                                                                    $linkage_id = $arrayName = array('id' => 'linkages_id', 'name' => 'linkages_id', 'class' => 'form-control', 'placeholder' => 'Linkage ID', 'value' => $linkage->linkage_id, 'readonly' => true  );
                                                                    $company_name = array('id' => 'company_name', 'name' => 'company_name', 'class' => 'form-control', 'placeholder' => 'Company Name (ex. Technological Institute of the Philippines)', 'value' => $linkage->company_name, 'readonly' => true );
                                                                    $company_tel_no = array('id' => 'company_tel_no', 'name' => 'company_tel_no', 'class' => 'form-control', 'placeholder' => 'Company Telephone Number (ex. 9111111)', 'value' =>  $linkage->company_tel_no, 'readonly' => true );
                                                                    $address_no = array('id' => 'address_no' , 'name' => 'address_no', 'class' => 'form-control', 'placeholder' => 'Address Number (ex. 938)', 'value' =>  $linkage->address_no, 'readonly' => true );
                                                                    $street_address = array('id' => 'street_address', 'name' => 'street_address', 'class' => 'form-control', 'placeholder' => 'Street Address (ex. Aurora Blvd., Cubao)', 'value' =>  $linkage->street_address, 'readonly' => true );
                                                                    $city_address = array('id' => 'city_address', 'name' => 'city_address', 'class' => 'form-control', 'placeholder' => 'City/Municipality (ex. Quezon City)', 'value' =>  $linkage->city_address, 'readonly' => true );
                                                                    $region = array('id' => 'region', 'name' => 'region', 'class' => 'form-control', 'placeholder' => 'Region (ex. NCR)', 'value' =>  $linkage->region, 'readonly' => true );
                                                                    $zip = array('id' => 'zip', 'name' => 'zip', 'class' => 'form-control', 'placeholder' => 'Zip Code (ex. 1109)', 'value' =>  $linkage->zip, 'readonly' => true );
                                                                    $contact_fname = array('id' => 'contact_fname' , 'name' => 'contact_fname', 'class' => 'form-control', 'placeholder' => 'Contact Person\'s First Name (ex. Ernesto Jr.)', 'value' =>  $linkage->contact_fname, 'readonly' => true );
                                                                    $contact_mi = array('id' => 'contact_mi' , 'name' => 'contact_mi', 'class' => 'form-control', 'placeholder' => 'Contact Person\'s Middile Initial (ex. L.) ', 'value' =>  $linkage->contact_mi, 'readonly' => true );
                                                                    $contact_lname = array('id' => 'contact_lname', 'name' => 'contact_lname', 'class' => 'form-control', 'placeholder' => 'Contact Person\'s Last Name (ex. Balane)', 'value' =>  $linkage->contact_lname, 'readonly' => true );
                                                                    $contact_position = array('id' => 'contact_position', 'name' => 'contact_position', 'class' => 'form-control' , 'placeholder' => 'Contact Position (ex. Student)', 'value' =>  $linkage->contact_position, 'readonly' => true );
                                                                    $contact_email = array('id' => 'contact_email' , 'name' => 'contact_email', 'class' => 'form-control', 'placeholder' => 'Contact Email (ex. ebalanejr@gmail.com)', 'value' =>  $linkage->contact_email, 'readonly' => true );
                                                                    $contact_number = array('id' => 'contact_number', 'name' => 'contact_number', 'class' => 'form-control', 'placeholder' => 'Contact Number (ex 09123456789)', 'value' =>  $linkage->contact_number, 'readonly' => true );
                                                                    $sy_start = array('id' => 'sy_start', 'name' => 'sy_start', 'class' => 'form-control', 'placeholder' => 'School Year Start (ex 2014 - 2015)', 'value' =>  $linkage->sy_start, 'readonly' => true );
                                                                    $sy_end = array('id' => 'sy_end', 'name' => 'sy_end', 'class' => 'form-control', 'placeholder' => 'Scholl Year Ended (ex Active/Ended 2019-2020)', 'value' =>  $linkage->sy_end, 'readonly' => true );
                                                                    $program_supported = array('id' => 'program_supported', 'name' => 'program_supported', 'class' => 'form-control', 'placeholder' => 'Supported Programs(ex. Arts, Computing, Engineering, Marketing)', 'value' =>  $linkage->program_supported, 'readonly' => true );
                                                                    $brief_desc = array('id' => 'brief_desc', 'name' => 'brief_desc', 'class' => 'form-control', 'placeholder' => 'Brief Description (ex )', 'value' =>  $linkage->brief_desc, 'readonly' => true );
                                                                    $slo = array('id' => 'slo' , 'name' => 'slo', 'class' => 'form-control', 'placeholder' => 'Student Learning Outcome', 'value' =>  $linkage->slo, 'readonly' => true );
                                                                    $grad_employability = array('id' => 'grad_employability', 'name' => 'grad_employability', 'class' => 'form-control', 'placeholder' => 'Graduates Employability', 'value' =>  $linkage->grad_employability, 'readonly' => true );                                                                                
                                                                ?> 
                                                                <?php
                                                                        echo form_open('index.php/linkages/index');
                                                                                            
                                                                        echo form_label('Linkage ID');
                                                                        echo form_input($linkage_id);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Company Name');
                                                                        echo form_input($company_name);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Company Telephone Number');
                                                                        echo form_input($company_tel_no);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Address Number');
                                                                        echo form_input($address_no);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Street Address');
                                                                                            echo form_input($street_address);
                                                                        echo '<br /><br />';
                                                                        echo form_label('City Address');
                                                                        echo form_input($city_address);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Region');
                                                                        echo form_input($region);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Zip Code');                                                                                echo form_input($zip);
                                                                        echo '<br /><br />';
                                                                        echo form_label('First Name');
                                                                        echo form_input($contact_fname);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Middle Initial');
                                                                        echo form_input($contact_mi);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Last Name');
                                                                        echo form_input($contact_lname);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Position');
                                                                        echo form_input($contact_position);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Email Address');
                                                                        echo form_input($contact_email);
                                                                        echo '<br /><br />';                                                                                echo form_label('Contact Number');
                                                                        echo form_input($contact_number);
                                                                        echo '<br /><br />';
                                                                        echo form_label('School Year Start');
                                                                        echo form_input($sy_start);
                                                                        echo '<br /><br />';
                                                                        echo form_label('School Year End');
                                                                        echo form_input($sy_end);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Supported Programs');
                                                                        echo form_input($program_supported);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Brief Description');
                                                                        echo form_input($brief_desc);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Student Learning Outcome');
                                                                        echo form_input($slo);
                                                                        echo '<br /><br />';
                                                                        echo form_label('Graduate Employability');
                                                                        echo form_input($grad_employability);
                                                                        echo '<br /><br />';
                                                                        echo form_submit('submit', 'Return Back to Linkage Home');
                                                                        echo '<br /><br />';
                                                                        echo form_close();                          
                                                                    ?>

                                                                    <?php endforeach; ?>                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>                                        
                                    </div>
                                </div>
                            </td>

                            <td> <?php echo anchor("index.php/linkages/update_linkage/$row->linkage_id", 'Update '); ?></td>                             
                            <td><a href="#openDelete">Delete</a>
                                <div id="openDelete" class="modalDialog">
                                    <div>
                                        <a href="#close" title="Close" class="close">X</a>
                                        <div id = "register_form">
                                            <br>
                                            <p> Are you sure you want to <em>DELETE</em> this record?</p>
                                            <?php
                                                echo form_open('index.php/linkages/delete/' . $row->linkage_id);
                                                echo form_submit('submit', 'Yes! I am 100% sure!');
                                                echo form_close();
                                            ?>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </td>                                   
                        </tr>
                            <?php endforeach; ?>
                        </tbody>     
                    </table>
                </div>  
                    <?php else : ?>     
                         <h2>No records were returned.</h2>
                    <?php endif; ?>                                     
                    <hr >  
    </div>
 </div>
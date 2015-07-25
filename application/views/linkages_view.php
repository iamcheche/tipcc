<div class="container">
          
                    <table style="width:100%; border:1px dotted #191919; text-align:center;">
                    <tr style = "border:1px dotted #c0c0c0;">
                        <th>ID</th>
                        <th colspan="2" style="text-align:center;">Company Details</th>
                        <th colspan="5" style = "text-align:center;">Company Address</th>
                        <th colspan="6" style = "text-align:center;">Company Representative Details</th>
                        <th colspan="2" style = "text-align:center;">Partnership</th>
                        <th colspan="3" style = "text-align:center;">Actions</th>
                    </tr>
                    <tr style="text-align:center;">
                        <th></th>
                        <th>Company Name</th>
                        <th>Company Tel. No.</th>
                        <th>Address No.</th>
                        <th>Street Address</th>
                        <th>City</th>
                        <th>Region</th>
                        <th style="text-align:center;">Zip</th>
                        <th colspan="3" style="text-align:center;">Name</th>
                        <th>Position</th>
                        <th style="text-align:center;">Email Adress</th>
                        <th>Contact No.</th>
                        <th>SY Start</th>
                        <th>SY End</th>
                        <th></th>
                        <th colspan="3"></th>
                    </tr>
                    <?php if(isset($records)) : foreach ($records as $row) : ?>
                    
                         <tr>
                                <td><?php echo $row->linkage_id ?></td>
                                <td><?php echo $row->company_name ?></td>
                                <td><?php echo $row->company_tel_no ?></td>
                                <td><?php echo $row->address_no ?></td>
                                <td><?php echo $row->street_address ?></td>  
                                <td><?php echo $row->city_address ?></td>   
                                <td><?php echo $row->region ?></td>  
                                <td><?php echo $row->zip ?></td>  
                              
                                <td><?php echo $row->contact_fname ?></td>  
                                <td><?php echo $row->contact_mi ?></td>    
                                <td><?php echo $row->contact_lname ?></td>    
                                    
                                <td><?php echo $row->contact_position ?></td>
                                <td><?php echo $row->contact_email?></td>
                                <td><?php echo $row->contact_number ?></td>
                                <td><?php echo $row->sy_start ?></td>
                                <td><?php echo $row->sy_end ?></td>
                                <td><?php echo anchor("index.php/linkages/view/$row->linkage_id", 'View '); ?></td> 
                                <td> <?php echo anchor("index.php/linkages/update_student_id1/$row->linkage_id", 'Update '); ?></td> 
                                <td> <?php echo anchor("index.php/linkages/delete/$row->linkage_id", 'Delete '); ?></td>                         
                         <tr>
                    <?php endforeach; ?>     
                    </table>

                    <?php else : ?>     
                         <h2>No records were returned.</h2>
                    <?php endif; ?>      
                      <hr>  
                    <div id = "crud_form">
                        <?php
                            echo form_open('index.php/linkages/create');

                            echo form_submit('submit', 'Create New Linkage');
                            echo form_close();                          
                        ?>    
                    </div>
                    
          
 </div>
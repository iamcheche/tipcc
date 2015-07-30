<div class="container">
    <div class="col-md-12">
        <div class = "table-responsive">
                    <table class = "table" style="width:100%; text-align:center; display: inline-block;">
                        <thead>
                            <tr> 
                                <th colspan = "23" style = "text-align:center;">Technological Institute of The Philippines - Career Center: Linkages</th>
                            </tr>
                            <tr style="text-align:center; ">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Confirm Password</th>
                                <th>First Name</th>
                                <th>Middle Initial</th>
                                <th>Last Name</th>
                                <th style="text-align:center;">Email Address</th>
                                <th style="text-align:center;">Contact Number</th>
                                <th>Role</th>
                                <th style="text-align:center;">Date Created</th>

                                <th colspan="3"></th>
                            </tr>
                        </thead>

                        <tbody class = "table-striped">
                            <?php if(isset($records)) : foreach ($records as $row) : ?>
                                 <tr>
                                        <td><?php echo $row->user_id ?></td>
                                        <td><?php echo $row->username ?></td>
                                        <td><?php echo $row->password ?></td>
                                        <td><?php echo $row->c_password ?></td>
                                        <td><?php echo $row->first_name ?></td>
                                        <td><?php echo $row->middle_initial ?></td>
                                        <td><?php echo $row->last_name ?></td>
                                        <td><?php echo $row->email_address ?></td>
                                        <td><?php echo $row->contact_number ?></td>
                                        <td><?php echo $row->role ?></td>
                                        <td><?php echo $row->date_created ?></td>
                                        
                                        
                                        <td> <?php echo anchor("index.php/linkages/view_user/$row->linkage_id", 'View'); ?></td>
                                        <td> <?php echo anchor("index.php/linkages/update_user/$row->linkage_id", 'Update '); ?></td> 
                                        <td> <?php echo anchor("index.php/linkages/delete/$row->linkage_id", 'Delete '); ?></td>                         
                                 <tr>
                            <?php endforeach; ?>
                        </tbody>     
                    </table>
                </div>  
                    <?php else : ?>     
                         <h2>No records were returned.</h2>
                    <?php endif; ?>      
                
                    <hr >  
                        
                        <div class = "col-md-6">
                            <?php
                                echo form_open('index.php/pdf/linkage');

                                echo form_submit('submit', 'Print All Linkages');
                                echo form_close();                          
                            ?>
                        </div>
                            
                    </div>
                    
    </div>
 </div>
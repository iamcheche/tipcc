<div class="container">
        <div class="row" style = "text-align:center;">
        <?php  
            $search = array('id' => 'search', 'name' => 'search', 'placeholder' => 'Search Subscriber(s)', 'style' => 'width:100%;'); 
        ?>
        

        <div id = "crud_form">
            <div class = "col-md-6">
                <h2>Subscriber Management</h2>
            </div>            

            <div class = "col-md-2">
               <a href="pdf/subscriber"><?php echo img(array('src'=>'img/print.png',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
               <p><b>Print</b></p> 
            </div>

            <div class = "col-md-2">
                <a href="subscribe/csv"><?php echo img(array('src'=>'img/export.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
                <p><b>Export CSV</b></p> 
            </div>

            <div class = "col-md-2">
                <a href="subscribe"><?php echo img(array('src'=>'img/view.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
                <p><b>View All</b></p> 
            </div>

        </div>
    </div>

                
    <br>
    <div class = "row">
        <div id = "crud_form">
            <?php
                echo form_open('index.php/subscribe/search_subscriber');
                echo '<div class = "col-md-1"></div>';
                echo '<div class = "col-md-7">';
                echo form_input($search);
                echo '<br><br>';
                echo '</div>';
                echo '<div class = "col-md-3">';
                echo form_submit('submit', 'Search Subscriber(s)');
                echo form_close();
                echo '<br><br>';
                echo '</div>';
            ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class = "table-responsive">
                    <table class = "table" >
                        <thead>
                            <tr style="text-align:center; ">
                                <th style="text-align:center;">ID</th>
                                <th style="text-align:center;">Name</th>
                                <th style="text-align:center;">Email Address</th>
                                <th style="text-align:center;">Contact Number</th>
                                <th colspan="3" style = "text-align:center;">Actions</th>
                            </tr>
                        </thead>

                        <tbody class = "table-striped">
                            <?php if(isset($records)) : foreach ($records as $row) : ?>
                                 <tr>
                                        <td style = "width:10%; "><?php echo $row->sub_id ?></td>
                                        <td style = "width:25%; "><?php echo $row->name ?></td>
                                        <td style = "width:25%; "><?php echo $row->email ?></td>
                                        <td style = "width:25%; "><?php echo $row->contact_number ?></td>
                                        
                                        <td style = "width:5%; "> <?php echo anchor("index.php/subscribe/show_view_subscriber/$row->sub_id", 'View'); ?></td>
                                        <td style = "width:5%; "> <?php echo anchor("index.php/subscribe/update_subscriber/$row->sub_id", 'Update '); ?></td> 
                                        <td style = "width:5%; ">
                                            <a href="#openDelete">Delete</a> 
                                            <div id="openDelete" class="modalDialog">
                                                <div>
                                                    <a href="<?php echo 'subscribe' ?>" title="Close" class="close">X</a>
                                                    <div id = "register_form">
                                                        <br>
                                                        Are you sure you want to <em>DELETE</em> this record?<br>
                                                        <?php
                                                            echo form_open('index.php/subscribe/delete/' . $row->sub_id);
                                                            echo form_submit('submit', 'Yes! I am 100% sure!');
                                                            echo form_close();
                                                        ?>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>                         
                                 <tr>
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
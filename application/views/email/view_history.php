<div class="container">         
    <div class="row" style = "text-align:center;">
        <?php  
            $search = array('id' => 'search', 'name' => 'search', 'placeholder' => 'Search Email Subject(s)', 'style' => 'width:100%;'); 
        ?>
        

        <div id = "crud_form">
            <div class = "col-md-6">
                <h2>Email History</h2>
            </div>            

            <div class = "col-md-2">
               <a href="../pdf/email_history"><?php echo img(array('src'=>'img/print.png',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
               <p><b>Print</b></p> 
            </div>

            <div class = "col-md-2">
                <a href="../email/csv"><?php echo img(array('src'=>'img/export.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
                <p><b>Export CSV</b></p> 
            </div>

            <div class = "col-md-2">
                <a href="../email/history"><?php echo img(array('src'=>'img/view.jpg',  'width' => '50', 'height' => '50', 'style' => 'border-radius:50%;  box-shadow: 2px 1px 5px #191919;')); ?></a>
                <p><b>View All</b></p> 
            </div>
        </div>
    </div>
    <br>
    <div class = "row">
        <div id = "crud_form">
            <?php
                echo form_open('index.php/email/search_email');
                echo '<div class = "col-md-1"></div>';
                echo '<div class = "col-md-7">';
                echo form_input($search);
                echo '<br><br>';
                echo '</div>';
                echo '<div class = "col-md-3">';
                echo form_submit('submit', 'Search Email Subject');
                echo form_close();
                echo '<br><br>';
                echo '</div>';
            ?>
        </div>
    </div>
    <div class="col-md-12">

        <div class = "table-responsive">
                    <table class = "table" style="width:100%; text-align:center;">
                        <thead>
                            <tr style="text-align:center; ">
                                <th style = "text-align:center">Email ID</th>
                                <th style = "text-align:center">Email Subject</th>
                                <th style = "text-align:center">Email Message(Body)</th>
                                <th style = "text-align:center">Timestamp</th>
                                
                                <th colspan="2" style = "text-align:center">Actions</th>
                            </tr>
                        </thead>

                        <tbody class = "table-striped">
                            <?php if(isset($records)) : foreach ($records as $row) : ?>
                                 <tr>
                                        <td><?php echo $row->email_id ?></td>
                                        
                                        <td><?php echo $row->subject ?></td>
                                        <td><?php echo $row->message ?></td>
                                        
                                        <td><?php echo $row->email_sent ?></td>
                                        
                                        <td> <?php echo anchor("index.php/email/view_email/$row->email_id", 'View'); ?></td>
                                        <td> <?php echo anchor("index.php/email/delete/$row->email_id", 'Delete', array('class'=>'delete', 'onclick'=>"return confirmDialog();")); ?></td>                         
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
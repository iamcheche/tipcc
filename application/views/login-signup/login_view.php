<ul class="cb-slideshow">
    <li style = "color: transparent"><span>Image 01</span></li>
    <li style = "color: transparent"><span>Image 02</span></li>
    <li style = "color: transparent"><span>Image 03</span></li>
    <li style = "color: transparent"><span>Image 04</span></li>
    <li style = "color: transparent"><span>Image 05</span></li>
    <li style = "color: transparent"><span>Image 06</span></li>
</ul>

<div id = "container" style = "margin-top:3%;">

<div class = "col-md-12" style = "margin-bottom:1%;">   
    <div class = "col-md-5" style = "background-color:#363636; opacity:0.9; text-align: justify; text-justify: inter-word;">
        <h2 style = "color: #fbde43; text-align: center;">About T.I.P. Career Center</h2>
        <p style = "color: #f0f0f0; font-weight:bold; text-shadow: 1px 1px #191919;">
            The T.I.P. Career Center aims to bring you closer to the career of your dreams. The center provides the resources needed for your career development. It also links you to T.I.P.'s leading industry parnters for internship, job placement and other opportunities.
            <br><br>
            Our committed staff is passionate about supporting you in choosing and building your path towards a successful career.
            <br><br>
            The Career Center is a venue where students are provided the opportunityto prepare for employment. The center ensures higher probabilityof job placements and helps jumpstart their own careers by linking them to industry. It is an in - schoolresource center because it provides students with:
            <br><br>
            - Resources needed for internship and eventual employment.
            <br>
            - Information about the job market.
            <br>
            - Career advice and skills training.         
        </p>    
    </div>
    <div class = "col-md-1"></div>
    <div class = "col-md-6">
            <div id = "options">
                <h1>Let Us Prepare You. </h1>
                <br>
                <a href="#openStudent" id = "student"><h2>Student</h2><br>Help me with my career</a>

                <div id="openStudent" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div id = "register_form">
                                <?php
                                    $username = array('id' => 'username', 'name' => 'username');
                                    $password = array('id' => 'password', 'name' => 'password');
                                    $c_password = array('id' => 'c_password' , 'name' => 'c_password');
                                    $first_name = array('id' => 'first_name', 'name' => 'first_name');
                                    $middle_initial = array('id' => 'middle_initial', 'name' => 'middle_initial');
                                    $last_name = array('id' => 'last_name', 'name' => 'last_name');
                                    $email_address = array('id' => 'email_address', 'name' => 'email_address');
                                    $contact_number = array('id' => 'contact_number' , 'name' => 'contact_number');
                                    $role = array('id' => 'role' , 'name' => 'role', 'readonly' => 'true');
                                    $attributes = array('style' => 'font-size:13px;' );                  
                                ?>

                                <h1>Student Sign Up Page</h1><br />
                                <?php
                                    echo form_open('index.php/registration/registered');

                                    echo form_label('Username:', $username['id'], $attributes);
                                    echo form_input($username);
                                    echo '<div id = "error">' . form_error('username') . '</div>';
                                    echo '<br>';

                                    echo form_label('Password:', $password['id'], $attributes);
                                    echo form_password($password);
                                    echo '<div id = "error">' . form_error('password') . '</div>';
                                    echo '<br>';

                                    echo form_label('Retype Password:', $c_password['id'], $attributes);
                                    echo form_password($c_password);
                                    echo '<div id = "error">' . form_error('c_password') . '</div>';
                                    echo '<br>';

                                    echo form_label('First Name:', $first_name['id'], $attributes);
                                    echo form_input($first_name);                                    
                                    echo '<div id = "error">' . form_error('first_name') . '</div>';
                                    echo '<br>';

                                    
                                    echo form_label('Middle Initial:', $middle_initial['id'], $attributes);
                                    echo form_input($middle_initial);
                                    echo '<br><br>';
                                    
                                    echo form_label('Last Name:', $last_name['id'], $attributes);
                                    echo form_input($last_name);                                    
                                    echo '<div id = "error">' . form_error('last_name') . '</div>';
                                    echo '<br>';

                                    
                                    echo form_label('E-mail Address:', $email_address['id'], $attributes);
                                    echo form_input($email_address);                                    
                                    echo '<div id = "error">' . form_error('email_address') . '</div>';
                                    echo '<br>'; 
                                    
                                    echo form_label('Contact Number:', $contact_number['id'], $attributes);
                                    echo form_input($contact_number);                                    
                                    echo '<div id = "error">' . form_error('contact_number') . '</div>';
                                    echo '<br>';

                                    echo form_label('Role:', $role['id'], $attributes);
                                    echo form_input($role, set_value('student', 'student')) ;
                                    echo '<br><br>';
                                    echo form_submit('submit', 'Sign me up!');
                                    echo form_close();  
                                    echo '<br>';                        
                                ?>
                        </div>
                    </div>
                </div>

                <a href="#openAlumni" id = "student"><h2>Alumni</h2><br>I want to help my fellow TIPians</a>

                <div id="openAlumni" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div id = "register_form">
                            <?php
                                    $username = array('id' => 'username', 'name' => 'username');
                                    $password = array('id' => 'password', 'name' => 'password');
                                    $c_password = array('id' => 'c_password' , 'name' => 'c_password');
                                    $first_name = array('id' => 'first_name', 'name' => 'first_name');
                                    $middle_initial = array('id' => 'middle_initial', 'name' => 'middle_initial');
                                    $last_name = array('id' => 'last_name', 'name' => 'last_name');
                                    $email_address = array('id' => 'email_address', 'name' => 'email_address');
                                    $contact_number = array('id' => 'contact_number' , 'name' => 'contact_number');
                                    $role = array('id' => 'role' , 'name' => 'role', 'readonly' => 'true');
                                    $attributes = array('style' => 'font-size:13px;' );                  
                                ?>

                                <h1>Alumni Sign Up Page</h1><br />
                                <?php
                                    echo form_open('index.php/registration/registered');

                                    echo form_label('Username:', $username['id'], $attributes);
                                    echo form_input($username);
                                    echo '<div id = "error">' . form_error('username') . '</div>';
                                    echo '<br>';

                                    echo form_label('Password:', $password['id'], $attributes);
                                    echo form_password($password);
                                    echo '<div id = "error">' . form_error('password') . '</div>';
                                    echo '<br>';

                                    echo form_label('Retype Password:', $c_password['id'], $attributes);
                                    echo form_password($c_password);
                                    echo '<div id = "error">' . form_error('c_password') . '</div>';
                                    echo '<br>';

                                    echo form_label('First Name:', $first_name['id'], $attributes);
                                    echo form_input($first_name);                                    
                                    echo '<div id = "error">' . form_error('first_name') . '</div>';
                                    echo '<br>';

                                    
                                    echo form_label('Middle Initial:', $middle_initial['id'], $attributes);
                                    echo form_input($middle_initial);
                                    echo '<br>';
                                    echo '<br>';

                                    echo form_label('Last Name:', $last_name['id'], $attributes);
                                    echo form_input($last_name);                                    
                                    echo '<div id = "error">' . form_error('last_name') . '</div>';
                                    echo '<br>';

                                    echo form_label('E-mail Address:', $email_address['id'], $attributes);
                                    echo form_input($email_address);                                    
                                    echo '<div id = "error">' . form_error('email_address') . '</div>';
                                    echo '<br>';                                 
                                        
                                    echo form_label('Contact Number:', $contact_number['id'], $attributes);
                                    echo form_input($contact_number);                                    
                                    echo '<div id = "error">' . form_error('contact_number') . '</div>';
                                    echo '<br>';

                                    echo form_label('Role:', $role['id'], $attributes);
                                    echo form_input($role, set_value('alumni', 'alumni')) ;
                                    echo '<br><br>';
                                    
                                    echo form_submit('submit', 'Sign me up!');
                                    echo form_close();  
                                    echo '<br>';                        
                                ?>
                        </div>
                    </div>
                </div>

                <a href="#openFaculty" id = "faculty"><h2>Faculty</h2><br>We're here to advise</a>

                <div id="openFaculty" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div id = "register_form">
                            <?php
                                    $username = array('id' => 'username', 'name' => 'username');
                                    $password = array('id' => 'password', 'name' => 'password');
                                    $c_password = array('id' => 'c_password' , 'name' => 'c_password');
                                    $first_name = array('id' => 'first_name', 'name' => 'first_name');
                                    $middle_initial = array('id' => 'middle_initial', 'name' => 'middle_initial');
                                    $last_name = array('id' => 'last_name', 'name' => 'last_name');
                                    $email_address = array('id' => 'email_address', 'name' => 'email_address');
                                    $contact_number = array('id' => 'contact_number' , 'name' => 'contact_number');
                                    $role = array('id' => 'role' , 'name' => 'role', 'readonly' => 'true');
                                    $attributes = array('style' => 'font-size:13px;' );                  
                                ?>

                                <h1>Faculty Sign Up Page</h1><br />
                                <?php
                                    echo form_open('index.php/registration/registered');

                                    echo form_label('Username:', $username['id'], $attributes);
                                    echo form_input($username);
                                    echo '<div id = "error">' . form_error('username') . '</div>';
                                    echo '<br>';

                                    echo form_label('Password:', $password['id'], $attributes);
                                    echo form_password($password);
                                    echo '<div id = "error">' . form_error('password') . '</div>';
                                    echo '<br>';

                                    echo form_label('Retype Password:', $c_password['id'], $attributes);
                                    echo form_password($c_password);
                                    echo '<div id = "error">' . form_error('c_password') . '</div>';
                                    echo '<br>';

                                    echo form_label('First Name:', $first_name['id'], $attributes);
                                    echo form_input($first_name);                                    
                                    echo '<div id = "error">' . form_error('first_name') . '</div>';
                                    echo '<br>'; 
                                    
                                    echo form_label('Middle Initial:', $middle_initial['id'], $attributes);
                                    echo form_input($middle_initial);
                                    echo '<br>';
                                    echo '<br>';

                                    echo form_label('Last Name:', $last_name['id'], $attributes);
                                    echo form_input($last_name);                                    
                                    echo '<div id = "error">' . form_error('last_name') . '</div>';
                                    echo '<br>'; 
                                    
                                    echo form_label('E-mail Address:', $email_address['id'], $attributes);
                                    echo form_input($email_address);                                    
                                    echo '<div id = "error">' . form_error('email_address') . '</div>';
                                    echo '<br>';
                                    
                                    echo form_label('Contact Number:', $contact_number['id'], $attributes);
                                    echo form_input($contact_number);                                    
                                    echo '<div id = "error">' . form_error('contact_number') . '</div>';
                                    echo '<br>';

                                    echo form_label('Role:', $role['id'], $attributes);
                                    echo form_input($role, set_value('faculty', 'faculty')) ;
                                    echo '<br><br>';
                                    
                                    echo form_submit('submit', 'Sign me up!');
                                    echo form_close();  
                                    echo '<br>';                        
                                ?>
                        </div>
                    </div>
                </div>

                <a href="#openLinkage" id = "company"><h2>Company</h2><br> We want to be your Industry Partner</a>
                
                <div id="openLinkage" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div id = "register_form">
                            <?php
                                    $username = array('id' => 'username', 'name' => 'username');
                                    $password = array('id' => 'password', 'name' => 'password');
                                    $c_password = array('id' => 'c_password' , 'name' => 'c_password');
                                    $first_name = array('id' => 'first_name', 'name' => 'first_name');
                                    $middle_initial = array('id' => 'middle_initial', 'name' => 'middle_initial');
                                    $last_name = array('id' => 'last_name', 'name' => 'last_name');
                                    $email_address = array('id' => 'email_address', 'name' => 'email_address');
                                    $contact_number = array('id' => 'contact_number' , 'name' => 'contact_number');
                                    $role = array('id' => 'role' , 'name' => 'role', 'readonly' => 'true');
                                    $attributes = array('style' => 'font-size:13px;' );                  
                                ?>

                                <h1>Company Sign Up Page</h1><br />
                                <?php
                                    echo form_open('index.php/registration/registered');

                                    echo form_label('Username:', $username['id'], $attributes);
                                    echo form_input($username);
                                    echo '<div id = "error">' . form_error('username') . '</div>';
                                    echo '<br>';

                                    echo form_label('Password:', $password['id'], $attributes);
                                    echo form_password($password);
                                    echo '<div id = "error">' . form_error('password') . '</div>';
                                    echo '<br>';

                                    echo form_label('Retype Password:', $c_password['id'], $attributes);
                                    echo form_password($c_password);
                                    echo '<div id = "error">' . form_error('c_password') . '</div>';
                                    echo '<br>';

                                    echo form_label('First Name:', $first_name['id'], $attributes);
                                    echo form_input($first_name);                                    
                                    echo '<div id = "error">' . form_error('first_name') . '</div>';
                                    echo '<br>'; 
                                    
                                    echo form_label('Middle Initial:', $middle_initial['id'], $attributes);
                                    echo form_input($middle_initial);
                                    echo '<br>';
                                    echo '<br>';

                                    echo form_label('Last Name:', $last_name['id'], $attributes);
                                    echo form_input($last_name);                                    
                                    echo '<div id = "error">' . form_error('last_name') . '</div>';
                                    echo '<br>'; 
                                    
                                    echo form_label('E-mail Address:', $email_address['id'], $attributes);
                                    echo form_input($email_address);                                    
                                    echo '<div id = "error">' . form_error('email_address') . '</div>';
                                    echo '<br>';
                                    
                                    echo form_label('Contact Number:', $contact_number['id'], $attributes);
                                    echo form_input($contact_number);                                    
                                    echo '<div id = "error">' . form_error('contact_number') . '</div>';
                                    echo '<br>';

                                    echo form_label('Role:', $role['id'], $attributes);
                                    echo form_input($role, set_value('company', 'conpany')) ;
                                    echo '<br><br>';
                                    
                                    echo form_submit('submit', 'Sign me up!');
                                    echo form_close();  
                                    echo '<br>';                        
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
<div class = "col-md-12">
    <div id = "login-footer">
            <div class  = "col-md-3">
                <P><a href="#openServices" >Services Offered</a> | <a href="#openContact">Contact Us</a> | <a href="#openGivingBack">Giving Back</a></p>
                
                <div id="openServices" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div id = "services">
                            <div class = "row">
                                <div class = "col-md-12" style = "background-color:#363636; color:#fbde43;">
                                    <h1>SERVICES OFFERED</h1>
                                </div>
                                
                                <div class = "col-md-3">
                                    <h4>STUDENT DEVELOPMENT</h4>
                                    <p>Student Development Program Facilitation</p>
                                    <p>Seminars & Workshop</p>
                                </div>

                                <div class = "col-md-3">
                                    <h4>CAREER ADVISING</h4>
                                    <p>Faculty Career Advising</p>
                                    <p>Peer Counseling</p>
                                    <p>Alumni Career Advising</p>                            
                                </div>

                                <div class = "col-md-3">
                                    <h4>CAREER EXPLORATION & JOB PLACEMENT</h2>
                                    <p>Employer Information Sessions</p>
                                    <p>Networking with Alumni</p>
                                    <p>Internship and Externship</p>   
                                    <p>Career Fairs</p>
                                    <p>On-Campus Recruitment</p>
                                    <p>Job Matching Referrals</p>
                                    <p>Provision of Job Search Area</p>
                                </div>
                                
                                <div class = "col-md-3">
                                    <h4>AUXILIARY SERVICES</h4>
                                    <p>Scholarship Administration</p>
                                    <p>Industry Linkages</p>
                                    <p>Career Assessments</p>
                                </div>                  
                            </div>
                        </div>
                    </div>
                </div>

                <div id="openContact" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div id = "contact">
                            <div class = "row">
                                <div class = "col-md-12" style = "background-color:#363636; color:#fbde43;">
                                    <h1>CONTACT US</h1>
                                </div>
                                
                                <div class = "col-md-6" >
                                    <h2>T.I.P. QUEZON CITY</h2>
                                    <p>938 Aurora Blvd., Cubao, Quezon City</p>
                                    <p>Tel: (+632) 911 - 09 - 64</p>
                                    <p>Loc: 503</p>
                                </div>
                                
                                <div class = "col-md-6">
                                    <h2>T.I.P. MANILA</h2>
                                    <p>1338 Arlegui St., Quiapo, Manila</p>
                                    <p>Tel: (+632) 733 - 91 - 42 </p>
                                    <p>Loc: 210</p>
                                </div>
                                
                                <div class = "col-md-12">
                                    <h2>Email us</h2>
                                    <p>careercenter@tip.edu.ph</p>
                                </div>
                            </div>  
                        </div>      
                    </div>
                </div>
                
                <div id="openGivingBack" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <div class = "row">
                            <div class = "col-md-12" style = "background-color:#363636; color:#fbde43;">
                                <h1>GIVING BACK</h1>
                            </div>

                            <div class = "col-md-12" >
                                <br>
                                <p>We reach out to our alumni who desire to help their Alma Mater grow in stature by supporting our Career Center.</p>
                                <p>Alumni can give back to T.I.P. through their participation in the following Career Center programs: </p>
                                
                            </div>
                        <div class = "row">
                            <div class = "col-md-4"></div>

                            <div class = "col-md-4" style = "text-align: justify; text-justify: inter-word;">
                                <p> > Alumni Advising and Coaching</p>
                                <p> > Conduct of Industry - Specific trainings and seminars</p>
                                <p> > Job Shadowing Program</p>
                                <p> > Hiring of T.I.P. students and graduates for internship and job placements</p>
                            </div>

                            <div class = "col-md-4"></div>
                        </div>
                            
                            
                            <div class = "col-md-12">
                                <p>Contact us today to find out about the different ways on how you can get involved. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "col-md-6"></div>
            <div class = "col-md-3">
                <p style = "margin-top:0.3%;">Copyright &#169; T.I.P. Career Center 2015<p>
            </div>

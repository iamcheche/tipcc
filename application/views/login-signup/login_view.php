<ul class="cb-slideshow">
    <li style = "color: transparent"><span>Image 01</span></li>
    <li style = "color: transparent"><span>Image 02</span></li>
    <li style = "color: transparent"><span>Image 03</span></li>
    <li style = "color: transparent"><span>Image 04</span></li>
    <li style = "color: transparent"><span>Image 05</span></li>
    <li style = "color: transparent"><span>Image 06</span></li>
</ul>

<div id = "container">

<div class = "col-md-12" style = "margin-bottom:0.6%;">   
    <div class = "col-md-1"></div>
    <div class = "col-md-4" style = "background-color:#363636; opacity:0.9; text-align: justify; text-justify: inter-word;">
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
    <div class = "col-md-5">
            <div id = "options">
                <h1>Be Updated. Be Active. </h1>
                <br>

                    <?php
                        $name = array('id' => 'name', 'name' => 'name', 'class' => 'form-control');
                        $email = array('id' => 'email', 'name' => 'email', 'class' => 'form-control');
                        $contact_number = array('id' => 'contact_number', 'name' => 'contact_number', 'class' => 'form-control');
                    ?>

                    <h2>Subscribe Now!</h2><br />
                    <div class = "row">
                        <div class = "col-md-1"></div>
                        <div class = "col-md-10">
                            <div id = "register_form" style = "background-color:#f0f0f0;">
                                <?php
                                    echo form_open('index.php/subscribe/subscriber');

                                    echo form_label('Name');
                                    echo form_input($name);
                                    echo '<br>';
                                
                                    echo form_label('Email Address');
                                    echo form_input($email);
                                    echo '<br>';
                    
                                    echo form_label('Contact Number');
                                    echo form_input($contact_number);
                                    echo '<br>';
                    
                                    echo form_submit('submit', 'Yes, I want to Subscribe');
                                    echo form_close();  
                                ?>
                            </div>
                        </div>
                        <div class = "col-md-1"></div>
                    </div>
                
                
                <hr>
                <p> It's always free. You will be updated to the upcoming events/seminars/job fairs and others.</p>
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

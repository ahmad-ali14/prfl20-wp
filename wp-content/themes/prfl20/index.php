<?php
get_header()
?>

<!-- Begin Page Content -->
<div class="container-fluid" style="padding-left: 10%; padding-right: 10%;">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo get_option('welcome')? get_option('welcome') : 'your welcome message here ..' ; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1"><?php echo get_option('card1_text') ? get_option('card1_text') : 'card 1 Text'; ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo get_option('card1_number') ? get_option('card1_number') : '100k'; ?></div>
                        </div>
                        <div class="col-auto"><i class="<?php echo get_option('card1_fontAwesome') ? get_option('card1_fontAwesome') : 'fas fa-code'; ?> fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-success text-uppercase mb-1"><?php echo get_option('card2_text') ? get_option('card2_text') : 'Card 2 TEXT'; ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo get_option('card2_number') ? get_option('card2_number') : '3456'; ?></div>
                        </div>
                        <div class="col-auto"><i class="<?php echo get_option('card2_fontAwesome') ? get_option('card2_fontAwesome') : 'fas fa-code'; ?>  fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-info text-uppercase mb-1"><?php echo get_option('card3_text') ? get_option('card3_text') : 'card 3 Text'; ?></div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo get_option('card2_number') ? get_option('card2_number') : '50'; ?>%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="<?php echo get_option('card2_number') ? get_option('card2_number') : '50'; ?>" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto"><i class="<?php echo get_option('card3_fontAwesome')? get_option('card3_fontAwesome') : 'fas fa-code'; ?>  fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-warning text-uppercase mb-1"><?php echo get_option('card4_text')? get_option('card4_text') : 'card 4 Text'; ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo get_option('card4_number') ? get_option('card4_number') : '789'; ?></div>
                        </div>
                        <div class="col-auto"><i class="<?php echo get_option('card4_fontAwesome') ?get_option('card4_fontAwesome') : 'fas fa-code'; ?> fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
   // if (is_home()) {

    ?>

        <!-- Content Row -->
        <div class="row" display="table-row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4 row ">
                    <div class="row">
                        <div class="card-body col col-xl-7 col-lg-7" style="padding-left: 10%; padding-right: 10%;">
                            <h1 class="text_1"> I'm <?php echo get_option('yourName') ?  get_option('yourName') : 'Your Name'; ?></h1>
                            <h5> <?php echo get_option('yourRole') ? get_option('yourRole') : 'Your last Role/ Profession'; ?> </h5>
                            <p class="p_bio" text-align="justify"> <?php echo get_option('yourBio') ? get_option('yourBio') : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'; ?> </p>
                            <pre> Location: <?php echo get_option('yourLocation') ?  get_option('yourLocation') : 'Your city, country'; ?></pre>
                            <pre> Know Me More..</pre>

                            <a href=" <?php echo get_option('yourLinkedin'); ?>" class="social-icon" aria-label="linkedin" style="display: inline-block; width: 50px; height: 50px; position: relative; overflow: hidden; vertical-align: middle;">
                                <div class="social-container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"><svg class="social-svg" viewBox="0 0 64 64" style="border-radius: 50%; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; fill-rule: evenodd;">
                                        <g class="social-svg-background" style="transition: fill 170ms ease-in-out 0s; fill: transparent;">
                                            <circle cx="32" cy="32" r="31"></circle>
                                        </g>
                                        <g class="social-svg-icon" style="transition: fill 170ms ease-in-out 0s; fill: transparent;">
                                            <path d="M20.4,44h5.4V26.6h-5.4V44z M23.1,18c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1 c1.7,0,3.1-1.4,3.1-3.1C26.2,19.4,24.8,18,23.1,18z M39.5,26.2c-2.6,0-4.4,1.4-5.1,2.8h-0.1v-2.4h-5.2V44h5.4v-8.6 c0-2.3,0.4-4.5,3.2-4.5c2.8,0,2.8,2.6,2.8,4.6V44H46v-9.5C46,29.8,45,26.2,39.5,26.2z"></path>
                                        </g>
                                        <g class="social-svg-mask" style="transition: fill 170ms ease-in-out 0s; fill: rgb(0, 127, 177);">
                                            <path d="M0,0v64h64V0H0z M25.8,44h-5.4V26.6h5.4V44z M23.1,24.3c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1 c1.7,0,3.1,1.4,3.1,3.1C26.2,22.9,24.8,24.3,23.1,24.3z M46,44h-5.4v-8.4c0-2,0-4.6-2.8-4.6c-2.8,0-3.2,2.2-3.2,4.5V44h-5.4V26.6 h5.2V29h0.1c0.7-1.4,2.5-2.8,5.1-2.8c5.5,0,6.5,3.6,6.5,8.3V44z"></path>
                                        </g>
                                    </svg></div>
                            </a>
                            &nbsp;

                            <a href=" <?php echo get_option('yourTwitter'); ?>" class="social-icon" aria-label="twitter" style="display: inline-block; width: 50px; height: 50px; position: relative; overflow: hidden; vertical-align: middle;">
                                <div class="social-container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"><svg class="social-svg" viewBox="0 0 64 64" style="border-radius: 50%; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; fill-rule: evenodd;">
                                        <g class="social-svg-background" style="transition: fill 170ms ease-in-out 0s; fill: transparent;">
                                            <circle cx="32" cy="32" r="31"></circle>
                                        </g>
                                        <g class="social-svg-icon" style="transition: fill 170ms ease-in-out 0s; fill: transparent;">
                                            <path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z"></path>
                                        </g>
                                        <g class="social-svg-mask" style="transition: fill 170ms ease-in-out 0s; fill: rgb(0, 172, 237);">
                                            <path d="M0,0v64h64V0H0z M44.7,25.5c0,0.3,0,0.6,0,0.8C44.7,35,38.1,45,26.1,45c-3.7,0-7.2-1.1-10.1-2.9 c0.5,0.1,1,0.1,1.6,0.1c3.1,0,5.9-1,8.2-2.8c-2.9-0.1-5.3-2-6.1-4.6c0.4,0.1,0.8,0.1,1.2,0.1c0.6,0,1.2-0.1,1.7-0.2 c-3-0.6-5.3-3.3-5.3-6.4c0,0,0-0.1,0-0.1c0.9,0.5,1.9,0.8,3,0.8c-1.8-1.2-2.9-3.2-2.9-5.5c0-1.2,0.3-2.3,0.9-3.3 c3.2,4,8.1,6.6,13.5,6.9c-0.1-0.5-0.2-1-0.2-1.5c0-3.6,2.9-6.6,6.6-6.6c1.9,0,3.6,0.8,4.8,2.1c1.5-0.3,2.9-0.8,4.2-1.6 c-0.5,1.5-1.5,2.8-2.9,3.6c1.3-0.2,2.6-0.5,3.8-1C47.1,23.4,46,24.5,44.7,25.5z"></path>
                                        </g>
                                    </svg></div>
                            </a>
                            &nbsp;

                            <a href=" <?php echo get_option('yourGithub'); ?>" class="social-icon" aria-label="github" style="display: inline-block; width: 50px; height: 50px; position: relative; overflow: hidden; vertical-align: middle;">
                                <div class="social-container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"><svg class="social-svg" viewBox="0 0 64 64" style="border-radius: 50%; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; fill-rule: evenodd;">
                                        <g class="social-svg-background" style="transition: fill 170ms ease-in-out 0s; fill: transparent;">
                                            <circle cx="32" cy="32" r="31"></circle>
                                        </g>
                                        <g class="social-svg-icon" style="transition: fill 170ms ease-in-out 0s; fill: transparent;">
                                            <path d="M32,16c-8.8,0-16,7.2-16,16c0,7.1,4.6,13.1,10.9,15.2 c0.8,0.1,1.1-0.3,1.1-0.8c0-0.4,0-1.4,0-2.7c-4.5,1-5.4-2.1-5.4-2.1c-0.7-1.8-1.8-2.3-1.8-2.3c-1.5-1,0.1-1,0.1-1 c1.6,0.1,2.5,1.6,2.5,1.6c1.4,2.4,3.7,1.7,4.7,1.3c0.1-1,0.6-1.7,1-2.1c-3.6-0.4-7.3-1.8-7.3-7.9c0-1.7,0.6-3.2,1.6-4.3 c-0.2-0.4-0.7-2,0.2-4.2c0,0,1.3-0.4,4.4,1.6c1.3-0.4,2.6-0.5,4-0.5c1.4,0,2.7,0.2,4,0.5c3.1-2.1,4.4-1.6,4.4-1.6 c0.9,2.2,0.3,3.8,0.2,4.2c1,1.1,1.6,2.5,1.6,4.3c0,6.1-3.7,7.5-7.3,7.9c0.6,0.5,1.1,1.5,1.1,3c0,2.1,0,3.9,0,4.4 c0,0.4,0.3,0.9,1.1,0.8C43.4,45.1,48,39.1,48,32C48,23.2,40.8,16,32,16z"></path>
                                        </g>
                                        <g class="social-svg-mask" style="transition: fill 170ms ease-in-out 0s; fill: rgb(65, 131, 196);">
                                            <path d="M0,0v64h64V0H0z M37.1,47.2c-0.8,0.2-1.1-0.3-1.1-0.8c0-0.5,0-2.3,0-4.4c0-1.5-0.5-2.5-1.1-3 c3.6-0.4,7.3-1.7,7.3-7.9c0-1.7-0.6-3.2-1.6-4.3c0.2-0.4,0.7-2-0.2-4.2c0,0-1.3-0.4-4.4,1.6c-1.3-0.4-2.6-0.5-4-0.5 c-1.4,0-2.7,0.2-4,0.5c-3.1-2.1-4.4-1.6-4.4-1.6c-0.9,2.2-0.3,3.8-0.2,4.2c-1,1.1-1.6,2.5-1.6,4.3c0,6.1,3.7,7.5,7.3,7.9 c-0.5,0.4-0.9,1.1-1,2.1c-0.9,0.4-3.2,1.1-4.7-1.3c0,0-0.8-1.5-2.5-1.6c0,0-1.6,0-0.1,1c0,0,1,0.5,1.8,2.3c0,0,0.9,3.1,5.4,2.1 c0,1.3,0,2.3,0,2.7c0,0.4-0.3,0.9-1.1,0.8C20.6,45.1,16,39.1,16,32c0-8.8,7.2-16,16-16c8.8,0,16,7.2,16,16 C48,39.1,43.4,45.1,37.1,47.2z"></path>
                                        </g>
                                    </svg></div>
                            </a>
                            &nbsp;

                            <a href=" <?php echo get_option('yourFacebook'); ?>" class="social-icon" aria-label="facebook" style="display: inline-block; width: 50px; height: 50px; position: relative; overflow: hidden; vertical-align: middle;">
                                <div class="social-container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"><svg class="social-svg" viewBox="0 0 64 64" style="border-radius: 50%; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; fill-rule: evenodd;">
                                        <g class="social-svg-background" style="transition: fill 170ms ease-in-out 0s; fill: transparent;">
                                            <circle cx="32" cy="32" r="31"></circle>
                                        </g>
                                        <g class="social-svg-icon" style="transition: fill 170ms ease-in-out 0s; fill: transparent;">
                                            <path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z"></path>
                                        </g>
                                        <g class="social-svg-mask" style="transition: fill 170ms ease-in-out 0s; fill: rgb(59, 89, 152);">
                                            <path d="M0,0v64h64V0H0z M39.6,22l-2.8,0c-2.2,0-2.6,1.1-2.6,2.6V28h5.3l-0.7,5.3h-4.6V47h-5.5V33.3H24V28h4.6V24 c0-4.6,2.8-7,6.9-7c2,0,3.6,0.1,4.1,0.2V22z"></path>
                                        </g>
                                    </svg></div>
                            </a>
                            &nbsp;


                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="card-body" style="padding-left: 20%;"><img src=" <?php echo get_option('yourImage')?  get_option('yourImage') : 'https://dl.dropbox.com/s/zyomlpvq7vcvgg8/noImage.jpeg?dl=0'; ?>" width="90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .some_margin {}

            .p_bio {
                text-align: justify;
                /* For Edge */
                text-align-last: left;
            }


            @keyframes typewriter {

                0%,
                100% {
                    width: 0;
                }

                20%,
                80% {
                    width: 10.2em;
                }
            }

            @keyframes caret {

                0%,
                100% {
                    opacity: 0;
                }

                50% {
                    opacity: 1;
                }
            }

            .text_1 {
                overflow: hidden;
                white-space: nowrap;
                animation: typewriter;
                display: inline-block;
                position: relative;
                animation-duration: 10s;
                animation-timing-function: steps(12, end);
                animation-iteration-count: 1;
            }


            /* .text_1::after {
  content: "";
  position: absolute;
  right: 0;
  animation: caret infinite;
  animation-duration: 1s;
  animation-timing-function: steps(12, end);
} */
        </style>



    <?php //} ?>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Color System -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                    <div class="row">

                        <?php

                        global $wpdb;
                        $projects = $wpdb->get_results("SELECT * FROM wp_projects");
                        foreach ($projects as $project) {
                        ?>

                            <div class="col-12">
                                <p style="margin-bottom: 7%;">
                                    <i class="fas fa-chevron-right"></i>
                                    &nbsp;<i class="<?php echo $project->fontAwesome; ?>"></i>
                                    <?php echo $project->name; ?> - <?php echo $project->date; ?>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="<?php echo $project->url; ?>" title="visit Live Demo" target="_blank" class="btn-link text-muted"><i class="fas fa-external-link-alt"> visit</i></a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a title="View more Details" class="btn-link text-muted" href="<?php echo home_url().'/project?id='.$project->id; ?>"><i class="fas fa-info-circle"> details</i></a>
                                </p>
                            </div>


                        <?php }
                        
                        if(!$projects) {
                            echo '<div class="col-12">
                            <p style="margin-bottom: 7%;">
                                <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                &nbsp;<i class="fab fa-react" aria-hidden="true"></i>
                                portfolio - feb 2020                                    &nbsp;&nbsp;&nbsp;
                                <a href="https://www.ahmad-ali.co.uk/" title="visit Live Demo" target="_blank" class="btn-link text-muted"><i class="fas fa-external-link-alt" aria-hidden="true"> visit</i></a>
                                &nbsp;&nbsp;&nbsp;
                                <a title="View more Details" class="btn-link text-muted" href="#"><i class="fas fa-info-circle" aria-hidden="true"> details</i></a>
                            </p>
                        </div>';
                        }
                        
                        
                        ?>



                        <!-- end project row -->
                    </div>

                </div>






            </div>

            <!-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Publications</h6>
                </div>
                <div class="card-body">
                    <p> Site Views Counter Toturial - Medium</p>
                    <p> Promises or Callbacks - Dev </p>
                    <p> connect to Your MongoDb Atlas - Dev </p>

                </div>
            </div> -->

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Contact Me</h6>
                </div>
                <div class="card-body">
                    <p> You Are Welcome to my space ..</p>
                    <p> Tell me about your project and I will give you a reflection, or Just say Hi! </p><br>
                    <?php echo do_shortcode( '[contact-form-7 id="53" title="Contact form 1_copy"]' ); ?>

                </div>


            </div>

        </div>


        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Education</h6>
                </div>
                <div class="card-body">



                    <?php

                    global $wpdb;
                    $row = $wpdb->get_results("SELECT * FROM wp_education");

                    
                    foreach ($row as $doc) {
                    ?>

                        <p>
                            <i class="fas fa-chevron-right"></i>
                            <?php echo $doc->start; ?> - <?php echo $doc->end; ?>: </p>
                        <p> <?php echo $doc->degree; ?> - <?php echo $doc->university; ?> - <?php echo $doc->country; ?> .</p>

                    <?php } 
                    if(!$row){
                        echo ' <p> <i class="fas fa-chevron-right"></i> 2010-2014: 
                        <p> computer science - London UCL, UK. </p>';
                    }
                    
                    
                    ?>


                </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Certificates </h6>
                </div>
                <div class="card-body">

                    <?php

                    global $wpdb;
                    $row = $wpdb->get_results("SELECT * FROM wp_certificates");
                    foreach ($row as $doc) {
                    ?>


                        <div>
                            <p style="margin-bottom: 5%;">
                                <i class="fas fa-chevron-right"></i>
                                <?php echo $doc->name; ?> - <?php echo $doc->provider; ?> ( <?php echo $doc->host; ?> )
                                &nbsp;
                                <a href=" <?php echo $doc->url; ?>" title="visit course page" target="_blank">
                                    <button class="btn btn-link text-muted">
                                        <i class="fas fa-external-link-alt"> visit</i>
                                    </button></a>
                                <a title="view certificate" href="<?php echo home_url().'/certificate?id='.$doc->id; ?>">
                                    <button class="btn btn-link text-muted">
                                        <i class="fas fa-graduation-cap"> details</i>
                                    </button>
                                </a>
                            </p>
                        </div>

                    <?php }
                    if(!$row) { echo '<p style="margin-bottom: 5%;"><i class="fas fa-chevron-right"></i> CS50\'s Introduction to Computer Science - Harvard University, USA ( EDX )&nbsp;<a href="https://www.edx.org/course/cs50s-introduction-to-computer-science" title="visit course page" target="_blank"><button class="btn btn-link text-muted">  <i class="fas fa-external-link-alt"> visit</i>  </button></a><a title="view certificate" href="#"><button class="btn btn-link text-muted">  <i class="fas fa-graduation-cap"> details</i> </button></a></p>'; }

                    ?>

                </div>
            </div>

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Main Skills</h6>
                </div>
                <div class="card-body">
                    <div class="row">

                        <?php

                        global $wpdb;
                        $row = $wpdb->get_results("SELECT * FROM wp_skills");
                        foreach ($row as $doc) {
                        ?>



                            <div class="col-lg-4 mb-3 sm-6">
                                <div class="card border shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    <?php echo $doc->skill; ?>
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            <?php echo $doc->value; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto"><i class="<?php echo $doc->fontAwesome; ?> fa-1.5x text-green-300"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php }
                        if(!$row){
                            echo '<div class="col-lg-4 mb-3 sm-6">
                            <div class="card border shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                react                                                </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        74                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fab fa-react fa-1.5x text-green-300" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }
                        
                        
                        ?>

                    </div>

                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">News letter</h6>
                </div>
                <div class="card-body">
                    <p>Subscribe to My News Update </p>
                    <p> Promise: No more than 1 mail/month. </p>
                    <form method="post" action="<?php home_url() . '/wp-admin/admin.php'; ?>">
                        <div class="form-group row"><label for="inputEmail" class="col-sm-2 col-md-2 col-form-label">Email *</label>
                            <div class="col-sm-10 col-md-8"><input type="email" class="form-control" id="inputEmail" placeholder="Email" name="sub-email" value=""></div>
                        </div>
                        <div class="form-group row">
                            <div class="col col-md-6"></div>
                            <div class="col-sm-10 col-md-6 "><button type="submit" class="btn btn-primary" name="sub" id="sub">Subscribe</button></div>
                        </div>
                    </form>
                </div>
            </div>




            <!-- end column -->
        </div>
        <!-- end row  -->
    </div>

    <br />


    <div class="col col-12 ">
        <hr class="testimonials">
        <p class="desc ">❤️</p>
        <div class="row tweetForm">
            <div class="col col-12">
                <h4 style="text-align: center;">Add Review </h4>
            </div><br>
            <div class="col col-12">
                <form method="post"  action="<?php home_url() . '/wp-admin/admin.php'; ?>">
                    <div class="row">
                        <div class="col col-4">
                            <div class="form-group row"><label for="inputEmail" class="col col-12">Your Name</label>
                                <div class="col col-12"><input type="name" class="form-control" id="inputNameR" name="inputNameR" placeholder="Your name is visible" value=""></div>
                            </div>
                            <div class="form-group row"><label for="inputName" class="col col-12">How do you Know me </label>
                                <div class="col col-12"><select id="rel" name ="rel" class="form-control col col-12" name="rel">
                                        <option value="I worked directly for You">I worked directly for You</option>
                                        <option value="You and me worked together">You and me worked together</option>
                                        <option value="inspiration">inspiration</option>
                                        <option value="Other">Other</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col col-6">
                            <div class="form-group row"><label for="inputMessageR" class="col col-12 col-form-label">Review</label>
                                <div class="col col-12"><textarea type="text" name="inputMessageR" class=" col col-12 form-control" id="inputMessage" placeholder="Tell everyone about me in 115 letters" maxlength="115" rows="5" cols="50"></textarea></div>
                            </div>
                        </div>
                        <div class="col col-2">
                            <div class="form-group row">
                                <div class="col col-md-4"></div>
                                <div class="col-sm-10 col-md-8 "><button type="submit" name="review" class="btn btn-secondary add_review">Add Review</button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><br>
        <div class="row tweets">

                         <?php

                            global $wpdb;
                            $row = $wpdb->get_results("SELECT * FROM wp_reviews");
                            foreach ($row as $doc) {
                            ?>


            <div class="tweet">
                <div class="content">
                    <p class="reviewText"> <?php echo $doc->text; ?></p>
                    <p class="reviewAuthor"> <?php echo $doc->name; ?></p><i class="relation"><?php echo $doc->rel; ?></i>
                </div>
            </div>


                            <?php }
                            
                            if(!$row){
                                echo '<div class="tweet">
                                <div class="content">
                                    <p class="reviewText"> Your Review Will be here, You have 115 letters.</p>
                                    <p class="reviewAuthor"> Your Name</p><i class="relation">I worked directly for You</i>
                                </div>
                            </div>';
                            }
                            
                            
                            ?>

         
          <br/>
        </div>
    </div>
</div>

<style>
    .desc {
        top: -40px;
        /* left: 50%;  */
        width: 100%;
        position: relative;
        font-size: 48px;
        text-align: center;
        color: #706f6c !important;
        text-shadow: 0 2px 4px rgba(0, 0, 0, .2);
    }

    .testimonials {
        margin-top: 105px;
        border-bottom: 1px solid #bbab86;
        background-color: #e7e1d4;
        position: relative;
        margin: 0;
    }

    .tweets {
        margin-left: 0;
        margin-bottom: 0;
        /* padding: 60px 0 30px; */
        display: flex;
        flex-wrap: nowrap;
        overflow-x: scroll;
        justify-content: flex-start;
        align-items: flex-start;
        /* box-shadow: inset 0 3px 3px -3px rgba(0,0,0,.3); */
    }

    .tweet {
        margin-left: 15px;
        padding: 15px;
        box-sizing: border-box;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
        flex: 0 0 370px;
        position: relative;
        border: 1px solid #bfbfbf;
        width: 340px;
        height: 190px;
        max-width: 341px;
        max-height: 191px;
    }

    .tweetForm {
        margin-left: 15px;
        padding: 15px;
        box-sizing: border-box;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
        flex: 0 0 370px;
        position: relative;
        border: 1px solid #bfbfbf;
    }

    .reviewText {
        font-size: medium;
    }

    .reviewAuthor {
        font-size: x-large;
        margin-bottom: 0%;

    }

    .relation {
        font-size: smaller;
        padding: 0%;
    }

    .header_cnter {
        text-align: center !important;
    }

    .add_review {
        position: relative;
        top: +180%;
        left: -40%;
        background-color: #706f6c;
    }
</style>

<!-- /.container-fluid -->
<br /> <br />

</div>
<!-- End of Main Content -->



<?php get_footer()  ?>
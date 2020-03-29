<?php
get_header()
?>
<div class="col-12">

    <!-- Color System -->
    <div class="card shadow mb-4" style="margin : 0 10% 0 10%;">



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

            <?php } ?>


        </div>
    </div>

    <!-- Approach -->
    <div class="card shadow mb-4" style="margin : 0 10% 0 10%;">
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
                        <a title="view certificate" href="#">
                            <button class="btn btn-link text-muted">
                                <i class="fas fa-graduation-cap"> details</i>
                            </button>
                        </a>
                    </p>
                </div>

            <?php } ?>

        </div>
    </div>


    
            <!-- Project Card Example -->
            <div class="card shadow mb-4" style="margin : 0 10% 0 10%;">
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

                        <?php } ?>

                    </div>

                </div>
            </div>



</div>




<div>
    <?php get_footer()  ?>
</div>
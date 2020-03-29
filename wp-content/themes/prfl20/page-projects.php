<?php
get_header()
?>
    <div class="col-12" >

<!-- Color System -->
<div class="card shadow mb-4" style="margin : 0 10% 0 10%;">
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
                    <p style="margin-bottom: 3%;">
                        <i class="fas fa-chevron-right"></i>
                        &nbsp;<i class="<?php echo $project->fontAwesome; ?>"></i>
                        <?php echo $project->name; ?> - <?php echo $project->date; ?>
                        &nbsp;&nbsp;&nbsp;
                        <a href="<?php echo $project->url; ?>" title="visit Live Demo" target="_blank" class="btn-link text-muted"><i class="fas fa-external-link-alt"> visit</i></a>
                        &nbsp;&nbsp;&nbsp;
                        <a title="View more Details" class="btn-link text-muted" href="<?php echo home_url().'/project?id='.$project->id; ?>"><i class="fas fa-info-circle"> details</i></a>
                    </p>
                </div>


            <?php } ?>



            <!-- end project row -->
        </div>


     </div> </div>


<div>
     <?php get_footer()  ?>
</div>
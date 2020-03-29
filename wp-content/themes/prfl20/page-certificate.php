<?php
get_header()
?>
<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    global $wpdb;
    $pr = $wpdb->get_results("SELECT * FROM wp_projects WHERE id = $id LIMIT 1");
    // if (!$pr) {
    //     die('No record with id: ' . $id);
    // }
    $name = $pr[0]->name;
    $lang = $pr[0]->languages;
    $url = $pr[0]->url;
    $git = $pr[0]->github;
    $video = $pr[0]->video;
    $summary = $pr[0]->summary;
    $date = $pr[0]->date;
    $fontAwesome = $pr[0]->fontAwesome;
}
?>
<div>

    <div class="col-lg-12 mb-12">
        <div class="card shadow mb-12" style="margin : 0 10% 0 10%;">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary"><?php echo $name ; ?></h5>
                <div class="row">
                    <div class="col md-8"> <br>
                        <p> project: ><?php echo $name; ?> </p>
                        <p> Languages used: <?php echo $lang; ?> </p>
                        <div class="row"><a href="#">
                             &nbsp;<a target="_blank" href="<?php echo $git; ?>"> <button class="btn btn-success" style="margin-bottom: 5px;"> View on Github &nbsp;<i class="fab fa-github"></i> </button> </a> &nbsp;<a target="_blank" href="<?php echo $url; ?>"> <button class="btn btn-info" style="margin-bottom: 5px;"> live demo &nbsp; <i class="fas fa-desktop"></i> </button></a></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <p><span class="m-0 font-weight-bold text-primary"> summary: </span>
                        <div>
                        <?php echo $summary; ?>
                        </div>
                    </p>
                </div>
            
             
              
                <div>
                    <p> <span class="m-0 font-weight-bold text-primary">date: </span> <?php echo $date; ?> </p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 mb-12">
        <div class="card shadow mb-12" style="margin : 0 10% 0 10%;">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">sample:</h5>
            </div>
            <div class="card-body"><img src="<?php echo $video; ?>" width="100%" height="100%" alt="<?php echo $name; ?>"></div>
        </div>
    </div>
<br />
</div>
<div>
    <?php get_footer()  ?>
</div>
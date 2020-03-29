<?php
get_header()
?>
<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    global $wpdb;
    $pr = $wpdb->get_results("SELECT * FROM wp_certificates WHERE id = $id LIMIT 1");
  
    $name = $pr[0]->name;
    $provider = $pr[0]->provider;
    $url = $pr[0]->url;
    $host = $pr[0]->host;
    $photo = $pr[0]->photo;
    $id = $pr[0]->id;
 

}
?>
<div>

    <div class="col-lg-12 mb-12">
        <div class="card shadow mb-12" style="margin : 0 10% 0 10%;">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary"><?php echo $name ; ?></h5>
            </div>
            <div class="card-body">
                <div>
                    <p><span class="m-0 font-weight-bold text-primary"> Provider: </span> <?php echo $provider ; ?> </p>
                </div>
                <div>
                    <p> <span class="m-0 font-weight-bold text-primary">Course Host: </span> <?php echo $host ; ?> </p>
                </div>
                <div class="row">
                    <div>
                     
                        <a target="_blank" href="<?php echo $url ; ?>"> <button class="btn btn-info" style="margin-bottom: 5px;">visit course  &nbsp; </button></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <br />

    <div class="col-lg-12 mb-12">
        <div class="card shadow mb-12" style="margin : 0 10% 0 10%;">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Certificate:</h5>
            </div>
            <div class="card-body"><img width="100%" height="100%" src="<?php echo $photo; ?>" alt="<?php echo $name ; ?>" ></div>
        </div>
    </div>
    <br />
</div>
<div>
    <?php get_footer()  ?>
</div>
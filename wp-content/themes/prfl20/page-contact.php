<?php
get_header()
?>
<div class="col-12">

    <!-- Color System -->
    <div class="card shadow mb-4" style="margin : 0 10% 0 10%;">



            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Contact Me</h6>
            </div>
            <div class="card-body">
                <p> You Are Welcome to my space ..</p>
                <p> Tell me about your project and I will give you a reflection, or Just say Hi! </p><br>
                <?php echo do_shortcode('[contact-form-7 id="53" title="Contact form 1_copy"]'); ?>

            </div>


        </div>






        <div class="card shadow mb-4"  style="margin : 0 10% 0 10%;">
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


    </div>




    <div>
        <?php get_footer()  ?>
    </div>
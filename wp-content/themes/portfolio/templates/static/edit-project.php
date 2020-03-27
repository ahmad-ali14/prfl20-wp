<?php 


?>


<div class="wrap">
    <h1 class="wp-heading-inline"> Edit Project </h1>

    <br /> <br />
    


    <form action="" method="post">



        <label for="pr-name">Project Name:
            <input type="text" name="pr-name" value="" size="50">
        </label> <br /> <br />

        <label for="pr-lang">Languages used:
            <input type="text" name="pr-lang" value="" size="50">
        </label> <br /> <br />

        <label for="pr-url">Project URL:
            <input type="text" name="pr-url" value="" size="50">
        </label> <br /> <br />

        <label for="pr-github">Github URL:
            <input type="text" name="pr-github" value="" size="50">
        </label> <br /> <br />

        <label for="pr-video">video URL:
            <input type="text" name="pr-video" value="" size="50">
        </label> <br /> <br />


        <label for="pr-sum">Project Summary:
            <textarea type="text" name="pr-sum" value="" cols=50 rows=5> </textarea>
        </label> <br /> <br />

        <br /> <br />

        <input style="margin-left: 10%;" class="btn btn-primary" type="submit" name="submit" value="Add project" />

    </form>

   
</div>





<?php


if (isset($_POST['submit'])) {

    global $form_err;

    if (
        empty($_POST["name"]) || empty($_POST["pr-lang"]) || empty($_POST["pr-url"])
        || empty($_POST["pr-github"]) || empty($_POST["pr-video"]) || empty($_POST["pr-sum"])
    ) {
    
        show_message('* pleas fill all fields, all are required.');
        exit();
    }




    global $wpdb, $name, $lang, $url, $github, $video, $sum;


    // Get form values.
    $name = (!empty($_POST['pr-name'])) ? sanitize_text_field($_POST['pr-name']) : null;
    $lang = (!empty($_POST['pr-lang'])) ? sanitize_text_field($_POST['pr-lang']) : null;
    $url = (!empty($_POST['pr-url'])) ? sanitize_text_field($_POST['pr-url']) : null;
    $github = (!empty($_POST['pr-github'])) ? sanitize_text_field($_POST['pr-github']) : null;
    $video = (!empty($_POST['pr-video'])) ? sanitize_text_field($_POST['pr-video']) : null;
    $sum = (!empty($_POST['pr-sum'])) ? sanitize_text_field($_POST['pr-sum']) : null;



    $table_name = $wpdb->prefix . "projects";

    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'name' => $name,
            'languages' => $lang,
            'url' => $url,
            'github' => $github,
            'video' => $video,
            'summary' => $sum
        )
    );
}




?>
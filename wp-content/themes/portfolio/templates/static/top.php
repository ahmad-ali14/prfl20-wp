<h1> Top Section </h1>
<?php settings_errors(); ?>


<form action="options.php" method="post" >  
    <?php 
    settings_fields('top-data-group');
    do_settings_sections('top-data');
    submit_button('save', 'primary sub-button', 'submit', true);
    ?>
</form>



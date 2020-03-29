<h1> Top Section </h1>
<?php settings_errors(); ?>


<form action="options.php" method="post" >  
    <?php 


    settings_fields('top-data-group');
    do_settings_sections('top-data');

    settings_fields('card1-group');
    do_settings_sections('card1');

    settings_fields('card2-group');
    do_settings_sections('card2');

    settings_fields('card3-group');
    do_settings_sections('card3');

    settings_fields('card4-group');
    do_settings_sections('card4');

    submit_button('save', 'primary sub-button', 'submit', true);
    ?>
</form>





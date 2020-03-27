<h1> Theme Settings </h1>
<?php settings_errors(); ?>
<!-- <ul>
    <li>
        <a href= "<?php //echo  home_url().'/wp-admin/admin.php?page=home-page-options'; ?>"> Home Page options </a>
    </li>
    <!-- <li>
        <a href= "<?php //echo  home_url().'/wp-admin/admin.php?page=gray-banner-options'; ?>"> Gray banner options </a>
    </li> -->
<!--</ul> -->

<form action="options.php" method="post" >  
    <?php 
    settings_fields('home-page-options-group');
    do_settings_sections('theme-options-settings');
    submit_button('save', 'primary sub-button', 'submit', true);
    ?>
</form>



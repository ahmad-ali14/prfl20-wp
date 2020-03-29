<!DOCTYPE html>
<html <?php language_attributes()  ?> style=" background-color: #f2efe8 !important;" >
<head>
    <meta charset="<?php bloginfo() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titl><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/1c03bf9151.js" crossorigin="anonymous"></script>

</head>
<body style=" background-color: #f2efe8 !important;">

<!-- <header>
<?php
 // bloginfo('description') 
 if ( ! session_id() )
    session_start();

 
 ?>
<?php //bloginfo('name'); ?>

<div class="n60 clear">
    <div class= "logo">LOGO</div>
   <div id ="top_nav"> <?php //wp_nav_menu('primary'); ?></div>
</div>
</header> -->


<!-- <section id="main"> -->

<div id="page-top"></div>
 <!-- Page Wrapper -->
 <div id="wrapper">


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

  <div
          id="root"
          class="container-fluid"
        >
          <div>
            <div
              role="navigation"
              style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: hidden;"
            >
              <div
                style="z-index: 2; position: absolute; top: 0px; bottom: 0px; transition: -webkit-transform 0.3s ease-out 0s; will-change: transform; overflow-y: auto; background: white; padding-left: 5%; padding-right: 5%; left: 0px; transform: translateX(-100%);"
              >
                <div>
                  <p>
                    <a class="nav-link " href="/" style="color: black;">Home</a>
                  </p>
                  <p>
                    <a class="nav-link " href="<?php home_url().'/projects'?>" style="color: black;"
                      >Projects
                    </a>
                  </p>
                  <p>
                    <a
                      class="nav-link "
                      href="/education"
                      style="color: black;"
                    >
                      Education
                    </a>
                  </p>
                  <p>
                    <a class="nav-link " href="/contact" style="color: black;">
                      Contact
                    </a>
                  </p>
                </div>
              </div>
              <div
                style="z-index: 1; position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; opacity: 0; visibility: hidden; transition: opacity 0.3s ease-out 0s, visibility 0.3s ease-out 0s; background-color: rgba(0, 0, 0, 0.3);"
              ></div>
              <div
                style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow-y: auto; transition: left 0.3s ease-out 0s, right 0.3s ease-out 0s;"
              ></div>
            </div>
            <nav
              class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow "
            >
              <button class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
              <a  href="<?php  echo home_url();?>"
                ><img
                  id="log_img"
                  src="<?php echo get_option('yourLogo'); ?> "
                  alt="logo"
              /></a>
              <ul class="nav navbar-nav ml-auto hidden-xs d-none d-md-block">
                <div class="collapse navbar-collapse ">
                  <div class="navbar-nav">
                    <li class="nav-item dropdown no-arrow d-sm-none"></li>
                    <li class="nav-item dropdown no-arrow mx-1">
                      <a
                        class="nav-link "
                        href="<?php  echo home_url();?>"
                        style="color: black;"
                        >Home</a
                      >
                    </li>
                    
                    <li class="nav-item dropdown no-arrow mx-1">
                      <a
                        class="nav-link "
                        href="<?php  echo home_url().'/projects';?>"
                        style="color: black;"
                        >Projects
                      </a>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                      <a
                        class="nav-link "
                        href="<?php  echo home_url().'/contact';?>"
                        style="color: black;"
                      >
                        Contact
                      </a>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                      <a
                        class="nav-link "
                        href="<?php  echo home_url().'/education';?>"
                        style="color: black;"
                      >
                        Education
                      </a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                      <a
                        class="nav-link "
                        target="_blank "
                        href="mailto:<?php echo get_option('yourEmail'); ?>"
                        title="Send Me a message"
                        ><span
                          class="mr-2 d-none d-lg-inline text-gray-600 small"
                        ></span
                        ><img
                          class="img-profile rounded-circle"
                          src="https://dl.dropbox.com/s/nyjbgdughrzq7br/email-circle-icon-62.png?dl=0"
                          alt="prfl20-logo-UK"
                          width="35px"

                      /></a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                      <a
                        class="nav-link "
                        href="tel:<?php echo get_option('yourPhone'); ?>"
                        title="Call me"
                        ><span
                          class="mr-2 d-none d-lg-inline text-gray-600 small"
                        ></span
                        ><img
                          class="img-profile rounded-circle"
                          src="https://dl.dropbox.com/s/jq67lusuwgpwbme/phone.png?dl=0"
                          width="35px"
                      /></a>
                    </li>
                  </div>
                </div>
              </ul>
            </nav>
            <?php if(isset($_SESSION['sub_err'])) 
           echo  '<div id="err_div">';
            echo '<p>'.$_SESSION['sub_err'].'</p>';
            echo '</div>';
            unset($_SESSION['sub_err']);
            ?>
            <style>
              #err_div{
                background-color: red;
                color:whitesmoke;
                font-size: 30px;
                margin: 0 10% 0 10%;
                padding:0 10% 0 10%;
              }
            </style>
<pre>
<?php 
print_r($_SESSION); 
?>

<?php echo htmlentities($_SESSION['sub_err']) ?>
</pre>
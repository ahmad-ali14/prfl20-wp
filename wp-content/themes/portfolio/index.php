<?php
get_header()
?>
    <?php 
    
    // if(have_posts()){
    //     while(have_posts()){
    //         the_post();
    //         ?>
             <!-- <article class="post"> -->
    <!-- //         <a href="<?php // the_permalink(); ?>"  class="title" ><h1><?php // the_title(); ?>
</h1></a> -->
             <!-- <h2><?php // the_content();?> </h2> -->
             <!-- </article> -->
              <?php
    //     }
    // }
    // ?>

<br />
<br />


<?php if ( function_exists( 'easingslider' ) && is_home() ) { 
    
      //  echo '<div id="theme_slideer">';
          //   easingslider( 37 );  
       // echo  '</div>';
    } 
    
    if(is_home()){
       // echo '<div id="gray-banner">'.get_option('blackBox').'</div>';
    }
    
    
    ?>
    <br />
    <br />
  <!-- Begin Page Content -->
  <div class="container-fluid" style="padding-left: 10%; padding-right: 10%;" >

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Welcome ...</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Drop A message </a>
</div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Lines Coded</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">+20,000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Courses Attended</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">+40</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Towards Goal</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">40%</div>
              </div>
              <div class="col">
                <div class="progress progress-sm mr-2">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Projects Done</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">+50</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Content Row -->

<div class="row">

  <!-- Area Chart -->
  <div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
     
      <!-- Card Body -->
      <div class="card-body"  >
          <p> I'm Ahmad Ali</p>
          <p>  Junior MERN Developer </p>
          <p text-align="justify"> I am living in london Now using code pen to test my Front End Portfolio App, I have been studying Computer since form a year now and it is going Good, I activvelly looking for Job. </p>
                          <p> Name: Ahmad Ali </p>
          <p> Location: London, UK </p>
          <p> E-mail: aallii300300@gmail.com </p>
          <p> Age: 26 </p>
          <p> Employment: Looking For work. </p>
          <pre> Follow ME !!  hi
          </pre>
        
        </div>
      </div>
  </div>

  <!-- Pie Chart -->
  <div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
   
      <!-- Card Body -->
      <div class="card-body">
        <img src="https://dl.dropbox.com/s/rxxlqyc82hve8w2/main.jpg?dl=0" width="100%" height="100%" />
      </div>
    </div>
  </div>
</div>

<!-- Content Row -->
<div class="row">

  <!-- Content Column -->
  <div class="col-lg-6 mb-4">

 <!-- Color System -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Prpjects</h6>
      </div>
      <div class="card-body">
    <div class="row">

      <!-- start project row -->
      <div class="col-lg-6 mb-4">
        <div class="card bg-secondary text-white shadow">
          <div class="card-body">
            Issue Tracker
            <div class="text-white-50 small">Express-Mongo</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-secondary text-white shadow">
          <div class="card-body">
            Personal Libraray 
            <div class="text-white-50 small">Express-Mongo</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-info text-white shadow">
          <div class="card-body">
            Roye Interiors
            <div class="text-white-50 small">PHP</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-info text-white shadow">
          <div class="card-body">
            Mind & World
            <div class="text-white-50 small">Html</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-secondary text-white shadow">
          <div class="card-body">
            Messagging App 
            <div class="text-white-50 small">Express-Sockets</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-secondary text-white shadow">
          <div class="card-body">
            Stock Checker
            <div class="text-white-50 small">Express-Mongo</div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="card bg-success text-white shadow">
          <div class="card-body">
            Exercise Tracker
            <div class="text-white-50 small">Express-Mongo</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-success text-white shadow">
          <div class="card-body">
            URL Sortener 
            <div class="text-white-50 small">Express-Mongo</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-info text-white shadow">
          <div class="card-body">
            Units Converter
            <div class="text-white-50 small">Express-Mongo</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-info text-white shadow">
          <div class="card-body">
            TimeStamp Api
            <div class="text-white-50 small">Express-Mongo</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-info text-white shadow">
          <div class="card-body">
            SiteViews Counter
            <div class="text-white-50 small">Express-Mongo</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-info text-white shadow">
          <div class="card-body">
            StopWatch
            <div class="text-white-50 small">React</div>
          </div>
        </div>
      </div>


      <div class="col-lg-6 mb-4">
        <div class="card bg-secondary text-white shadow">
          <div class="card-body">
            Calculator
            <div class="text-white-50 small">React</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-secondary text-white shadow">
          <div class="card-body">
            Drums Player 
            <div class="text-white-50 small">React</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-secondary text-white shadow">
          <div class="card-body">
            MarkDown Previewer
            <div class="text-white-50 small">React</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-secondary text-white shadow">
          <div class="card-body">
            ESOL Adminstration
            <div class="text-white-50 small">Django</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-info text-white shadow">
          <div class="card-body">
            Track Your Caloiries
            <div class="text-white-50 small">JS</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-secondary text-white shadow">
          <div class="card-body">
            Basic Income Calculator
            <div class="text-white-50 small">JS</div>
          </div>
        </div>
      </div>



      <div class="col-lg-6 mb-4">
        <div class="card bg-info text-white shadow">
          <div class="card-body">
            AnchorTag Generateor
            <div class="text-white-50 small">JS</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card bg-info text-white shadow">
          <div class="card-body">
            BENZEN Ring
            <div class="text-white-50 small">CSS</div>
          </div>
        </div>
      </div>








      




      <!-- end project row -->
    </div>

  </div>
  </div>
  </div>
  

  <div class="col-lg-6 mb-4">

    <!-- Illustrations -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Education</h6>
      </div>
      <div class="card-body">
       <p> 2011 - 2016: </p>
        <p> Damascus Univercity - Degree Of Pharmacy  - Syria </p>
        <p>2018 - ongoing</p>
        <p> Kiron Open Hier Education - Assossiate Degree in Computer Science - Germany </p>
      </div>
    </div>

    <!-- Approach -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Certificates </h6>
      </div>
      <div class="card-body">
       <ul>
        <li> Full Stack - FreeCodeCamp </li>
        <li> Express - HongKong Univercity (coursera) </li>
        <li> PHP stack - Univercity of Mitchigan (coursera) </li>
        <li> CS50 - Harvard Univercity (EDX) </li> 
         <li> Front End Specilaization - Univercity of Mitchigan (coursera </li>
        <li> Mathematical thinking in comuter science </li>
        <li> Computer Science 101 - Stranford Univercity (online)</li>
        <li>HTML, CSS, and Javascript for Web Developers - Johns Hopkins University (coursera)</li>
       </ul>
      </div>
    </div>

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Main Skills</h6>
          </div>
          <div class="card-body">
            <h4 class="small font-weight-bold">MongoDB <span class="float-right">60%</span></h4>
            <div class="progress mb-4">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Express JS <span class="float-right">70%</span></h4>
            <div class="progress mb-4">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">React JS <span class="float-right">30%</span></h4>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Node JS <span class="float-right">80%</span></h4>
            <div class="progress mb-4">
              <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">PHP <span class="float-right">50%</span></h4>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>

        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Publications</h6>
          </div>
          <div class="card-body">
           <p> Site Views Counter Toturial - Medium</p>
           <p> Promises or Callbacks - Dev </p>
           <p> connect to Your MongoDb Atlas - Dev </p>
          
          </div>
        </div>
<!-- end column -->
  </div>
  <!-- end row  -->
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php  get_footer()  ?>
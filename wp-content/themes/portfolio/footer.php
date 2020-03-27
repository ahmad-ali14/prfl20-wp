<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div height="40px">
    <div class="copyright text-center my-auto">
      <p style="padding:20px">&copy; <?php echo get_option('yourName');?> &nbsp; <?php echo date("Y"); ?>
 </p>
      <!-- &nbsp;&nbsp; -->
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<style>
  .scroll-to-top {
    position: fixed;
    right: 1rem;
    bottom: 1rem;
    /* display: none; */
    width: 2.75rem;
    height: 2.75rem;
    text-align: center;
    color: #fff;
    background: rgba(90, 92, 105, .5);
    line-height: 46px
  }

  .scroll-to-top:focus,
  .scroll-to-top:hover {
    color: #fff
  }

  .scroll-to-top:hover {
    background: #5a5c69
  }

  .scroll-to-top i {
    font-weight: 800
  }

  @-webkit-keyframes growIn {
    0% {
      transform: scale(.9);
      opacity: 0
    }

    100% {
      transform: scale(1);
      opacity: 1
    }
  }

  @keyframes growIn {
    0% {
      transform: scale(.9);
      opacity: 0
    }

    100% {
      transform: scale(1);
      opacity: 1
    }
  }

  .rounded-sm {
    border-radius: .2rem !important
  }

  .rounded {
    border-radius: .35rem !important
  }

  .rounded-top {
    border-top-left-radius: .35rem !important;
    border-top-right-radius: .35rem !important
  }

  .rounded-right {
    border-top-right-radius: .35rem !important;
    border-bottom-right-radius: .35rem !important
  }

  .rounded-bottom {
    border-bottom-right-radius: .35rem !important;
    border-bottom-left-radius: .35rem !important
  }

  .rounded-left {
    border-top-left-radius: .35rem !important;
    border-bottom-left-radius: .35rem !important
  }

  .rounded-lg {
    border-radius: .3rem !important
  }

  .rounded-circle {
    border-radius: 50% !important
  }

  .rounded-pill {
    border-radius: 50rem !important
  }

  .rounded-0 {
    border-radius: 0 !important
  }
</style>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

<style>
  html,
  body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
      'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
      sans-serif;
    background-color: #f2efe8;
  }

  #wrapper #content-wrapper {
    width: 100%;
    overflow-x: hidden;
    background-color: #f2efe8;
  }
</style>


<!-- </div> -->
<!-- </section> -->
<?php wp_footer() ?>
</body>

</html>
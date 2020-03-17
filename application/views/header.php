<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link href="<?php echo base_url('assets/css/sweetalert2.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/open-iconic/font/css/open-iconic-bootstrap.css')?>" rel="stylesheet">
    
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.js')?>"></script>
    <script src="<?php echo base_url('assets/js/fontawesome_48ef12f1ae.js')?>"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <style type="text/css">  
      /* Sticky footer styles
      -------------------------------------------------- */
      html {
        position: relative;
        min-height: 100%;
      }
      body {
        /* Margin bottom by footer height */
        margin-bottom: 60px;
      }
      .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        /* Set the fixed height of the footer here */
        height: 60px;
        line-height: 60px; /* Vertically center the text there */
        background-color: #f5f5f5;
      }


      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      body > .container {
        padding: 60px 15px 0;
      }

      .footer > .container {
        padding-right: 15px;
        padding-left: 15px;
      }
    </style>

    <script type="text/javascript">
      $( document ).ready(function() {
        if (location.href == "<?php echo base_url(); ?>") {
          $('.navbar').addClass('d-none');
        }
      });
    </script>
  
    <title>Aplikasi Penggajian</title>
  </head>

  <body>

  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="fas fa-arrow-circle-left mr-1"></i>Back to home</a>
  </nav>
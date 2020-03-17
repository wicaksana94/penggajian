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

    <style type="text/css">
        a.menu:hover { 
            text-decoration: none; 
        }
    </style>
  
    <title>Home</title>
  </head>
  <body>
    <div class="container-fluid h-100">
        <div class="px-3 py-3 pt-md-5 pb-md-4 mt-5 mx-auto text-center">
            <h3>Hai, selamat datang di Home.</h3>
        </div>
        <div class="row justify-content-center align-items-center h-100">
            <a href="<?php echo base_url('jabatan');?>" class="menu">
                <div class="d-flex flex-column bg-info text-white text-center p-3 m-3 rounded font-weight-bold">
                    <i class="far fa-star" style="font-size: 2em;"></i>Jabatan
                </div>
            </a>
            <a href="<?php echo base_url('gaji');?>" class="menu">
                <div class="d-flex flex-column bg-info text-white text-center p-3 m-3 rounded font-weight-bold">
                    <i class="fas fa-money-bill-wave" style="font-size: 2em;"></i>Gaji
                </div>
            </a>
            <a href="<?php echo base_url('karyawan');?>" class="menu">
                <div class="d-flex flex-column bg-info text-white text-center p-3 m-3 rounded font-weight-bold">
                    <i class="fas fa-users" style="font-size: 2em;"></i>Karyawan
                </div>
            </a>
            <a href="<?php echo base_url('aturan_gaji');?>" class="menu">
                <div class="d-flex flex-column bg-info text-white text-center p-3 m-3 rounded font-weight-bold">
                    <i class="fas fa-money-check" style="font-size: 2em;"></i>Aturan Gaji
                </div>
            </a>
        </div>
    </div>
</body>
</html>
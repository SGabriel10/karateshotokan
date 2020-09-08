
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="<?=base_url('/assets/css/estilos.css')?>" rel="stylesheet">
  <link href="<?=base_url('/assets/css/fake.css')?>" rel="stylesheet">
  <script type = 'text/javascript' src = "<?php echo base_url(); ?>/assets/js/fake.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/814e2acb91.js" crossorigin="anonymous"></script>
</head>
  <header>
<div class="header">
  <img src="<?php echo base_url('assets/logo.jpeg'); ?>"> 
  <img src="<?php echo base_url('assets/dojokun.jpg'); ?>" style="max-width: 100%;"> 
</div>
<?php
   include APPPATH.'Views\modules\nav-bar.php';
?> 
</header>
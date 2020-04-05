<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?=$title?></title>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top"style="padding-left: 8%; ">
  <a class="navbar-brand float-right" style="margin-left: 10px" href="<?=base_url();?>">Lamp Control</a>
  <div style="padding-right: 20px;" class="col-6"></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse float-md-right " id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="<?=base_url();?>">Home</a>
      <a class="nav-item nav-link " href="<?=base_url();?>/lamp/tambah">Add Room</a>
      <!-- <a class="nav-item nav-link " href="#">Delete Room</a> -->
      <a class="nav-link" href="<?= base_url(); ?>login/logout">Logout</a>
    </div>
  </div>
</nav>



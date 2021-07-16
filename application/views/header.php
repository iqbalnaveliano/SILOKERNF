<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <?php if(isset($title)) : ?>
  	<title><?php echo $title; ?> - lokerNF</title>
  <?php else : ?>
  	<title>Info Lowongan Kerja</title>
  <?php endif; ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="informasi lowongan pekerjaan dari greatnesia.com">
  <meta name="keywords" content="info,lowongan,pekerjaan,loker,pns,bumn,bank,it,engineer,oil,gas,tambang">

  <!-- Stylesheets -->
  <!-- Bootstrap -->
  <link href="<?php echo base_url('style/bootstrap.css'); ?>" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="<?php echo base_url('style/font-awesome.css'); ?>">
  <!-- Navigation menu -->
  <link rel="stylesheet" href="<?php echo base_url('style/ddlevelsmenu-base.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('style/ddlevelsmenu-topbar.css'); ?>">
  <!-- cSlider -->
  <link rel="stylesheet" href="<?php echo base_url('style/slider.css'); ?>">
  <!-- PrettyPhoto -->
  <link rel="stylesheet" href="<?php echo base_url('style/prettyPhoto.css'); ?>">
  <!-- Custom style -->
  <link href="<?php echo base_url('style/style.css" rel="stylesheet'); ?>">
  <!-- Responsive Bootstrap -->
  <link href="<?php echo base_url('style/bootstrap-responsive.css" rel="stylesheet'); ?>">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url('js/html5shim.js'); ?>"></script>
  <![endif]-->

</head>

<body>  
  <!-- Header starts -->
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <div class="container">
      <div class="row">
		<a href="style/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <div class="span3">

          <!-- Logo starts -->

          <div class="logo">
            <div class="logo-image">
              <!-- Image link -->
              <a href="<?php echo base_url(); ?>"><i class="icon-briefcase blue"></i></a>
            </div>
            <div class="logo-text">
              <h1><a href="<?php echo base_url(); ?>">Lowongan<span class="lightblue">Kerja</span></a></h1>
              <div class="logo-meta">lokerNF</div>
            </div>

            <div class="clearfix"></div>
          </div>

          <!-- Logo ends -->

        </div>

        <div class="span9">

          <!-- Navbar starts -->

          <div class="navi pull-right">
            <div id="ddtopmenubar" class="mattblackmenu">
              <!-- Main navigation -->
              <!-- Use the background color class in anchor tag for colorful menu -->
              <ul>
                <li><a href="<?php echo base_url(); ?>" class="borange"> <i class="icon-home"></i> Home</a></li>
                <li><a href="#" rel="ddsubmenu2" class="bred"> <i class="icon-desktop"></i> Lowongan</a>
                <!-- Sub Navigation -->
                    <ul id="ddsubmenu2" class="ddsubmenustyle">
                      <?php foreach($keahlian->result() as $kt) : ?>
                        <li><?php echo anchor('home/keahlian/'.$kt->id.'/'.url_title(strtolower($kt->nama)),$kt->nama); ?></li>
                      <?php endforeach; ?>
                    </ul>
                <!-- Sub Navigation -->
                <li><a href="https://www.elmuku.com/" class="bviolet" target="_blank"> <i class="icon-user"></i> About</a></li>
                <li><a href="https://www.elmuku.com/" class="blightblue" target="_blank"> <i class="icon-envelope-alt"></i> Contact</a></li>
              </ul>
            </div>
          </div>

          <div class="navis"></div>

          <!-- Navbar ends -->

          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </header>

  <div class="clearfix"></div>

  <!-- Header ends -->
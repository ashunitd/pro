<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<?= link_tag('frontdesign/css/bootstarp.min.css')   ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="frontdesign/js/statecity/statecity.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Welcome Seller</a>

    </div>
   <ul class="nav navbar-nav navbar-right">
        
       <li>
         <?= anchor('login/logout','Logout')   ?>
       </li>
      </ul>
    </div>
  </div>
</nav>

<fieldset>
    <legend>Laptops</legend>
          <?= anchor('Upload/laptop','Laptops')   ?>
    <br>
    <br>
     
      <legend>Printers and Scanners</legend>
     <?= anchor('Upload/laserprint','Laser Printer')   ?>
     <br>
     <?= anchor('Upload/laserprint','Inkjet Printers')   ?>
     <br>
      <?= anchor('Upload/laserprint','3D Printers ')   ?>
      <br>
      <?= anchor('Dashboard/cateogry1','Ink & Toner cartridges ')   ?>
      <br>
      <?= anchor('Dashboard/cateogry1','Scanners ')   ?>
        <br>
         <br>
     
          <legend>Computer Parts</legend>
          <?= anchor('Dashboard/cateogry1','Motherboard')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Processors')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Cabinates ')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','DVD blu-ray Drives ')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Coolers ')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Graphics Cards')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Power Supply')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','TV Tuner')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','PCI crads')   ?>
          <br>
           <br>
     
         <legend>Networking</legend>
          <?= anchor('Dashboard/cateogry1','Access Points')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Routsers')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Modems ')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Switches ')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Cables ')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Data Cards')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Wireless Adapters')   ?>

         <br>
           <br>
    <legend>Desktop and Monitors</legend>
          <?= anchor('Dashboard/cateogry1','Dektop')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Monitors')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','UPS')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Assmbled Desktops')   ?>
          <br>
           <br>
           <legend>Softwares</legend>
          <?= anchor('Dashboard/cateogry1','Antivirus')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Operting system')   ?>
          <br>
          <?= anchor('Dashboard/cateogry1','Graphics & Multimedia')   ?>
      
<?php include('footer.php'); ?>
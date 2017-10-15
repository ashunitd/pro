<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<?= link_tag('frontdesign/css/bootstarp.min.css')   ?>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Welcome Seller</a>

    </div>
   <ul class="nav navbar-nav navbar-right">
        
       <li>
         <?= anchor('Login/logout','Logout')   ?>
       </li>
      </ul>
    </div>
  </div>
</nav>

<div>
<div >
<ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/cateogry1','Computers')   ?>
       </li>
      </ul>
      </div>
      <div>
<ul class="nav navbar-nav navbar-left ">
        
       <li>
         <?= anchor('Dashboard/booksmagazines','Books & Magazines ')   ?>
       </li>
      </ul>
      </div>
      <div>
<ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/mobilestablets','Mobiles & Tablets')   ?>
       </li>
      </ul>
      </div>
        </div>
      <div>
<ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/jwelery','Jewellery')   ?>
       </li>
      </ul>
      </div>
      <div>
    <ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/watches&belts','Watches & Belts')   ?>
       </li>
      </ul>
      </div>
      <div>
<ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/faishon','Faishon')   ?>
       </li>
      </ul>
      </div>
      <br>
      <br>
      <br>
      <div >
<ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/footwear','Footwears')   ?>
       </li>
      </ul>
      </div>
      <div>
<ul class="nav navbar-nav navbar-left ">
        
       <li>
         <?= anchor('Dashboard/electronicappliance','Electronic Appliance')   ?>
       </li>
      </ul>
      </div>
      <div>
      <ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/homekitechen','Home & Kitchen')   ?>
       </li>
      </ul>
      </div>
        </div>
      <div>
<ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/kids','Kids')   ?>
       </li>
      </ul>
      </div>
      <div>
    <ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/mtaccessories ','Mobile & Laptop Accessories')   ?>
       </li>
      </ul>
      </div>
      <br>
      <br>
      <br>
      <div>
      <ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/automobiles','Automobiles')   ?>
       </li>
      </ul>
      </div>
      <div>
      <ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/restaurants','Restaurants')   ?>
       </li>
      </ul>
      </div>
      </div>
      <div>
      <ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/sports','Sports')   ?>
       </li>
      </ul>
      </div>
      <div>
      <ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/cameras ','  Cameras')   ?>
       </li>
      </ul>
      </div>
      <div>
      <ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/bags','Bags')   ?>
       </li>
      </ul>
      </div>
      <div>
      <ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/beautyproducts','Beauty Products')   ?>
       </li>
      </ul>
      </div>
      <div>
      <ul class="nav navbar-nav navbar-left">
        
       <li>
         <?= anchor('Dashboard/gifts&cards','Gifts & Cards')   ?>
       </li>
      </ul>
      </div>
<?php include('footer.php'); ?>
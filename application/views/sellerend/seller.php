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
         <?= anchor('login/logout','Logout')   ?>
       </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Welcome Seller</h1>

<?php include('footer.php'); ?>
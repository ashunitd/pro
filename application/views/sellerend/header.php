
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<?= link_tag('frontdesign/css/bootstarp.min.css')   ?>
</head>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Welcome Seller</a>

    </div>
   <ul class="nav navbar-nav navbar-right">
   <li>
        <?= anchor('Login','Login') ?>
        <?= anchor('Signup','Signup') ?>
        </li>
        <!--<button type="submit" class="btn btn-danger">Login</button>-->
        <!--button type="submit" class="btn btn-default">Signup</button>-->
      </ul>
    </div>
  </div>
</nav>
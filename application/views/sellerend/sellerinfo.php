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
         
       </li>
      </ul>
    </div>
  </div>
</nav>
<?php
	$options = array(
		    ""         => 'Select your State',
                        $countryDrop

);
$city =array(
            ""=>"Select Your City"
  );


?>
<?php echo form_open('Sellerinfo/s_info',['class'=>'form-horizontal']);?>
<?php echo form_hidden('id',$this->session->userdata('id'));?>
<!--<?php //echo form_hidden(['seller_info_id'=>'1']);?>-->
<fieldset>
    <legend>Seller Information</legend>

<div class="container">

    <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputShopName" class="col-lg-2 control-label">Store Name</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'shopname','class'=>'form-control','placeholder'=>'Store Name','value'=>set_value('shopname')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('shopname'); ?>
      </div>
      </div>
      <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputshopLehgalName" class="col-lg-2 control-label">Registred Store Name</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'shoplegalname','class'=>'form-control','placeholder'=>'Registred Store Name','value'=>set_value('shoplegalname')]);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-6"  >
         <?php echo form_error('shoplegalname'); ?>
         </div>
         </div>
         <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputPhoneNumber" class="col-lg-2 control-label">Contact Number</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'phonenumber','class'=>'form-control','placeholder'=>'Contact Number','value'=>set_value('phonenumber')]);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-4"  >
         <?php echo form_error('phonenumber'); ?>
         </div>
         </div>
    <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email Address</label>
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email Address','value'=>set_value('email')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('email'); ?>
      </div>
      </div>
      <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputPinCode" class="col-lg-2 control-label">Pin Code</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'pincode','class'=>'form-control','placeholder'=>'Pin Code','value'=>set_value('pincode')]);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-6"  >
         <?php echo form_error('pincode'); ?>
         </div>
         </div>
          <div class="row">
    	<div class="col-lg-6"  >
          <div class="form-group">
      <label for="textAddress" class="col-lg-2 control-label">Store Address</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'address','class'=>'form-control','placeholder'=>'Store Address','value'=>set_value('address')]);  ?>
        </div>
      </div>
		<?php echo form_error('address'); ?>
      </div>
    </div>
    <div class="row">
    	<div class="col-lg-6"  >
          <div class="form-group">
      <label for="textAddress" class="col-lg-2 control-label">Select State</label>
      <div class="col-lg-10">
    <!--<?php //echo form_dropdown(['name'=>'states',$options,'class'=>'form-control','value'=> set_value('selectstate')]);?>-->
 <?php echo form_dropdown('states',$options,['class'=>'form-control']);?>

      </div>
    </div>
    <?php echo form_error('states'); ?>
      </div>
    </div>
     <div class="row">
      <div class="col-lg-6"  >
          <div class="form-group">
      <label for="cityDrp" class="col-lg-2 control-label">Select City</label>
      <div class="col-lg-10">
    <!--<?php //echo form_dropdown(['name'=>'states',$options,'class'=>'form-control','value'=> set_value('selectstate')]);?>-->
  <select name="cityDrp" id="cityDrp" class="form-control">  
             <option value="">Select</option>  
          </select> 


        </div>
      </div>
    <?php echo form_error('cityDrp'); ?>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputPanNo" class="col-lg-2 control-label">PAN NO</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'panno','class'=>'form-control','placeholder'=>'Phone','value'=>set_value('panno')]);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-6"  >
         <?php echo form_error('panno'); ?>
         </div>
         </div>
         <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputNameonPan" class="col-lg-2 control-label">Name on PAN Card</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'nameonpan','class'=>'form-control','placeholder'=>'Phone','value'=>set_value('nameonpan')]);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-6"  >
         <?php echo form_error('nameonpan'); ?>
         </div>
         </div>
          <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputVATCSTNO" class="col-lg-2 control-label">VAT/CST NO.</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'vatcstno','class'=>'form-control','placeholder'=>'Phone','value'=>set_value('vatcstno')]);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-6"  >
         <?php echo form_error('vatcstno'); ?>
         </div>
         </div>
        <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputTINNO" class="col-lg-2 control-label">TIN NO</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'tinno','class'=>'form-control','placeholder'=>'Phone','value'=>set_value('tinno')]);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-6"  >
         <?php echo form_error('tinno'); ?>
         </div>
         </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      <?php echo form_submit('submit','Save',['class'=>'btn btn-primary']);?>
       <!--<button type="submit" class="btn btn-primary">Login</button>-->
      </div>
    </div>
  </fieldset>
</form>
</div>
<?php include('footer.php'); ?>
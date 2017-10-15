<?php include('header.php'); ?>
<div class="container">

<?php echo form_open('Signup/seller_signup',['class'=>'form-horizontal']);?>
<fieldset>
    <legend>Seller Signup</legend>
    <?php if( $error =$this->session->flashdata('feedback')): ?>
    <div class="row">
    <div class="col-lg-6">
    <div class="alert alert-dismissible alert-warning">
        <?= $error; ?>
    </div>
    </div>
    </div>
  <?php endif; ?>
    <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Name','value'=>set_value('name')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('name'); ?>
      </div>
      </div>
      <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-6"  >
         <?php echo form_error('username'); ?>
         </div>
         </div>
         <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email')]);  ?>
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
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password','value'=>set_value('password')]);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-4"  >
         <?php echo form_error('password'); ?>
         </div>
         </div>
    <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputRepassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10"  >
      <?php echo form_password(['name'=>'repassword','class'=>'form-control','placeholder'=>'Retype Password','value'=>set_value('repassword')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('repassword'); ?>
      </div>
      </div>
      <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputPhone" class="col-lg-2 control-label">Phone</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'phone','class'=>'form-control','placeholder'=>'Phone','value'=>set_value('phone')]);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-6"  >
         <?php echo form_error('phone'); ?>
         </div>
         </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      <?php echo form_submit('submit','Signup',['class'=>'btn btn-primary']);?>
       <!--<button type="submit" class="btn btn-primary">Login</button>-->
      </div>
    </div>
  </fieldset>
</form>
</div>

<?php include('footer.php'); ?>
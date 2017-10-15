<?php include('headerview.php'); ?>
<?php 
	
$negotiable =array(
            "0"=>"Price Negotiable",
            "1"=>"Yes",
            "2"=>"No"
  						);
						?>
<div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Product Title</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'producttitle','class'=>'form-control','placeholder'=>'Product Title','value'=>set_value('producttitle')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('producttitle'); ?>
      </div>
      </div>
      <br>
      <br>
      <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputDescription" class="col-lg-2 control-label">Description</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'description','class'=>'form-control','placeholder'=>'Description','value'=>set_value('description')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       </div>
       </div>
      </div>
		<div class="col-lg-6"  >
       <?php echo form_error('description'); ?>
      </div>
      </div>
      <br>
      <br>
      <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Quantity</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'quantity','class'=>'form-control','placeholder'=>'Quantity','value'=>set_value('quantity')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('quantity'); ?>
      </div>
      </div>
     <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Brand</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'brand','class'=>'form-control','placeholder'=>'Enter Laptop Brand','value'=>set_value('brand')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('brand'); ?>
      </div>
      </div>
<div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Hard Disk Capacity</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'hdd','class'=>'form-control','placeholder'=>'Hard Disk i. e. 1TB','value'=>set_value('hdd')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('hdd'); ?>
      </div>
      </div>
    <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Processor</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'processor','class'=>'form-control','placeholder'=>'Processor','value'=>set_value('processor')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('processor'); ?>
      </div>
      </div>
    <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Enter Ram Size</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'ram','class'=>'form-control','placeholder'=>'RAM Size i.e. 2GB','value'=>set_value('ram')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('ram'); ?>
      </div>
      </div>
    	<div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Laptop Type</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'laptoptype','class'=>'form-control','placeholder'=>'Laptop Type','value'=>set_value('laptoptype')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('laptoptype'); ?>
      </div>
      </div>
   <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Graphics Memory</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'graphics','class'=>'form-control','placeholder'=>'Graphics Memory','value'=>set_value('graphics')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('graphics'); ?>
      </div>
      </div>
    	 <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Screen Size</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'screensize','class'=>'form-control','placeholder'=>'Screen Size','value'=>set_value('screensize')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('screensize'); ?>
      </div>
      </div>
     <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Warranty</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'warranty','class'=>'form-control','placeholder'=>'Warranty','value'=>set_value('warranty')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('warranty'); ?>
      </div>
      </div>
    	 <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Enter Warranty Duration</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'warrantyduration','class'=>'form-control','placeholder'=>'Warranty Duration','value'=>set_value('warrantyduration')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('warrantyduration'); ?>
      </div>
      </div>
     <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputQuantity" class="col-lg-2 control-label">Enter Graphics Brand</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'graphicsbrand','class'=>'form-control','placeholder'=>'Graphics Brand','value'=>set_value('graphicsbrand')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
       <div class="col-lg-6"  >
       <?php echo form_error(''); ?>
      </div>
      </div>
    <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Graphics Processor Brand</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'gpbrand','class'=>'form-control','placeholder'=>'Graphics Processor Brand','value'=>set_value('gpbrand')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('gpbrand'); ?>
      </div>
      </div>
    <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Model Name/Model Number</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'modelname','class'=>'form-control','placeholder'=>'Model Name/Model Number','value'=>set_value('modelname')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('modelname'); ?>
      </div>
      </div>
      <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">MRP</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'mrp','class'=>'form-control','placeholder'=>'MRP','value'=>set_value('mrp')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('mrp'); ?>
      </div>
      </div>
      <div class="col-lg-6"  >
          <div class="form-group">
      <label for="drpHDD" class="col-lg-2 control-label">Price Negotiable</label>
      <div class="col-lg-10">
    <!--<?php //echo form_dropdown(['name'=>'states',$options,'class'=>'form-control','value'=> set_value('selectstate')]);?>-->
 			<?php echo form_dropdown('negotiable',$negotiable,'class="form-control"');?>

      </div>
    </div>
    <?php echo form_error('negotiable'); ?>
      </div>
    </div>
          </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      <?php echo form_submit('submit','Save',['class'=>'btn btn-primary']);?>
       </div>
    </div>
<?php include('footerview.php'); ?>

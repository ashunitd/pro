<?php include('headerview.php'); ?>
<?php 
	
$negotiable =array(
            "0"=>"Price Negotiable",
            "1"=>"Yes",
            "2"=>"No"
  						);
$wireless =array(
            "0"=>"Wireless Enabled",
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
      <label for="inputprintMethod" class="col-lg-2 control-label">Enter Printing Method</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'printmethod','class'=>'form-control','placeholder'=>'Enter Printing Method i.e. Dot Matrix','value'=>set_value('printmethod')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('printmethod'); ?>
      </div>
      </div>
       <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputprintType" class="col-lg-2 control-label">Enter Printer Type</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'printtype','class'=>'form-control','placeholder'=>'Enter Printing Type','value'=>set_value('printtype')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('printtype'); ?>
      </div>
      </div>
       <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputprintFunctions" class="col-lg-2 control-label">Enter Printer Functions</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'printfunctions','class'=>'form-control','placeholder'=>'Enter Printing Functions i.e Fax,Print Etc','value'=>set_value('printfunctons')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('printfunctions'); ?>
      </div>
      </div>
       <div class="row">
      <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputprintOutput" class="col-lg-2 control-label">Enter Output Type</label>
      
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'printoutputtype','class'=>'form-control','placeholder'=>'Enter Printing Output i.e Color','value'=>set_value('printoutputtype')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('printoutputtype'); ?>
      </div>
      </div>
      <div class="col-lg-6"  >
          <div class="form-group">
      <label for="drpWireless" class="col-lg-2 control-label">Wireless</label>
      <div class="col-lg-10">
    <!--<?php //echo form_dropdown(['name'=>'states',$options,'class'=>'form-control','value'=> set_value('selectstate')]);?>-->
      <?php echo form_dropdown('wireless',$wireless,'class="form-control"');?>

      </div>
    </div>
    <?php echo form_error('wireless'); ?>
      </div>
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

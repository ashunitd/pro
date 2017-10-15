     !DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="frontdesign/js/statecity/statecity.js"></script>
  </head>
     <?php echo form_open('control_form/add_all'); ?>
      <label for="f_state">State<span class="red">*</span></label>
        <select id="f_state" name="f_state">
            <option value=""></option>
            <?php
            foreach($states as $state){
                echo '<option value="' . $state->id . '">' . $state->state_name . '</option>';
            }
            ?>
        </select>
        <label for="f_city">City<span class="red">*</span></label>
        <!--this will be filled based on the tree selection above-->
        <select id="f_city" name="f_city" id="f_city_label">
            <option value=""></option>
        </select>
        <label for="f_membername">Member Name<span class="red">*</span></label>
        <!--<input type="text" name="f_membername"/>-->
<?php echo form_close(); ?>

    <html >  
       <head>  
          <meta http-equiv="Content-Type" content="text/html;  
          charset=utf-8" />  
          <title>cascade drops example</title>  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script>
            $(document). ready(function() {
              $('#contriesDrp') .change(function){
                var s_id=$(this).val();
                $.ajax({
                  url:"Countries/buildDropCities",
                  method:"POST",
                  data:{s_id:state_id},
                  dataType:"text",
                  success:function(data)
                  {
                    $('#cityDrp').output(data);

                  }
});
                });
            });




            </script>
          </head>  
       <body>   
          <!--country dropdown-->  
          <?php echo form_dropdown('countriesDrp',  
          $countryDrop,'class="required" id="countriesDrp"'); ?>  
          <br />  
          <br />  
          <!--city dropdown-->  
          
          <select name="cityDrp" id="cityDrp">  
             <option value="">Select</option>  
          </select>  
          <br />  
       </body>  
    </html>   
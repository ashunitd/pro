$('#f_city, #f_city_label').hide();
$('#f_state').change(function(){
    var state_id = $('#f_state').val();
    if (state_id != ""){
        var post_url = "/index.php/control_form/get_cities/" + state_id;
        $.ajax({
            type: "POST",
            url: post_url,
            success: function(cities) //we're calling the response json array 'cities'
            {
                $('#f_city').empty();
                $('#f_city, #f_city_label').show();
                $.each(cities,function(id,city)
                {
                    var opt = $('<option />'); // here we're creating a new select option for each group
                    opt.val(id);
                    opt.text(city);
                    $('#f_city').append(opt);
                });
            } //end success
         }); //end AJAX
    } else {
        $('#f_city').empty();
        $('#f_city, #f_city_label').hide();
    }//end if
}); //end change


$("#miformulario").submit(function(e) {

e.preventDefault(); // avoid to execute the actual submit of the form.

var form = $(this);
var url = $(this).attr("action");

$.ajax({
       type: "POST",
       url: url,
       data: $(this).serialize(), // serializes the form's elements.
       success: function(data)
       {
        console.log(data)
       }
     });


});
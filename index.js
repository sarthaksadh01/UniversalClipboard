$('#data').on('input',function(e){

    var url = $('#url').val();
    var data = $('#data').val();



      $.ajax({
                     type:"POST",
                     url :"functions.php",
                     data: {
                       save:"yes",
                       url:url,
                       data:data

                     },
                     success : function(msg){
                       $('#save').html(msg);
                       $('#save').show();
                       if(msg=="Saved..")
                       $('#save').delay(2000).fadeOut('slow');

                     }
                 });

});

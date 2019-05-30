<script type="text/javascript" >
    $(document).ready( function(){ 
/* set the click event handler of a button */
    $('input').keyup(function(){ 
      /*get the given number in the textbox*/
      var n = document.getElementById("inputtext").value; 
      /*set a variable for displaying the result*/ 
 
              if(n==''){ 
                $("#instant-search-resault ").html('')
               }else{
                $("#output ").hide();
                $("#output").fadeIn(900,0); 
                   $.ajax({
                     type: "POST",                    
                      url: "/assets/ajax/ajax-search.php",
				dataType: "text", //expect html to be returned  
                     data: {
                         name:n
                     },
                     success: function(data) { 
                         $("#instant-search-resault").html(data);
                     }
                 }); 

               } 
    })
  }) 

</script>

$("#form_falaconosco").submit(function(e){
    e.preventDefault();
   
      const form = $(this);
      const action = form.attr("action");
      const method = form.attr("method");
      const data = form.serialize();
    console.log(data);
 

   });

     
   $.ajax({
   
    url:action,
    method:method,
    data:data,
    dataType:'json',

 }).done(function(result){
     console.log(result);
 });*/
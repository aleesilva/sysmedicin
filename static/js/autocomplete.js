//função Autocomplete
 $(document).ready(function(){
  $("#search").autocomplete({
     source: "paciente/search" 
   });
 });
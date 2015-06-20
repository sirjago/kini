


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<Title>Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> 
</head>
<body>

@include ('layouts.partials.nav')
<div class="container">
@include ('flash::message')	

@yield('content')





</div>




<script src="//code.jquery.com/jquery.js">

  

</script>
<script >



    

</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script >


jQuery(document).ready(function($){
   $.get("{{ url('api/selected')}}",  function(data){var toto =data.municipio; document.getElementById("itemselect").value = toto;  });
    $('#userselect').change(function(){
      $.get("{{ url('api/dropdown')}}", 
        { option: $(this).val() }, 
        function(data) {
          var model = $('#itemselect');
          model.empty();
 
          $.each(data, function(index, element) {
               //   model.append("<option value='1'>" + municipio + "</option>");
                  model.append("<option value='"+ index +"'>" + element + "</option>")
                  // model.append("<option value='1'>" + element + "</option>")
              });
         
        });
 $.get("{{ url('api/selected')}}",  function(data){var toto =data.municipio; document.getElementById("itemselect").value = toto;  });
    });

  });
</script>






<script> $('#flash-overlay-modal').modal();</script>

</body>
</html>

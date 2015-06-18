
Jquery(document).ready(function($){
        $('#itemselect').change(function(){
                $.get("{{ url('myurl')}}", 
                { option: $(this).val() }, 
                function(data) {

                    var item = $('#itemselect');
                    item.empty();

                    $.each(data, function(key, value) {
                        item.append("<option value='"+ key +"'>" + value + "</option>");
                    });

                });
        });

 });

           
       


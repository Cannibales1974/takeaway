$(document).ready(function() {
    var debug=true;
    $.ajax({
      url: '../php/getListPlatos.php',
      type: 'GET',
      dataType: 'json',
      success : function(result){
        console.log(result);
        var tbl_body = "";
        //Recorrer el array de la query que manda el php
        $.each(result.query, function() {
            if (debug) console.log("Pintando");
            if (debug) console.log(result.cats);

            var tbl_row = "";
            $.each(this, function(campo , valor) {
              if(campo=="foto") {
                tbl_row += "<td>"
                        +"<img class='z-depth-3' src='../"
                        +valor
                        +"' width='90px'>"
                        +"</td>";                
              }
              else {
                tbl_row += "<td>"+valor+"</td>";
              }              
             
            });            
            tbl_body += "<tr>"+tbl_row+"</tr>";
        });
        if (debug) console.log(tbl_body);
        $("#listado tbody").html(tbl_body);       
      },
      error: function(result){
        alert("errorrrrrr!!!");
      }
    });    
});     
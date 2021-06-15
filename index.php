<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
    <link href="estilo.css"  rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    

</head>
<body  >
<div class="cuadro container">
<header class="row"> 
    <div class="col-xm-12 ">
            <br> 
            <h1 class="Tiprin">TEST</h1>  
            <br>            
    </div> 
 </header> 
<form method="post" id="form" onsubmit="return false">
   
    <div class="row ">
        <div class="form-group col-md-6">
                <label for="cod">CODIGO:</label>
                <input type="text" class="form-control"  id="cod" name="cod" 
                placeholder=""/>               
                <label for="name">NOMBRE:</label> 
                <input type="text" class="form-control" id="name" name="name"/>  
            </div> 
         <div class="form-group col-md-6">
                <label for="precio">PRECIO COSTO:</label> 
                <input type="number" min="0" step="any" class="form-control" id="precio" name="precio" 
                 placeholder="Solo se admiten números"/>   
                <label for="cantidad">CANTIDAD DISPONIBLE:</label> 
                <input type="number" min="0" class="form-control" id="cantidad" name="cantidad"
                placeholder="Solo se admiten números"/>   
             </div>          
                  
     </div>
     <br>
     <div class="row">   
     <div class="form-group col-md-6"></div>
     <div class="form-group col-md-6">     
     <a class="btn btn-primary"  href="index.php">Cancelar</a>	
     <button class="btn btn-primary" id="guardar">Guardar</button>
     <br>
     <br>
     </div>

     <div id="estado" style="display:none;"></div>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>


  <script>
    $(document).on('click', '#guardar', function(e){             
    	e.preventDefault();
    	var reg1 = $('#cod').val(),       
    	    reg2 = $('#name').val();
            reg3 = $('#precio').val();
            reg4 = $('#cantidad').val();   
            if(reg1 === '' || reg2 === ''|| reg3 === ''|| reg4 === ''){
                alert("Un campo esta vacío");
                return false;
            }else{
                }
                                    
          
    	$.ajax({
    		url: 'insertar.php', // funcion para insertar datos
    		method: 'POST',    	
            data: { reg1: reg1, reg2: reg2,reg3: reg3,reg4: reg4 },
              
    		beforeSend: function(){
    			$('#estado').css('display','block');
    			$('#estado p').html('Guardando datos...');
    		},
    		success: function(r){
    			if (r == '200') { // Si el php anterior, imprimió 200
    				$('#estado').html('<hr><p class="text-success">Datos guardados correctamente.</p><hr>');
    			} else {
    				$('#estado').html('<hr><p  class="text-danger">Error al guardar los datos.</p><hr>');
    			}
    		}
    	});
    
     $("form select").each(function() { this.selectedIndex = 0 });
     $("form input[type=text] , input[type=number] ").each(function() { this.value = '' });

    });
  </script>

</body>
</html>

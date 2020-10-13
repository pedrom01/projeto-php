<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>entrada de dados do formulario</title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body  class="cordefundo">
     <center>
        <h1>cadastro de pessoas</h1><hr/>
        <table border="1" class="cortabela1">
         
        <form method="post" action="recebe1.php">
               <tr>
              <td> nome:</td> <td> <input type="text" name="txtnome" size="40" ></td>
            </tr>
             <tr>
                 <td>senha:</td> <td> <input type="date" name="txtdatanasc"> </td>
            </tr>
          
             
                       <td></td> <td><input type="submit" value="Enviar">
                                     <input type="reset" value="cancelar"></td>
                  </tr>
         
              
           
        </form>
        </table>
     </center>
    </body>
</html>

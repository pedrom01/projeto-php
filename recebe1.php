<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>recebe dados do formulário</title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
    </head>
   
      <body class="cordefundo">
          <center>
          <h1>recebe o  cadastro das pessoas</h1><hr/>
  
           <?php
    
 
        $nome= $_POST["txtnome"];
              $senha= $_POST["txtsenha"];
     ?>
        <table border="1" class=cortabela1>
		
            <tr>
                <Td>   <?php echo "nome:";?></Td><td><?php echo "$nome <br>"; ?> </td>
                
            </tr>
            <tr>
                <Td><?php echo "senha: ";?></Td><td><?php echo "$senha";?> </td>
                
            </tr>
           
     
     
       
            </table>
      </center>
    </body>
</html>

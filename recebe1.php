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
              $datanasc= $_POST["txtdatanasc"];
               $sexo= $_POST["txtsexo"];
              $escolaridade= $_POST["txtescolaridade"];
     ?>
        <table border="1" class=cortabela>
            <tr>
                <Td>   <?php echo "Nome:";?></Td><td><?php echo "$nome <br>"; ?> </td>
                
            </tr>
            <tr>
                <Td><?php echo "senha: ";?></Td><td><?php echo "$datanasc";?> </td>
                
            </tr>
           
     
     
       
            </table>
      </center>
    </body>
</html>

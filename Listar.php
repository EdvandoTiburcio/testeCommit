<?php
// seria para cria o repertorio que receberia o sql mas não conclui.
include "conexao.php";
?>
<html>
    <head>
        <meta http-equiv="Content-type" content="txt/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            @import url("/css/main.css");
        </style>
       
    </head>
    <body>
        <div id="Cadastro">
            <fieldset>
                <legenda>conectMYSQL</legenda>
                <ul>
                    <?php>
                    $SQL="SELECT*FROM NEGOCIO";
                    $query =mysql_qyery($SQL, $conn);
                    while($exibir=mysql_query($query)){
                     ?>
                       <li><?php echo $exibir[""]?></li>
                    <?php
                    
                    ?>
                </ul>
            </fieldset>
                
        </div>  
              
            
    </body>
</html>

<?php
// criando uma conexão com  conect server
include("../conexao.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
     
        <title></title>
        <style>
            
            @import url("../css/main.css");
        </style>
        <!-- validando campos<!-- Este é um comentário --> -->
        <script type="txt/javascript">
            function validar(){
                var msg="";
                
                if(document.getElementByID("idMercadoria").value.legth <=0 {
                    msg += "Preencha o Código da mercadoria .\n ";
            }
                if(document.getElementByID("nome").value.legth <=0 {
                    msg += "Digite o nome da mercadoria .\n ";
            }        
                 if(msg != ""){
                     
                 
                     alert(msg);
                     return false;
                  }   
                }
            function insertfomatURL(field).value={
                
            }
           
        </script>
    </head>
    <body>
        <div id="Cadastro">
            
        <!-- criando os campos podendo muda-los para qualquer posição -->
        
            <form name="frmNegocio"method="GET"action="index.php" onsubmit="return validar();">
                
                <!-- aplicando css -->
                
            <fieldset>
            <legend>Dados do Produto</legend>
        
            <label for ="idMercadoria"> Código da Mercadoria:</label>
            <br/>
            <input type="number" name="txtId" id="idMercadoria" required="required"placeholder="Digite o código"value="Numero"/>
            <br/><br/>
            <label for ="Nome"> Tipo do Produto</label>
            <br/>
            <input type="txt" name="txtId" id="nome" required="required"placeholder="Digite o nome da mercadoria"/>
            <br/><br/>
           <label for ="Escolha a mercadoria">  Mercadoria:</label>
           <select name="escolha"id="escolha">
             
                <option value="0">---Selecione---</option>
                <option value="CO">Console</option>
                <option value="OP">Jogos</option>
                <option value="AS">Acessório</option>
              
            </select>
            
            
            <br/><br/>
            <label for ="idQuantidade"> Digite a quantidade:</label>
            <br/>
            <input type="number" name="txtId" qd="idQuantidade" requiredd="required"placeholder="Digite a quantidade"value="Numero"/>
            <br/><br/>
            <label for ="Tipo de Negócio">  Tipo de Negócio:</label>
             <select name="selecione"id="selecione">
                 
             <!-- aqui poderia ser qualquer opçao estes foram só para ter uma idéia -->
             
                <option value="0">---Selecione---</option>
                <option value="CO">Comprar</option>
                <option value="VR">Vender</option>
              
            </select>
            <br/> <br/>
            <label for ="idValor"> Valor da Mercadoria:</label>
            <br/>
            <input type="number" name="txtId" id="idValor" required="required"placeholder="Digite o valor"value="Numero"/>
            <br/><br/>
            <input type="submit"valeue="Confirmar"/>
        
            <input type="reset"valeue="Limpar"/>
            
            </fieldset>
        </div>          
        </form>
    </body>
</html>

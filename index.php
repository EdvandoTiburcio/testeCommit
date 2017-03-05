<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            @import url("main.css");
        </style>
    </head>
    <body>
        <div id="Cadastro">
        
        <form name="frmNegocio"method="GET"action="index.php">
            <fieldset>
            <legend>Dados do Produto</legend>
        
            <label for ="idMercadoria"> Código da Mercadoria:</label>
            <br/>
            <input type="number" name="txtId" id="idMercadoria" required="required"placeholder="Digite o id da Mercadoria"value="Numero"/>
            <br/><br/>
            <label for ="Nome"> Tipo do Produto</label>
            <br/>
            <input type="txt" name="txtId" id="id" required="required"placeholder="Digite o nome da mercadoria"/>
            <br/><br/>
           <label for ="escolha"> Código da Mercadoria:</label>
            
            <br/><br/>
            <select name="escolha"id="escolha">
             
                <option value="0">---Selecione---</option>
                <option value="CO">Comprar</option>
                <option value="VR">Vender</option>
                
            </select>
            <br/>
            <input type="submit"valeue="Confirmar"/>
            
            <textarea name="txtMsg" rows="5" cols="30">
                
            </textarea>
            <input type="reset"valeue="Limpar"/>
            </fieldset>
        </div>          
        </form>
    </body>
</html>

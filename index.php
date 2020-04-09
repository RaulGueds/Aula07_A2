<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
        <link rel="stylesheet" type="text/css" href="Estilo.css">
    </head>
    
    <body>
        <h2> <u>Cadastro de Produtos</u> </h2> <br>
        <div id="mainDiv">
            <form method="GET" action="store.php" enctype="multipart/form-data">
                
                <label>Nome do Produto:</label> <br>
                <input type="text" name="txtNome" id="txtNome"> <br>
                
                <label>Preço:</label> <br>
                <input type="number" name="txtValor"> <br>
                
                <label>Categoria:</label> <br>
                <select name="Categoria">
                    <option value="0">Selecione...</option>
                </select><br>
                
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <hr>
                
                <label>Quantidade:</label> <br>
                <input type="number" name="txtQuantidade"> <br>
                
                <label>Data de validade:</label> <br>
                <input type="date" name="validade"> <br>
                
                <label>Foto do Produto:</label> <br>
                <input type="file" name="fotoProduto">
                
            </form>
        </div>
        
        <script src="Script.php"></script>
    </body>
</html>

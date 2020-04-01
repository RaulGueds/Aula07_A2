<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
        <link rel="stylesheet" type="text/css" href="CSS_File">
    </head>
    
    <body>
        <div id="MainDiv">
            <form method="GET" action="store.php" enctype="multipart/form-data">
                
                <label>Nome do Produto:</label>
                <input type="text" name="txtNome"> <br>
                
                <label>Preço:</label>
                <input type="number" name="txtValor"> <br>
                
                <label>Categoria:</label>
                <select name="Categoria">
                    <option value="0">Selecione...</option>
                </select>
                
                <label>Quantidade:</label>
                <input type="number" name="txtQuantidade"> <br>
                
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <hr>
                <label>Data de validade:</label>
                <input type="date" name="validade"> <br>
                
                <label>Foto do Produto:</label>
                <input type="file" name="fotoProduto">
                
            </form>
        </div>
        
        <script src="Script.php"></script>
    </body>
</html>

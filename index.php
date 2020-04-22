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
            <form method="POST" action="store.php" onsubmit="return validar()" enctype="multipart/form-data">
                
                <label>Nome do Produto:</label> <br>
                <input type="text" name="txtNome" id="txtNome"> <br>
                
                <label>Preço:</label> <br>
                <input type="number" name="txtPreco" id="txtPreco"> <br>
                
                <label>Categoria:</label> <br>
                <select name="Categoria" id="categoriaSelect">
                    <option value="0">Selecione...</option>
                    <optgroup label="-------------">
                        <option value="1">Alimentos</option>
                        <option value="2">Higiene Pessoal</option>
                        <option value="3">Produto de Limpeza</option>
                        <option value="4">Outros</option>
                    </optgroup>
                </select><br>
                
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <hr>
                
                <label>Quantidade:</label> <br>
                <input type="number" name="txtQuantidade" id="txtQuantidade"> <br>
                
                <label>Data de validade:</label> <br>
                <input type="date" name="validade" id="txtValidade"> <br>
                
                <label>Foto do Produto:</label> <br>
                <input type="file" name="fotoProduto" id="fotoProduto">
                
                <input type="submit" value="Cadastrar">
            </form>
        </div>
        
        <script src="Script.js"></script>
    </body>
</html>

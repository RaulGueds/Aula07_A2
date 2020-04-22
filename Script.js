function validar(){
    var nomeInput = document.getElementById("txtNome");
    var nome = nomeInput.value;
    
    var precoInput = document.getElementById("txtPreco")
    var preco = precoInput.value;
    
    var ctgInput = document.getElementById("categoriaSelect");
    var categoria = ctgInput.value;
    
    var qtdInput = document.getElementById("txtQuantidade");
    var quantidade = qtdInput.value;

    var dataInput = document.getElementById("txtValidade"); 
    var validade = Date.parse(dataInput.value);
    var dataSistema = Date.now();
    var dataDiff = (validade - dataSistema)/(1000 * 60 * 60 * 24);
    
    var fileInput = document.getElementById("fotoProduto");
    var foto = fileInput.value;

    if(nome.length > 1 && categoria > 0 && foto.length > 0){
        
        if(preco > 0 && quantidade > 0){
            
            if(dataDiff >= 7){
                return true;
            }else{
                alert("Só é permitido o cadastro de produtos com sete ou mais dias para o fim de sua validade");
                return false;
            }
            
        }else{
            alert("O Preço e a Quantidade precisam ser maiores que 0");
            return false;
        }
        
    }else{
        alert("É preciso preencher / selecionar todos os campos.");
        return false;
    }
}

<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
$servidor="localhost";
$usuario="root";
$senha="";
$nomebanco="3daw";

$conn = new mysqli($servidor,$usuario,$senha,$nomebanco) or die(" conexão com erro: ".$conn->connect_error);

$sql = "DELETE FROM PROD WHERE cod='$cod'";
 
 
if($conn -> query($sql)==true){
    echo json_encode("Produto excluido com sucesso");}
    else{ echo json_encode("Erro na exclusão");}}

    
?>

<html>
</head>
<body>
<h3>Deletar produto</h3>
<form action="" method="post" name="Prod" id="formProd">
    Informw o codigo de barras do produto: <input type="text" name="cod"> <br><br>
    
    Produtos:  <select id="nome"></select> <br><br>
    <input type="button" name="op" value="deletarProd" onclick="deleteProd()">
</form>
<br><br><br>
<a href='Av2Home.html'>Clique aqui para ir para a pagina principal</a><br>

<p id="resposta"></p>
</body>
</html>
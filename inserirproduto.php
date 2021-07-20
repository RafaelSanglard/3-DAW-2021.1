<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
$servidor="localhost";
$usuario="root";
$senha="";
$nomebanco="3daw";

$id=NULL;
$cod=$_GET["cod"];
$nome=$_GET["nome"];
$fab=$_GET["fab"];
$cat=$_GET["cat"];
$tipo=$_GET["tipo"];
$preço=$_GET["preço"];
$qtdestoque=$_GET["qtdestoque"];
$peso=$_GET["peso"];
$desc=$_GET["desc"];
$dtinc=$_GET["dtinc"];
$atv=$_GET["atv"];






$conn = new mysqli($servidor,$usuario,$senha,$nomebanco) or die(" conexão com erro: ".$conn->connect_error);

$sql = "INSERT INTO PROD('id', 'cod', 'nome', 'fab', 'cat', 'tipo', 'preço', 'qtdestoque', 'peso', 'desc', 'dtinc','atv') VALUES('$id', '$cod', '$nome', '$fab', '$cat', '$tipo', '$preço', '$qtdestoque', '$peso', '$desc', '$dtinc','$atv')";
if($conn -> query($sql)==true){
    
echo json_encode("Produto inserido com sucesso");}
else{ echo json_encode("insert error");}
}

?>
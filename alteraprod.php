<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
$servidor="localhost";
$usuario="root";
$senha="";
$nomebanco="3daw";

$id=$_GET["id"];
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
    $sql = "UPDATE  PROD SET '$id', '$cod', '$nome', '$fab', '$cat', '$tipo', '$preço', '$qtdestoque', '$peso', '$desc', '$dtinc','$atv' where id = '$id'";
    if($conn -> query($sql)==true){
        echo json_encode("Produto alterado com sucesso");}
        else{ echo json_encode("Erro no update");}
        }
    

      

?>
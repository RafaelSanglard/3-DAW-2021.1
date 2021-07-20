<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
$servidor="localhost";
$usuario="root";
$senha="";
$nomebanco="3daw";
$conn = new mysqli($servidor,$usuario,$senha,$nomebanco) or die(" Erro ao conectar ao banco de dados requisitado");


$cod = $_GET["cod"];

$query = ("SELECT nome, categoria, preço de venda, estoque FROM prod where atv = "ativo"");
$result = $conn -> query($query);
$linha = $result -> fetch_assoc();
$id = $linha["id"];


$jprod = json_encode($result);
    $arrProd[] = array();
    $newArr = array();
    $i=0;
    $strResponse = "";
    $strResponse2 = "";
    while ( $db_field = $result2->fetch_assoc()) {

        $newArr[] = $db_field["nome"];
        $arrProd[$i] = $aa; 
        if ($db_field["nome"] != "") {
            $strResponse .= json_encode($db_field["nome"]) . "$i,";
            $strResponse2 .= json_encode($aa) . ", ";
        }
        $i++;
    }
    echo json_encode($arrProd);
}

?>
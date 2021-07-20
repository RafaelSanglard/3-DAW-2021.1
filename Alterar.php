
<html lang="en">
    <head>
 
<script>
function alteraProd() {
	let objProd = document.getElementById("formProd");
  
	let xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			
			document.getElementById("resposta").innerHTML = this.responseText;   
		}
	}

	xmlHttp.open("GET", "http://localhost/3daw/outros/alteraprod.php?id="+ objProd.id.value +
    "&cod="+ objProd.cod.value+"&nome="+objProd.nome.value+"&fab="+objProd.fab.value+"&cat="+objProd.cat.value+"&tipo="+objProd.tipo.value+
    "&preço="+ objProd.preço.value +"&qtdestoque="+objProd.qtdestoque.value +"&peso="+objProd.peso.value +"&desc="+objProd.desc.value +
    "&dtinc="+objProd.dtinc.value +"&atv="+objProd.atv.value, true);
	xmlHttp.send();
	console.log("requisição enviada");
}
</script>

</head>
<body>
<h3>Alterar produto</h3>
<form action="" method="post" name="Pod" id="formProd">
	Digite o id do produto a ser alterado:
	<input type="text" name="id"> <br><br>
     Informe tambem os campos novos:
    <br>
    Codigo do produto:  <input type="text" name="cod"> <br><br>
    Nome do produto:    <input type="text" name="nome"> <br><br>
    Fabricante:         <input type="text" name="fab"> <br><br>
    Categoria:          <select  name="cat"> <br>
                            <option value="tecnologia">Tecnologia</option>
                            <option value="vestiario">Vestiário</option>
                            <option value="higiene" >Higiene</option>
                            <option value="outros" >Outros</option>
                        </select>
                        <br><br>
    Tipo de produto:    <select  name="tipo"> 
                            <option value="simples">Simples</option>
                            <option value="agrupados">Agrupados</option>
                            <option value="virtual" >Virtual</option>
                            <option value="outros" >Outros</option>
                        </select>
                        <br><br>
    Preço de venda:     <input type="number" name="preço"> <br><br>
    Qtd em estoque:     <input type="number" name="qtdestoque"> <br><br>
    Peso em gramas:     <input type="text" name="peso"> <br><br>
    Descrição:          <input type="text" name="desc"> <br><br>
    Data inclusão:      <input type="date" name="dtinc"> <br><br>
    Ativo:              <select name="atv"> <br><br>
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>
    <input type="button" name="op" value="alterarProduto" onclick="alteraProd()">
</form>
<p id="resposta"></p>
<a href='Av2Home.html'>Clique aqui para ir para a pagina principal</a><br>
</body>
</html>
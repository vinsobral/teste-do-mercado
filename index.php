<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta htt="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>teste-do-mercado</title>

  </head>
  <body>
	  
		<div class="navbar navbar-default" role="navigation">
		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			
				<span class="navbar-brand"><a href="index.php">Home</a></span>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="#" id="cev">Compra e Venda</a></li>
					<li><a href="#" id="op">Operações</a></li>
				</ul>
			</div>
		
		</div>
		
		<div class="contentbox">
		
			<div id="divcom">
			
				<FORM ACTION="php/submit.php" METHOD="post">
					<table>
						<tr><td>Nome da Mercadoria:</td>	<td><INPUT TYPE="TEXT" NAME="nome_mer"/></td></tr>
						<tr><td>Tipo da Mercadoria:</td>	<td><INPUT TYPE="TEXT" NAME="tipo_mer"/></td></tr>
						<tr><td>Código da Mercadoria:</td>	<td><INPUT TYPE="NUMBER" NAME = "cod_mer"/></td></tr>
						<tr><td>Quantidade:</td>			<td><select TYPE ="number" NAME="qnt" id='seletor' onclick="calculaValor(+document.getElementById('seletor').value)"></select></td></tr>
						<tr><td>Valor: </td>				<td><INPUT type="number" NAME="valor" id='valbox' readonly value ="50"></input></td></tr>
						<tr>
							<td><input type="checkbox" id="compra" class="radioButton" name="compra" value="1" checked="checked">Compra</input></td>
							<td><input type="checkbox" id="venda" class="radioButton" name="venda" value="0">Venda</input></td>
						</tr>
						<tr><td><INPUT TYPE="SUBMIT" NAME="CMD" VALUE="Confirmar"/></td></tr>
					</table>
				</FORM>
				<br>
				
			
		</div>
	
   
  </body>
</html>
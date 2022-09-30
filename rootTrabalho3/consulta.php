<?php 
//Cabeçalho da página
include_once 'header.php';
//Chamando o arquivo de conexão
include_once 'conexao.php';
//Mensagem
//include_once 'mensagemErro.php';
?>
<!-- Div para separar o arquivo, afim de organização -->
<div class="row">
	<!-- Título em tamanho h3 -->
	<br><h3>Lista de Medicamentos</h3><br>
	<!-- Centralizando e criando a tabela -->
	<center><table class="table">
		<!-- Cabeçalho da Tabela -->
		<thead>
			<!-- Colunas-->
			<tr>
				<!-- Conteúdo escrito na linha -->
				<th>Nome</th>
				<th>PMVC (Preço Máximo Vendido ao Consumidor</th>
				<th>Necessita de Receita</th>
			</tr>
		<!-- fecha o cabeçalho da tabela -->
		</thead>
		<!-- Corpo da tabela-->
		<tbody>
			<?php
			//Comando para pegar os dados da tabela medicamento
			$sql="SELECT * FROM medicamento";
			//Pegando o resultado do comando
			$resultado= mysqli_query($conexao,$sql);
			//Condição se o número de linhas é maior que 0
			if (mysqli_num_rows($resultado)>0):
				//Loop para guardar os dados em uma variável
				while($dados =mysqli_fetch_array($resultado)):	
?>
			<!-- Escreve os dados -->
			<tr>
				<td><?php echo $dados['nomeMedicamento'];?></td>
				<td><?php echo $dados['pmvc'];?></td>
				<td><?php echo $dados['necessarioReceita'];?></td>
			</tr>
<?php 
			//Fecha o loop
			endwhile;
			//Se não, tabela vazia
			else: ?>
				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
<?php
			//Fecha condição
			endif;
?>
		<!-- Fecha o corpo da tabela -->
		</tbody>
	<!-- Fecha a tabela e a centralização-->
	</table></center>
	<!--Quebra de linha-->
	<br>
<!-- Fecha a div -->
</div>
<!-- Chamando o footer-->
<?php include_once 'footer.php';?>

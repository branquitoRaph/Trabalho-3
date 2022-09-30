<!-- Chamando o cabeçalho da página-->
<?php include_once 'header.php';?>
	<!-- Criando o menu de notícias-->
	<nav id="menu">
		<!-- Título em tamanho h3-->
		<h3>Notícias</h3>
		<!-- Lista de notícias-->
		<ul>
			<!-- Notícia 1-->
			<li><a href="https://www.msn.com/pt-br/noticias/brasil/anvisa-pro-c3-adbe-comercializa-c3-a7-c3-a3o-de-produtos-kinder-no-brasil/ar-AAWeYKm">Anvisa proíbe a comercialização de produtos da marca Kinder</a></li><br>
			<!-- Notícia 2-->
			<li><a href="https://cbn.globoradio.globo.com/media/audio/371414/medicamentos-podem-ficar-ate-10-mais-caros.htm#:~:text=Medicamentos%20podem%20ficar%20at%C3%A9%2010%25%20mais%20caros%20A,infla%C3%A7%C3%A3o%20do%20ano%20passado%2C%20que%20fechou%20em%2010%2C06%25.">Medicamentos ficarão mais caro, reajuste de 10%</a></li><br>
			<!-- Notícia 3-->
			<li><a href="https://ccnewsbrasil.com/publicacao/covid-vacina-da-janssen-recebe-registro-definitivo-da-anvisa-1649181455">Vacina da Janssen tem registro definitivo no Brasil</a></li><br>
			<!-- Notícia 4-->
			<li><a href="https://www.aarb.org.br/aprovada-regulamentacao-da-bula-de-remedios-digital/">Aprovada a regulamentação de bulas digitais de medicamentos</a></li><br>
			<!-- Notícia 5-->
			<li><a href="https://veja.abril.com.br/coluna/radar/depois-da-pandemia-venda-de-antigripais-cresce-94/">Venda de antigripais aumentou em 94%</a></li><br>
			<!-- Notícia 6-->
			<li><a href="https://oglobo.globo.com/saude/medicina/primeiro-remedio-para-apneia-do-sono-reduziu-em-ate-41-pausas-na-respiracao-durante-noite-mostra-estudo-25477402">Primeiro remédio para apneia do sono reduziu em até 41% pausas na respiração durante a noite</a></li><br>
			<!-- Notícia 7-->
			<li><a href="https://www.metropoles.com/distrito-federal/viagra-pacientes-com-hipertensao-sofrem-com-falta-de-remedio-no-df">Viagra: pacientes com hipertensão sofrem com falta de remédio no DF</a></li><br>
			<!-- Notícia 8-->
			<li><a href="https://www.minhavida.com.br/saude/noticias/27310-governo-muda-regras-para-venda-de-remedios-na-farmacia-popular">Governo muda regras para venda de remédios na Farmácia Popular</a></li><br>
		<!-- Fechando a lista-->
		</ul>
	<!-- Fechando o menu notícias-->
	</nav>
	<!-- Criando o principal da página (o conteúdo)-->
	<div id="contents"></div>
		<!--Cria linha vertical-->
		<div class="linha-vertical"></div>
	<!--Cria linha vertical-->
	<div class="linha-vertical"></div>
	<!-- Criando a classe principal-->
	<div class="principal">
		<!-- Título em tamanho h2-->
		<h2>Bem-vindo ao catálogo de medicamentos Ca'Med!</h2>
		<!-- Subtítulo em tamanho h3-->
		<h3>Qual o nosso objetivo?</h3>
		<!-- Parágrafo-->
		<p>
		Nós, desenvolvedores do site da Ca'Med, buscamos facilitar a pesquisa por medicamentos e o acesso ao PMVC 
		(preço máximo vendido ao consumidor) dos mesmos. Com a ajuda da nossa ferramenta, é possível encontrar remédios com ou sem receita, somente
		pelos sintomas apresentados.
		<!-- Fechando o parágrao-->
		</p>
		<!-- Abrindo um parágrafo para uma imagem-->
		<p>
		<!-- Inserindo uma imagem-->
		<img src="https://diariodonordeste.verdesmares.com.br/image/contentid/policy:1.2180399:1590248402/image/image.jpg?f=16x9&$p$f=3965716" alt="Medicamentos" height="290px" width="500px">
		<!-- Fechando o parágrafoe dando uma quebra de linha-->
		</p><br>
	<!-- Fechando a classe principal-->
	</div>
	<!-- Título em tamanho h3-->
	<h3>Encontre aqui o seu medicamento somente pelo sintoma!</h3>
	<!-- Criando a parte principal (link das páginas dos remédios de cada sintoma)-->
	<nav id="sintomas">
		<!-- Lista de sintomas-->
		<ul>
			<!-- Chamando e criando o botão do sintoma Febre com tamanho em h3-->
			<h3><li><a href="febre.php">Febre</a></li></h3>
			<!-- Chamando e criando o botão do Sintoma Dor de Cabeça com tamanho h3-->
			<h3><li><a href="dor_cabeca.php">Dor de cabeça</a></li></h3>
			<!-- Chamando e criando o botão do Sintoma Dores musculares com tamanho em h3-->
			<h3><li><a href="dor_muscular.php">Dores musculares</a></li></h3>
		<!-- Fechando a lista de sintomas-->
		</ul>
	<!-- Fechando a parte principal dos sintomas-->
	</nav>
	<!-- Abrindo parágrafo para imagem-->
	<p>
	<!-- Inserindo uma imagem-->
	<img src="https://i.em.com.br/syYv68Iw3zLPaikC2_O-mv83NSQ=/790x/smart/imgsapp.em.com.br/app/noticia_127983242361/2021/06/14/1276613/20210614155637767844a.png" alt="Sintomas" height="290px" width="500px">
	<!-- Fechando o parágrafo-->
	</p>
<!-- Chamando o footer-->
<?php include_once 'footer.php';?>

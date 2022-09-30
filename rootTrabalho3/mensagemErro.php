<?php
//Iniciar  Sessão
session_start();
//Se existe a sessão mensagem criada
if(isset($_SESSION['mensagem'])): 
?>
<!-- Abrindo javascript -->
<script>
	//Mensagem de alerta javascript do materialize
	window.onload = function(){
		  M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
	};
<!-- fechando javascript -->
</script>
<?php 	
endif;
//Limpa a sessão
session_unset();
?>

	<?php

		include_once '../../DataBase/conexao.php';
		include_once 'ClienteController.php';
		
		$cliente = new ClienteController();
		$result = $cliente->cadastrarCliente($_POST);

		if ($result){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../template_store/index.php'>
				<script type=\"text/javascript\">
					alert(\"Cadastro realizado com sucesso!\");
				</script>
				";
		}else{
    		echo "Erro ao cadastrar";
    		$result->errorInfo();
		}
	?>
<?php
	require("controller/cliente.php");
?>

<form action="#" method="post">
	<input type="hidden" name="acao" value="salvar">
	<label for="">Nome</label>
	<input type="text" name="nome" require>
	
	<label for="">E-mail</label>
	<input type="email" name="email">
	
	<label for="">Senha</label>
	<input type="password" name="pws1">
	
	<label for="">Confirme Senha</label>
	<input type="password" name="pws2">

	<label for="">CEP</label>
	<input type="text" name="cep" maxlength="9" onblur="pesquisacep(this.value)" id="cep">

	<label for="">Endereço</label>
	<input type="text" name="logradouro" id="logradouro">

	<label for="">Bairro</label>
	<input type="text" name="bairro" id="bairro">
	
	<label for="">Cidade</label>
	<input type="text" name="cidade" id="cidade">
	
	<label for="">Estado</label>
	<input type="text" name="uf" maxlength="2" id="uf">
	
	<label class="direita">
		<button> Salvar </button>
		<button type="reset"> Cancelar </button>
	</label>
</form>
<script src="js/ceps.js"></script>
<?php
	if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<html>
	<head>
		<?php
			include 'head.php';
			$_SESSION["page_title"] = "Cadastro";
			include 'title.php';
		 ?>
		<meta charset="UTF-8">
		<script type="text/javascript" src="js/form_validation.js"></script>
	</head>

	<body>
		<?php include 'header.php' ?>
		<?php include 'menu.php'; ?>

		<div class="content">
			<h1 class="title">Cadastro</h1>

			<div id="error_list"></div>

			<form id="form-cadastro" action="registrar.php" method="POST" onsubmit="return validateFormCadastro();">
				<h3 class="subtitle">Informações de Login</h3>

				<label>
					Usuário:
					<input type="text" id="usuario" class="textinput" name="usuario" />
					<span class="field_obs" id="error_usuario"></span>
				</label>

				<label>
					Senha:
					<input type="password" id="senha" class="textinput" name="senha"  />
					<span class="field_obs" id="error_senha"></span>
				</label>

				<label>
					Confirmação:
					<input type="password" id="confirmacao_senha" class="textinput" name="confirmacao_senha"  />
					<span class="field_obs" id="error_confirmacao_senha"></span>
				</label>

				<h3 class="subtitle">Informações Pessoais</h3>
				<label>
					Nome:
					<input type="text" id="nome" class="textinput" name="nome" />
					<span class="field_obs" id="error_nome"></span>
				</label>

				<label>
					CPF:
					<input type="text" id="cpf" class="textinput" name="cpf" />
					<span class="field_obs" id="error_cpf"></span>
				</label>

				<label>
					Data de Nascimento:
					<input type="date" id="data_nascimento" class="textinput" name="data_nascimento" />
					<span class="field_obs" id="error_data_nascimento"></span>
				</label>

				<!--  -->
				<label>
					Sexo:
					<input type="radio" id="sexo_masculino" name="sexo" value="masculino"  >Masculino
					<input type="radio" id="sexo_feminino" name="sexo" value="feminino">Feminino
					<span class="field_obs" id="error_sexo"></span>
				</label>

				<label>
					E-mail:
					<input type="email" id="email" class="textinput" name="email" />
					<span class="field_obs" id="error_email"></span>
				</label>

				<h3 class="subtitle">Informações Residenciais</h3>
				<label>
					CEP:
					<input type="text" id="cep" class="textinput" name="cep" />
					<span class="field_obs" id="error_cep"></span>
				</label>

				<label>
					Rua:
					<input type="text" id="rua" class="textinput" name="rua" />
					<span class="field_obs" id="error_rua"></span>
				</label>

				<label>
					Número:
					<input type="text"  id="numero" class="textinput" name="numero" />
					<span class="field_obs" id="error_numero"></span>
				</label>

				<label>
					Bairro:
					<input type="text" id="bairro" class="textinput" name="bairro" />
					<span class="field_obs" id="error_bairro"></span>
				</label>

				<label>
					Cidade:
					<input type="text" id="cidade" class="textinput" name="cidade" />
					<span class="field_obs" id="error_cidade"></span>
				</label>

				<label>
					Estado:
					<select name="estado" id="estado" class="textinput" >
						<option value=""></option>
						<option value="AC">AC</option>
						<option value="AL">AL</option>
						<option value="AP">AP</option>
						<option value="AM">AM</option>
						<option value="BA">BA</option>
						<option value="CE">CE</option>
						<option value="DF">DF</option>
						<option value="ES">ES</option>
						<option value="GO">GO</option>
						<option value="MA">MA</option>
						<option value="MT">MT</option>
						<option value="MS">MS</option>
						<option value="MG">MG</option>
						<option value="PA">PA</option>
						<option value="PB">PB</option>
						<option value="PR">PR</option>
						<option value="PE">PE</option>
						<option value="PI">PI</option>
						<option value="RJ">RJ</option>
						<option value="RN">RN</option>
						<option value="RS">RS</option>
						<option value="RO">RO</option>
						<option value="RR">RR</option>
						<option value="SC">SC</option>
						<option value="SP">SP</option>
						<option value="SE">SE</option>
						<option value="TO">TO</option>
					</select>
					<span class="field_obs" id="error_estado"></span>
				</label>

				<label>
					Telefone:
					<input type="text" id="telefone" class="textinput" name="telefone" />
					<span class="field_obs" id="error_telefone"></span>
				</label>
				<br/>

				<input type="submit" class="button"/>
			</form>
		</div>

		<?php include 'footer.php' ?>
	</body>
</html>

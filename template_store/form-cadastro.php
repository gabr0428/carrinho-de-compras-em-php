
		<form method="POST" class="colorlib-form" action="../App/Controller/addCliente.php">
			<h2>Cadastre-se</h2>
		       	<div class="row">
			        <div class="col-md-12">
			            <div class="form-group">
							<div class="col-md-6">
								<label for="Nome">Nome</label>
								<input type="text" name="Nome" id="Nome" class="form-control" placeholder="Digite seu nome">
							</div>
							<div class="col-md-6">
								<label for="dataNascimento"> Data de Nascimento </label>
								<input type="Date" name="dataNascimento" id="dataNascimento" class="form-control" placeholder="Digite sua data de nascimento">
							</div>
							<div class="col-md-6">
								<label for="cpf"> CPF </label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control" placeholder="Digite seu email">
							</div>
							<div class="col-md-6">
								<label for="senha">Senha</label>
								<input type="password" id="senha" name="senha" class="form-control" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<div align="center">
								<label> <a href="login.php"> Login </a> </label> <br>
								<button type="submit" name="cadastrar" class="btn btn-primary">
   									Cadastrar
   								</button>

							</div>
						</div>
   					</div>
   				</div>
		</form>
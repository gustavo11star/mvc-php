<div class="card" style="width: 100%">
	<div class="card-header">
		<div class="row">
			<div class="col-10">
				<h1 >Listagem de Usuários</h1>
			</div>
			<div class="col-2">
				<a class="btn btn-primary" href="/" role="button">Voltar</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<form action="user/add" method="POST">
			<div class="form-row">	
			    <div class="col">
					<label>Nome</label>
			      	<input type="text" name="name" class="form-control" placeholder="Digite o nome....">
			    </div>
			    <div class="col">
					<label for="">Email</label>
			      	<input type="email" name="email" class="form-control" placeholder="Digite o e-mail...">
			    </div>
			</div>
			<div class="form-row">
				<div class="col">
					<label for="">Genero</label>
					<select name="gender" class="form-control">
						<option value="m">Masculino</option>
						<option value="f">Feminino</option>
					</select>
				</div>
				<div class="col">
					<label for="">Data Nascimento</label>
					<input type="date" class="form-control" name="birthdate" value="" placeholder="">
				</div>
			</div>

			<button type="submit" class="btn btn-success">Salvar</button>

		</form>
  	</div>
</div>
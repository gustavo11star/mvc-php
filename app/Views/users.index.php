
<div class="card" style="width: 100%">
	<div class="card-header">
		<div class="row">
			<div class="col-10">
				<h1 >Listagem de Usuários</h1>
			</div>
			<div class="col-2">
				<a class="btn btn-primary" href="user/add" role="button">Adicionar Usuário</a>
			</div>
		</div>
	</div>
	<div class="card-body">

		<?php if (count($users) > 0): ?>
			<table class="table table-hover table-bordered">
			 
				<thead>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Email</th>
						<th scope="col">Gênero</th>
						<th scope="col">Nascimento</th>
						<th scope="col">Idade</th>
						<th scope="col">Ações</th>
			        </tr>
			    </thead>
				<tbody>
			        <?php foreach ($users as $user): ?>
						<tr>
							<td><?=$user['name']?></td>
							<td><?=$user['email']?></td>
							<td><?=$user['gender'] == 'm' ? 'Masculino' : 'Feminino'?></td>
							<td><?=dateConvert($user['birthdate'])?></td>
							<td><?=calculateAge($user['birthdate'])?> anos</td>
							<td>
				                <a class="btn btn-warning" href="user/edit/<?=$user['id']?>">Editar</a>
				                <a class="btn btn-danger" href="user/remove/<?=$user['id']?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
				            </td>
				        </tr>
			        <?php endforeach; ?>
			    </tbody>
			 
			</table>
		 
		<?php else: ?>
			Nenhum usuário cadastrado
		<?php endif; ?>
  	</div>
</div>

 

 
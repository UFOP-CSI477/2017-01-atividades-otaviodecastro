<h1>Visualizar Procedure</h1>

<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Tipo de User</th>

	</tr>

	<?php foreach($procedures as $e): ?>
		<tr>
			<td><?= $e['Procedure']['id']; ?></td>
			<td><?= $this->Html->link($e['Procedure']['nome'],array('controller' => 'procedures', 'action' => 'view')); ?></td>
			<td><?= $e['Procedure']['preco']; ?></td>
      <td><?= $e['Procedure']['user_id']; ?></td>

		</tr>
	<?php endforeach; ?>

</table>

<?= $this->Html->link("Voltar",array('controller' => 'pages', 'action' => 'home')); ?>

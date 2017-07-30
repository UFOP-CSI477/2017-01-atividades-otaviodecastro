<h1>Visualizar Procedure</h1>


<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Tipo de Usuário</th>
		<th>Editar</th>
	  <th>Excluir</th>
	</tr>

	<?php foreach($procedures as $e): ?>
		<tr>
			<td><?= $e['Procedure']['id']; ?></td>
			<td><?= $this->Html->link($e['Procedure']['name'],array('controller' => 'procedures', 'action' => 'view')); ?></td>
			<td><?= $e['Procedure']['price']; ?></td>
      <td><?= $e['Procedure']['user_id']; ?></td>
			<td><?= $this->Html->link("Editar",array('controller' => 'procedures', 'action' => 'edit', $e['Procedure']['id'])); ?></td>
			<td><?= $this->Html->link("Delete",array('controller' => 'procedures', 'action' => 'delete', $e['Procedure']['id'])); ?></td>
			<td><?= $this->Html->link("Editar Price",array('controller' => 'procedures', 'action' => 'edit_price', $e['Procedure']['id'])); ?></td>


		</tr>
	<?php endforeach; ?>

</table>
<?= $this->Html->link("Adicionar",array('controller' => 'procedures', 'action' => 'add')); ?>

<?= $this->Html->link("Voltar",array('controller' => 'users', 'action' => 'admin')); ?>

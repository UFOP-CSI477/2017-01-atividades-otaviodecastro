<h1>Listar Tests</h1>

<table>
	<tr>
		<th>Paciente</th>
		<th>Procedure</th>
    <th>Date</th>
	</tr>

	<?php foreach($tests as $e):?>
		<tr>
			<td><?= $e['Test']['user_id']; ?></td>
			<td><?= $e['Procedure']['name'] ?></td>
      <td><?= $e['Test']['date']; ?></td>



		</tr>
	<?php endforeach;?>
</table>
<?=$this->Html->link("Voltar",array('controller' => 'users', 'action' => 'admin'));?>

<h1><?= $procedure['Procedure']['name']; ?></h1>

<p>
  Price: <?= $procedure['Procedure']['price']; ?></p>

<p>
  User_ID: <?= $procedure['Procedure']['user_id']; ?>
</p>
<?=
  $this->Html->link("Voltar", array('controller' => '$procedure', 'action' => 'index'));

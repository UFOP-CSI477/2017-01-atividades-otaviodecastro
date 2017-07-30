<h1>Inserir Procedure</h1>

<?php
// $usuario = $this->Session->read('Usuario');
// if ($usuario)
// {
// 	$results = $this->Usuario->findByLogin($usuario);
// 	$this->set('usuario', $results['Usuario']);

echo $this->Form->create('Procedure');
echo $this->Form->input('name');
echo $this->Form->input('price');
echo $this->Form->input('user_id');
echo $this->Form->end('Salvar');

echo $this->Html->link("Voltar",array('controller' => 'users', 'action' => 'admin'));
//
// } else {
// 	//$this->redirect(array('action' => 'index'));
// }

?>

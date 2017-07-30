<h1>Editar Price</h1>

<?php
echo $this->Form->create('Procedure');
echo $this->Form->input('id');
echo $this->Form->input('price');

echo $this->Form->end('Salvar');

echo $this->Html->link("Voltar",array('controller' => 'procedures', 'action' => 'index'));

?>

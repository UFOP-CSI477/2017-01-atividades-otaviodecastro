<h1>Editar Procedure</h1>

<?php
echo $this->Form->create('Procedure');

echo $this->Form->input('id');
echo $this->Form->input('name');
echo $this->Form->input('price');
echo $this->Form->select('user_id',$users);//select cria o combo

echo $this->Form->end('Salvar');

?>

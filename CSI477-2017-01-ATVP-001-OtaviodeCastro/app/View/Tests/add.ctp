<h1>Solicitar Tests</h1>

<?php
echo $this->Form->create('Test');
echo $this->Form->hidden('user_id', array('value' => $this->Session->read('User')['0']['User']['id']));
echo $this->Form->input('procedure_id');
echo $this->Form->date('date');
echo $this->Form->end('Salvar');

?>

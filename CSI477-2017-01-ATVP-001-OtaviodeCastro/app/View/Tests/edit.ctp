<h1>Editar Test</h1>

<?php
foreach($testsAsc as $e):

echo $this->Form->create('Test');
echo $this->Form->input($e['Test']['user_id']);
echo $this->Form->input('procedure_id');
echo $this->Form->date('date');
echo $this->Form->end('Salvar');

endforeach;

?>

<h1>Realizar Cadastro</h1>

<?php
echo $this->Form->create('User');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo "<strong>Password<strong>";
echo $this->Form->password('password');
echo "<strong>Tipo<strong>";
echo $this->Form->tinyint('type');

echo $this->Form->end('Salvar');

echo $this->Html->link("Voltar",array('controller' => 'users', 'action' => 'admin'));

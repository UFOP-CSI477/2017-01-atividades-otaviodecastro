<h1>Acesso ao Sistema</h1>

<?php
    echo $this->Form->create('User',array('controller' => 'users', 'url' => 'email'));

    echo $this->Form->input('email');
    echo "<strong>Senha<strong>";
    echo $this->Form->password('senha');



    echo $this->Form->end("Acessar");

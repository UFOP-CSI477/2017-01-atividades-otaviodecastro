<h1>--|System Acess|-- </h1>

<?php

    echo $this->Form->create('Usuario',
            array('controller' => 'usuarios',
                  'url' => 'login'));

    echo $this->Form->input('login');
    echo $this->Form->password('senha');

    echo $this->Form->end('Acessar');

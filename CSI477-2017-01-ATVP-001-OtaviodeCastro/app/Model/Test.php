<?php

  class Test extends AppModel{
    //primeiro passo e sempre singular
    //public $belongsTo = 'Paciente';
    public $belongsTo = 'Procedure';
  }

<?php
if($this->Session->check('User'))
{
?>

<header>
	<div class="container">
			 <div class="row">
					 <div class="col-lg-12">
	  				</div>

						<div class="col-md-1"> </div>
						<div class="col-md-2 divbranca"> <?= $this->Html->link("Cadastrar Administrador",array('controller' => 'users', 'action' => 'add'));?></div>
						<div class="col-md-2 divbranca"> <?=  $this->Html->link("Cadastrar Procedure",array('controller' => 'procedures', 'action' => 'index'));?></div>
						<div class="col-md-2 divbranca"> <?=  $this->Html->link("Listar Tests",array('controller' => 'tests', 'action' => 'view'));?></div>
	          <div class="col-md-2 divbranca"> <?=  $this->Html->link("Listar Pacientes",array('controller' => 'pacientes', 'action' => 'index'));?></div>
	          <div class="col-md-2 divbranca"> <?=  $this->Html->link("Relatório",array('controller' => 'tests', 'action' => 'relatorioadmin'));?> </div>
	          <div class="col-md-1"> </div>
				</div>
		</div>
	</header>
<?php }	?>

<header>
	<?php

	if($this->Session->check('Paciente'))
	{
		?>
		<div class="container">
				<div class="row">
						<div class="col-lg-12">
								<img  src="img/logo.png" class="img-responsive" alt="">
								<div class="intro-text">
									<div class="col-md-3"> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Visualizar Procedure",array('controller' => 'procedures', 'action' => 'index_geral')); ?> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Área Paciente",array('controller' => 'tests', 'action' => 'index')); ?> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Área Administrador",array('controller' => 'users', 'action' => 'index_email')); ?> </div>
									<div class="col-md-3"> </div>
								</div>
						</div>
				</div>
		</div>
	<?php
}elseif(!$this->Session->check('Paciente') && !$this->Session->check('User')){
		?>
		<div class="container">
				<div class="row">
						<div class="col-lg-12">
								<img  src="img/logo.png" class="img-responsive" alt="">
								<div class="intro-text">
									<div class="col-md-3"> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Visualizar Procedure",array('controller' => 'procedures', 'action' => 'index_geral')); ?> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Área Paciente",	array('controller' => 'users', 'action' => 'index_email')); ?> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Área Administrador",array('controller' => 'users', 'action' => 'index_email')); ?> </div>
									<div class="col-md-3"> </div>
								</div>
						</div>
				</div>
		</div>
	<?php
	$user = $this->Session->read('User');
	$typeUser = $user['0']['User']['type'];

}elseif($this->Session->check('User') && $typeUser == 1){
	?>
	<div class="container">
			<div class="row">
					<div class="col-lg-12">
							<img  src="img/logo.png" class="img-responsive" alt="">
							<div class="intro-text">
								<div class="col-md-3"> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Visualizar Procedure",array('controller' => 'procedures', 'action' => 'index_geral')); ?> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Área Paciente",	array('controller' => 'users', 'action' => 'index_email')); ?> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Área Administrador",array('controller' => 'users', 'action' => 'admin')); ?> </div>
								<div class="col-md-3"> </div>
							</div>
					</div>
			</div>
	</div>
	<?php
}elseif($this->Session->check('User') && $typeUser == 2){
	echo "entrou operador";
	?>
	<div class="container">
			<div class="row">
					<div class="col-lg-12">
							<img  src="img/logo.png" class="img-responsive" alt="">
							<div class="intro-text">
								<div class="col-md-3"> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Visualizar Procedure",array('controller' => 'procedures', 'action' => 'index_geral')); ?> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Área Paciente",	array('controller' => 'users', 'action' => 'index_email')); ?> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Área Administrador",	array('controller' => 'procedures', 'action' => 'index_operador'));
?> </div>
								<div class="col-md-3"> </div>
							</div>
					</div>
			</div>
	</div>
	<?php
}
	?>

</header>

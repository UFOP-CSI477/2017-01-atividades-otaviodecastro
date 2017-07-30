procedure<?php

class UsersController extends AppController{
	public $helpers = array('Form','Session');
	public $components = array('Flash');

	public function index_email(){

	}

	public function admin(){

	}

	public function validar(){

		$user = $this->User->findAllByEmailAndPassword
			($this->data['User']['email'], $this->data['User']['senha']);

		if(!empty($user))
			return $user;
		else
			return false;

	}

	public function email(){
		if(!empty($this->data['User']['email'])){
			//validar
			$user = $this->validar();

			if($user != false){
				$this->Flash->set('Acesso realizado com sucesso.');
				$this->Session->write('User', $user);

				$user = $this->Session->read('User');
				$typeUser = $user['0']['User']['type'];

				if($typeUser == '1'){
					$this->redirect(array('action'=>'admin'));
				}elseif($typeUser == '2'){
				$this->redirect(array('controller'=>'procedures','action'=>'index_operador'));
			  }elseif($typeUser == '3'){
                $this->redirect(array('controller' => 'tests' ,'action'=>'index',$user['User']['id'] ));
			  }
				exit();
			}
			else{
				$this->Flash->set('User e/ou senha inválidos!');
				$this->redirect(array('action'=>'index_email'));
				exit();
			}
		}
		else{
			$this->redirect(array('action'=>'index_email'));
			exit();
		}
	}

	public function logout(){
		$this->Session->destroy('User');
		$this->redirect(array('controller'=>'pages','action' => 'home'), null, true);

	}

  public function add(){
    if (empty($this->request->data)){
      //data esta vazio -> carregar campos para inclusão


    }else {
      //persistir os dados
      if($this->User->save($this->request->data)){
        $this->Flash->set('User Inserido com Sucesso!');
        $this->redirect(array('action' => 'admin'));
      }
    }
  }
	public function afterFilter(){
		parent::afterFilter();
			if($this->action != 'home' && $this->action != 'index_email' ){
					$this->autenticar();
			}
	}
	public function autenticar(){
			if(!$this->Session->check('User')){
					$this->redirect(array('controller'=>'users', 'action'=>'index_email'));
					exit();
			}
			else{
					$user = $this->Session->read('User');
					//Debugger::dump($user);
					$this->Flash->set('Seja bem-vindo(a) '.$user['0']['User']['nome']);
			}
	}

}

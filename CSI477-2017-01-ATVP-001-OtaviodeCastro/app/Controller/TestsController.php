<?php
//trabalhar sempre com plural e controller
class TestsController extends AppController{
    public $helpers = array('Html','Form'); //auxila na parte de view
    public $components = array('Flash');

    public function index(){

    }

    public function view(){
      $this->set('tests', $this->Test->find('all', array('order'=>array('Test.date'=>'asc'))));//atribuir a variavel um resultado

    }

    public function add(){
        if (empty($this->request->data)){
            //data esta vazio -> carregar campos para inclusão
            //Carregar os estados - combo
            //dentro de cidades tenho relação c o modlo de estados
            $procedures = $this->Test->Procedure->find('list',array('fields'=> array('id','name')));
            $this->set('procedures',$procedures);
        }else {
            //persistir os dados
            if($this->Test->save($this->request->data)){
                $this->Flash->set('Test Solicitado com Sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function edit($id=null){
        if(!$id){
            throw new NotFoundException("Test Inválido!");
        }
        if (empty($this->request->data)){
            //data esta vazio -> carregar campos para edição
            //Carregar os estados - combo
            //dentro de cidades tenho relação c o modlo de estados
            $procedures  = $this->Test->Procedure->find('list',array('fields'=> array('id','name')));
            $this->set('procedures',$procedures);
            //carregar os dados atuais
            $this->request->data = $this->Test->findById($id);
        }else {
            //persistir os dados
            if($this->Test->save($this->request->data)){
                $this->Flash->set('Test atualizado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function agendados(){
        $this->set('tests', $this->Test->find('all'));//atribuir a variavel um resultado
    }
    //
    // public function afterFilter(){
  	// 	parent::afterFilter();
  	// 		if($this->action != 'index'){
  	// 				$this->autenticar();
  	// 		}
  	// }
  	// public function autenticar(){
  	// 		if(!$this->Session->check('Paciente')){
  	// 				$this->redirect(array('controller'=>'pacientes', 'action'=>'index_login'));
  	// 				exit();
  	// 		}
  	// 		else{
  	// 				$paciente = $this->Session->read('Paciente');
    //
  	// 				$this->Flash->set('Seja bem-vindo(a) '.$paciente['0']['Paciente']['name']);
  	// 		}
  	// }
    public function relatorio() {
        $paciente = $this->Session->read('User');
        $this->loadModel("Test");
        $tests = $this->Test->findAllByUserId(array($user[0]['User']['id']));

        $this->set('tests', $tests);

    }
    public function relatorioadmin() {
      $this->set('tests', $this->Test->find('all', array('order'=>array('Test.procedure_id'=>'asc'))));//atribuir a variavel um resultado

    }
}

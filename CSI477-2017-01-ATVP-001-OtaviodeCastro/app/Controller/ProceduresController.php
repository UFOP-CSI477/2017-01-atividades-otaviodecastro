<?php

//trabalhar sempre com plural e controller

class ProceduresController extends AppController{

  public $helpers = array('Html','Form','Session'); //auxila na parte de view
  public $components = array('Flash');

  public function index(){

    //vai setar uma variavel que vai ser utilizasada na view
    $this->set('procedures', $this->Procedure->find('all', array('order'=>array('Procedure.name'=>'asc'))));//atribuir a variavel um resultado
    //$this->set('procedures', $this->Procedure->find('all'));//atribuir a variavel um resultado

  }

  public function view($id = null){

    if(!$id){
      throw new NotFoundException("Procedure Inválido!");

    }

    $procedure = $this->Procedure->findById($id);
    $this->set('procedures',$procedure); //estado é o name da variavel que será atribuida la na frente

  }

  public function add(){
    if (empty($this->request->data)){
      //data esta vazio -> carregar campos para inclusão

      //Carregar os estados - combo
      //dentro de cidades tenho relação c o modlo de estados
      $users  = $this->Procedure->User->find('list',array('fields'=> array('id','name')));

      $this->set('users',$users);
    }else {
      //persistir os dados
      if($this->Procedure->save($this->request->data)){
        $this->Flash->set('Procedure Inserido com Sucesso!');
        $this->redirect(array('action' => 'index'));
      }
    }
  }
  public function edit($id=null){
    if(!$id){
      throw new NotFoundException("Procedure Inválido!");
    }
    if (empty($this->request->data)){
      //data esta vazio -> carregar campos para edição

      //Carregar os estados - combo
      //dentro de cidades tenho relação c o modlo de estados
      $users  = $this->Procedure->User->find('list',array('fields'=> array('id','name')));

      $this->set('users',$users);
      //carregar os dados atuais
      $this->request->data = $this->Procedure->findById($id);
    }else {
      //persistir os dados
      if($this->Procedure->save($this->request->data)){
        $this->Flash->set('Procedure atualizada com sucesso!');
        $this->redirect(array('action' => 'index'));
      }
    }
  }

  public function delete($id=null){
      if(!$id){
        throw new NotFoundException("Procedure Inválido!");
      }

      //excluir direto, sem tratamento
      $this->Procedure->delete($id);
      $this->Flash->set('Procedure excluído com sucesso!');
      $this->redirect(array('action' => 'index'));


    }

    public function edit_price($id=null){
      if(!$id){
        throw new NotFoundException("Procedure Inválido!");
      }
      if (empty($this->request->data)){
        //data esta vazio -> carregar campos para edição

        //Carregar os estados - combo
        //dentro de cidades tenho relação c o modlo de estados
        $users  = $this->Procedure->User->find('list',array('fields'=> array('id','name')));

        $this->set('users',$users);
        //carregar os dados atuais
        $this->request->data = $this->Procedure->findById($id);
      }else {
        //persistir os dados
        if($this->Procedure->save($this->request->data)){
          $this->Flash->set('Procedure atualizada com sucesso!');
          $this->redirect(array('action' => 'index'));
        }
      }
    }
    public function index_geral(){
      $this->set('procedures', $this->Procedure->find('all', array('order'=>array('Procedure.name'=>'asc'))));//atribuir a variavel um resultado

    }
    public function index_operador(){
      $this->set('procedures', $this->Procedure->find('all', array('order'=>array('Procedure.name'=>'asc'))));//atribuir a variavel um resultado

    }


}

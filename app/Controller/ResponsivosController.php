<?php
App::uses('AppController', 'Controller');
/**
 * Responsivos Controller
 *
 */
class ResponsivosController extends AppController {
   
   
     function demo(){
	   	
		//$this->redirect(array('action' => 'editar'));
     	
	 }
	 
	 function includeMenu(){
	   	
		         $username = $this->Auth->user('username');
				 $condiciones = array('User.username'=> $username);
				 $userClass = ClassRegistry::init('User');
				 $roles_id = 1;//$userClass->field('roles_id',array($condiciones));
				 
				 $menuClass = ClassRegistry::init('Menu');
				 $condiciones = array('Menu.role_id' => $roles_id);
				 $menu = $menuClass->find('all',array('conditions' => $condiciones, 'fields' => array('Menu.gls_menu','Menu.modulo_id','Menu.forward','Menu.forward'),'order'=>'Menu.orden'));
				 
				 
				 $this->set(compact('menu'));	
     	
	 }
    function bienvenida(){
	    //carga menu
		 //$username = $this->Auth->user('username');
		 //$condiciones = array('User.username'=> $username);
		 
		 $roles_id =  $this->Auth->user('role_id');
		 $userClass = ClassRegistry::init('User');
		 $user_id = $this->Auth->user('id');
		 
		 $menuClass = ClassRegistry::init('Menu');
		 $condiciones = array('Menu.role_id' => $roles_id);
		 $menu = $menuClass->find('all',array('conditions' => $condiciones, 'fields' => array('Menu.gls_menu','Menu.modulo_id','Menu.forward'),'order'=>'Menu.orden'));
		 		
		 $this->set(compact('menu'));	

		 //$usuario = ClassRegistry::init('Usuario');
		 $condiciones = array('User.id' => $user_id);
		 $nombre= $userClass->field('concat(nombres," ",apellido_p )',array($condiciones));
		 
		 $this->set(compact('nombre'));	
	}
	
	function cabecera(){
	   	
		
		       
     	
	 }
	 
	 public function isAuthorized($user) {
		// All registered users can add posts
		if ($this->action === 'bienvenida') {
			return true;
		}

		return parent::isAuthorized($user);
	}
}

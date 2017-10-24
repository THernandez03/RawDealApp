<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	    $captchaDomain = ClassRegistry::init('Captcha');
		$this->set('captchas', $captchaDomain->find('all'));

		if ($this->request->is('post')) {
		
			$captcha = $this->request->data['User']['captcha'];	
				if(is_null($captcha) || empty($captcha)){
				   $this->Session->setFlash(__('Por favor ingrese captcha'));
				   return false;
				} else{
				   $resultado =  $this->request->data['User']['codigo'];
				  if ($resultado != $captcha){
					 $this->Session->setFlash(__('El captcha ingresado no es válido. Intente nuevamente.'));
					 return false; 
				  }			  
				}
		
		        
				$email = $this->request->data['User']['email'];
				$username = $this->request->data['User']['username'];
				
				$foundUserName = $this->User->field('username',array('username'=>$username));
				
				if (strcmp($username, $foundUserName) == 0) {
					$this->Session->setFlash(__('El username seleccionado ya existe, por favor seleccione otro username'));
					return false;
				}						
				
				$passwordNew = $this->request->data['User']['password_new'];   
				$passwordConfirm = $this->request->data['User']['password_confirm'];    
			
				if (strcmp($passwordNew, $passwordConfirm) !== 0) {
					$this->Session->setFlash(__('Las password ingresadas no coinciden, favor verificar'));
					return false;
				}						
				
				$this->request->data['User']['username'] = $username;
				$this->request->data['User']['password'] = $passwordNew;
				$this->request->data['User']['role_id'] = 3;//se crea por default como usuario.
		        $this->request->data['User']['name'] = $this->request->data['User']['nombres'];				
				
			$this->User->create();
			if ($this->User->save($this->request->data)) {
			    				
				$this->Session->setFlash(__('Usuario Creado.'));
				$this->redirect('http://www.rawdeal.cl');
			} else {
				$this->Session->setFlash(__('No se pudo crear el usuario. Contacte al administrador'));
			}
		}
		$roles = $this->User->Role->find('list');		
		$this->set(compact('roles'));
        
	}


	public function misdatos() {
	
	     $id = $this->Auth->user('id');
	
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Usuario No Válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
		    
            $passwordNew = $this->request->data['User']['password_new'];    
			$passwordConfirm = $this->request->data['User']['password_confirm'];    
			
			if (strcmp($passwordNew, $passwordConfirm) !== 0) {
				$this->Session->setFlash(__('Las password ingresadas no coinciden, favor verificar'));
				return false;
			}
			
			$this->request->data['User']['name'] = $this->request->data['User']['nombres'];	
			
			if ($passwordNew != null){
		       $this->request->data['User']['password'] = $passwordNew;
            }			   
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados.'));
		        if ($passwordNew != null){ 		
       				return $this->redirect(array('action' => 'logout'));
				}else{
				    return $this->redirect(array('action' => 'mis_datos'));
                }				
			} else {
				$this->Session->setFlash(__('No se pudo guardar los cambios, intente nuevamente'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}
	
	
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Usuario No Válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
		    
			$passwordNew = $this->request->data['User']['password_new'];    
			
			if ($passwordNew != null){
		       $this->request->data['User']['password'] = $passwordNew;
            }	
		
		
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
		
	}
	
	
	    function bienvenida(){

		$roles_id =  $this->Auth->user('role_id');
		 $userClass = ClassRegistry::init('User');
		 $user_id = $this->Auth->user('id');
		 
		 $menuClass = ClassRegistry::init('Menu');
		 $condiciones = array('Menu.role_id' => $roles_id);
		 $menu = $menuClass->find('all',array('conditions' => $condiciones, 'fields' => array('Menu.gls_menu','Menu.modulo_id','Menu.forward'),'order'=>'Menu.orden'));
		 		
		 $this->set(compact('menu'));	
		 $condiciones = array('User.id' => $user_id);
		 $name= $userClass->field('name',array($condiciones));
		 
		 $this->set(compact('name'));	
	}
		

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
		public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','logout','add');
    }
	
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash(__('Usuario o password inválidos. Por favor intente nuevamente.'));
		}
    }

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
	
	
	public function isAuthorized($user) {
      
		if ( $this->action === 'logout' || $this->action === 'login' || $this->action === 'bienvenida' || $this->action === 'misdatos' ) {
			return true;
		}
		
		if ( $this->action === 'index' || $this->action === 'edit' || $this->action === 'delete'){ 
		
			 if (isset($user['role_id']) && ($user['role_id'] === "1"  )) {
					return true;
			 }		
		}	

		return parent::isAuthorized($user);
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$roles = $this->User->Role->find('list');		
		$this->set(compact('roles'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');		
		$this->set(compact('roles'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Gameplays Controller
 *
 * @property Gameplay $Gameplay
 * @property PaginatorComponent $Paginator
 */
class GameplaysController extends AppController {

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
	    
		if ($this->request->is('post')) {
		    $this->request->data['Gameplay']['user1_id'] = $this->Auth->user('id'); ;
			$this->Gameplay->create();
			if ($this->Gameplay->save($this->request->data)) {
				$this->Session->setFlash(__('Se creó una sesión de juego. Esperando la respuesta de tu oponente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo crear una sesión de juego.'));
			}
		}
	
		$userId = $this->Auth->user('id');
		$deckEntity = ClassRegistry::init('Deck');
	    $decks = $deckEntity->findAllByUserId($userId);		
		$userEntity = ClassRegistry::init('User');
		$options = array('user.id !=' => $userId);
		$users = $userEntity->find('all',array('conditions' =>$options));
		$this->set(compact('decks','users'));		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Gameplay->exists($id)) {
			throw new NotFoundException(__('Invalid gameplay'));
		}
		$options = array('conditions' => array('Gameplay.' . $this->Gameplay->primaryKey => $id));
		$this->set('gameplay', $this->Gameplay->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Gameplay->create();
			if ($this->Gameplay->save($this->request->data)) {
				$this->Session->setFlash(__('The gameplay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gameplay could not be saved. Please, try again.'));
			}
		}
		$users = $this->Gameplay->User->find('list');
		$decks = $this->Gameplay->Deck->find('list');
		$this->set(compact('users', 'decks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Gameplay->exists($id)) {
			throw new NotFoundException(__('Invalid gameplay'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Gameplay->save($this->request->data)) {
				$this->Session->setFlash(__('The gameplay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gameplay could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Gameplay.' . $this->Gameplay->primaryKey => $id));
			$this->request->data = $this->Gameplay->find('first', $options);
		}
		$users = $this->Gameplay->User->find('list');
		$decks = $this->Gameplay->Deck->find('list');
		$this->set(compact('users', 'decks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Gameplay->id = $id;
		if (!$this->Gameplay->exists()) {
			throw new NotFoundException(__('Invalid gameplay'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Gameplay->delete()) {
			$this->Session->setFlash(__('The gameplay has been deleted.'));
		} else {
			$this->Session->setFlash(__('The gameplay could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function isAuthorized($user) {
		// All registered users can add posts
		if ($this->action === 'index' || $this->action === 'refreshGameplay') {
			return true;
		}
	}	
	
	
	public function refreshGameplay(){
	    $userId = $this->Auth->user('id'); 
		if(isset($userId)){				
			$options = array('Gameplay.user1_id'=>$userId,'Gameplay.status !='=>0);
			$countSent = $this->Gameplay->find('count',array('conditions'=>$options));				
			if ($countSent > 0) {
			   $userSentArray = $this->Gameplay->find('first',array(
														   'fields'=>array('Gameplay.user2_id')
														  ,'conditions'=>$options
														  )
												  );	
				foreach ( $userSentArray as $value )
				{
				   foreach ( $value as $valor ){
					  $userSentId = $valor;				   
				   }
				}														  
			   $userEntity = ClassRegistry::init('User');
			   $userSent = $userEntity->field('name',array('id'=>$userSentId)); 
			} else {						
				$options = array('Gameplay.user2_id'=>$userId,'Gameplay.status'=>0);
				$countReceived = $this->Gameplay->find('count',array('conditions'=>$options));				
				if($countReceived > 0){
				   $userReceivedArray = $this->Gameplay->find('first',array('fields'=>array('Gameplay.user1_id'),'conditions'=>$options));				   
					foreach ( $userReceivedArray as $value )
					{
					   foreach ( $value as $valor ){
					      $userReceivedId = $valor;				   
					   }
					}				   				   
				   $userEntity = ClassRegistry::init('User');
				   $userReceived = $userEntity->field('name',array('id'=>$userReceivedId)); 
				   
				}
			}		
			
            $gameplayArray = $this->Gameplay->find('first',array(
					   'fields'=>array('Gameplay.id')
					  ,'conditions'=>$options
					  ));      

			foreach ( $gameplayArray as $value )
			{
			   foreach ( $value as $valor ){
				  $gameplayId = $valor;				   
			   }
			}							
			  
			$this->set(compact('countSent','countReceived','userSent','userReceived','gameplayId'));
		}		
	}
	
	public function rejectGameplay(){
	
	    $userId = $this->Auth->user('id'); 
		$gameplayId = $this->request->data('id');
		$this->request->data['Gameplay']['status'] = 2;
		$gameplay = $this->$Gameplay->get($gameplayId);		
        $gameplay->save($this->request->data);
		$this->Session->setFlash(__('La solicitud ha sido rechazada'));
		
	}
}

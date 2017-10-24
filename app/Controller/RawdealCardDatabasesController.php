<?php
App::uses('AppController', 'Controller');
/**
 * RawdealCardDatabases Controller
 *
 * @property RawdealCardDatabase $RawdealCardDatabase
 * @property PaginatorComponent $Paginator
 */
class RawdealCardDatabasesController extends AppController {

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

		if ( empty($this->passedArgs['keywords']) && isset($this->request->data['RawdealCardDatabase']['keywords'])){
		    $this->passedArgs['keywords'] = $this->request->data['RawdealCardDatabase']['keywords'];
		}
		if ( empty($this->data) && !empty($this->passedArgs['keywords'])){
		    $this->request->data['RawdealCardDatabase']['keywords'] = $this->passedArgs['keywords'];
		}

        if(isset($this->request->data['RawdealCardDatabase']['keywords']) ){  				
			$q = $this->request->data['RawdealCardDatabase']['keywords'];		
			$this->Paginator->settings = array('conditions'=>array( 				
				'OR' => array(
				'MATCH(RawdealCardDatabase.name) AGAINST(?)' => $q,
				'MATCH(RawdealCardDatabase.text) AGAINST(?)' => $q,
				'MATCH(RawdealCardDatabase.superstar) AGAINST(?)' => $q,
				'MATCH(RawdealCardDatabase.text_type) AGAINST(?)' => $q
				)));			 		
        }

         //PAGINAR POR EDICIÓN    
	    //$rawdealCardDatabases = $this->Paginator->paginate('RawdealCardDatabase',array('RawdealCardDatabase.set_edition LIKE ' => '%PR%'));				
	    $rawdealCardDatabases = $this->Paginator->paginate();
		$userId = $this->Auth->user('id');
        $deckEntity = ClassRegistry::init('Deck');
	    $decks = $deckEntity->findAllByUserId($userId);		
	    $this->set(compact('rawdealCardDatabases','decks'));				
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RawdealCardDatabase->exists($id)) {
			throw new NotFoundException(__('Invalid rawdeal card database'));
		}
		$userId = $this->Auth->user('id');
        $deckEntity = ClassRegistry::init('Deck');
	    $decks = $deckEntity->findAllByUserId($userId);		
		$options = array('conditions' => array('RawdealCardDatabase.' . $this->RawdealCardDatabase->primaryKey => $id));
		$this->set('rawdealCardDatabase', $this->RawdealCardDatabase->find('first', $options));
		$this->set(compact('decks'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RawdealCardDatabase->create();
			if ($this->RawdealCardDatabase->save($this->request->data)) {
				$this->Session->setFlash(__('The rawdeal card database has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rawdeal card database could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RawdealCardDatabase->exists($id)) {
			throw new NotFoundException(__('Invalid rawdeal card database'));
		}
		if ($this->request->is(array('post', 'put'))) {
		         
                $propertiesDomain = ClassRegistry::init('Propertie');	
				$imagesPath = $propertiesDomain->field('value', array('name'=>'IMAGES_WRITE_PATH'));
 		        $filename   = $this->data['Document']['submittedfile']['name']; 
				$fileInPath = $imagesPath.$filename;		  
		        if (move_uploaded_file($this->data['Document']['submittedfile']['tmp_name'],$fileInPath)) {
				    $this->request->data['RawdealCardDatabase']['image_url'] = $filename;					
					$userId = $this->Auth->user('id');
					$this->request->data['RawdealCardDatabase']['user_edition_id'] = $userId;					
					if ($this->RawdealCardDatabase->save($this->request->data)) {
					    $this->Session->setFlash(__('The rawdeal card database has been saved.'));
						return $this->redirect(array('action' => 'index'));				
					} else {
						$this->Session->setFlash(__('The rawdeal card database could not be saved. Please, try again.'));
					}									
				}			
		} else {
			$options = array('conditions' => array('RawdealCardDatabase.' . $this->RawdealCardDatabase->primaryKey => $id));
			$this->request->data = $this->RawdealCardDatabase->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RawdealCardDatabase->id = $id;
		if (!$this->RawdealCardDatabase->exists()) {
			throw new NotFoundException(__('Invalid rawdeal card database'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RawdealCardDatabase->delete()) {
			$this->Session->setFlash(__('The rawdeal card database has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rawdeal card database could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}	
	
		public function isAuthorized($user) {
			// All registered users can add posts
			if (in_array($this->action, array('index', 'view', 'search')) ) {
				return true;
			}
			
			if ( $this->action === 'edit'){ 	
				 if (isset($user['role_id']) && (($user['role_id'] === "1"  ) || ($user['role_id'] === "2"  ))) {
						return true;
				 }		
		    }
		}

}

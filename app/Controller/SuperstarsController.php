<?php
App::uses('AppController', 'Controller');
/**
 * Superstars Controller
 *
 * @property Superstar $Superstar
 * @property PaginatorComponent $Paginator
 */
class SuperstarsController extends AppController {

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
		$this->Superstar->recursive = 0;
		$this->set('superstars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Superstar->exists($id)) {
			throw new NotFoundException(__('Invalid superstar'));
		}
		$options = array('conditions' => array('Superstar.' . $this->Superstar->primaryKey => $id));
		$this->set('superstar', $this->Superstar->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {		    		
			$this->Superstar->create();
			if ($this->Superstar->save($this->request->data)) {
				$this->Session->setFlash(__('The superstar has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The superstar could not be saved. Please, try again.'));
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
		if (!$this->Superstar->exists($id)) {
			throw new NotFoundException(__('Invalid superstar'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$propertiesDomain = ClassRegistry::init('Propertie');	
			$imagesPath = $propertiesDomain->field('value', array('name'=>'IMAGES_WRITE_PATH'));
	        $filename   = $this->data['Document']['submittedfile']['name']; 
			$fileInPath = $imagesPath.$filename;  
			if (move_uploaded_file($this->data['Document']['submittedfile']['tmp_name'],$fileInPath)) {
				$this->request->data['Superstar']['image_url'] = $filename;
				$userId = $this->Auth->user('id');
				$this->request->data['Superstar']['user_edition_id'] = $userId;
				if ($this->Superstar->save($this->request->data)) {
					$this->Session->setFlash(__('The superstar has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The superstar could not be saved. Please, try again.'));
				}								
			}						
		} else {
			$options = array('conditions' => array('Superstar.' . $this->Superstar->primaryKey => $id));
			$this->request->data = $this->Superstar->find('first', $options);
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
		$this->Superstar->id = $id;
		if (!$this->Superstar->exists()) {
			throw new NotFoundException(__('Invalid superstar'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Superstar->delete()) {
			$this->Session->setFlash(__('The superstar has been deleted.'));
		} else {
			$this->Session->setFlash(__('The superstar could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function isAuthorized($user) {
	
		if (in_array($this->action, array('index', 'view')) ) {
				return true;
		}
		
		if ( $this->action === 'edit'){ 
		
			 if (isset($user['role_id']) && (($user['role_id'] === "1"  ) || ($user['role_id'] === "2"  ))) {
					return true;
			 }		
		}

		return parent::isAuthorized($user);
	}
}

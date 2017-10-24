<?php
App::uses('AppController', 'Controller');
/**
 * SuperstarSpecifics Controller
 *
 * @property SuperstarSpecific $SuperstarSpecific
 * @property PaginatorComponent $Paginator
 */
class SuperstarSpecificsController extends AppController {

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
		$this->SuperstarSpecific->recursive = 0;
		$this->set('superstarSpecifics', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SuperstarSpecific->exists($id)) {
			throw new NotFoundException(__('Invalid superstar specific'));
		}
		$options = array('conditions' => array('SuperstarSpecific.' . $this->SuperstarSpecific->primaryKey => $id));
		$this->set('superstarSpecific', $this->SuperstarSpecific->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SuperstarSpecific->create();
			if ($this->SuperstarSpecific->save($this->request->data)) {
				$this->Session->setFlash(__('The superstar specific has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The superstar specific could not be saved. Please, try again.'));
			}
		}
		$superstars = $this->SuperstarSpecific->Superstar->find('list');
		$rawdealCardDatabases = $this->SuperstarSpecific->RawdealCardDatabase->find('list');
		$this->set(compact('superstars', 'rawdealCardDatabases'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SuperstarSpecific->exists($id)) {
			throw new NotFoundException(__('Invalid superstar specific'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SuperstarSpecific->save($this->request->data)) {
				$this->Session->setFlash(__('The superstar specific has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The superstar specific could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SuperstarSpecific.' . $this->SuperstarSpecific->primaryKey => $id));
			$this->request->data = $this->SuperstarSpecific->find('first', $options);
		}
		$superstars = $this->SuperstarSpecific->Superstar->find('list');
		$rawdealCardDatabases = $this->SuperstarSpecific->RawdealCardDatabase->find('list');
		$this->set(compact('superstars', 'rawdealCardDatabases'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SuperstarSpecific->id = $id;
		if (!$this->SuperstarSpecific->exists()) {
			throw new NotFoundException(__('Invalid superstar specific'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SuperstarSpecific->delete()) {
			$this->Session->setFlash(__('The superstar specific has been deleted.'));
		} else {
			$this->Session->setFlash(__('The superstar specific could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

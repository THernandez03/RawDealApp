<?php
App::uses('AppController', 'Controller');
/**
 * CardTypes Controller
 *
 * @property CardType $CardType
 * @property PaginatorComponent $Paginator
 */
class CardTypesController extends AppController {

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
		$this->CardType->recursive = 0;
		$this->set('cardTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CardType->exists($id)) {
			throw new NotFoundException(__('Invalid card type'));
		}
		$options = array('conditions' => array('CardType.' . $this->CardType->primaryKey => $id));
		$this->set('cardType', $this->CardType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CardType->create();
			if ($this->CardType->save($this->request->data)) {
				$this->Session->setFlash(__('The card type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card type could not be saved. Please, try again.'));
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
		if (!$this->CardType->exists($id)) {
			throw new NotFoundException(__('Invalid card type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CardType->save($this->request->data)) {
				$this->Session->setFlash(__('The card type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CardType.' . $this->CardType->primaryKey => $id));
			$this->request->data = $this->CardType->find('first', $options);
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
		$this->CardType->id = $id;
		if (!$this->CardType->exists()) {
			throw new NotFoundException(__('Invalid card type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CardType->delete()) {
			$this->Session->setFlash(__('The card type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The card type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
		public function isAuthorized($user) {
		// All registered users can add posts
		if ($this->action === 'add' || $this->action === 'index' || $this->action === 'edit'  ) {
			return true;
		}

		return parent::isAuthorized($user);
	}
}

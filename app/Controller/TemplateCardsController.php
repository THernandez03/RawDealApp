<?php
App::uses('AppController', 'Controller');
/**
 * TemplateCards Controller
 *
 * @property TemplateCard $TemplateCard
 * @property PaginatorComponent $Paginator
 */
class TemplateCardsController extends AppController {

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
		$this->TemplateCard->recursive = 0;
		$this->set('templateCards', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TemplateCard->exists($id)) {
			throw new NotFoundException(__('Invalid template card'));
		}
		$options = array('conditions' => array('TemplateCard.' . $this->TemplateCard->primaryKey => $id));
		$this->set('templateCard', $this->TemplateCard->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TemplateCard->create();
			if ($this->TemplateCard->save($this->request->data)) {
				$this->Session->setFlash(__('The template card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template card could not be saved. Please, try again.'));
			}
		}
		$templates = $this->TemplateCard->Template->find('list');
		$rawdealCardDatabases = $this->TemplateCard->RawdealCardDatabase->find('list');
		$this->set(compact('templates', 'rawdealCardDatabases'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TemplateCard->exists($id)) {
			throw new NotFoundException(__('Invalid template card'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TemplateCard->save($this->request->data)) {
				$this->Session->setFlash(__('The template card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template card could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TemplateCard.' . $this->TemplateCard->primaryKey => $id));
			$this->request->data = $this->TemplateCard->find('first', $options);
		}
		$templates = $this->TemplateCard->Template->find('list');
		$rawdealCardDatabases = $this->TemplateCard->RawdealCardDatabase->find('list');
		$this->set(compact('templates', 'rawdealCardDatabases'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TemplateCard->id = $id;
		if (!$this->TemplateCard->exists()) {
			throw new NotFoundException(__('Invalid template card'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TemplateCard->delete()) {
			$this->Session->setFlash(__('The template card has been deleted.'));
		} else {
			$this->Session->setFlash(__('The template card could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

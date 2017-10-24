<?php
App::uses('AppController', 'Controller');
/**
 * Feriados Controller
 *
 * @property Feriado $Feriado
 * @property PaginatorComponent $Paginator
 */
class FeriadosController extends AppController {

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
		$this->Feriado->recursive = 0;
		$this->set('feriados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Feriado->exists($id)) {
			throw new NotFoundException(__('Invalid feriado'));
		}
		$options = array('conditions' => array('Feriado.' . $this->Feriado->primaryKey => $id));
		$this->set('feriado', $this->Feriado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Feriado->create();
			if ($this->Feriado->save($this->request->data)) {
				$this->Session->setFlash(__('The feriado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feriado could not be saved. Please, try again.'));
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
		if (!$this->Feriado->exists($id)) {
			throw new NotFoundException(__('Invalid feriado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Feriado->save($this->request->data)) {
				$this->Session->setFlash(__('The feriado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feriado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Feriado.' . $this->Feriado->primaryKey => $id));
			$this->request->data = $this->Feriado->find('first', $options);
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
		$this->Feriado->id = $id;
		if (!$this->Feriado->exists()) {
			throw new NotFoundException(__('Invalid feriado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Feriado->delete()) {
			$this->Session->setFlash(__('The feriado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The feriado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * DeckCards Controller
 *
 * @property DeckCard $DeckCard
 * @property PaginatorComponent $Paginator
 */
class DeckCardsController extends AppController {

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
		$this->DeckCard->recursive = 0;
		$this->set('deckCards', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DeckCard->exists($id)) {
			throw new NotFoundException(__('Invalid deck card'));
		}
		$options = array('conditions' => array('DeckCard.' . $this->DeckCard->primaryKey => $id));
		$this->set('deckCard', $this->DeckCard->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DeckCard->create();
			if ($this->DeckCard->save($this->request->data)) {
				$this->Session->setFlash(__('The card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card could not be saved. Please, try again.'));
			}
		}
		$decks = $this->DeckCard->Deck->find('list');
		$rawdealCardDatabases = $this->DeckCard->RawdealCardDatabase->find('list');
		$this->set(compact('decks', 'rawdealCardDatabases'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DeckCard->exists($id)) {
			throw new NotFoundException(__('Invalid deck card'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DeckCard->save($this->request->data)) {
				$this->Session->setFlash(__('The deck card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deck card could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DeckCard.' . $this->DeckCard->primaryKey => $id));
			$this->request->data = $this->DeckCard->find('first', $options);
		}
		$decks = $this->DeckCard->Deck->find('list');
		$rawdealCardDatabases = $this->DeckCard->RawdealCardDatabase->find('list');
		$this->set(compact('decks', 'rawdealCardDatabases'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DeckCard->id = $id;
		if (!$this->DeckCard->exists()) {
			throw new NotFoundException(__('Invalid deck card'));
		}		
		$deckId = $this->DeckCard->field('deck_id');
		
		$this->request->allowMethod('post', 'delete');
		if ($this->DeckCard->delete()) {
			$this->Session->setFlash(__('Se quitó la carta del mazo.'));
		} else {
			$this->Session->setFlash(__('Hubo un problema. No se pudo quitar la carta del mazo.'));
		}
		return $this->redirect(array('controller'=>'decks','action' => 'view',$deckId));
	}
	
		
	public function anotherOne($id = null){
	   $this->DeckCard->id = $id;
	   $cardId = $this->DeckCard->field('rawdeal_card_database_id');
	   $deckId = $this->DeckCard->field('deck_id');
	   	   
	   $this->request->data['DeckCard']['rawdeal_card_database_id']  = $cardId;
	   $this->request->data['DeckCard']['deck_id']  = $deckId;
	   $this->DeckCard->create();
		if ($this->DeckCard->save($this->request->data)) {
			$this->Session->setFlash(__('The card has been added.'));
			return $this->redirect(array('controller'=>'decks','action' => 'view',$deckId));
		} else {
			$this->Session->setFlash(__('The card could not be added. Please, try again.'));
		}
	   
	   
	}
	
	public function isAuthorized($user) {
		// All registered users can add posts
		if ($this->action === 'add' || $this->action === 'anotherOne') {
			return true;
		}
		
		// The owner of a post can edit and delete it
		if (in_array($this->action, array('edit', 'delete', 'view'))) {
			$postId = (int) $this->request->params['pass'][0];                        
			$deckId = $this->DeckCard->field('deck_id', array('id' => $postId));
                        $deckEntity = ClassRegistry::init('Deck');                            
			if ($deckEntity->isOwnedBy($deckId, $user['id'])) {
				return true;
			}
		}

		return parent::isAuthorized($user);
	}
}

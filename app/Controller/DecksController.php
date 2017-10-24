<?php
App::uses('AppController', 'Controller');
/**
 * Decks Controller
 *
 * @property Deck $Deck
 * @property PaginatorComponent $Paginator
 */
class DecksController extends AppController {

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
		$this->Deck->recursive = 0;
		$userId = $this->Auth->user('id');
		$this->Paginator->settings = array('conditions'=>array('user_id' => $userId));
		$this->set('decks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Deck->exists($id)) {
			throw new NotFoundException(__('Invalid deck'));
		}
		$options = array('conditions' => array('Deck.' . $this->Deck->primaryKey => $id));
		$deck = $this->Deck->find('first', $options);
		
		$deckCardEntity = ClassRegistry::init('DeckCard');
		$viewDeckEntity = ClassRegistry::init('ViewDeckCard');
		
		$condiciones = array('deck_id' => $id, 'prematch'=> true, 'hybrid' => false);		
		$countPrematch = $deckCardEntity->find('count', array('conditions' => $condiciones) );
		$prematch = $viewDeckEntity->find('all', array('conditions' => $condiciones) );
		$condiciones = array('deck_id' => $id, 'midmatch'=> true, 'prematch' => false);		
		$countMidmatch = $deckCardEntity->find('count', array('conditions' => $condiciones) );
		$midmatch = $viewDeckEntity->find('all', array('conditions' => $condiciones) );
		$condiciones = array('deck_id' => $id, 'midmatch'=> true, 'prematch'=> true, 'hybrid' => true);		
		$countBacklashHybrid = $deckCardEntity->find('count', array('conditions' => $condiciones) );
		$backlashHybrid = $viewDeckEntity->find('all', array('conditions' => $condiciones) );
		$condiciones = array('deck_id' => $id, 'backstage'=> true);		
		$countBackstage = $deckCardEntity->find('count', array('conditions' => $condiciones) );
		$backstage = $viewDeckEntity->find('all', array('conditions' => $condiciones) );
		
		$condiciones = array('deck_id' => $id, 'midmatch'=> false, 'prematch' => false, 'backstage' => false);		
		$countArsenal= $deckCardEntity->find('count', array('conditions' => $condiciones) );
		$countBacklash = $countBacklashHybrid + $countMidmatch + $countPrematch;

		        
		$options = array('conditions' => array('ViewDeckCard.deck_id' => $id, 'midmatch'=> false, 'prematch' => false, 'backstage' => false),'order'=>array('text_type','card_name'));
		$viewDeckCards = $viewDeckEntity->find('all',$options);                
		$this->set(compact('deck','viewDeckCards','countPrematch','countMidmatch','countBacklashHybrid','countArsenal','countBackstage', 'countBacklash', 'backstage','prematch','midmatch','backlashHybrid'));
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	
	    $templateDomain = ClassRegistry::init('Template');
		$this->set('templateReversals', $templateDomain->find('list'));
		
		if ($this->request->is('post')) {	
		$userId = $this->Auth->user('id');
		$this->request->data['Deck']['user_id']  = $userId;
			$this->Deck->create();
			if ($this->Deck->save($this->request->data)) {
				
				$deckId = $this->Deck->id;
				$superstar = $this->request->data['Deck']['superstar_id'];			
				$selectedPacks  = $this->request->data['Deck']['hiddenPackReversal'];
                $selectedPacksId = explode('#',$selectedPacks);
				
				foreach($selectedPacksId as $selectedPack) {
					$templateCardsDomain = ClassRegistry::init('TemplateCards');
					$conditions = array('template_id' => $selectedPack);
					$templateCards = $templateCardsDomain->find('all', array('conditions' => $conditions));		
					
					foreach( $templateCards as $detailTemplate ) {									
						$cardId = $detailTemplate['TemplateCards']['rawdeal_card_database_id'];
						$deckCardsEntity = ClassRegistry::init('DeckCard');		
						$deckCardsEntity->set(array('rawdeal_card_database_id' => $cardId, 'deck_id' => $deckId));
						$deckCardsEntity->saveAll();	   					
					}          
				}
				$superstarSpecificsDomain = ClassRegistry::init('SuperstarSpecifics');
				$conditions = array('superstar_id' => $superstar);
				$superstarSpecifics = $superstarSpecificsDomain->find('all', array('conditions' => $conditions));	
				
				foreach( $superstarSpecifics as $detailSpecific ) {									
					$cardId = $detailSpecific['SuperstarSpecifics']['rawdeal_card_database_id'];
                    $deckCardsEntity = ClassRegistry::init('DeckCard');		
					$deckCardsEntity->set(array('rawdeal_card_database_id' => $cardId, 'deck_id' => $deckId));
					$deckCardsEntity->saveAll();	   					
				}    
			    
				$this->Session->setFlash(__('The tech has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deck could not be saved. Please, try again.'));
			}
			
			
			/*
			$this->Persona->Redmundo->id = $redmundo_id;
                $redesmundo = $this->Persona->Redmundo->read();
			
						
			for($i=0;$i<$cantidad;$i++){	
				$deckCardsEntity = ClassRegistry::init('DeckCard');		
				$deckCardsEntity->set(array('rawdeal_card_database_id' => $cardId, 'deck_id' => $deckId));
				$deckCardsEntity->saveAll();
			}	
			*/
			
			
			
		}
		$superstars = $this->Deck->Superstar->find('list');
		$this->set(compact('superstars'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Deck->exists($id)) {
			throw new NotFoundException(__('Invalid deck'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Deck->save($this->request->data)) {
				$this->Session->setFlash(__('The deck has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deck could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Deck.' . $this->Deck->primaryKey => $id));
			$this->request->data = $this->Deck->find('first', $options);
		}
		$users = $this->Deck->User->find('list');
		$superstars = $this->Deck->Superstar->find('list');
		$this->set(compact('users', 'superstars'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Deck->id = $id;
		if (!$this->Deck->exists()) {
			throw new NotFoundException(__('Invalid deck'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Deck->delete()) {
			$this->Session->setFlash(__('The deck has been deleted.'));
		} else {
			$this->Session->setFlash(__('The deck could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function addCardsToDeck(){	

	    $deckId  = $this->request->data['Deck']['id'];
		$cantidad  = $this->request->data['Deck']['cantidadCards'];
		$cardId  = $this->request->data['Deck']['cardId'];	
		$keyword  = $this->request->data['Deck']['keywordValue'];	
		$currentPage = $this->request->data['Deck']['pageValue'];	
			
		for($i=0;$i<$cantidad;$i++){	
			$deckCardsEntity = ClassRegistry::init('DeckCard');		
		        $deckCardsEntity->set(array('rawdeal_card_database_id' => $cardId, 'deck_id' => $deckId));
			$deckCardsEntity->saveAll();
		}			
		
		$this->Session->setFlash(__('Cartas agregadas exitosamente en mazo'));
		return $this->redirect(array('controller' => 'rawdeal_card_databases','action' => 'index','keywords' => $keyword,'page' => $currentPage));
	}
	
	public function isAuthorized($user) {
		// All registered users can add posts
		if ($this->action === 'add' || $this->action === 'index' || $this->action === 'addCardsToDeck' ) {
			return true;
		}
		
		// The owner of a post can edit and delete it
		if (in_array($this->action, array('edit', 'delete', 'view'))) {
			$postId = (int) $this->request->params['pass'][0];
			if ($this->Deck->isOwnedBy($postId, $user['id'])) {
				return true;
			}
		}

		return parent::isAuthorized($user);
	}
}

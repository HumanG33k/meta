<?php
App::uses('AppController', 'Controller');
/**
 * PseudoElements Controller
 *
 * @property PseudoElement $PseudoElement
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class PseudoElementsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Paginator');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Acl', 'Auth', 'Security', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PseudoElement->recursive = 0;
		$this->set('pseudoElements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PseudoElement->exists($id)) {
			throw new NotFoundException(__('Invalid pseudo element'));
		}
		$options = array('conditions' => array('PseudoElement.' . $this->PseudoElement->primaryKey => $id));
		$this->set('pseudoElement', $this->PseudoElement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PseudoElement->create();
			if ($this->PseudoElement->save($this->request->data)) {
				$this->Session->setFlash(__('The pseudo element has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pseudo element could not be saved. Please, try again.'));
			}
		}
		$prefixes = $this->PseudoElement->Prefixe->find('list');
		$this->set(compact('prefixes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PseudoElement->exists($id)) {
			throw new NotFoundException(__('Invalid pseudo element'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PseudoElement->save($this->request->data)) {
				$this->Session->setFlash(__('The pseudo element has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pseudo element could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PseudoElement.' . $this->PseudoElement->primaryKey => $id));
			$this->request->data = $this->PseudoElement->find('first', $options);
		}
		$prefixes = $this->PseudoElement->Prefixe->find('list');
		$this->set(compact('prefixes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PseudoElement->id = $id;
		if (!$this->PseudoElement->exists()) {
			throw new NotFoundException(__('Invalid pseudo element'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PseudoElement->delete()) {
			$this->Session->setFlash(__('The pseudo element has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pseudo element could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PseudoElement->recursive = 0;
		$this->set('pseudoElements', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PseudoElement->exists($id)) {
			throw new NotFoundException(__('Invalid pseudo element'));
		}
		$options = array('conditions' => array('PseudoElement.' . $this->PseudoElement->primaryKey => $id));
		$this->set('pseudoElement', $this->PseudoElement->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PseudoElement->create();
			if ($this->PseudoElement->save($this->request->data)) {
				$this->Session->setFlash(__('The pseudo element has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pseudo element could not be saved. Please, try again.'));
			}
		}
		$prefixes = $this->PseudoElement->Prefixe->find('list');
		$this->set(compact('prefixes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PseudoElement->exists($id)) {
			throw new NotFoundException(__('Invalid pseudo element'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PseudoElement->save($this->request->data)) {
				$this->Session->setFlash(__('The pseudo element has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pseudo element could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PseudoElement.' . $this->PseudoElement->primaryKey => $id));
			$this->request->data = $this->PseudoElement->find('first', $options);
		}
		$prefixes = $this->PseudoElement->Prefixe->find('list');
		$this->set(compact('prefixes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->PseudoElement->id = $id;
		if (!$this->PseudoElement->exists()) {
			throw new NotFoundException(__('Invalid pseudo element'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PseudoElement->delete()) {
			$this->Session->setFlash(__('The pseudo element has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pseudo element could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Rules Controller
 *
 * @property Rule $Rule
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class RulesController extends AppController {

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
		$this->Rule->recursive = 0;
		$this->set('rules', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rule->exists($id)) {
			throw new NotFoundException(__('Invalid rule'));
		}
		$options = array('conditions' => array('Rule.' . $this->Rule->primaryKey => $id));
		$this->set('rule', $this->Rule->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rule->create();
			if ($this->Rule->save($this->request->data)) {
				$this->Session->setFlash(__('The rule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rule could not be saved. Please, try again.'));
			}
		}
		$prefixes = $this->Rule->Prefixe->find('list');
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
		if (!$this->Rule->exists($id)) {
			throw new NotFoundException(__('Invalid rule'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rule->save($this->request->data)) {
				$this->Session->setFlash(__('The rule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rule.' . $this->Rule->primaryKey => $id));
			$this->request->data = $this->Rule->find('first', $options);
		}
		$prefixes = $this->Rule->Prefixe->find('list');
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
		$this->Rule->id = $id;
		if (!$this->Rule->exists()) {
			throw new NotFoundException(__('Invalid rule'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rule->delete()) {
			$this->Session->setFlash(__('The rule has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rule could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Rule->recursive = 0;
		$this->set('rules', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Rule->exists($id)) {
			throw new NotFoundException(__('Invalid rule'));
		}
		$options = array('conditions' => array('Rule.' . $this->Rule->primaryKey => $id));
		$this->set('rule', $this->Rule->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Rule->create();
			if ($this->Rule->save($this->request->data)) {
				$this->Session->setFlash(__('The rule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rule could not be saved. Please, try again.'));
			}
		}
		$prefixes = $this->Rule->Prefixe->find('list');
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
		if (!$this->Rule->exists($id)) {
			throw new NotFoundException(__('Invalid rule'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rule->save($this->request->data)) {
				$this->Session->setFlash(__('The rule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rule.' . $this->Rule->primaryKey => $id));
			$this->request->data = $this->Rule->find('first', $options);
		}
		$prefixes = $this->Rule->Prefixe->find('list');
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
		$this->Rule->id = $id;
		if (!$this->Rule->exists()) {
			throw new NotFoundException(__('Invalid rule'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rule->delete()) {
			$this->Session->setFlash(__('The rule has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rule could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

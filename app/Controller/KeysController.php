<?php
App::uses('AppController', 'Controller');
/**
 * Keys Controller
 *
 * @property Key $Key
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class KeysController extends AppController {

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
		$this->Key->recursive = 0;
		$this->set('keys', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Key->exists($id)) {
			throw new NotFoundException(__('Invalid key'));
		}
		$options = array('conditions' => array('Key.' . $this->Key->primaryKey => $id));
		$this->set('key', $this->Key->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Key->create();
			if ($this->Key->save($this->request->data)) {
				$this->Session->setFlash(__('The key has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The key could not be saved. Please, try again.'));
			}
		}
		$elements = $this->Key->Element->find('list');
		$this->set(compact('elements'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Key->exists($id)) {
			throw new NotFoundException(__('Invalid key'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Key->save($this->request->data)) {
				$this->Session->setFlash(__('The key has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The key could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Key.' . $this->Key->primaryKey => $id));
			$this->request->data = $this->Key->find('first', $options);
		}
		$elements = $this->Key->Element->find('list');
		$this->set(compact('elements'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Key->id = $id;
		if (!$this->Key->exists()) {
			throw new NotFoundException(__('Invalid key'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Key->delete()) {
			$this->Session->setFlash(__('The key has been deleted.'));
		} else {
			$this->Session->setFlash(__('The key could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Key->recursive = 0;
		$this->set('keys', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Key->exists($id)) {
			throw new NotFoundException(__('Invalid key'));
		}
		$options = array('conditions' => array('Key.' . $this->Key->primaryKey => $id));
		$this->set('key', $this->Key->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Key->create();
			if ($this->Key->save($this->request->data)) {
				$this->Session->setFlash(__('The key has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The key could not be saved. Please, try again.'));
			}
		}
		$elements = $this->Key->Element->find('list');
		$this->set(compact('elements'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Key->exists($id)) {
			throw new NotFoundException(__('Invalid key'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Key->save($this->request->data)) {
				$this->Session->setFlash(__('The key has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The key could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Key.' . $this->Key->primaryKey => $id));
			$this->request->data = $this->Key->find('first', $options);
		}
		$elements = $this->Key->Element->find('list');
		$this->set(compact('elements'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Key->id = $id;
		if (!$this->Key->exists()) {
			throw new NotFoundException(__('Invalid key'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Key->delete()) {
			$this->Session->setFlash(__('The key has been deleted.'));
		} else {
			$this->Session->setFlash(__('The key could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

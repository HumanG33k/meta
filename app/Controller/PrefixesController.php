<?php
App::uses('AppController', 'Controller');
/**
 * Prefixes Controller
 *
 * @property Prefix $Prefix
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class PrefixesController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	//public $helpers = array('PAginator');

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator', 'Acl', 'Auth', 'Security', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Prefix->recursive = 0;
		$this->set('prefixes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Prefix->exists($id)) {
			throw new NotFoundException(__('Invalid prefix'));
		}
		$options = array('conditions' => array('Prefix.' . $this->Prefix->primaryKey => $id));
		$this->set('prefix', $this->Prefix->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prefix->create();
			if ($this->Prefix->save($this->request->data)) {
				$this->Session->setFlash(__('The prefix has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prefix could not be saved. Please, try again.'));
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
		if (!$this->Prefix->exists($id)) {
			throw new NotFoundException(__('Invalid prefix'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Prefix->save($this->request->data)) {
				$this->Session->setFlash(__('The prefix has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prefix could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Prefix.' . $this->Prefix->primaryKey => $id));
			$this->request->data = $this->Prefix->find('first', $options);
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
		$this->Prefix->id = $id;
		if (!$this->Prefix->exists()) {
			throw new NotFoundException(__('Invalid prefix'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Prefix->delete()) {
			$this->Session->setFlash(__('The prefix has been deleted.'));
		} else {
			$this->Session->setFlash(__('The prefix could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Prefix->recursive = 0;
		$this->set('prefixes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Prefix->exists($id)) {
			throw new NotFoundException(__('Invalid prefix'));
		}
		$options = array('conditions' => array('Prefix.' . $this->Prefix->primaryKey => $id));
		$this->set('prefix', $this->Prefix->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Prefix->create();
			if ($this->Prefix->save($this->request->data)) {
				$this->Session->setFlash(__('The prefix has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prefix could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Prefix->exists($id)) {
			throw new NotFoundException(__('Invalid prefix'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Prefix->save($this->request->data)) {
				$this->Session->setFlash(__('The prefix has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prefix could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Prefix.' . $this->Prefix->primaryKey => $id));
			$this->request->data = $this->Prefix->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Prefix->id = $id;
		if (!$this->Prefix->exists()) {
			throw new NotFoundException(__('Invalid prefix'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Prefix->delete()) {
			$this->Session->setFlash(__('The prefix has been deleted.'));
		} else {
			$this->Session->setFlash(__('The prefix could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

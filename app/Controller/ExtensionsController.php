<?php
App::uses('AppController', 'Controller');
/**
 * Extensions Controller
 *
 * @property Extension $Extension
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property SecurityComponent $Security
 * @property AuthComponent $Auth
 * @property SessionComponent $Session
 */
class ExtensionsController extends AppController {

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
	public $components = array('Paginator', 'Acl', 'Security', 'Auth', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Extension->recursive = 0;
		$this->set('extensions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Extension->exists($id)) {
			throw new NotFoundException(__('Invalid extension'));
		}
		$options = array('conditions' => array('Extension.' . $this->Extension->primaryKey => $id));
		$this->set('extension', $this->Extension->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Extension->create();
			if ($this->Extension->save($this->request->data)) {
				$this->Session->setFlash(__('The extension has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extension could not be saved. Please, try again.'));
			}
		}
		$mimes = $this->Extension->Mime->find('list');
		$this->set(compact('mimes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Extension->exists($id)) {
			throw new NotFoundException(__('Invalid extension'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Extension->save($this->request->data)) {
				$this->Session->setFlash(__('The extension has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extension could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Extension.' . $this->Extension->primaryKey => $id));
			$this->request->data = $this->Extension->find('first', $options);
		}
		$mimes = $this->Extension->Mime->find('list');
		$this->set(compact('mimes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Extension->id = $id;
		if (!$this->Extension->exists()) {
			throw new NotFoundException(__('Invalid extension'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Extension->delete()) {
			$this->Session->setFlash(__('The extension has been deleted.'));
		} else {
			$this->Session->setFlash(__('The extension could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Extension->recursive = 0;
		$this->set('extensions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Extension->exists($id)) {
			throw new NotFoundException(__('Invalid extension'));
		}
		$options = array('conditions' => array('Extension.' . $this->Extension->primaryKey => $id));
		$this->set('extension', $this->Extension->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Extension->create();
			if ($this->Extension->save($this->request->data)) {
				$this->Session->setFlash(__('The extension has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extension could not be saved. Please, try again.'));
			}
		}
		$mimes = $this->Extension->Mime->find('list');
		$this->set(compact('mimes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Extension->exists($id)) {
			throw new NotFoundException(__('Invalid extension'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Extension->save($this->request->data)) {
				$this->Session->setFlash(__('The extension has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extension could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Extension.' . $this->Extension->primaryKey => $id));
			$this->request->data = $this->Extension->find('first', $options);
		}
		$mimes = $this->Extension->Mime->find('list');
		$this->set(compact('mimes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Extension->id = $id;
		if (!$this->Extension->exists()) {
			throw new NotFoundException(__('Invalid extension'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Extension->delete()) {
			$this->Session->setFlash(__('The extension has been deleted.'));
		} else {
			$this->Session->setFlash(__('The extension could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

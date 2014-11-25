<?php
App::uses('AppController', 'Controller');
/**
 * Ips Controller
 *
 * @property Ip $Ip
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class IpsController extends AppController {

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
		$this->Ip->recursive = 0;
		$this->set('ips', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ip->exists($id)) {
			throw new NotFoundException(__('Invalid ip'));
		}
		$options = array('conditions' => array('Ip.' . $this->Ip->primaryKey => $id));
		$this->set('ip', $this->Ip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ip->create();
			if ($this->Ip->save($this->request->data)) {
				$this->Session->setFlash(__('The ip has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ip could not be saved. Please, try again.'));
			}
		}
		$users = $this->Ip->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ip->exists($id)) {
			throw new NotFoundException(__('Invalid ip'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ip->save($this->request->data)) {
				$this->Session->setFlash(__('The ip has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ip.' . $this->Ip->primaryKey => $id));
			$this->request->data = $this->Ip->find('first', $options);
		}
		$users = $this->Ip->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ip->id = $id;
		if (!$this->Ip->exists()) {
			throw new NotFoundException(__('Invalid ip'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ip->delete()) {
			$this->Session->setFlash(__('The ip has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ip could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Ip->recursive = 0;
		$this->set('ips', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Ip->exists($id)) {
			throw new NotFoundException(__('Invalid ip'));
		}
		$options = array('conditions' => array('Ip.' . $this->Ip->primaryKey => $id));
		$this->set('ip', $this->Ip->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Ip->create();
			if ($this->Ip->save($this->request->data)) {
				$this->Session->setFlash(__('The ip has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ip could not be saved. Please, try again.'));
			}
		}
		$users = $this->Ip->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Ip->exists($id)) {
			throw new NotFoundException(__('Invalid ip'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ip->save($this->request->data)) {
				$this->Session->setFlash(__('The ip has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ip.' . $this->Ip->primaryKey => $id));
			$this->request->data = $this->Ip->find('first', $options);
		}
		$users = $this->Ip->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Ip->id = $id;
		if (!$this->Ip->exists()) {
			throw new NotFoundException(__('Invalid ip'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ip->delete()) {
			$this->Session->setFlash(__('The ip has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ip could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

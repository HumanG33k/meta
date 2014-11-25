<?php
App::uses('AppController', 'Controller');
/**
 * Entities Controller
 *
 * @property Entity $Entity
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property SecurityComponent $Security
 * @property AuthComponent $Auth
 * @property SessionComponent $Session
 */
class EntitiesController extends AppController {

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
		$this->Entity->recursive = 0;
		$this->set('entities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Entity->exists($id)) {
			throw new NotFoundException(__('Invalid entity'));
		}
		$options = array('conditions' => array('Entity.' . $this->Entity->primaryKey => $id));
		$this->set('entity', $this->Entity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entity->create();
			if ($this->Entity->save($this->request->data)) {
				$this->Session->setFlash(__('The entity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entity could not be saved. Please, try again.'));
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
		if (!$this->Entity->exists($id)) {
			throw new NotFoundException(__('Invalid entity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entity->save($this->request->data)) {
				$this->Session->setFlash(__('The entity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entity.' . $this->Entity->primaryKey => $id));
			$this->request->data = $this->Entity->find('first', $options);
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
		$this->Entity->id = $id;
		if (!$this->Entity->exists()) {
			throw new NotFoundException(__('Invalid entity'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Entity->delete()) {
			$this->Session->setFlash(__('The entity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The entity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Entity->recursive = 0;
		$this->set('entities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Entity->exists($id)) {
			throw new NotFoundException(__('Invalid entity'));
		}
		$options = array('conditions' => array('Entity.' . $this->Entity->primaryKey => $id));
		$this->set('entity', $this->Entity->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Entity->create();
			if ($this->Entity->save($this->request->data)) {
				$this->Session->setFlash(__('The entity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entity could not be saved. Please, try again.'));
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
		if (!$this->Entity->exists($id)) {
			throw new NotFoundException(__('Invalid entity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entity->save($this->request->data)) {
				$this->Session->setFlash(__('The entity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entity.' . $this->Entity->primaryKey => $id));
			$this->request->data = $this->Entity->find('first', $options);
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
		$this->Entity->id = $id;
		if (!$this->Entity->exists()) {
			throw new NotFoundException(__('Invalid entity'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Entity->delete()) {
			$this->Session->setFlash(__('The entity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The entity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

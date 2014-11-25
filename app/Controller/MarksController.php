<?php
App::uses('AppController', 'Controller');
/**
 * Marks Controller
 *
 * @property Mark $Mark
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class MarksController extends AppController {

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
		$this->Mark->recursive = 0;
		$this->set('marks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mark->exists($id)) {
			throw new NotFoundException(__('Invalid mark'));
		}
		$options = array('conditions' => array('Mark.' . $this->Mark->primaryKey => $id));
		$this->set('mark', $this->Mark->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mark->create();
			if ($this->Mark->save($this->request->data)) {
				$this->Session->setFlash(__('The mark has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mark could not be saved. Please, try again.'));
			}
		}
		$htmlTypes = $this->Mark->HtmlType->find('list');
		$attributes = $this->Mark->Attribute->find('list');
		$this->set(compact('htmlTypes', 'attributes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mark->exists($id)) {
			throw new NotFoundException(__('Invalid mark'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mark->save($this->request->data)) {
				$this->Session->setFlash(__('The mark has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mark could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mark.' . $this->Mark->primaryKey => $id));
			$this->request->data = $this->Mark->find('first', $options);
		}
		$htmlTypes = $this->Mark->HtmlType->find('list');
		$attributes = $this->Mark->Attribute->find('list');
		$this->set(compact('htmlTypes', 'attributes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mark->id = $id;
		if (!$this->Mark->exists()) {
			throw new NotFoundException(__('Invalid mark'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mark->delete()) {
			$this->Session->setFlash(__('The mark has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mark could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Mark->recursive = 0;
		$this->set('marks', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Mark->exists($id)) {
			throw new NotFoundException(__('Invalid mark'));
		}
		$options = array('conditions' => array('Mark.' . $this->Mark->primaryKey => $id));
		$this->set('mark', $this->Mark->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Mark->create();
			if ($this->Mark->save($this->request->data)) {
				$this->Session->setFlash(__('The mark has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mark could not be saved. Please, try again.'));
			}
		}
		$htmlTypes = $this->Mark->HtmlType->find('list');
		$attributes = $this->Mark->Attribute->find('list');
		$this->set(compact('htmlTypes', 'attributes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Mark->exists($id)) {
			throw new NotFoundException(__('Invalid mark'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mark->save($this->request->data)) {
				$this->Session->setFlash(__('The mark has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mark could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mark.' . $this->Mark->primaryKey => $id));
			$this->request->data = $this->Mark->find('first', $options);
		}
		$htmlTypes = $this->Mark->HtmlType->find('list');
		$attributes = $this->Mark->Attribute->find('list');
		$this->set(compact('htmlTypes', 'attributes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Mark->id = $id;
		if (!$this->Mark->exists()) {
			throw new NotFoundException(__('Invalid mark'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mark->delete()) {
			$this->Session->setFlash(__('The mark has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mark could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

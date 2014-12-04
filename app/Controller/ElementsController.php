<?php
App::uses('AppController', 'Controller');
/**
 * Elements Controller
 *
 * @property Element $Element
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class ElementsController extends AppController {

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
	//public $components = array('Paginator', 'Acl', 'Auth', 'Security', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Element->recursive = 0;
		$this->set('elements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Element->exists($id)) {
			throw new NotFoundException(__('Invalid element'));
		}
		$options = array('conditions' => array('Element.' . $this->Element->primaryKey => $id));
		$this->set('element', $this->Element->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Element->create();
			if ($this->Element->save($this->request->data)) {
				$this->Session->setFlash(__('The element has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The element could not be saved. Please, try again.'));
			}
		}
		$marks = $this->Element->Mark->find('list');
		$contents = $this->Element->Content->find('list');
		$elements = $this->Element->Element->find('list');
		$attributes = $this->Element->Attribute->find('list');
		$keys = $this->Element->Key->find('list');
		$pages = $this->Element->Page->find('list');
		$this->set(compact('marks', 'contents', 'elements', 'attributes', 'keys', 'pages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Element->exists($id)) {
			throw new NotFoundException(__('Invalid element'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Element->save($this->request->data)) {
				$this->Session->setFlash(__('The element has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The element could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Element.' . $this->Element->primaryKey => $id));
			$this->request->data = $this->Element->find('first', $options);
		}
		$marks = $this->Element->Mark->find('list');
		$contents = $this->Element->Content->find('list');
		$elements = $this->Element->Element->find('list');
		$attributes = $this->Element->Attribute->find('list');
		$keys = $this->Element->Key->find('list');
		$pages = $this->Element->Page->find('list');
		$this->set(compact('marks', 'contents', 'elements', 'attributes', 'keys', 'pages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Element->id = $id;
		if (!$this->Element->exists()) {
			throw new NotFoundException(__('Invalid element'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Element->delete()) {
			$this->Session->setFlash(__('The element has been deleted.'));
		} else {
			$this->Session->setFlash(__('The element could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Element->recursive = 0;
		$this->set('elements', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Element->exists($id)) {
			throw new NotFoundException(__('Invalid element'));
		}
		$options = array('conditions' => array('Element.' . $this->Element->primaryKey => $id));
		$this->set('element', $this->Element->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Element->create();
			if ($this->Element->save($this->request->data)) {
				$this->Session->setFlash(__('The element has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The element could not be saved. Please, try again.'));
			}
		}
		$marks = $this->Element->Mark->find('list');
		$contents = $this->Element->Content->find('list');
		$elements = $this->Element->Element->find('list');
		$attributes = $this->Element->Attribute->find('list');
		$keys = $this->Element->Key->find('list');
		$pages = $this->Element->Page->find('list');
		$this->set(compact('marks', 'contents', 'elements', 'attributes', 'keys', 'pages'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Element->exists($id)) {
			throw new NotFoundException(__('Invalid element'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Element->save($this->request->data)) {
				$this->Session->setFlash(__('The element has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The element could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Element.' . $this->Element->primaryKey => $id));
			$this->request->data = $this->Element->find('first', $options);
		}
		$marks = $this->Element->Mark->find('list');
		$contents = $this->Element->Content->find('list');
		$elements = $this->Element->Element->find('list');
		$attributes = $this->Element->Attribute->find('list');
		$keys = $this->Element->Key->find('list');
		$pages = $this->Element->Page->find('list');
		$this->set(compact('marks', 'contents', 'elements', 'attributes', 'keys', 'pages'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Element->id = $id;
		if (!$this->Element->exists()) {
			throw new NotFoundException(__('Invalid element'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Element->delete()) {
			$this->Session->setFlash(__('The element has been deleted.'));
		} else {
			$this->Session->setFlash(__('The element could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

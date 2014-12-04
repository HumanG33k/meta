<?php
App::uses('AppController', 'Controller');
/**
 * TypeAttributes Controller
 *
 * @property TypeAttribute $TypeAttribute
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class TypeAttributesController extends AppController {

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
		$this->TypeAttribute->recursive = 0;
		$this->set('typeAttributes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TypeAttribute->exists($id)) {
			throw new NotFoundException(__('Invalid type attribute'));
		}
		$options = array('conditions' => array('TypeAttribute.' . $this->TypeAttribute->primaryKey => $id));
		$this->set('typeAttribute', $this->TypeAttribute->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TypeAttribute->create();
			if ($this->TypeAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The type attribute has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type attribute could not be saved. Please, try again.'));
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
		if (!$this->TypeAttribute->exists($id)) {
			throw new NotFoundException(__('Invalid type attribute'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TypeAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The type attribute has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type attribute could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TypeAttribute.' . $this->TypeAttribute->primaryKey => $id));
			$this->request->data = $this->TypeAttribute->find('first', $options);
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
		$this->TypeAttribute->id = $id;
		if (!$this->TypeAttribute->exists()) {
			throw new NotFoundException(__('Invalid type attribute'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TypeAttribute->delete()) {
			$this->Session->setFlash(__('The type attribute has been deleted.'));
		} else {
			$this->Session->setFlash(__('The type attribute could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TypeAttribute->recursive = 0;
		$this->set('typeAttributes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TypeAttribute->exists($id)) {
			throw new NotFoundException(__('Invalid type attribute'));
		}
		$options = array('conditions' => array('TypeAttribute.' . $this->TypeAttribute->primaryKey => $id));
		$this->set('typeAttribute', $this->TypeAttribute->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TypeAttribute->create();
			if ($this->TypeAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The type attribute has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type attribute could not be saved. Please, try again.'));
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
		if (!$this->TypeAttribute->exists($id)) {
			throw new NotFoundException(__('Invalid type attribute'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TypeAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The type attribute has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type attribute could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TypeAttribute.' . $this->TypeAttribute->primaryKey => $id));
			$this->request->data = $this->TypeAttribute->find('first', $options);
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
		$this->TypeAttribute->id = $id;
		if (!$this->TypeAttribute->exists()) {
			throw new NotFoundException(__('Invalid type attribute'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TypeAttribute->delete()) {
			$this->Session->setFlash(__('The type attribute has been deleted.'));
		} else {
			$this->Session->setFlash(__('The type attribute could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

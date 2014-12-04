<?php
App::uses('AppController', 'Controller');
/**
 * HtmlTypes Controller
 *
 * @property HtmlType $HtmlType
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property SecurityComponent $Security
 * @property AuthComponent $Auth
 * @property SessionComponent $Session
 */
class HtmlTypesController extends AppController {

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
	//public $components = array('Paginator', 'Acl', 'Security', 'Auth', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HtmlType->recursive = 0;
		$this->set('htmlTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HtmlType->exists($id)) {
			throw new NotFoundException(__('Invalid html type'));
		}
		$options = array('conditions' => array('HtmlType.' . $this->HtmlType->primaryKey => $id));
		$this->set('htmlType', $this->HtmlType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HtmlType->create();
			if ($this->HtmlType->save($this->request->data)) {
				$this->Session->setFlash(__('The html type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The html type could not be saved. Please, try again.'));
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
		if (!$this->HtmlType->exists($id)) {
			throw new NotFoundException(__('Invalid html type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HtmlType->save($this->request->data)) {
				$this->Session->setFlash(__('The html type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The html type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HtmlType.' . $this->HtmlType->primaryKey => $id));
			$this->request->data = $this->HtmlType->find('first', $options);
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
		$this->HtmlType->id = $id;
		if (!$this->HtmlType->exists()) {
			throw new NotFoundException(__('Invalid html type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HtmlType->delete()) {
			$this->Session->setFlash(__('The html type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The html type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->HtmlType->recursive = 0;
		$this->set('htmlTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HtmlType->exists($id)) {
			throw new NotFoundException(__('Invalid html type'));
		}
		$options = array('conditions' => array('HtmlType.' . $this->HtmlType->primaryKey => $id));
		$this->set('htmlType', $this->HtmlType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HtmlType->create();
			if ($this->HtmlType->save($this->request->data)) {
				$this->Session->setFlash(__('The html type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The html type could not be saved. Please, try again.'));
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
		if (!$this->HtmlType->exists($id)) {
			throw new NotFoundException(__('Invalid html type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HtmlType->save($this->request->data)) {
				$this->Session->setFlash(__('The html type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The html type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HtmlType.' . $this->HtmlType->primaryKey => $id));
			$this->request->data = $this->HtmlType->find('first', $options);
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
		$this->HtmlType->id = $id;
		if (!$this->HtmlType->exists()) {
			throw new NotFoundException(__('Invalid html type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HtmlType->delete()) {
			$this->Session->setFlash(__('The html type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The html type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

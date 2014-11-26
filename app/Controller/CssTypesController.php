<?php
App::uses('AppController', 'Controller');
/**
 * CssTypes Controller
 *
 * @property CssType $CssType
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property SecurityComponent $Security
 * @property AuthComponent $Auth
 * @property SessionComponent $Session
 */
class CssTypesController extends AppController {

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
	public $components = array('Paginator', /*'Acl',*/ 'Security',/* 'Auth', */'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CssType->recursive = 0;
		$this->set('cssTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CssType->exists($id)) {
			throw new NotFoundException(__('Invalid css type'));
		}
		$options = array('conditions' => array('CssType.' . $this->CssType->primaryKey => $id));
		$this->set('cssType', $this->CssType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CssType->create();
			if ($this->CssType->save($this->request->data)) {
				$this->Session->setFlash(__('The css type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The css type could not be saved. Please, try again.'));
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
		if (!$this->CssType->exists($id)) {
			throw new NotFoundException(__('Invalid css type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CssType->save($this->request->data)) {
				$this->Session->setFlash(__('The css type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The css type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CssType.' . $this->CssType->primaryKey => $id));
			$this->request->data = $this->CssType->find('first', $options);
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
		$this->CssType->id = $id;
		if (!$this->CssType->exists()) {
			throw new NotFoundException(__('Invalid css type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CssType->delete()) {
			$this->Session->setFlash(__('The css type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The css type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CssType->recursive = 0;
		$this->set('cssTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CssType->exists($id)) {
			throw new NotFoundException(__('Invalid css type'));
		}
		$options = array('conditions' => array('CssType.' . $this->CssType->primaryKey => $id));
		$this->set('cssType', $this->CssType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CssType->create();
			if ($this->CssType->save($this->request->data)) {
				$this->Session->setFlash(__('The css type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The css type could not be saved. Please, try again.'));
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
		if (!$this->CssType->exists($id)) {
			throw new NotFoundException(__('Invalid css type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CssType->save($this->request->data)) {
				$this->Session->setFlash(__('The css type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The css type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CssType.' . $this->CssType->primaryKey => $id));
			$this->request->data = $this->CssType->find('first', $options);
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
		$this->CssType->id = $id;
		if (!$this->CssType->exists()) {
			throw new NotFoundException(__('Invalid css type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CssType->delete()) {
			$this->Session->setFlash(__('The css type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The css type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Selectors Controller
 *
 * @property Selector $Selector
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property SecurityComponent $Security
 * @property AuthComponent $Auth
 * @property SessionComponent $Session
 */
class SelectorsController extends AppController {

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
		$this->Selector->recursive = 0;
		$this->set('selectors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Selector->exists($id)) {
			throw new NotFoundException(__('Invalid selector'));
		}
		$options = array('conditions' => array('Selector.' . $this->Selector->primaryKey => $id));
		$this->set('selector', $this->Selector->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Selector->create();
			if ($this->Selector->save($this->request->data)) {
				$this->Session->setFlash(__('The selector has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The selector could not be saved. Please, try again.'));
			}
		}
		$cssTypes = $this->Selector->CssType->find('list');
		$this->set(compact('cssTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Selector->exists($id)) {
			throw new NotFoundException(__('Invalid selector'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Selector->save($this->request->data)) {
				$this->Session->setFlash(__('The selector has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The selector could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Selector.' . $this->Selector->primaryKey => $id));
			$this->request->data = $this->Selector->find('first', $options);
		}
		$cssTypes = $this->Selector->CssType->find('list');
		$this->set(compact('cssTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Selector->id = $id;
		if (!$this->Selector->exists()) {
			throw new NotFoundException(__('Invalid selector'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Selector->delete()) {
			$this->Session->setFlash(__('The selector has been deleted.'));
		} else {
			$this->Session->setFlash(__('The selector could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Selector->recursive = 0;
		$this->set('selectors', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Selector->exists($id)) {
			throw new NotFoundException(__('Invalid selector'));
		}
		$options = array('conditions' => array('Selector.' . $this->Selector->primaryKey => $id));
		$this->set('selector', $this->Selector->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Selector->create();
			if ($this->Selector->save($this->request->data)) {
				$this->Session->setFlash(__('The selector has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The selector could not be saved. Please, try again.'));
			}
		}
		$cssTypes = $this->Selector->CssType->find('list');
		$this->set(compact('cssTypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Selector->exists($id)) {
			throw new NotFoundException(__('Invalid selector'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Selector->save($this->request->data)) {
				$this->Session->setFlash(__('The selector has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The selector could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Selector.' . $this->Selector->primaryKey => $id));
			$this->request->data = $this->Selector->find('first', $options);
		}
		$cssTypes = $this->Selector->CssType->find('list');
		$this->set(compact('cssTypes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Selector->id = $id;
		if (!$this->Selector->exists()) {
			throw new NotFoundException(__('Invalid selector'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Selector->delete()) {
			$this->Session->setFlash(__('The selector has been deleted.'));
		} else {
			$this->Session->setFlash(__('The selector could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

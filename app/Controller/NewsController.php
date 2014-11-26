<?php
App::uses('AppController', 'Controller');
/**
 * News Controller
 *
 * @property News $News
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class NewsController extends AppController {

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
	public $components = array('Paginator',/* 'Acl', 'Auth',*/ 'Security', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->News->recursive = 0;
		$this->set('news', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->News->exists($id)) {
			throw new NotFoundException(__('Invalid news'));
		}
		$options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
		$this->set('news', $this->News->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->News->create();
			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('The news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news could not be saved. Please, try again.'));
			}
		}
		$users = $this->News->User->find('list');
		$states = $this->News->State->find('list');
		$categories = $this->News->Category->find('list');
		$this->set(compact('users', 'states', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->News->exists($id)) {
			throw new NotFoundException(__('Invalid news'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('The news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
			$this->request->data = $this->News->find('first', $options);
		}
		$users = $this->News->User->find('list');
		$states = $this->News->State->find('list');
		$categories = $this->News->Category->find('list');
		$this->set(compact('users', 'states', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Invalid news'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->News->delete()) {
			$this->Session->setFlash(__('The news has been deleted.'));
		} else {
			$this->Session->setFlash(__('The news could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->News->recursive = 0;
		$this->set('news', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->News->exists($id)) {
			throw new NotFoundException(__('Invalid news'));
		}
		$options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
		$this->set('news', $this->News->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->News->create();
			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('The news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news could not be saved. Please, try again.'));
			}
		}
		$users = $this->News->User->find('list');
		$states = $this->News->State->find('list');
		$categories = $this->News->Category->find('list');
		$this->set(compact('users', 'states', 'categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->News->exists($id)) {
			throw new NotFoundException(__('Invalid news'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('The news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
			$this->request->data = $this->News->find('first', $options);
		}
		$users = $this->News->User->find('list');
		$states = $this->News->State->find('list');
		$categories = $this->News->Category->find('list');
		$this->set(compact('users', 'states', 'categories'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Invalid news'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->News->delete()) {
			$this->Session->setFlash(__('The news has been deleted.'));
		} else {
			$this->Session->setFlash(__('The news could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

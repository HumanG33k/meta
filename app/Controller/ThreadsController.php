<?php
App::uses('AppController', 'Controller');
/**
 * Threads Controller
 *
 * @property Thread $Thread
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class ThreadsController extends AppController {

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
		$this->Thread->recursive = 0;
		$this->set('threads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Thread->exists($id)) {
			throw new NotFoundException(__('Invalid thread'));
		}
		$options = array('conditions' => array('Thread.' . $this->Thread->primaryKey => $id));
		$this->set('thread', $this->Thread->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Thread->create();
			if ($this->Thread->save($this->request->data)) {
				$this->Session->setFlash(__('The thread has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thread could not be saved. Please, try again.'));
			}
		}
		$users = $this->Thread->User->find('list');
		$forums = $this->Thread->Forum->find('list');
		$this->set(compact('users', 'forums'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Thread->exists($id)) {
			throw new NotFoundException(__('Invalid thread'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Thread->save($this->request->data)) {
				$this->Session->setFlash(__('The thread has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thread could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Thread.' . $this->Thread->primaryKey => $id));
			$this->request->data = $this->Thread->find('first', $options);
		}
		$users = $this->Thread->User->find('list');
		$forums = $this->Thread->Forum->find('list');
		$this->set(compact('users', 'forums'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Thread->id = $id;
		if (!$this->Thread->exists()) {
			throw new NotFoundException(__('Invalid thread'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Thread->delete()) {
			$this->Session->setFlash(__('The thread has been deleted.'));
		} else {
			$this->Session->setFlash(__('The thread could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Thread->recursive = 0;
		$this->set('threads', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Thread->exists($id)) {
			throw new NotFoundException(__('Invalid thread'));
		}
		$options = array('conditions' => array('Thread.' . $this->Thread->primaryKey => $id));
		$this->set('thread', $this->Thread->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Thread->create();
			if ($this->Thread->save($this->request->data)) {
				$this->Session->setFlash(__('The thread has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thread could not be saved. Please, try again.'));
			}
		}
		$users = $this->Thread->User->find('list');
		$forums = $this->Thread->Forum->find('list');
		$this->set(compact('users', 'forums'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Thread->exists($id)) {
			throw new NotFoundException(__('Invalid thread'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Thread->save($this->request->data)) {
				$this->Session->setFlash(__('The thread has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thread could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Thread.' . $this->Thread->primaryKey => $id));
			$this->request->data = $this->Thread->find('first', $options);
		}
		$users = $this->Thread->User->find('list');
		$forums = $this->Thread->Forum->find('list');
		$this->set(compact('users', 'forums'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Thread->id = $id;
		if (!$this->Thread->exists()) {
			throw new NotFoundException(__('Invalid thread'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Thread->delete()) {
			$this->Session->setFlash(__('The thread has been deleted.'));
		} else {
			$this->Session->setFlash(__('The thread could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

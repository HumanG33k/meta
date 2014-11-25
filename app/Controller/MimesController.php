<?php
App::uses('AppController', 'Controller');
/**
 * Mimes Controller
 *
 * @property Mime $Mime
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class MimesController extends AppController {

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
		$this->Mime->recursive = 0;
		$this->set('mimes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mime->exists($id)) {
			throw new NotFoundException(__('Invalid mime'));
		}
		$options = array('conditions' => array('Mime.' . $this->Mime->primaryKey => $id));
		$this->set('mime', $this->Mime->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mime->create();
			if ($this->Mime->save($this->request->data)) {
				$this->Session->setFlash(__('The mime has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mime could not be saved. Please, try again.'));
			}
		}
		$types = $this->Mime->Type->find('list');
		$subtypes = $this->Mime->Subtype->find('list');
		$extensions = $this->Mime->Extension->find('list');
		$this->set(compact('types', 'subtypes', 'extensions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mime->exists($id)) {
			throw new NotFoundException(__('Invalid mime'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mime->save($this->request->data)) {
				$this->Session->setFlash(__('The mime has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mime could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mime.' . $this->Mime->primaryKey => $id));
			$this->request->data = $this->Mime->find('first', $options);
		}
		$types = $this->Mime->Type->find('list');
		$subtypes = $this->Mime->Subtype->find('list');
		$extensions = $this->Mime->Extension->find('list');
		$this->set(compact('types', 'subtypes', 'extensions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mime->id = $id;
		if (!$this->Mime->exists()) {
			throw new NotFoundException(__('Invalid mime'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mime->delete()) {
			$this->Session->setFlash(__('The mime has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mime could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Mime->recursive = 0;
		$this->set('mimes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Mime->exists($id)) {
			throw new NotFoundException(__('Invalid mime'));
		}
		$options = array('conditions' => array('Mime.' . $this->Mime->primaryKey => $id));
		$this->set('mime', $this->Mime->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Mime->create();
			if ($this->Mime->save($this->request->data)) {
				$this->Session->setFlash(__('The mime has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mime could not be saved. Please, try again.'));
			}
		}
		$types = $this->Mime->Type->find('list');
		$subtypes = $this->Mime->Subtype->find('list');
		$extensions = $this->Mime->Extension->find('list');
		$this->set(compact('types', 'subtypes', 'extensions'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Mime->exists($id)) {
			throw new NotFoundException(__('Invalid mime'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mime->save($this->request->data)) {
				$this->Session->setFlash(__('The mime has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mime could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mime.' . $this->Mime->primaryKey => $id));
			$this->request->data = $this->Mime->find('first', $options);
		}
		$types = $this->Mime->Type->find('list');
		$subtypes = $this->Mime->Subtype->find('list');
		$extensions = $this->Mime->Extension->find('list');
		$this->set(compact('types', 'subtypes', 'extensions'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Mime->id = $id;
		if (!$this->Mime->exists()) {
			throw new NotFoundException(__('Invalid mime'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mime->delete()) {
			$this->Session->setFlash(__('The mime has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mime could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

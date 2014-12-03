<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property SecurityComponent $Security
 * @property AuthComponent $Auth
 * @property SessionComponent $Session
 * @property SessionComponent $Session
 */
class UsersController extends AppController
{
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
  public $components = array('Paginator', /* 'Acl', */ 'Security', /* 'Auth', */ 'Session');

  /**
   * beforeFilter method
   *
   * 
   * @return void
   */
//  public function beforeFilter()
//  {
//    parent::beforeFilter();
//    // Allow users to register and logout.
//    $this->Auth->allow('add','index','admin_index','view');
//  }

  /**
   * isAuthorized method
   *
   * @param user $user
   * @return boolean
   */
//  public function isAuthorized($user)
//  {
//    // Admin can access every action
//    if (parent::isAdmin($user) && in_array($this->action, array('index', 'view', 'logout', 'delete')))
//    {
//      return true;
//    }
//    if (in_array($this->action, array('edit', 'view', 'logout')))
//    {
//      return true;
//    }
//    // Default deny
//    return parent::isAuthorized($user);
//  }

//  public function beforeFilter()
//  {
//    parent::beforeFilter();
//// Permet aux utilisateurs de s’enregistrer et de se déconnecter
//    $this->Auth->allow('add', 'logout', 'login');
//  }

  public function login()
  {
    if ($this->request->is('post'))
    {
      if ($this->Auth->login())
      {
        return $this->redirect($this->Auth->redirectUrl());
      }
      else
      {
        $this->Session->setFlash(__("Nom d’user ou mot de passe invalide, réessayer"));
      }
    }
  }

  public function logout()
  {
    return $this->redirect($this->Auth->logout());
  }

  /**
   * index method
   *
   * @return void
   */
  public function index()
  {
    $this->User->recursive = 0;
    $this->set('users', $this->Paginator->paginate());
  }

//  public function login()
//  {
//    if ($this->request->is('post'))
//    {
//      if ($this->Auth->login())
//      {
//        return $this->redirect($this->Auth->redirectUrl());
//      }
//      $this->Session->setFlash(__('Invalid username or password, try again'));
//    }
//  }
//
//  public function logout()
//  {
//    return $this->redirect($this->Auth->logout());
//  }

  /**
   * view method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function view($id = null)
  {
    if (!$this->User->exists($id) || ($id != $this->Auth->user('id') && !parent::isAdmin($this->Auth->user())))
    {
      throw new NotFoundException(__('Invalid user'));
    }
    $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
    $this->set('user', $this->User->find('first', $options));
  }

  /**
   * add method
   *
   * @return void
   */
  public function add()
  {
    $this->request->data['User']['role_id'] = '1';
    if ($this->request->is('post'))
    {
      $this->User->create();

      if ($this->User->save($this->request->data))
      {
//connect the new user
        $id = $this->User->id;
        $this->request->data['User'] = array_merge($this->request->data['User'], array('id' => $id));
        $this->Auth->login($this->request->data['User']);
//create the order
        $this->User->Order->set(array('name' => 'default', 'user_id' => $this->Auth->user('id')));
        if ($this->User->Order->save())
        {
          $this->Session->setFlash(__('The user has been saved.'));
          return $this->redirect(array('action' => 'view', $this->User->id));
        }
        else
        {
          $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
      }
      else
      {
        $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
      }
    }
    $roles = $this->User->Group->find('list');
    $this->set(compact('roles'));
  }

  /**
   * edit method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function edit($id = null)
  {
    if (!$this->User->exists($id) || ($id != $this->Auth->user('id') && !parent::isAdmin($this->Auth->user())))
    {
      throw new NotFoundException(__('Invalid user'));
    }
    else
    {
      if ($this->request->is(array('post', 'put')))
      {
        if ($this->User->save($this->request->data))
        {
          $this->Session->setFlash(__('The user has been saved.'));
          return $this->redirect(array('action' => 'view', $id));
        }
        else
        {
          $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
      }
      else
      {
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->request->data = $this->User->find('first', $options);
      }
    }
    $roles = $this->User->Role->find('list');
    $this->set(compact('roles'));
  }

  /**
   * delete method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function delete($id = null)
  {
    $this->User->id = $id;
    if (!$this->User->exists())
    {
      throw new NotFoundException(__('Invalid user'));
    }

    $user = $this->User->find('first', array('condition' => array('User.id' => $id), 'recursive' => 1));
    $ordersProducts = $this->User->Order->OrdersProduct->find('all', array('condition' => array('OrdersProduct.order_id' => $user['Order']['id'])));
    debug($user);
    debug($ordersProducts);
    foreach ($ordersProducts as $ordersProduct)
    {
      debug($ordersProduct['OrdersProduct']['quantity']);
      $product = $this->User->Order->Product->findById($ordersProduct['OrdersProduct']['product_id']);
      debug($product);
      $tmp = strval($product['Product']['quantity'] + $orderProduct['OrdersProduct']['quantity']);
      $product['Product']['quantity'] = $tmp;
      debug($product);
      exit();
      $this->User->Order->Product->save($product['Product']);
      unset($product);
      unset($tmp);
    }

    $this->request->onlyAllow('post', 'delete');
    if ($this->User->delete())
    {
      $this->Session->setFlash(__('The user has been deleted.'));
    }
    else
    {
      $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index'));
  }

  /**
   * admin_index method
   *
   * @return void
   */
  public function admin_index()
  {
    $this->User->recursive = 0;
    $this->set('users', $this->Paginator->paginate());
  }

  /**
   * admin_view method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function admin_view($id = null)
  {
    if (!$this->User->exists($id))
    {
      throw new NotFoundException(__('Invalid user'));
    }
    $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
    $this->set('user', $this->User->find('first', $options));
  }

  /**
   * admin_add method
   *
   * @return void
   */
  public function admin_add()
  {
    if ($this->request->is('post'))
    {
      $this->User->create();
      if ($this->User->save($this->request->data))
      {
        $this->Session->setFlash(__('The user has been saved.'));
        return $this->redirect(array('action' => 'index'));
      }
      else
      {
        $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
      }
    }
    $groups = $this->User->Group->find('list');
    $ips = $this->User->Ip->find('list');
    $this->set(compact('groups', 'ips'));
  }

  /**
   * admin_edit method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function admin_edit($id = null)
  {
    if (!$this->User->exists($id))
    {
      throw new NotFoundException(__('Invalid user'));
    }
    if ($this->request->is(array('post', 'put')))
    {
      if ($this->User->save($this->request->data))
      {
        $this->Session->setFlash(__('The user has been saved.'));
        return $this->redirect(array('action' => 'index'));
      }
      else
      {
        $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
      }
    }
    else
    {
      $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
      $this->request->data = $this->User->find('first', $options);
    }
    $groups = $this->User->Group->find('list');
    $ips = $this->User->Ip->find('list');
    $this->set(compact('groups', 'ips'));
  }

  /**
   * admin_delete method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function admin_delete($id = null)
  {
    $this->User->id = $id;
    if (!$this->User->exists())
    {
      throw new NotFoundException(__('Invalid user'));
    }
    $this->request->allowMethod('post', 'delete');
    if ($this->User->delete())
    {
      $this->Session->setFlash(__('The user has been deleted.'));
    }
    else
    {
      $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index'));
  }

}

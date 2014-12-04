<?php

App::uses('AppModel', 'Model');

/**
 * Page Model
 *
 * @property State $State
 * @property Element $Element
 */
class Page extends AppModel
{
//  var $actsAs = array(
//  'FileUpload.FileUpload' => array(
//  'uploadDir' => 'files',
//  'forceWebroot' => true, //if false, files will be upload to the exact path of uploadDir
//  'fields' => array('name' => 'file_name', 'type' => 'file_type', 'size' => 'file_size'),
//  'allowedTypes' => array('pdf' => array('application/pdf')),
//  'required' => false, //default is false, if true a validation error would occur if a file wsan't uploaded.
//  'maxFileSize' => '10000', //bytes OR false to turn off maxFileSize (default false)
//  'unique' => false, //filenames will overwrite existing files of the same name. (default true)
//  'fileNameFunction' => 'sha1' //execute the Sha1 function on a filename before saving it (default false)
//  )
//  );


  /**
   * Display field
   *
   * @var string
   */
  public $displayField = 'name';

  /**
   * Validation rules
   *
   * @var array
   */
  public $validate = array(
  'id' => array(
  'notEmpty' => array(
  'rule' => array('notEmpty'),
  //'message' => 'Your custom message here',
  //'allowEmpty' => false,
  //'required' => false,
  //'last' => false, // Stop validation after this rule
  //'on' => 'create', // Limit validation to 'create' or 'update' operations
  ),
  'numeric' => array(
  'rule' => array('numeric'),
  //'message' => 'Your custom message here',
  //'allowEmpty' => false,
  //'required' => false,
  //'last' => false, // Stop validation after this rule
  //'on' => 'create', // Limit validation to 'create' or 'update' operations
  ),
  ),
  'name' => array(
  'notEmpty' => array(
  'rule' => array('notEmpty'),
  //'message' => 'Your custom message here',
  //'allowEmpty' => false,
  //'required' => false,
  //'last' => false, // Stop validation after this rule
  //'on' => 'create', // Limit validation to 'create' or 'update' operations
  ),
  'alphaNumeric' => array(
  'rule' => array('alphaNumeric'),
  //'message' => 'Your custom message here',
  //'allowEmpty' => false,
  //'required' => false,
  //'last' => false, // Stop validation after this rule
  //'on' => 'create', // Limit validation to 'create' or 'update' operations
  ),
  ),
  'adresse' => array(
  'numeric' => array(
  'rule' => array('numeric'),
  //'message' => 'Your custom message here',
  //'allowEmpty' => false,
  //'required' => false,
  //'last' => false, // Stop validation after this rule
  //'on' => 'create', // Limit validation to 'create' or 'update' operations
  ),
  ),
  'state_id' => array(
  'numeric' => array(
  'rule' => array('numeric'),
  //'message' => 'Your custom message here',
  //'allowEmpty' => false,
  //'required' => false,
  //'last' => false, // Stop validation after this rule
  //'on' => 'create', // Limit validation to 'create' or 'update' operations
  ),
  ),
  'created' => array(
  'datetime' => array(
  'rule' => array('datetime'),
  //'message' => 'Your custom message here',
  //'allowEmpty' => false,
  //'required' => false,
  //'last' => false, // Stop validation after this rule
  //'on' => 'create', // Limit validation to 'create' or 'update' operations
  ),
  ),
  'updated' => array(
  'datetime' => array(
  'rule' => array('datetime'),
  //'message' => 'Your custom message here',
  //'allowEmpty' => false,
  //'required' => false,
  //'last' => false, // Stop validation after this rule
  //'on' => 'create', // Limit validation to 'create' or 'update' operations
  ),
  ),
  );

  //The Associations below have been created with all possible keys, those that are not needed can be removed

  /**
   * belongsTo associations
   *
   * @var array
   */
  public $belongsTo = array(
  'State' => array(
  'className' => 'State',
  'foreignKey' => 'state_id',
  'conditions' => '',
  'fields' => '',
  'order' => ''
  )
  );

  /**
   * hasAndBelongsToMany associations
   *
   * @var array
   */
  public $hasAndBelongsToMany = array(
  'Element' => array(
  'className' => 'Element',
  'joinTable' => 'elements_pages',
  'foreignKey' => 'page_id',
  'associationForeignKey' => 'element_id',
  'unique' => 'keepExisting',
  'conditions' => '',
  'fields' => '',
  'order' => '',
  'limit' => '',
  'offset' => '',
  'finderQuery' => '',
  )
  );
}

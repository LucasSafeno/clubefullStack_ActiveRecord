<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\UpdateInterface;
use ReflectionClass;

abstract class ActiveRecord implements ActiveRecordInterface
{
  protected $table = null;
  protected $attribute = [];

  public function __construct()
  {
    if (!$this->table) {
      $this->table = strtolower((new  ReflectionClass($this))->getShortName());
      var_dump($this->table);
    }
  } //? construct

  public function getTable()
  {
    return $this->table;
  } //? getTable

  public function getAttribute()
  {
    return $this->attribute;
  }

  public function __set($attribute, $value)
  {
    $this->attribute[$attribute] = $value;
  } //? __set
  public function __get($attribute)
  {
    return $this->attribute[$attribute];
  } //? __get

  public function update(UpdateInterface $updateInterface)
  {
    // if($this instanceof ActiveRecordInterface){
    //   var_dump('is instance');
    // }
    // var_dump($this);
    return $updateInterface->update($this);
  } //? update


  // public function insert()
  // {
  //   throw new \Exception("Method not implemented.");
  // } //? insert
  // public function delete()
  // {
  //   throw new \Exception("Method not implemented.");
  // } //? delete
  // public function find()
  // {
  //   throw new \Exception("Method not implemented.");
  // } //? find
  // public function findBy()
  // {
  //   throw new \Exception("Method not implemented.");
  // } //? findBy
  // public function all()
  // {
  //   throw new \Exception("Method not implemented.");
  // } //? all

}//! ActiveRecord

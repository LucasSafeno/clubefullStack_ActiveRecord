<?php

namespace app\database\activerecord;

use ReflectionClass;

abstract class ActiveRecord
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


}//! ActiveRecord

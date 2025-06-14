<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\UpdateInterface;
use ReflectionClass;

abstract class ActiveRecord implements ActiveRecordInterface
{
  protected $table = null;
  protected $attributes = [];
  public function __construct()
  {
    if (!$this->table) {
      $this->table = strtolower((new ReflectionClass(static::class))->getShortName());
    }
  } //? construct()

  public function getTable()
  {
    return $this->table;
  } //? getTable()
  public function __set($attribute, $value)
  {
    $this->attributes[$attribute] = $value;
  } //? __set()

  public function __get($attribute)
  {
    return $this->attributes[$attribute];
  } //? __get()

  public function getAttributes()
  {
    return $this->attributes;
  } //? getAttributes()

  public function update(UpdateInterface $updateInterface)
  {
    return $updateInterface->update();
  } //? update()

}//* ActiveRecord

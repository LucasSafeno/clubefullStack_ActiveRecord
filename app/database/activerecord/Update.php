<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\UpdateInterface;
use Exception;

class Update implements UpdateInterface
{
  public function update(ActiveRecordInterface $activeRecordInterface)
  {
    throw new Exception("Method not implements");
  }
}

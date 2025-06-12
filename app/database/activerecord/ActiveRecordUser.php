<?php

namespace app\database\activerecord;

use app\database\interfaces\UpdateInterface;
use app\database\interfaces\ActiveRecordInterface;

class ActiveRecordUser implements ActiveRecordInterface
{

  public function update(UpdateInterface $updateInterface)
  {
    throw new \Exception("method not implements");
  }
  public function getTable()
  {
    throw new \Exception("method not implements");
  }
  public function getAttributable()
  {
    throw new \Exception("method not implements");
  }
}

<?php

namespace Eiriksm\FacebookProductCatalog;

class Catalog {

  /**
   * @var \Eiriksm\FacebookProductCatalog\Row[]
   */
  private $rows;

  /**
   * @param \Eiriksm\FacebookProductCatalog\Row[] $rows
   *   An array of rows.
   */
  public static function createFromRows($rows) {
    $cat = new self();
    $cat->rows = $rows;
    return $cat;
  }

  public function getAsCsvArray() {
    $data = array();
    $data[] = Row::getAsCsvHeader();
    foreach ($this->rows as $row) {
      $data[] = $row->getAsCsvArray();
    }
    return $data;
  }

}

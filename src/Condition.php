<?php

namespace Eiriksm\FacebookProductCatalog;

class Condition {
  // Prefixing with IS_ because the constant 'NEW' is not allowed before php 7.
  const IS_NEW = 'new';
  const IS_REFURBISHED = 'refurbished';
  const IS_USED = 'used';
}

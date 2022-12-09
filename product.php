<?php

class Product
{
  static $numProducts = 0;
  static $codes = [];
  private $code;
  public $name;
  public $price;

  public function __construct($code)
  {
      $this->$code = $code;
      self::$numProducts++;
  }
  public function __destruct()
  {
      self::$numProducts--;
  }

  public function show() {
    echo "<p>" . $this->code . "</p>";
  }

  public function codeNotExist($newCode) {
    var_dump(self::$codes);
    return !in_array($newCode, self::$codes);
  }
  public function setCode($newCode)
  {
    if ($this->codeNotExist($newCode)) {
      self::$codes[] = $newCode;
      $this->code = $newCode;
      return true;
    }
    return false;
  }

  public function getCode() { return $this->code; }

  public function setName($name) 
  {
    $this->$name = $name;
  }
  public function productPrice(Product $product): float
  {
      // ...
      return $this->price;
  }
}
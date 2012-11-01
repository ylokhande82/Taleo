<?php
namespace Taleo\Entities;

class Account implements Entity {

  private $account;

  function __construct($data) {
    $this->account = $data;
  }

  public function get($key = null) {
    if (!is_null($key)) {
      return $this->account->$key;
    }
    return $this->account;
  }

  public function to_array() {
    return (array) $this->account;
  }

  public function to_json() {
    return json_encode($this->account);
  }

}

<?php

namespace App\Types;

class BaseResponse {
    public $success;
    public $data;
    public $message;

    public function __construct($data, $success = true, $message = '') {
      $this->data = $data;
      $this->sucess = $success;
      $this->message = $message;
    }

}
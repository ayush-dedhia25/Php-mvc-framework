<?php

namespace app\core;

/**
 * Class Response
 * 
 * @author Ayush Dedhia <ayushdedhia25@gmail.com>
 * @package app\core
 */

class Response
{
   public function setStatusCode(int $code)
   {
      http_response_code($code);
   }
}
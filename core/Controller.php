<?php

namespace app\core;

/**
 * Class Controller
 * 
 * @author Ayush Dedhia <ayushdedhia25@gmail.com>
 * @package app\core
 */
class Controller
{
   public string $layout = 'main';
   
   public function setLayout($layout)
   {
      $this->layout = $layout;
   }
   
   public function render($view, $params = [])
   {
      return Application::$app->router->renderView($view, $params);
   }
}
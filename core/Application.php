<?php

namespace app\core;

/**
 * Class Application 
 * 
 * @author Ayush Dedhia <ayushdedhia25@gmail.com>
 * @package app\core
 */
class Application
{
   public static string $ROOT_DIR;
   public Router $router;
   public Request $request;
   public Response $response;
   public static Application $app;
   public Controller $controller;
   
   /**
    * Application constructor 
    * 
    * @param string $routePath
    */
   public function __construct($routePath)
   {
      self::$ROOT_DIR = $routePath;
      self::$app = $this;
      $this->request = new Request();
      $this->response = new Response();
      $this->router = new Router($this->request, $this->response);
   }
   
   /**
    * @return Controller
    */
   public function getController(): Controller
   {
      return $this->controller;
   }
   
   /**
    * @param Controller
    */
   public function setController(Controller $controller)
   {
      $this->controller = $controller;
   }
   
   public function run()
   {
      echo $this->router->resolve();
   }
}
<?php namespace App\Core;

class MY_Loader extends \CI_Loader
{

  function __construct()
  {
    $di = new \Flame\Core\Dependency\DependencyResolver();

    parent::__construct(
      $di->resolve('Flame\Core\Facade\Facade'),
      $di->resolve('Flame\Core\Loader\Package\Package'),
      $di->resolve('Flame\Core\Loader\Library\Library'),
      $di->resolve('Flame\Core\Loader\Model\Model'),
      $di->resolve('Flame\Core\Loader\Helper\Helper'),
      $di->resolve('Flame\Core\Loader\View\View'),
      $di->resolve('Flame\Core\Loader\Driver\Driver'),
      $di->resolve('Flame\Core\Loader\Autoloader'),
    );
  }

  public function coba(){

  }
}

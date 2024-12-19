<?php namespace App\Core;

class MY_Loader extends \CI_Loader
{

  function __construct()
  {
    $di = new \Kodhe\Core\Dependency\DependencyResolver();

    parent::__construct(
      $di->resolve('Kodhe\Core\Facade\Facade'),
      $di->resolve('Kodhe\Core\Loader\Package\Package'),
      $di->resolve('Kodhe\Core\Loader\Library\Library'),
      $di->resolve('Kodhe\Core\Loader\Model\Model'),
      $di->resolve('Kodhe\Core\Loader\Helper\Helper'),
      $di->resolve('Kodhe\Core\Loader\View\View'),
      $di->resolve('Kodhe\Core\Loader\Driver\Driver'),
      $di->resolve('Kodhe\Core\Loader\Autoloader'),
    );
  }

  public function coba(){

  }
}

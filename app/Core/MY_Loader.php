<?php namespace App\Core;

class MY_Loader extends \CI_Loader
{

  function __construct()
  {
    $di = new \Kodhe\Pulen\Core\Dependency\DependencyResolver();

    parent::__construct(
      $di->resolve('Kodhe\Pulen\Core\Facade\Facade'),
      $di->resolve('Kodhe\Pulen\Core\Loader\Package\Package'),
      $di->resolve('Kodhe\Pulen\Core\Loader\Library\Library'),
      $di->resolve('Kodhe\Pulen\Core\Loader\Model\Model'),
      $di->resolve('Kodhe\Pulen\Core\Loader\Helper\Helper'),
      $di->resolve('Kodhe\Pulen\Core\Loader\View\View'),
      $di->resolve('Kodhe\Pulen\Core\Loader\Driver\Driver'),
      $di->resolve('Kodhe\Pulen\Core\Loader\Autoloader'),
    );
  }

  public function coba(){

  }
}

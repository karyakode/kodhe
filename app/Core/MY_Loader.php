<?php namespace App\Core;

class MY_Loader extends \CI_Loader
{

  function __construct()
  {
    $di = new \Kodhe\Pulen\Framework\Container\DependencyResolver();

    parent::__construct(
      $di->resolve('Kodhe\Pulen\Framework\Support\Facade\Facade'),
      $di->resolve('Kodhe\Pulen\Framework\Loader\Package\Package'),
      $di->resolve('Kodhe\Pulen\Framework\Loader\Library\Library'),
      $di->resolve('Kodhe\Pulen\Framework\Loader\Model\Model'),
      $di->resolve('Kodhe\Pulen\Framework\Loader\Helper\Helper'),
      $di->resolve('Kodhe\Pulen\Framework\Loader\View\View'),
      $di->resolve('Kodhe\Pulen\Framework\Loader\Driver\Driver'),
      $di->resolve('Kodhe\Pulen\Framework\Loader\Autoloader'),
    );
  }

  public function coba(){

  }
}

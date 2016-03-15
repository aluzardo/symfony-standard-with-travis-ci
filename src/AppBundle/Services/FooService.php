<?php
/**
 * Created by PhpStorm.
 * User: aluzardo
 * Date: 15/03/16
 * Time: 00:13
 */
namespace AppBundle\Services;

use Symfony\Component\HttpFoundation\Session\Session;

class FooService {

  var $session;

  private function __construct( Session $session ) {
    $this->session = $session;
  }

  public function setFooSession() {
    return $this->session->set("foo", "foo");
  }


}

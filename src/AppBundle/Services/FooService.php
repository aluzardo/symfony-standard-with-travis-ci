<?php
/**
 * Created by PhpStorm.
 * User: aluzardo
 * Date: 15/03/16
 * Time: 00:13
 */
namespace AppBundle\Services;

use Symfony\Component\HttpFoundation\Session\Session;

class Locale {

  var $session;

  private function __construct( Session $session ) {
    $this->session = $session;
    $this->session->set("_locale", "es");
  }

  public function setLocaleSession() {
    return $this->session->set("_locale", "es");
  }


}

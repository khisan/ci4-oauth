<?php

namespace App\Controllers;

use \App\Libraries\Oauth;
use \Oauth2\Request;
use Codeigniter\API\ResponseTrait;

class User extends BaseController
{
  use ResponseTrait;

  public function login()
  {
    $oauth = new Oauth();
    $request = new Request();
    $respond = $oauth->server->handleTokenRequest($request->createFromGlobals());
    $code = $respond->getStatusCode();
    $body = $respond->getResponseBody();
    return $this->respond(json_decode($body), $code);
  }
}

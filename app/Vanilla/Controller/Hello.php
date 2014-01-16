<?php
namespace Vanilla\Controller;

use Pimf\Controller\Base, Pimf\View\Twig as View;

class Hello extends Base
{
  /**
   * A index action - this is a framework restriction!
   */
  public function indexAction()
  {
    $firstname = $this->request->fromGet()->get('firstname', 'World');

    $view = new View(
          'hello.phtml',
          array(
            'blog_title'   => 'Welcome to PIMF Twig bundle',
            'blog_content' => 'Hello '.join(' ', (array)$firstname).'!!!',
            'blog_footer'  => 'Please type at the URL "/hello/Barry" and see what happens!'
          )
    );

    $this->response->asHTML()->send($view);
  }
}
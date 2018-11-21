<?php
namespace App\Controllers;

use App\models\Admin;

class Controller {
	protected $twig;

	function __construct()
  {
		global $twig;
		$this->twig = $twig;
	}

  public function display( $view, $datas = [] )
  {
    // défaut
    $datas = array_merge(
      [
        // 'session' => $_SESSION,
        // 'classroom' => isset( $_SESSION[ 'role' ] ) && $_SESSION[ 'role' ] == 'ens' ? $_SESSION[ 'classroom' ] : null
      ],
      $datas
    );
    $this->twig->display( $view, $datas );
  }
}
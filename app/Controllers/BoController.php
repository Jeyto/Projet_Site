<?php
namespace App\Controllers;

use App\Models\Admin;

class BoController extends Controller {

	public function index($command = 'index')
	{
		$this->display(
			"backoffice/{$command}.html.twig"
		);
	}



/**
 * Vérifier le login.
 */
/*
	public function loginCheck()
	{
		if ( !!! à compléter !!! ) {
			// ouvrir une session en mode ADMIN
			// !!! à compléter !!!

			// redirection vers le backoffice
			redirect('/backoffice');
		} else {
			redirect('/login');
		}
	}
*/

/**
 * Delog de l'application BackOffice.
 */
	public function delog()
	{
		$_SESSION = [];
		if ( ini_get("session.use_cookies") ) {
		  $params = session_get_cookie_params();
		  setcookie(session_name(),'',time()-42000, $params["path"],$params["domain"],$params["secure"], $params["httponly"]);
		}
		session_destroy();
		redirect('/login');
	}
}

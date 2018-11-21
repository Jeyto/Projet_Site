<?php
namespace App\Controllers;

use App\Models\Admin;

class AdminController extends Controller {

	public function index($command = 'index')
	{
		$this->display(
			'backoffice/admin/admin.html.twig',
			[
				'admins' =>Admin::getInstance()->getAll()
			]
		);
	}

/**
 * Login dans l'application BackOffice.
 */
	public function login()
	{
		if (isLogin()) {
			redirect('/backoffice');
		} else {
			$this->display(
				'backoffice/login.html.twig'
			);
		}

	}



/**
 * Delog de l'application BackOffice.
 */
	public function delog()
	{

	}


}
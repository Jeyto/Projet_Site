<?php
namespace App\Controllers;

use App\Models\Challenge;
use App\Models\Classroom;
use App\Models\Collection;

class ChallengeController extends Controller {

	public function index()
	{
		$this->display(
			'backoffice/challenge/list.html.twig',
			[
				'challenges' => Challenge::getInstance()->getAll()
			]
		);
	}

	public function add()
	{

		$this->display(
			'backoffice/challenge/add.html.twig',
			[
				'challenges' => Challenge::getInstance()->getAll(),
				'collections' => Collection::getInstance()->getAll()
			]
		);
	}

	public function edit( $id )
	{

		$this->display(
			'backoffice/challenge/edit.html.twig',
			[
				'challenge' => Challenge::getInstance()->get( $id ),
				'collections' => Collection::getInstance()->getAll()
			]
		);
	}

	public function save()
	{
		Challenge::getInstance()->add( $_POST );
		redirect('/backoffice/challenges');
	}

	public function update($id)
	{
		Challenge::getInstance()->update( $id, $_POST );
		redirect('/backoffice/challenges');
	}

	public function delete($id)
	{
		Challenge::getInstance()->delete( $id );
		redirect('/backoffice/childrens');
	}



}

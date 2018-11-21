<?php
namespace App\Controllers;

use App\Models\Classroom;
use App\Models\Challenge;
use App\Models\Children;

class HomeController extends Controller {

  /**
   * La page d'accueil.
   */
	public function index()
  {

		$this->twig->display(
			'home.html.twig'
		);
	}

  /**
   * La page d'administration pour l'enseignant qui doit créer 
   * sa classe.
   * @param string $code code d'accès
   */
  public function config( $code )
  {
    // vérifier que ce code existe
    if ( Classroom::getInstance()->exists( $code ) ) {
      // ouvrir une session en mode ENSEIGNANT
      $_SESSION[ 'login' ] = true;
      $_SESSION[ 'role' ] = 'ens';
      $_SESSION[ 'classroom' ] = Classroom::getInstance()->get( $code );
      $this->display(
        'backoffice/index.html.twig'
      );
    } else {
      redirect( '/' );
    }

  }

  /**
   * La page des défis.
   * @param string $code le code de classe.
   */
  public function defi( $code )
  {
    // vérifier que ce code existe
    if ( Classroom::getInstance()->exists( $code ) ) {
      // ouvrir une session en mode ENSEIGNANT
      $_SESSION[ 'login' ] = true;
      $_SESSION[ 'role' ] = 'ens';
      $_SESSION[ 'classroom' ] = Classroom::getInstance()->get( $code );
      $this->display(
        'defi.html.twig',
        [
          'childrens' => Classroom::getInstance()->getChildrens( $code ),
          'challenges' => challenge::getInstance()->getChallenges( $_SESSION[ 'classroom' ][ 'id' ]),
        ]
      );
    } else {
      redirect( '/' );
    }
  }

	
	
	public function test(){
		r( App\Models\Classroom::getInstance()->get('a124a') );
		
	}
}
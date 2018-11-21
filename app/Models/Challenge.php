<?php
//
// FICHIER : app / Models / Challenge.php
//

namespace App\Models;

use App\Models\CollectionImages;

class Challenge extends Base {

  protected $tableName = TABLE_PREFIX . 'challenge';
  protected $tableChallengeClassroom = TABLE_PREFIX . 'challenge_classroom';

  private static $instance;

  public static function getInstance()
  {
    if (!isset(self::$instance)) {
      self::$instance = new Challenge();
    }
    return self::$instance;
  }

  /**
   * Retourne la liste des défis pour une classe.
   * @param  integer  $classroom_id   identifiant de la classe
   * @return  array
   */
  public function getChallenges( $classroom_id )
  {
    $challenges = [];

    $sql = "SELECT * FROM {$this->tableChallengeClassroom} 
            WHERE classroom_id = :classroom_id AND challenge_id = :challenge_id";
    $sthChallenge = self::$dbh->prepare($sql);

    // parcourir la liste des challenges
    $sql = "SELECT * FROM {$this->tableName}";
    foreach ( self::$dbh->query($sql)->fetchAll()  as $challenge ) {
      $dummy = $sthChallenge->execute( [ ':classroom_id' => $classroom_id, ':challenge_id' => $challenge[ 'id' ] ]);
      $challenge[ 'checked' ] = $sthChallenge->fetch() ? 1 : 0;
      $challenges[] = $challenge;
    }
    return $challenges;
  }

  /**
   * Retourne les informations détaillées sur un défi.
   * @param  integer  $idchallenge   identifiant du défi
   * @return array (id, description, code, collection_id, createdAt, updatedAt, images )
   */
  public function getDetailled( $idchallenge )
  {
    $sql = "!!! à compléter !!!";
    $datas =  self::$dbh->query( $sql )->fetch();
    // $datas[ 'images' ] = CollectionImages::getInstance()->!!! à compléter !!!!
    return $datas;
  }

}

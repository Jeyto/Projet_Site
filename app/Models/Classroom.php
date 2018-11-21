<?php
//
// FICHIER : app / Models / Classroom.php
//

namespace App\Models;

class Classroom extends Base {

	protected $tableName = TABLE_PREFIX . 'classroom';
  protected $tableChallengeClassroom = TABLE_PREFIX . 'challenge_classroom';
  protected $tableChildren = TABLE_PREFIX . 'children';

	private static $instance;

	public static function getInstance()
  {
		if (!isset(self::$instance)) {
			self::$instance = new Classroom();
		}
		return self::$instance;
	}

  /**
   * Retourne les informations d'une classe à partir de son code.
   * @param  string  $code identifiant
   * @return void
   */
  public function get( $code )
  {
    $sql = "SELECT * FROM {$this->tableName} WHERE code = :code";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':code', $code);
    $sth->execute();
    return $sth->fetch();
  }

  /**
   * Retourne l'identifiant d'une classe à partir de son code.
   * @param  string  $code   code de la classe
   * @return integer
   */
  public function getIdFromCode(  $code )
  {

    $sql = "SELECT id FROM {$this->tableName}
            WHERE code = :code";
    $sth = self::$dbh->prepare($sql);
    $sth->execute([ ':code' => $code ] );
    return  (int)$sth->fetch()['id'];
  }

  /**
   * Indique si le code de classe existe.
   * @param  string  $code
   * @return boolean
   */
  public function exists( $code )
  {
    $sql = "SELECT COUNT(*) AS c FROM {$this->tableName} WHERE code = :code";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':code', $code);
    $sth->execute();
    return ($sth->fetch()['c'] > 0);
  }

  /**
   * Ajoute un défi pour une classe.
   * @param  integer  $challenge_id   identifiant du défi
   * @param  integer  $classroom_id   identifiant de la classe
   */
  public function addChallenge( $challenge_id, $classroom_id )
  {
    $sql = "INSERT INTO {$this->tableChallengeClassroom} ( classroom_id, challenge_id ) 
            VALUES ( :classroom_id, :challenge_id )";
    $sth = self::$dbh->prepare($sql);
    $sth->execute([ ':classroom_id' => $classroom_id, ':challenge_id' => $challenge_id ]);
    return self::$dbh->lastInsertId();
  }

  /**
   * Effacer tous les défis pour une classe.
   * @param  integer  $classroom_id   identifiant de la classe
   */
  public function deleteChallenges( $classroom_id )
  {
    // effacer les défis pour la classe
    $sql = "DELETE FROM {$this->tableChallengeClassroom} WHERE classroom_id = :classroom_id";
    $sth = self::$dbh->prepare($sql);
    $sth->execute( [ ':classroom_id' => $classroom_id ] );
  }

  /**
   * Retourne la liste des enfants d'une classe.
   * @param  integer  $classroom_id   identifiant de la classe
   */
  public function getChildrens(  $code )
  {
    $id = $this->getIdFromCode( $code );
    $sql = "SELECT * FROM {$this->tableChildren}
            WHERE classroom_id = $id";
    return self::$dbh->query( $sql )->fetchAll();
  }

}

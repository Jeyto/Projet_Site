<?php
//
// FICHIER : app / Models / Admin.php
//

namespace App\Models;

class Admin extends Base {

	protected $tableName = TABLE_PREFIX . 'admin';
	private static $instance;

	public static function getInstance() {
		if (!isset(self::$instance)) {
			self::$instance = new Admin();
		}
		return self::$instance;
	}

  /**
   * Indique si le login existe dans la base.
   * @param  string $name 
   * @param  string $password 
   * @return boolean
   */
  public function check( $name, $password )
  {
    $sql = "SELECT COUNT(*) AS c 
            FROM {$this->tableName} 
            WHERE name = :name AND password=:password";
    $sth = self::$dbh->prepare($sql);
    $sth->execute( [ ':name' => $name, ':password' => $password ]);
    return ($sth->fetch()['c'] > 0);
  }

}

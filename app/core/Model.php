<?php 

namespace App\Core;
use PDO;

class Model {

	protected object $db;

	public function __construct() {

		try {

			$this->db = new PDO ("mysql:host=localhost;dbname=dbmusicplayer", "root", "");
		} catch (Exception $e) {
			die ("error! " . $e->getMessage());
		}
	}
}
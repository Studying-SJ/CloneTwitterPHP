<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(//Não lembro o porque dessa barra '/', acho que é pra identificar q o PDO é da raiz PHP, algo assim, que é nativo php.
				"mysql:host=localhost;dbname=twitter_clone;charset=utf8",
				"root",
				"" 
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>
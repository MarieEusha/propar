<?php

class Singleton
{
	private static $_instance;
	private $_connexion;

	private function __construct()
	{
		//	Connexion à la base de données
		try {
				$this->_connexion = 
				new PDO(
					'mysql:host=localhost;dbname=propar;charset=UTF8',
					'root',
					'',
					[
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
						PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
					]
				);
				//self::$_instance->exec('SET NAMES utf8 COLLATE utf8_bin');
				// throw new PDOException("La connexion a échouée", 1);
			
		} catch (PDOException $e) {
			echo "Message d'erreur : $e->getMessage() /n Code erreur : $e->getCode()";
		}
	}

/*
	Get an instance of the Database
	si une instance existe la methode va la retourner 
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { 
			self::$_instance = new Singleton();
		}
		return self::$_instance;
	}

	

	public function __destruct() {
		$this->_connexion = null;
	}
	
	public function getConnexion() {
		return $this->_connexion;
	}

}
	
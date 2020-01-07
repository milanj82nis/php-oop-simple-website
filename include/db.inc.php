<?php

class DbConnect {
	
	private $host = 'localhost';
	
	private $dbname = 'oop';
	
	private $username = 'root';
	
	private $password = '';
	
	protected function connect() {
		
		try {
			
			$sql = 'mysql:host='. $this -> host .';dbname='. $this -> dbname .';';
			
			$pdo = new PDO ( $sql , $this -> username , $this -> password );
			
			$pdo -> setAttribute ( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
			
			$pdo -> setAttribute ( PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC );
			
			return $pdo;
			
		} catch ( Exception $e ){
			
			echo $e -> getMessage();
		}
		
		
	}// connect
	
	
}



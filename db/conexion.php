<?php

/*$objDB = new MySQL;
$objDB->conecta();
$objDB->consulta("SET NAMES 'latin1'");*/

class MySQLPDO { 
/* 
singleton pdo database class 
use as follows: 

get PDO object to work with 
$pdo = PdoSingle::getInstance($host, $user, $pass, $db); 

run a select query and get the results as associative array 
$result = $pdo->getData($sql, $params); 

run an insert/update/delete query and get the rows affected 
$rowcount = $pdo->editData(sql, $params); 

*/ 
		static protected $instance = null; 
		protected $conn; 
		protected $host; 
		protected $user; 
		protected $pass; 
		protected $database; 
		protected $stmt; 
		
		public function __construct($host, $user, $pass, $db) { 
				$this->host = $host; 
				$this->user = $user; 
				$this->pass = $pass; 
				$this->database = $db;
				$this->connectDB(); 
		} 
		
		private function connectDB() { 
		// Connect to the database 
		try { 
			$this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->user, $this->pass); 
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		} 
		catch(PDOException $e) { 
			throw new Exception('DATABASE ERROR: ' . $e->getMessage()); 
		} 
		} 
		
		public static function getInstance($host, $user, $pass, $db) { 
		// method for returning db 
		
		if(self::$instance == null) 
		 { 
		  self::$instance = new PDODB($host, $user, $pass, $db); 
		 } 
		 return self::$instance; 
		} 

		public function insertData($sql,$params) { 
		try { 
		  $this->stmt = $this->conn->prepare($sql); 
		  return $this->stmt->execute($params); 
		} 
		catch(PDOException $e) { 
		  throw new Exception('DATABASE ERROR: ' . $e->getMessage()); 
		} 
		}

		public function getData($sql,$params) { 
		try { 
		  $this->stmt = $this->conn->prepare($sql); 
		  $this->stmt->execute($params);
		  return $this->stmt->fetchAll(); 
		} 
		catch(PDOException $e) { 
		  throw new Exception('DATABASE ERROR: ' . $e->getMessage()); 
		} 
		} 
		
		public function editData($sql,$params) { 
		try { 
		  $this->stmt = $this->conn->prepare($sql); 
		  $this->stmt->execute($params); 
		  return $this->stmt->rowCount(); 
		} 
		catch(PDOException $e) { 
		  throw new Exception('DATABASE ERROR: ' . $e->getMessage()); 
		} 
		} 
		
		public function lastID() { 
		try { 
		  return $this->conn->lastInsertId(); 
		} 
		catch(PDOException $e) { 
		  throw new Exception('DATABASE ERROR: ' . $e->getMessage()); 
		} 
		} 
		
		public function __destruct() { 
			$this->conn = null;
		}
/* funciones pripias */
/*	public function escaparString($value){#no funciona
		$value = addcslashes($value, '%_');
		return mysql_real_escape_string(trim($value));
	}*/
/*	public function fetch_assoc($value){ #Funcion remplazada con fetch_object
		return mysqli_fetch_assoc($this->consulta($value));
	}*/
/*	public function free_result($value){
		return $this->conn($this->consulta($value));
	}*/
/*	public function farray($value){
		return mysqli_fetch_array($this->consulta($value));
	}
	public function rows($value){
		return mysqli_num_rows($this->consulta($value));
	}*/
}  
?>
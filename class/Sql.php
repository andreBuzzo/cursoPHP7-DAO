<?php 


	class Sql extends PDO {

		private $conn;

		public function __construct() {

			$this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
		}

		//como executar comandos no banco de dados

		private function setParams($statement, $parameters = array()) {

			foreach ($parameters as $key => $value){

				$this->setParam($statement, $key, $value);
			}
		}

		private function setParam($statement, $key, $value) {

			$statement->bindParam($key, $value);
		}

		public function query($rawQuery, $params = array()){

			$stmt = $this->conn->prepare($rawQuery);

			$this->setParams($stmt, $params);

			$stmt->execute();

			return $stmt;

			}

		public function select($rawQuery, $paramns = array()):array {

			$stmt = $this->query($rawQuery, $paramns);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		}
		
	}	


 ?>
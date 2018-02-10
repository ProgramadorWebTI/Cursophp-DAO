<?php 

	class Sql extends PDO
	{
		private $con;

		public function __construct()
		{
			$this->con = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
		}

		private function setParams($statement, $parameters = array())
		{
			foreach ($parameters as $key => $value) 
			{
			
				$this->setParam($statement, $key, $value);
			}
		}

		private function setParam($statment, $key, $value)
		{
			$statment->bindParam($key, $value);
		}


		public function query($rawQuery, $params = array())
		{
			$stmt = $this->con->prepare($rawQuery);

			$this->setParams($stmt, $parameterss);

			$stmt->execute();

			return $stmt ;
		}

		public function select($rawQuery, $params = array()):array
		{
			$stmt = $this->query($rawQuery, $params);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>
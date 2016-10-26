<?php


date_default_timezone_set("Brazil/East");

class Connection{
	private $connection;
	private $parameters = array("host"=>"localhost","user"=>"root","password"=>"","database"=>"trabalhojoao");
public function load($value, $attr) {

		$sql = "select * from " . $this->tabela . " where " . $attr . " = " . $value . " ;";

		return mysqli_fetch_assoc($this->execute_query($sql));
}
}
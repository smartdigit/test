<?php

class dbAcess{
	private $connSQL;
	
	private function conectionDataBaseSQL(){
		$this->connSQL= odbc_connect("Driver={SQL Server};Server=DBF; Database=IG-SGComercial;", 'sa', 'S0ftw@re');
		if (!$this->connSQL){
			die ('Erro de ligação ao Sql Server!');
		}
	}
	
	private function closeDatabaseSQL(){
		odbc_close($this->connSQL);
	}
		
	public function connectAndGetDataSQL($query_string){
		$this->conectionDataBaseSQL();
		if ($this->connSQL){
			$result_id=odbc_exec($this->connSQL, $query_string);
		}
		return $result_id;
	}
}
	
class Variables{
		
	// Atributos
	private $X1;		
	private $X2;		
	private $X3;		
		
	// Métodos Modificadores e SELECTores
	public function setX1($X1) { $this->X1= $X1;}
	public function getX1()    { return $this->X1; }
	
	public function setX2($X2) { $this->X2= $X2;}
	public function getX2()    { return $this->X2; }
		
	public function setX3($X3) { $this->X3= $X3;}
	public function getX3()    { return $this->X3; }
}


class APIService {
	public function getUsers(){
		$query_string="SELECT AppUserID, AppUserName, AppUserPassword FROM AppUsers ORDER BY AppUserID";
		$dbAcesso=new DBAcess();
		$result_id=$dbAcesso->connectAndGetDataSQL($query_string);		
		if ($result_id){				
			$lista=array();
			$cont=0;			
			while($row=odbc_fetch_row($result_id)){					
				if(odbc_num_rows($result_id)>0){
					$cont++;
					$lista[$cont]= new Variables();
					$lista[$cont]->setX1(utf8_encode(odbc_result($result_id, 'AppUserID')));
					$lista[$cont]->setX2(utf8_encode(odbc_result($result_id, 'AppUserName')));
					$lista[$cont]->setX3(utf8_encode(odbc_result($result_id, 'AppUserPassword')));
					
				}
			}
			return $lista;
		}
	}
	public function setFoo($param1, $param2) {
		
	}
}

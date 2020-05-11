<?php 

namespace AppBundle\Services\Messenger;

class UserAttributes extends Messenger{
	
	public $entity;
	protected $lastId;
	
	public function __construct(){
		parent::__construct();		
	}
	
	public function get($entity, $conditionData = false, $columns = false){		
		$this->entity = $entity;
	
		if($columns === false)
			$columns = $this->entity->columns;
			
		$sql = " SELECT " . $columns . " FROM " . $this->entity->table . " " .  $this->getCondition($conditionData);		
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		//$row = $stmt->fetchAll();
		//return ( count($row) == 1 ) ? $row[0] : $row;
		return $stmt->fetchAll();
	}
	
	public function post($entity, $insert_values){
		$this->entity = $entity;
		$valuesNumber = count($insert_values);
		
		if($valuesNumber > 0){
			$placeHolders = "";
			for ($i = 0; $i < $valuesNumber; $i++) {
				$placeHolders .= "?";
				if($i < $valuesNumber-1)
					$placeHolders .= ",";
			}
			
			$sql = " INSERT INTO " . $this->entity->table . " ( " . $this->entity->columns . " ) VALUES ( " . $placeHolders . " ) ";
			//return $sql; 
			
			
			$stmt = $this->db->prepare($sql);

			
			
			
			for ($i = 0; $i < $valuesNumber; $i++) {
				$stmt->bindParam($i+1, $insert_values[$i]);
			}

			//return true;
			
			
			if($stmt->execute()){
			    if($this->entity->table == 'messenger'){
//                    $stmt = $this->db->prepare("SELECT messageId from messenger WHERE fromUser=? AND toUser=? ORDER BY messageId DESC");
//                    $stmt->bindParam(1, $insert_values[0], \PDO::PARAM_INT);
//                    $stmt->bindParam(2, $insert_values[1], \PDO::PARAM_INT);
//
//                    $stmt->execute();
//                    $message = $stmt->fetch();
//                    $this->lastId = $message['messageId'];
                    $this->lastId = $this->db->lastInsertId();
                }

				return  true;
			}	
			else
				return false;
			
		}

		return false;
		
		//echo " INSERT INTO " . $this->entity->table->name . " ( " . $columns . " ) VALUES ( " . $values . " ) ";
	}
	
	private function getCondition($conditionData){
		$condition = "";
		if(is_array($conditionData) and count($conditionData) > 0){
			$conditions = array();
			$entityCoulumns = explode(",", $this->entity->columns);				
				
			foreach ($conditionData as $key => $value){
				if(!empty($value))
					$conditions[] = $entityCoulumns[$key] . " = '" . $value . "'";
			}
	
			if(count($conditions) > 0)			
				$condition .= "WHERE " . implode(" AND ", $conditions);
		}	
		return $condition;
	}
	
	public function getLastId(){
		return $this->lastId;
	}
	
	
}

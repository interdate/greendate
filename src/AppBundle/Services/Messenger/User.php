<?php 

namespace AppBundle\Services\Messenger;

class User extends Messenger{
	
	protected $id;
	protected $image;
	protected $nickName;
	protected $gender;
	protected $isFrozen;
	protected $isOnline;
	protected $isPaying;
	protected $hasPoints;
	protected $settings;
		
	public function __construct($id){
		parent::__construct();
		$this->id = $id;		
		$this->setProperties();
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getImage(){
		return $this->image;
	}
	
	public function getNickName(){
		return $this->nickName;
	}
	
	public function isFrozen(){
		return $this->isFrozen;
	}
	
	public function isOnline(){
		return $this->isOnline;
	}
	
	public function isPaying(){
       	return ($this->settings['is_charge'] == '1' or $this->getId() == 111 or $this->getId() == 124 or $this->getId() == 3348) ? $this->isPaying : true;
	}
	
	public function hasPoints(){
		return $this->hasPoints;
	}

	public function setProperties(){
		$sql = "
			SELECT 
				u.username,
				u.gender_id,
				u.is_frozen,
				u.points,
				p.name,
				1 as isOnline,
				isPaying(u.start_subscription, u.end_subscription, NOW()) as isPaying
			FROM 
				user u
			LEFT JOIN
				photo p
			ON
				p.user_id = u.id AND p.is_main = 1 AND p.is_valid = 1
			WHERE 
				u.id=:id";
		
		
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam("id",$this->id, \PDO::PARAM_INT);
		$stmt->execute();
		$user = $stmt->fetch();
		$this->nickName = (!empty ( $user['username'] ) ) ? $user['username'] : false;
		$this->gender = $user['gender_id'];
		$this->isFrozen = ((int)$user['is_frozen'] == 1) ? true : false;
		$this->isOnline = ((int)$user['isOnline'] == 1) ? true : false;
		$this->isPaying = ((int)$user['isPaying'] == 1) ? true : false;
		$this->hasPoints =  ((int)$user['points'] > 0) ? true : false;

		$stmt = $this->db->prepare("SELECT * FROM settings WHERE id = 1");
		$stmt->execute();
		$this->settings = $stmt->fetch();

		$sql = "SELECT id, name FROM photo WHERE id=:id AND is_main = 1 AND is_valid = 1" ;
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam("id",$this->id);
		$stmt->execute();
		$image = $stmt->fetch();

		/*
		if( !empty ( $row['id'] ) && is_file( $_SERVER['DOCUMENT_ROOT'] . '/uploads/userpics/' . $row['id'] . '.' . $row['ext']) ){
			$this->image = $this->config->users->storage->images . '/' . $row['id'] . '.' . $row['ext'];
		}
		else{
			$sql = "SELECT id, name FROM photo WHERE id=:id AND is_valid = 1" ;
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam("id",$this->id);
			$stmt->execute();
			$row = $stmt->fetch();

			if( !empty ( $row['id'] ) && is_file( $_SERVER['DOCUMENT_ROOT'] . '/uploads/userpics/' . $row['id'] . '.' . $row['ext']) ){
				$this->image = $this->config->users->storage->images . '/' . $row['id'];
			}
			else{
				$this->image = ($this->gender == 0) ?  $this->config->users->noImage->male : $this->config->users->noImage->female;
			}
		}
		*/

		$this->image = $image['name'];
		if($this->id == 111) {
			//var_dump($this->hasPoints);
			//die;
		}

	}
	
	

}

?>

<?php

class PhoneBook
{
	private $_db;

	public function __construct($DB)
	{
		$this->_db = $DB;
	}

	public function getPhoneBook($userId, $begin=0)
	{
		$req = "SELECT pb.*
			FROM phone_book pb 
				INNER JOIN user_phonebook up on up.id_phonebook = pb.id 
				INNER JOIN asterisk.g_users_spe c on c.id = up.id_cli
			WHERE c.id = ?
			ORDER BY pb.name
			LIMIT ?, ?";
		$row = $this->_db->query($req, array($userId, $begin, PAGIN));
		return $row;
	}

	public function getRowNumber($userId){
		$req = "SELECT COUNT(*)
			FROM phone_book pb 
				INNER JOIN user_phonebook up on up.id_phonebook = pb.id 
				INNER JOIN asterisk.g_users_spe c on c.id = up.id_cli
			WHERE c.id = ?";

		$row = $this->_db->single($req, array($userId));
		return $row;
	}

	public function updatePhoneBook($id, $data){
		$req = 'UPDATE phone_book SET name = ?, home_phone = ?, mobile_phone = ?, work_phone = ?, ring_tone = ? WHERE id = ?';
		$data = array_merge($data,array($id));
		if(count($data) == 6){
			return $this->_db->query($req, $data);
		}
		return false;
	}

	public function insertPhoneBook(array $data, $userId){
		$this->_db->beginTransaction();
		$req = 'INSERT INTO phone_book (name, home_phone, mobile_phone, work_phone, ring_tone) VALUES (?, ?, ?, ?, ?)';
		if(count($data) == 5){
			$res = $this->_db->query($req, $data);
			if($res != false) {
				$req = 'INSERT INTO user_phonebook (id_cli, id_phonebook) VALUES (?, ?)';
				$res = $this->_db->query($req, array($userId, $this->_db->lastInsertId()));
				if ($res != false){
					$this->_db->commit();
					return true;
				}
			}
			$this->_db->rollBack();
		}
		return false;
	}

	public function deletePhoneBook($id){
		$req = $req = 'DELETE FROM user_phonebook WHERE id_phonebook = ?';
		return $this->_db->query($req, array($id));
	}
}

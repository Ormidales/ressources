<?php
require_once(dirname(__FILE__) . "/log.class.php");
class Customers{
	
	public 	$_id;
	private $_db;

	public function __construct($db) {
		$this->_db 		= $db;
	}	

    public function getCustomersWithPhonebook(){
        $req = 'SELECT id, user FROM asterisk.g_users_spe WHERE prov_phonebook = 1';	
        $res = $this->_db->query($req);
        return $res;
    }

	public function getName($id){
		$req = 'SELECT user FROM asterisk.g_users_spe WHERE id = ?';	
		$res = $this->_db->row($req, array($id));
		return $res['user'];
	}
}
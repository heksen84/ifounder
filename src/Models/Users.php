<?php

class Users
{

    public function __construct(public $db) {}

    public function get() {
	return $this->db->select()->from('users')->execute()->fetchAll();    
    }

    public function getById(){
        return 'wait'; //$this->db->select()->from('users')->execute();
    }
}

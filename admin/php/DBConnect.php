<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnect
 *
 * @author Vaibhav
 */
class DBConnect {
    private $db = NULL;

    const DB_SERVER = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_NAME = "donor";

    public function __construct() {
        $dsn = 'mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_SERVER;
        try {
            $this->db = new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            throw new Exception('Connection failed: ' .
            $e->getMessage());
        }
        return $this->db;
    }
    
    public function addEmployee($username,$password,$firstName,$middleName,$lastName,$pcrNumber,$designation,$landline,$mobile,$birthDay){
        $stmt = $this->db->prepare("INSERT INTO employees (f_name,m_name,l_name,username,password,b_day,designation,landline,mobile_nr, prc_nr)"
                . "VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmt->execute([$firstName,$middleName,$lastName,$username,$password,$birthDay,$designation,$landline,$mobile,$pcrNumber]);
        return true;
    }
    
}

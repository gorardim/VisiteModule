<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author Foyez
 */
class UserModel extends CI_Model{
    //put your code here
    public function allUser(){
        $sql="SELECT * FROM EMPLOYEE_INFO";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
}

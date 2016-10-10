<?php
namespace application\models;

use core\lib\model;

class userModel extends model
{
    private $table = 'user';

    public function login($user,$pwd)
    {
        $data = ["AND" => [
            "username" => $user,
            "pwd" => $pwd,
            ]];
        $res =  $this->get($this->table,'*',$data);
     
        if($res) {
            return $res['u_id'];
        } else {
            return false;
        }
    }

    public function getInfo($id)
    {
        return $this->get($this->table,'*',['u_id'=>$id]);
    }

    public function updateInfo($date,$id)
    {
        $ret =  $this->update($this->table,$date,['u_id'=>$id]);
        if($ret!==false) {
            return true;
        } else {
            return false;
        }
    }
}
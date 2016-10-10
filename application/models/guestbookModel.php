<?php
namespace application\models;

use core\lib\model;

class guestbookModel extends model
{
    private $table = 'guestbook';

    public function all()
    {
       return $this->select($this->table,'*');
    }

    public function addOne($data)
    {
        return $this->insert($this->table,$data);
    }

    public function delOne($id)
    {
        $ret = $this->delete($this->table,array('id'=>$id));
        if($ret !== false)
        {
            return true;
        }else
        {
            return false;
        }
    }

    public function getOne($id)
    {
        return  $this->get($this->table,'*',array('id'=>$id));

    }

}
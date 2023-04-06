<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone','rfid_no','balance'];

    public function getUsers()
    {
        return $this->findAll();
    }

    public function getUser($id)
    {
        return $this->find($id);
    }

    public function updateUser($id, $data)
    {
        $this->update($id, $data);
        return true;
    }
    public function getUserById($id)
    {
        return $this->select('*')->where('id', $id)->first();
    }
}


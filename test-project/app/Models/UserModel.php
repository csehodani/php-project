<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'first_number', 'second_number', 'result'];

    protected $useTimestamps = true;
    protected $createdField = 'user_created_at';
    protected $updatedField = 'user_updated_at';
}
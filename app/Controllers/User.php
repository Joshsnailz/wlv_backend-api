<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use App\Models\WorkoutsModel;
 
class User extends BaseController
{
    use ResponseTrait;
     
    public function index()
    {
        $users = new UserModel;
        return $this->respond(['users' => $users->findAll()], 200);
    }
}
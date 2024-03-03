<?php

namespace App\Controllers;
 
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\WorkoutsModel;
use \Firebase\JWT\JWT;

class WorkoutsController extends BaseController
{
    use ResponseTrait; 

    protected $format    = 'json';
    protected $model; // Declare the model property

    public function __construct()
    {
        $this->model = new WorkoutsModel(); 
    }

    public function index_get() {
        $workouts = $this->model->getWorkouts();
        return $this->respond($workouts);
    }

    public function index_post() {
        $data = $this->request->getPost();
        if ($this->model->insertWorkout($data)) {
            return $this->respondCreated($data);
        } else {
            return $this->failServerError();
        }
    }
}

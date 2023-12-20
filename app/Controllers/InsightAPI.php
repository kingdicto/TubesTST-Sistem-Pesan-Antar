<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Insight;
class InsightAPI extends ResourceController
{
    public function index(){
        $model = model(Insight::class);
        $data = [ 'message' => 'success',
            'dbpesanantar' => $model->getDataInsight()];
        return $this->respond($data,200);
     }
}

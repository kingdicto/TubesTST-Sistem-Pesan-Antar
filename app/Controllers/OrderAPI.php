<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Order;
class OrderAPI extends ResourceController
{
    public function index(){
        $model = model(Order::class);
        $data = [ 'message' => 'success',
            'dbpesanantar' => $model->getDataOrder()];
        return $this->respond($data,200);
     }
}

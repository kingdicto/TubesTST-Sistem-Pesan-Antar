<?php
namespace App\Controllers;
use App\Models\Order;
class OrderController extends BaseController
{
    public function index()
    {
        $model = model(Order::class);
        $data['dbpesanantar'] = $model ->getDataOrder();
        return view('layout/header', $data).view('pages/order').view('layout/footer');
    }
}

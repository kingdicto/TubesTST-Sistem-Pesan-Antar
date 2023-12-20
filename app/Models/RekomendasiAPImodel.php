<?php

namespace App\Models;

use CodeIgniter\Model;

class RekomendasiAPImodel extends Model
{
    protected $apiUrl = 'http://localhost:8081/rekomendasi';

    public function getMenuData()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->get($this->apiUrl);

        if ($response->getStatusCode() == 200) {
            return json_decode($response->getBody(), true)['dbrestoran'];
        } else {
            return [];
        }
    }
}

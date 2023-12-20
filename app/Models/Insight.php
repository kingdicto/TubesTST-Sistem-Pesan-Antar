<?php
namespace App\Models;
use CodeIgniter\Model;
class Insight extends Model {
    protected $DBGroup ='default';
    protected $table = 'viewinsight';
    public function getDataInsight(){
        return $this->findAll(1000);
    }
}
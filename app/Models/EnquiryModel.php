<?php

namespace App\Models;

use CodeIgniter\Model;

class EnquiryModel extends Model
{
    protected $table      = 'tbl_enquiries';
    protected $primaryKey = 'id'; // Adjust if you have a different primary key
    protected $allowedFields = ['name', 'email', 'phone'];

   


    public function saveRecord($data)
    {
        $builder = $this->builder('tbl_enquiries');
        return $builder->insert($data);
    }
}

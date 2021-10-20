<?php namespace App\Models;

use CodeIgniter\Model;

class AddressModel extends Model {
    protected $table = 'address';
    protected $primaryKey = 'address_id';
    protected $allowedFields = [
    'numhome',
    'village' ,
    'sub_district' ,
    'district' ,
    'province' ,
    'zipcode' 
        ];

       
}
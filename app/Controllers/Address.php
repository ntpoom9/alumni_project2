<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AddressModel;

class Address extends BaseController
{
    public function showform()
    {
        return view('form');
    }

    // public function showdata()
    // {
    //     return view('show');
    // }

    public function save(){
        $model = new AddressModel();
        $data = [
            'address_id' => "",
            'numhome'=> $this->request->getVar('numhome'),
            'village' => $this->request->getVar('village'),
            'sub_district' => $this->request->getVar('sub_district'),
            'district' => $this->request->getVar('district'),
            'province' => $this->request->getVar('province'),
            'zipcode' => $this->request->getVar('zipcode')
        ];

        $model->save($data);
        // echo "seve";
           return redirect()->to('/show');
    }

    public function showAddress() {
       
       $Model = new AddressModel();

        // โชว์ All จาก id 
        $data['Address'] = $Model->orderBy('address_id', 'DESC')->findAll();

        // $data['users'] = $UserModel->fetch_data();
        return view('show', $data);
    }
    }
<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MemberModel;
use App\Models\CategoryModel;
use App\Models\RegisModel;


class Register_category extends Controller{

    public function __construct()
    {
        helper("form");
    }

    public function index(){
        helper("form");
        $model = new RegisModel();
        $data = [
            'member' => $this->request->getVar('member'),
            'category_run' => $this->request->getVar('category_id'),
        ];

        $model->insert($data);
           return redirect()->to('/index_user');
    }

    // public function add_regis()
    // {
    //     $data = [];
    //     $rules = [
    //         'member' => [
    //             'rules' => 'required|matches[member.id_card]|min_length[13]|max_length[13]|numeric',
    //             'errors' => [
    //                 'required' => 'กรุณากรอกเลขบัตรประชาชน',
    //                 'matches' => 'เลขบัตรประชาชนต้องเป็นสมาชิกก่อน',
    //                 'numeric' => 'กรุณากรอกเป็นตัวเลข',
    //                 'min_length' => 'กรุณากรอกเลขบัตรประชาชน 13 หลัก',
    //                 'max_length' => 'กรุณากรอกเลขบัตรประชาชน 13 หลัก',
    //             ],
    //         ],
    //         // 'email' => [
    //         //     'rules' => 'required|matches[member.email]|valid_email',
    //         //     'errors' => [
    //         //         'required' => 'กรุณากรอกอีเมล',
    //         //         'matches' => 'อีเมลที่ลงทะเบียนต้องเป็นสมาชิกก่อน',
    //         //         'valid_email' => 'อีเมลควรเป็น example@gmail,@hotmail เท่านั้น',
    //         //     ],
    //         // ]
    //     ];

    //     if ($this->request->getMethod() == 'post') {
    //         if ($this->validate($rules)) {
    //             $model = new RegisModel();
    //             $data = [
    //                 'member' => $this->request->getVar('member'),
    //                 'category_run' => $this->request->getVar('category_id'),
    //             ];

    //             $model->insert($data);
    //             // echo "seve";
    //                return redirect()->to('/index_user');
    //         } else {
    //             $data['validation'] = $this->validator;
    //         }
    //     }
    //     return view('register_category',$data);
    // }

    }

  
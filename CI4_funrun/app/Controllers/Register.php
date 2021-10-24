<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MemberModel;

// use App\Models\CategoryModel;
// use App\Models\RegisModel;


class Register extends Controller{

    public function __construct()
    {
        helper("form");
    }

    public function index()
    {
        $data = [];
        $rules = [
            'id_card' => [
                'rules' => 'required|is_unique[member.id_card]|min_length[13]|max_length[13]|numeric',
                'errors' => [
                    'required' => 'กรุณากรอกเลขบัตรประชาชน',
                    'is_unique' => 'เลขบัตรประชาชนนี้ถูกใช้งานแล้ว',
                    'numeric' => 'กรุณากรอกเป็นตัวเลข',
                    'min_length' => 'กรุณากรอกเลขบัตรประชาชน 13 หลัก',
                    'max_length' => 'กรุณากรอกเลขบัตรประชาชน 13 หลัก',
                ],
            ],
            'name' => [
                'rules' => 'required|alpha',
                'errors' => [
                    'required' => '*ชื่อ-นามสกุล',
                    'alpha' => 'ชื่อ-นามสกุล ต้องเป็นตัวอักษร',
                ],
            ],
            'age' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '*อายุ',
                    'numeric' => 'กรุณากรอกเป็นตัวเลข',
                ],
            ],
            'email' => [
                'rules' => 'required|is_unique[member.email]|valid_email',
                'errors' => [
                    'required' => 'กรุณากรอกอีเมล',
                    'is_unique' => 'อีเมลถูกใช้งานแล้ว',
                    'valid_email' => 'อีเมลควรเป็น example@gmail,@hotmail เท่านั้น',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'กรุณากรอกรหัสผ่าน',
                    'min_length' => 'รหัสผ่านต้องมากว่า 6 ตัว',

                ],
            ]
        ];

        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                $model = new MemberModel();
                $data = [
                    'id_card' => $this->request->getVar('id_card'),
                    'name' => $this->request->getVar('name'),
                    'age' => $this->request->getVar('age'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                ];

                $model->insert($data);
                // echo "seve";
                   return redirect()->to('/index_user');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('register',$data);
    }
        // return view('register_run');
    }

    // public function add(){
    //     $model = new MemberModel();
    //                 $data = [
    //                     'id_card' => $this->request->getVar('id_card'),
    //                     'name' => $this->request->getVar('name'),
    //                     'age' => $this->request->getVar('age'),
    //                     'email' => $this->request->getVar('email'),
    //                     'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
    //                 ];
    //     $model->insert($data);
    //     return $this->response->redirect(site_url('/index_user'));
    //             }
           
    //     $data = [];
    //     $rules = [
    //         'id_card' => [
    //             'rules' => 'required|is_unique[member.id_card]|min_length[13]|max_length[13]|numeric',
    //             'errors' => [
    //                 'required' => 'กรุณากรอกเลขบัตรประชาชน',
    //                 'is_unique' => 'เลขบัตรประชาชนถูกใช้งานแล้ว',
    //                 'numeric' => 'กรุณากรอกเป็นตัวเลข',
    //                 'min_length' => 'กรุณากรอกเลขบัตรประชาชน 13 หลัก',
    //                 'max_length' => 'กรุณากรอกเลขบัตรประชาชน 13 หลัก',
    //             ],
    //         ],
    //         'name' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '*ชื่อ',
    //             ],
    //         ],
    //         'name' => [
    //             'rules' => 'required|numeric',
    //             'errors' => [
    //                 'required' => '*อายุ',
    //                 'numeric' => 'กรุณากรอกเป็นตัวเลข',
    //             ],
    //         ],
    //         'email' => [
    //             'rules' => 'required|is_unique[member.id_card]',
    //             'errors' => [
    //                 'required' => 'กรุณากรอกอีเมล',
    //                 'is_unique' => 'อีเมลถูกใช้งานแล้ว',
    //             ],
    //         ],
    //         'password' => [
    //             'rules' => 'required|min_length[6]',
    //             'errors' => [
    //                 'required' => 'กรุณากรอกรหัสผ่าน',
    //                 'min_length' => 'รหัสผ่านต้องมากว่า 6 ตัว',

    //             ],
    //         ]
    //     ];

    //     if ($this->request->getMethod() == 'post') {
    //         if ($this->validate($rules)) {
    //             $model = new MemberModel();
    //             $data = [
    //                 'id_card' => $this->request->getVar('id_card'),
    //                 'name' => $this->request->getVar('name'),
    //                 'age' => $this->request->getVar('age'),
    //                 'email' => $this->request->getVar('email'),
    //                 'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
    //             ];

    //             $model->insert($data);
    //             // echo "seve";
    //                return redirect()->to('/index_user');
    //         } else {
    //             $data['validation'] = $this->validator;
    //         }
    //     }
    //     return view('register_run');
    // }
// } 
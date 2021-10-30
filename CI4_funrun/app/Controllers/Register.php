<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MemberModel;
use App\Models\CategoryModel;
use App\Models\RegisModel;


class Register extends Controller{

    public function __construct()
    {
        $CategoryModel = new CategoryModel();

        // โชว์ All จาก id 
        $category['category'] = $CategoryModel->orderBy('category_id', 'ASC')->findAll();

        helper("form");
        return view('register',$category);
        
    }

    public function index()
    {
        $data = [];
        $data_regis = [];
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
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => '*ชื่อ-นามสกุล',
                    'alpha_space' => 'ชื่อ-นามสกุล ต้องเป็นตัวอักษร',
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
            ],

            // regis 
            'category_run' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณาเลือกกิจกรรม',
                ],
            ],
            'ID' => [
                'rules' => 'required|is_unique[regis.ID]|min_length[10]|max_length[10]',
                'errors' => [
                    'required' => 'กรุณากรอกหมายเลขผู้สมัคร',
                    'is_unique' => 'หมายเลขผู้สมัครนี้ถูกใช้งานแล้ว',
                    'min_length' => 'กรุณากรอก RUN ตามด้วย ตัวเลข 7 หลัก',
                    'max_length' => 'กรุณากรอก RUN ตามด้วย ตัวเลข 7 หลัก',
                ],
            ],
        ];

        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                $model = new MemberModel();
                $model_regis = new RegisModel();
                
                $data = [
                    'id_card' => $this->request->getVar('id_card'),
                    'name' => $this->request->getVar('name'),
                    'age' => $this->request->getVar('age'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                ];

                $data_regis = [
                    'ID' => $this->request->getVar('ID'),
                    // 'ID' => getAutoNumber('regis','ID','RUN',8),
                    'member' => $this->request->getVar('id_card'),
                    'category_run' => $this->request->getVar('category_run'),
                ];

                $model->insert($data);
                $model_regis->insert($data_regis);
                
                // echo "seve";
                   return redirect()->to('/login');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('register',$data);
    }

    public function showRegisCategory($id_card=null)
    {
        $MemberModel = new MemberModel();

        // โชว์ All จาก id 
        $data['member'] = $MemberModel->where('id_card', $id_card)->first();

        helper("form");
        return view('register_category',$data);
    }

    public function regisOnlyCategory(){
        helper("form");
        $data =[];
        $rules =[
            'category_run' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'กรุณาเลือกกิจกรรม',
                ],
            ],
            'ID' => [
                'rules' => 'required|is_unique[regis.ID]|min_length[10]|max_length[10]',
                'errors' => [
                    'required' => 'กรุณากรอกหมายเลขผู้สมัคร',
                    'is_unique' => 'หมายเลขผู้สมัครนี้ถูกใช้งานแล้ว',
                    'min_length' => 'กรุณากรอก RUN ตามด้วย ตัวเลข 7 หลัก',
                    'max_length' => 'กรุณากรอก RUN ตามด้วย ตัวเลข 7 หลัก',
                ],
            ],
        ];

        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                $session = session();
                $model = new RegisModel();

                $data = [
                    'ID' => $this->request->getVar('ID'),
                    // 'ID' => getAutoNumber('regis','ID','RUN',8),
                    'member' => $this->request->getVar('member'),
                    'category_run' => $this->request->getVar('category_run'),
                ];
                $model->insert($data);
                $session->set($data);
                return redirect()->to('/profile');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('register_category',$data);
    }
    
    
    }

  
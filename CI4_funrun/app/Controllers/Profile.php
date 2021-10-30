<?php  namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MemberModel;


class Profile extends Controller{
    public function index() {
        $session = session();
        $MemberModel = new MemberModel();

        // โชว์ All จาก id 
        $data['member'] = $MemberModel->orderBy('id_card', 'DESC')->findAll();

        // $data['member'] = $MemberModel->fetch_data();
        return view('profile', $data);
    }

    public function show_edit($id_card=null) {

       
            $session = session();
            $MemberModel = new MemberModel();
            // $data['member'] = $MemberModel->orderBy('id_card', $id_card)->findAll();
            $data['member'] = $MemberModel->where('id_card', $id_card)->first();
    
            helper("form");

            return view('edit_profile', $data);
        }

        public function update()
        {
            $session = session();
            $id = $this->request->getVar('id_card');
            $data = [];
            $rules = [
                // 'name' => [
                //     'rules' => 'required|alpha_space',
                //     'errors' => [
                //         'required' => '*ชื่อ-นามสกุล',
                //         'alpha_space' => 'ชื่อ-นามสกุล ต้องเป็นตัวอักษร',
                //         'is_unique' => 'ชื่อนี้ถูกใช้งานแล้ว',
                //     ],
                // ],
                'age' => [
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => '*อายุ',
                        'numeric' => 'กรุณากรอกเป็นตัวเลข',
                    ],
                ],
                // 'email' => [
                //     'rules' => 'required|valid_email',
                //     'errors' => [
                //         'required' => 'กรุณากรอกอีเมล',
                //         'valid_email' => 'อีเมลควรเป็น example@gmail,@hotmail เท่านั้น',
                //     ],
                // ],
            ];
            if ($this->request->getMethod() == 'put') {
                if ($this->validate($rules)) {
                    $model = new MemberModel();
                    
                    $data = [
                        // 'name' => $this->request->getVar('name'),
                        'age' => $this->request->getVar('age'),
                        // 'email' => $this->request->getVar('email'),
                    ];
    
                  
                    $model->update($id,$data);
                   
                    $session->set($data); // อัพเดทข้อมูลที่อยู่ใน session ด้วย 
                       return redirect()->to('profile');
                       
                } else {
                    $data['validation'] = $this->validator;
                }
            }
            return view('edit_profile',$data);

        }

    
}
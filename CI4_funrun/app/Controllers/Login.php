<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MemberModel;
use App\Models\CategoryModel;
class Login extends Controller
{
    public function index()
    {
        // include helper form
        helper(['form']);
        echo view('login');
    }

    // public function check_login(){
    //     $model = new UserModel();
    //     $stu_id = $this->request->getVar('stu_id');
    //     $password = $this->request->getVar('password');

    //     $check = this->model->check_login($stu_id,$password);
    //     if (($check['stu_id']==$stu_id)&&($check['password']==$password)){
    //         session()->set('stu_id',$check['$stu_id']);
    //         session()->set('password',$check['$password']);
    //     } else{
    //         $session->setFlashdata('msg_login', 'รหัสนัหศึกษาและรหัสผ่านไม่ถูกต้อง!');
    //     }
    // }

    public function auth()
    {
        $session = session();
        $model = new MemberModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        
        if ($data) {
            $pass = $data['password'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $ses_data = [
                    'id_card' => $data['id_card'],
                    'name' => $data['name'],
                    'age' => $data['age'],
                    'email' => $data['email'],



                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Profile');
            } 
            else {
                $session->setFlashdata('msg', 'รหัสผ่านไม่ถูก');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'ไม่พบรหัสนักศึกษา');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/home');
    }
}
<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class Login_admin extends Controller
{
    public function index()
    {
        // include helper form
        helper(['form']);
        echo view('login_admin');
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
        // $model = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $email2 ="admin@gmail.com"; 
        $pass = 123456;
        
        if($email=="admin@gmail.com"&&$password==123456){
            return redirect()->to('/index_admin');
        }
        else{
            return redirect()->to('/login_admin');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/home');
    }
}
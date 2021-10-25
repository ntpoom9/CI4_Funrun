<?php  namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MemberModel;
use App\Models\RegisModel;

    class Admin extends Controller{
        public function index() {
           
            $MemberModel = new MemberModel();
    
            // โชว์ All จาก id 
            $data['member'] = $MemberModel->orderBy('id_card', 'ASC')->findAll();
            // $data['users'] = $MemberModel->fetch_data();
            return view('all_member', $data);
        }
        
        public function allList() {
           
            $RegisModel = new RegisModel();
    
            // โชว์ All จาก id 
            $data['list'] = $RegisModel->orderBy('ID', 'ASC')->findAll();
            // $data['users'] = $RegisModel->fetch_data();
            return view('all_list', $data);
        }

        public function deleteList($ID=null){
            $RegisModel = new RegisModel();
            $data['list'] = $RegisModel->orderBy('ID', 'ASC')->findAll();
            $RegisModel->delete($ID);
            
            return view('all_list',$data);
        }

        
}
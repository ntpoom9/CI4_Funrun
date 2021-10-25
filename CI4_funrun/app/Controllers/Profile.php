<?php  namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MemberModel;


class Profile extends Controller{
    public function index() {
       
        $MemberModel = new MemberModel();

        // โชว์ All จาก id 
        $data['member'] = $MemberModel->orderBy('id_card', 'DESC')->findAll();

        // $data['member'] = $MemberModel->fetch_data();
        return view('profile', $data);
    }

    public function show_edit($id_card=null) {
        //    echo $id_card;

            $session = session();
            $MemberModel = new MemberModel();
            // $data['member'] = $MemberModel->orderBy('id_card', $id_card)->findAll();
            $data['member'] = $MemberModel->where('id_card', $id_card)->first();
    
    
            return view('edit_profile', $data);
        }

        // public function update()
        // {
        //     $session = session();
        //     $id = $this->request->getVar('id_card');
        //     $MemberModel = new MemberModel();
        //     $data = [
        //         // 'd_m_y_birth' => $this->request->getVar('d_m_y_birth'),
        //         'province_birth' => $this->request->getVar('province_birth'),
        //         'nationality' => $this->request->getVar('nationality'),
        //         'religion' => $this->request->getVar('religion'),
        //         'blood_type' => $this->request->getVar('blood_type'),
        //         'Address' => $this->request->getVar('Address'),
        //         'SubDistrict' => $this->request->getVar('SubDistrict'),
        //         'District' => $this->request->getVar('District'),
        //         'Province' => $this->request->getVar('Province'),
        //         'Zipcode' => $this->request->getVar('Zipcode'),
        //         'phone_number' => $this->request->getVar('phone_number'),
        //         'status_work'=> $this->request->getVar('status_work'),
        //         'company_name'=> $this->request->getVar('company_name'),
        //     ];
        //     $MemberModel->update($id,$data);
        //     $session->set($data);
        //     return redirect()->to('profile');
            
        
        // }

    
}
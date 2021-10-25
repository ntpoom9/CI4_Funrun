<?php  namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CategoryModel;
use App\Models\RegisModel;


class Category extends Controller{
    public function index() {
       
        $CategoryModel = new CategoryModel();

        // โชว์ All จาก id 
        $data['category'] = $CategoryModel->orderBy('category_id', 'ASC')->findAll();

        // $data['member'] = $CategoryModel->fetch_data();
        return view('category', $data);
    }

    public function show_page($category_id=null){
        helper("form");
        $CategoryModel = new CategoryModel();

        // โชว์ All จาก id 
        $data['category'] = $CategoryModel->where('category_id', $category_id)->first();
        // $data['category'] = $UserModel->where('stu_id', $stu_id)->first();
        return view('register_category',$data);
    }

   


}
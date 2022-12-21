<?php

namespace App\Controllers;
// use App\Models\AdminModel;
use App\Models\MainModel;

class Landing extends BaseController
{
    public function __construct()
    {

        $this->model = new MainModel();
    }

    // public function header_display(){
    //     $result = $this->model->display_main_blogs();
    //     return view('header', $result);
    // }

    public function Home()
    {
        $result = $this->model->top_blog_first();
        return view('website/main', $result);
    }

    public function enqInsert()
    {

        $data = $this->request->getPost();
        $result = $this->model->enq_insert($data);
        return redirect()->route('headgesquare');
    }

    public function contact()
    {
        return view('website/contactus');
    }

    public function contactInsert()
    {

        $data = $this->request->getPost();
        $result = $this->model->contact_insert($data);
        return redirect()->route('headgesquare');
    }

    public function blogs_view()
    {
        $result = $this->model->display_main_blogs();
        return view('website/main_blog', $result);
    }

    public function blog_single($id)
    {
        $result = $this->model->display_single_blog($id);
        return view('website/blog_single', $result);
    }

    public function board()
    {
        return view('website/board_of_directors');
    }

    public function clients()
    {
        return view('website/client_stories');
    }

    public function teams()
    {
        return view('website/teams');
    }

    public function vision()
    {
        return view('website/vision');
    }

    public function career()
    {
        return view('website/career');
    }

    // apply now insert function 
    public function career_apply()
    {
       
        $data = $this->request->getPost();
        $cv = $this->request->getFile('file1');
        $result = $this->model->apply_now_insert($data, $cv);
        return redirect()->route('careers');
    }


    public function ecommerce()
    {
        return view('website/ecommerce');
    }

    public function finance_and_accounting(){
        return view('website/finance_and_accounting');
    }
  
    public function taxation(){
        return view('website/taxation');
    } 

    public function corporate_advisory(){
        return view('website/corporate_advisory');
    } 

  
    public function valuations(){
        return view('website/valuations');
    }

    public function liquidation(){
        return view('website/liquid');
    }

    public function foreign_exchange_controls(){
        return view('website/foreign_exchange_controls');
    }

    public function audit(){
        return view('website/audit');
    }

    public function ui_ux(){
        return view('website/ui_ux');
    } 

    public function product_development(){
        return view('website/product_development');
    }

    public function app_development(){
        return view('website/app_development'); 
    }

    public function web_application(){
        return view('website/web_application');  
    }

    public function technology_consulting(){
        return view('website/technology_consulting'); 
    }
}

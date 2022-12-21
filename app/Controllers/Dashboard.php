<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->model = new AdminModel();
    }

    public function login()
    {
        return view('Admin/login');
    }

    public function main()
    {
       return view('Admin/dashboard');
    }

    public function blogs()
    {
        $result = $this->model->display_blogs();
        return view('Admin/blogs', $result);
    }

    public function Blog()
    {
        return view('Admin/add_blog');
    }


    public function add_blog_new()
    {

        $blogimg = $this->request->getFile('imgs');
        $data = $this->request->getPost();
        $result = $this->model->add_blog($data, $blogimg);
        return redirect()->route('blogs');
    }

    public function del_blog($id)
    {
        $result = $this->model->blog_delete($id);
        return redirect()->route('blogs');
    }


    public function edit_blog($id)
    {
        $result['edblog'] = $this->model->editblog($id);
        return view('Admin/edit_blog', $result);
    }


    public function update_blog()
    {
        $blogieditmg = $this->request->getFile('img');
        $data = $this->request->getPost();
        $result = $this->model->update_blg($_POST, $blogieditmg);
        return redirect()->route('blogs');
    }

    public function contact_form_details()
    {
        // return view('Admin/contactform');
        $result = $this->model->display_contact();
        return view('Admin/contactform', $result);
    }

    public function careers_display(){
        $result = $this->model->display_applications();
        return view('Admin/careers_display',$result);
    }
}

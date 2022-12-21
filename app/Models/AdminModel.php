<?php

namespace App\Models;

use CodeIgniter\Model;
use DateTime;

class AdminModel extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
    public function main()
    {
        return view('Admin/dashboard');
    }

    public function display_blogs()
    {

        $query = $this->db->query("SELECT * FROM blogs");
        $result = $query->getResultArray();
        $data['blog_display'] = $result;
        return $data;
    }

    // model function for inserting and updating 

    public function add_blog($data, $blogimg)

    {
        if ($data['blg_id'] == '') {
            if (!$blogimg->hasMoved()) {
                $filename = $blogimg->getName();
                $blogimg->move(ROOTPATH . 'public/admin_assests/images', $blogimg->getName());
            } else {
                $filename = '';
            }

            $insert = array(

                'title'     => $data['blog_title'],
                'category'     => $data['blog-cat'],
                'short_descr' => $data['shrtdesc'],
                'descr'     => $data['descr'],
                'file' => $filename,
                'posted_on' => date("Y-m-d H:i:s"),
                'created_by' => 'Admin',
            );

            $query = $this->db->table('blogs');
            $res = $query->insert($insert);
        } else {
            $hidden_id = $data['blg_id'];
            $hidden_img = $data['hiddenimg'];

            if ($blogimg->getName() != '' && ($hidden_img != '')) {
                $filename = $blogimg->getName();
                $blogimg->move(ROOTPATH . 'public/admin_assests/images', $blogimg->getName());
                $newimg = $blogimg->getName();;
            } else if ($blogimg = '' && ($hidden_img != '')) {
                $newimg = $hidden_img;
            } else {
                $newimg = '';
            }


            $insert = array(
                'title'   => $data['blog_title'],
                'category'     => $data['blog-cat'],
                'short_descr' => $data['shrtdesc'],
                'descr'     => $data['descr'],
                'file' => $newimg,
                'posted_on' => date("Y-m-d H:i:s"),
                'created_by' => 'Admin',
            );
            $query = $this->db->table('blogs');
            $query->where('id', $hidden_id);
            $res = $query->update($insert);
        }
    }



    public function blog_delete($id)
    {
        $query = $this->db->query("DELETE FROM `blogs` WHERE id = $id");
    }

    public function editblog($id)
    {
        $query = $this->db->query("SELECT * FROM `blogs` WHERE id =$id");
        //    print_r($this->db->getLastQuery()) ;
        //     exit();
        $res = $query->getRowArray();  // fetching one value only     
        return $res;
    }

    public function display_contact()
    {
        $query = $this->db->query("SELECT * FROM contact_us");
        $result = $query->getResultArray();
        $data['contact'] = $result;
        return $data;
    }

    public function display_applications(){
        $query = $this->db->query("SELECT * FROM apply_now");
        $result = $query->getResultArray();
        $data['applications'] = $result;
        return   $data;
      
    }
}

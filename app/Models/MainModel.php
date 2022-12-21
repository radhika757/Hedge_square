<?php

namespace App\Models;

use CodeIgniter\Model;

class MainModel extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    // for sliders 

    public function top_blog_first()
    {
        $query = $this->db->query("SELECT * FROM blogs ORDER BY views DESC LIMIT 1 OFFSET 0 ");
        $result = $query->getRowArray();
        $data['top_blog'] = $result;


        $query1 = $this->db->query("SELECT * FROM blogs ORDER BY views DESC LIMIT 1 OFFSET 1");
        $result1 = $query1->getRowArray();
        $data['sec_blog'] = $result1;

        $query2 = $this->db->query("SELECT * FROM blogs ORDER BY views DESC LIMIT 1 OFFSET 2");
        $result2 = $query2->getRowArray();
        $data['third_blog'] = $result2;

        return $data;

        //    $sql = "SELECT * FROM blogs";
        //    $query = $this->db->query($sql);
        //    $res = $query->getResultArray();       
        //    return $res;
    }

    public function enq_insert($data)
    {
        $insert = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'number' => $data['mobile_number'],
            'service' => $data['serv'],
            'enq_date' => date("Y-m-d")
        );

        $query = $this->db->table('enquiry_form');
        $res = $query->insert($insert);
    }

    public function contact_insert($data)
    {
        $insert = array(
            'name' => $data['name'],
            'num' => $data['mobile'],
            'mail' => $data['email'],
            'subject' => $data['subject'],
            'msge' => $data['message'],
            'contact_date' => date("Y-m-d")
        );

        $query = $this->db->table('contact_us');
        $res = $query->insert($insert);
    }


    public function display_main_blogs()
    {
        $query = $this->db->query("SELECT * FROM blogs");
        $result = $query->getResultArray();
        $data['blog_data'] = $result;
        return $data;
    }

    public function display_single_blog($id)
    {
        $query = $this->db->query("SELECT * FROM blogs WHERE id = $id");
        $result = $query->getRowArray();
        $data['single_blog'] = $result;
        return $data;
    }

    public function apply_now_insert($data, $cv)
    {
        // echo ROOTPATH;
        // exit();
        if (!$cv->hasMoved()) {
            $cvname = $cv->getName();
           $cv->move(ROOTPATH . 'public/assets/cv/');
    
        } else {
            $cvname = '';
        }
        $insert = array(
            'app_name' => $data['name'],
            'app_num' => $data['mobile'],
            'app_mail' => $data['email'],
            'app_city' => $data['city'],
            'app_position' => $data['apply_career'],
            'app_cv' => $cvname,
            'app_address' => $data['address'],
            'app_date' => date("Y-m-d"),
        );

        $query = $this->db->table('apply_now');
        $res = $query->insert($insert);
    }
}
// https://hedge-square.com/hedgenew/hedge-square/public/dashboard path cPanel
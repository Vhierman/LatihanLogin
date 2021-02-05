<?php

namespace App\Controllers;

class Admin extends BaseController
{

    protected $db, $builder;

    public function __construct()
    {
        $this->db         = \Config\Database::connect();
        $this->builder    = $this->db->table('users');
    }

    public function index()
    {
        //Title
        $data['title'] = 'User List';
        // //Ambil Model User Yang Ada Di Dalam Myth Auth
        // $users = new \Myth\Auth\Models\UserModel();
        // //Query Seluruh Data User Dengan Method findAll()
        // $data['users'] = $users->findAll();

        //Query Builder
        $this->builder->select('users.id as userid, username, email,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query      = $this->builder->get();
        $data['users'] = $query->getResult();



        //View
        return view('admin/index', $data);
    }

    public function detail($id = 0)
    {
        //Title
        $data['title'] = 'User Detail';

        //Query Builder
        $this->builder->select('users.id as userid, username, email,name,user_image,fullname');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query      = $this->builder->get();
        $data['user'] = $query->getRow();

        //Jika data kosong atau tidak ada di redirect ke admin
        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        //View
        return view('admin/detail', $data);
    }
}

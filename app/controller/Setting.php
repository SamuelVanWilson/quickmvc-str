<?php

use App\Core\Controller;

class Setting extends Controller{
    public function index(){
        $data['judul'] = 'Setting';
        $this->view('template/header', $data);
        $this->view('setting');
        $this->view('template/footer');
    }
}
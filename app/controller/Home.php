<?php

use App\Core\Controller;

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this->view('template/header', $data);
        $this->view('home');
        $this->view('template/footer');
    }
}
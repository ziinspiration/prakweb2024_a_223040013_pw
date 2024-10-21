<?php

class Home extends Contoller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('template/header', $data);
        $this->view('home/index');
        $this->view('template/footer');
    }
}
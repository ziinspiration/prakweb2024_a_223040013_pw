<?php
class About
{
    public function index($nama = "Ilham", $pekerjaan = "Mahasiswa")
    {
        echo "Halo, nama saya $nama, saya adalah seoran $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
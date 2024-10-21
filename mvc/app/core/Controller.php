<?php
class Contoller
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
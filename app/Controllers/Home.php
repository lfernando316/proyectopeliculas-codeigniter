<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function reto(): string
    {
        echo json_encode(array('kwy1' => 'value1', 'kwy2' => 'value2'));
        return view('welcome_message');
    }

    public function update($id)
    {
        echo $id;
    }
}

<?php

use Illuminate\Http\Request;


class HomeController
{
    public $render;
    function __construct()
    {
        global $blade;
        $this->blade = $blade;
    }
    public function index(Request $request)
    {

        require('app/Models/Patentes.php');

        $patentes = Patentes::findOrFail('189')->get();
        print $this->blade->run("index", compact('patentes'));
    }
    public function welcome(Request $request)
    {


        return $this->blade->run("welcome");
    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        return "creating new user named $name";
    }
}

<?php

namespace HaqProject\Belajar\PHP\MVC\Controller;

use HaqProject\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index():void{

        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Datang di Program Belajar PHP MVC Bersama Haq Project Inc"
        ];

        //echo "HomeController.index()";
        //require __DIR__ . "/../View/Home/index.php";
        View::render("Home/index", $model);
    }

    function hello():void{
        $hello = [
            "title" => "Helo",
            "content" => "Hello kembali lagi bersama saya"
        ];

        //echo "HomeController.hello()";
        View::render("Hello/index", $hello);
    }
    function world():void{
        echo "HomeController.world()";
    }

    function about():void
    {
        echo "Author: Naufal Arinal Haq";
    }

    function login():void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];


        $response = [
            "message" => "Login berhasil"
        ];
    }
}

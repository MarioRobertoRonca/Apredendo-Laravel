<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome =  "Mário Roberto";
        $idade = 24;

        $arr =[1,2,34,5];

        $nomes = ["Mário", "Roberto", "Ronca", "Gabriela"];

        return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes,
        ]);

    }

    public function create() {
        return view('events.create');
    }

    //Contact
    public function contact() {
        return view('contact');
    }

    //Products
    public function products() {
        $busca = request('search');
        return view('products', ['busca' => $busca]);
    }

    //Contact
    public function login() {
        return view('login');
    }
}

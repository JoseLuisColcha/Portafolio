<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $servicios =
            [
                [
                    'Titulo' => 'Desarrollo Web',
                    "Contenido" => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings',
                    "img" => 'https://img.freepik.com/vector-gratis/fondo-particulas-tecnologia-realista-abstracta_23-2148425671.jpg?size=626&ext=jpg'
                ],

                [
                    'Titulo' => 'Diseño Web',
                    "Contenido" => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings',
                    "img" => 'https://img.freepik.com/vector-gratis/fondo-particulas-tecnologia-realista-abstracta_23-2148425671.jpg?size=626&ext=jpg'
                ],

                [
                    'Titulo' => 'Diseño de Aplicaciones',
                    "Contenido" => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings',
                    "img" => 'https://img.freepik.com/vector-gratis/fondo-particulas-tecnologia-realista-abstracta_23-2148425671.jpg?size=626&ext=jpg'
                ],

                [
                    'Titulo' => 'Prototipado UX/UI',
                    "Contenido" => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings',
                    "img" => 'https://img.freepik.com/vector-gratis/fondo-particulas-tecnologia-realista-abstracta_23-2148425671.jpg?size=626&ext=jpg'
                ]
            ];

        return view('home', compact('servicios'));
    }
}

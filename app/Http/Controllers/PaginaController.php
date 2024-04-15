<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index()
    {
        $pagina_actual = 'home'; // Aquí obtendrías dinámicamente la página actual
        $texto_pagina = '';

        switch ($pagina_actual) {
            case 'home':
                $texto_pagina = 'Bienvenido al inicio';
                break;
            case 'productos':
                $texto_pagina = 'Explora nuestra amplia variedad de productos';
                break;
            case 'acerca':
                $texto_pagina = 'Conoce más sobre nuestra empresa y nuestra historia';
                break;
            default:
                $texto_pagina = 'Bienvenido a nuestra página';
                break;
        }

        return view('tuvista', ['texto_pagina' => $texto_pagina]);
    }
}

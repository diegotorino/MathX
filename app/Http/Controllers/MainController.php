<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        echo 'apresentar a pagina inicial';
    }
    public function generateExercises(Request $request)
    {
        echo 'Gerar exercicios';
    }

    public function printExercises()
    {
        echo 'imprimir exercicios no navegador';
    }
    public function exportExercises()
    {
        echo 'Exportar exercicios para um arquivo de texto ';
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class TutoradosController extends Controller
{
    public function index()
    {
        // Obtener los IDs de usuarios que tienen el role_id 3
        $userIdsWithRoleId3 = DB::table('model_has_roles')
                                ->where('role_id', 'role_id')
                                ->pluck('model_id');

        // Obtener los usuarios que tienen el role_id 3
        $usuarios = User::whereIn('id', $userIdsWithRoleId3)->paginate(5);

        return view('tutorados.index', compact('usuarios'));
    }
}

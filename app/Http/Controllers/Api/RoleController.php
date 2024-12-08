<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //funcion que devuelve el listado de roles
    public function index()
    {
        $roles = Role::all();
        return response()->json($roles);
    }

    //funcion que crea un nuevo rol
    public function store(Request $request)
    {
        $role = Role::create($request->all());
        return response()->json($role, 201);
    }
}

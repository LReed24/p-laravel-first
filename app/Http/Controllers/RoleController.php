<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //funcion que devuelve el listado de roles
    public function index()
    {
        $roles = Role::all();
        return view('roles/index', compact('roles'));
    }
    
    //funcion que crea un nuevo rol
    public function store(Request $request)
    {
        $role = Role::create($request->all());
        if (!$role) {
            return redirect()->back()->with('error', 'No se pudo crear el rol');
        }
        // return response()->json($role, 201);//
        return redirect()
            ->route('roles.index')
            ->with('success', 'Rol creado correctamente');
    }

    //funcion que lleva a la vista de creacion de roles
    public function create()
    {
        return view('roles/create');
    }

}

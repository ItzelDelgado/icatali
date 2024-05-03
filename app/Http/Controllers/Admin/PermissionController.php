<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('admin.permissions.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:permissions,name']
        ]);

        $permission = Permission::create($request->all());

        session()->flash(
            'swal',
            [
                'title' => "¡Bien hecho!",
                'text' => "El permiso se creo correctamente",
                'icon' => "success"
            ]
        );

        return redirect()->route('admin.permissions.index', $permission);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => ['required', 'unique:permissions,name,' . $permission->id]
        ]);

        $permission->update($request->all());

        session()->flash(
            'swal',
            [
                'title' => "¡Bien hecho!",
                'text' => "El permiso se actualizo correctamente",
                'icon' => "success"
            ]
        );

        return redirect()->route('admin.permissions.index', $permission);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        session()->flash(
            'swal',
            [
                'title' => "¡Bien hecho!",
                'text' => "El permiso se elimino correctamente",
                'icon' => "success"
            ]
        );

        return redirect()->route('admin.permissions.index');
    }
}

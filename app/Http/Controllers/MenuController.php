<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        
        $menu = Menu::orderBy('id', 'desc')->paginate(4);
        return view('menu.index', compact('menu'));
    }

    public function edit($id)
    {
        $menu = Menu::find($id);
        
        if (!$menu) {
            return redirect()->route('menu.index')->with('error', 'Menu no encontrado');
        }
    
        return view('menu.edit', compact('menu'));
    }
    
    
    public function mostrarFormulario()
    {
        return view('menu.create');
    }

    public function crearMenu(Request $request)
    {
        $messages = [
            'nombre.required' => 'El campo nombre de menu es obligatorio.',
            'direccion.required' => 'El campo direccion es obligatorio.',
            'tipo_menu.required' => 'El campo tipo de menu es obligatorio.',
            'estatus.required' => 'El campo estatus es obligatorio.',
            'comentarios.required' => 'El campo comentarios es obligatorio.',
            // ... puedes agregar más mensajes personalizados aquí
        ];

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'tipo_menu' => 'required|string|max:255',
            'estatus' => 'required|string|max:255',
            'comentarios' => 'required|string|max:255',
        ], $messages);

        // Creación del menu
        $menu = new Menu; 
        $menu->nombre = $request->nombre;
        $menu->direccion = $request->direccion;
        $menu->tipo_menu = $request->tipo_menu;
        $menu->estatus = $request->estatus;
        $menu->comentarios = $request->comentarios;


        $menu->save();

        return redirect()->route('menu.index')->with('success', 'Menu creado con éxito y se ha enviado un correo con detalles de inicio de sesión.');
    }

    public function update(Request $request, $id)
    {
        // Validación de datos (esto es un ejemplo básico, puedes agregar más reglas según lo necesites)
        $validator = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'tipo_menu' => 'required|string|max:255',
            'estatus' => 'required|string|max:255',
            'comentarios' => 'required|string|max:255',
        ], [
            'nombre.required' => 'El campo nombre de menu es obligatorio.',
            'direccion.required' => 'El campo direccion es obligatorio.',
            'tipo_menu.required' => 'El campo tipo de menu es obligatorio.',
            'estatus.required' => 'El campo estatus es obligatorio.',
            'comentarios.required' => 'El campo comentarios es obligatorio.',
        ]);

        // Busca el menu por ID
        $menu = Menu::find($id);

        // Si el menu no se encuentra, redirige con un mensaje de error (puedes manejar esto de diferentes maneras)
        if (!$menu) {
            return redirect()->route('menu.index')->with('error', 'Menu no encontrado.');
        }

        // Actualiza el menu con los datos del formulario
        $menu->update([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'tipo_menu' => $request->tipo_menu,
            'estatus' => $request->estatus,
            'comentarios' => $request->comentarios,

        ]);


        // Redirige de vuelta a la página de lista o a donde prefieras con un mensaje de éxito
        return redirect()->route('menu.index')->with('success', 'Menu actualizado con éxito.');
    }
    public function buscar(Request $request) {
        $busqueda = $request->get('busqueda');
    
        $menu = Menu::where('nombre', 'LIKE', "%$busqueda%")
                             ->orWhere('direccion', 'LIKE', "%$busqueda%")
                             ->orWhere('tipo_menu', 'LIKE', "%$busqueda%")
                             ->orWhere('estatus', 'LIKE', "%$busqueda%")
                             ->paginate(10);
    
        return view('menu.index', compact('menu'));
    }
    
}
<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Cliente;


class ClienteController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $clientes = Cliente::latest()->paginate(5);
        return view('clientes.index',compact('clientes'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'date' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'sexo' => 'required',
        ]);

        Cliente::create($request->all());
        return redirect()->route('clientes.index')
                        ->with('success','Cliente criado com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente): View
    {
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente): RedirectResponse
    {
        
        $cliente->update($request->all());
        return redirect()->route('clientes.index')
                        ->with('success','Cliente atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente): RedirectResponse
    {
        $cliente->delete();
        return redirect()->route('clientes.index')
                        ->with('success','Cliente deletado com sucesso');
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClienteResource;
use App\Http\Requests\StoreUpdateClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::paginate();

        return ClienteResource::collection($clientes);
    }

    public function store(StoreUpdateClienteRequest $request)
    {
        $data = $request->validated();
        $cliente = Cliente::create($data);

        return new ClienteResource($cliente);
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);

        return new ClienteResource($cliente);
    }

    public function update(StoreUpdateClienteRequest $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $data = $request->all();
        $cliente->update($data);

        return new ClienteResource($cliente);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response()->json([], 204);
    }
}

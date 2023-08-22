@extends('clientes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastro de clientes</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Sexo</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->cpf }}</td>
            <td>{{ date('d/m/Y', strtotime($cliente->date)) }}</td>
            <td>{{ $cliente->estado }}</td>
            <td>{{ $cliente->cidade }}</td>
            <td>{{ $cliente->sexo }}</td>
            <td>
                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('clientes.create') }}">Cadastrar</a>
    </div>
    {!! $clientes->links() !!}
@endsection


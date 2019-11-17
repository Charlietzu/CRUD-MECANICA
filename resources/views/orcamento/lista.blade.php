@extends('orcamento.master')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
    <h4>Pesquisar Orçamentos</h4>
    <hr>
    @foreach ($orcamentos as $orcamento)
        <div class="row mb-3 d-flex align-items-center">
            <div class="col-sm-9">{{ $orcamento->id }}</div>
            <div class="col-sm-9">Cliente: {{ $orcamento->cliente }}</div>
            <div class="col-sm-9">Data/Hora dor orçamento: {{ $orcamento->data }}</div>
            <div class="col-sm-9">Vendedor: {{ $orcamento->vendedor }}</div>
            <div class="col-sm-9">Descrição do pedido: {{ $orcamento->descricao }}</div>
            <div class="col-sm-9">Valor orçado: {{ $orcamento->valor }}</div>
            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                {!! Form::open(['method' => 'DELETE', 'route'=>['orcamento.destroy', $orcamento->id], 'style'=> '']) !!}
                {!! Form::submit('Deletar',['class'=> 'btn btn-xs btn-danger']) !!}
                {!! Form::close() !!}

                {!! Form::open(['method' => 'GET', 'route'=>['orcamento.edit', $orcamento->id], 'style'=> '']) !!}
                {!! Form::submit('Editar',['class'=> 'btn btn-xs btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    @endforeach	
@endsection
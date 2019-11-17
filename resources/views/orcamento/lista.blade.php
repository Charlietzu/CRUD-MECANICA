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
            <div class="col-sm-9"><strong>Cliente:</strong> {{ $orcamento->cliente }}</div>
            <div class="col-sm-9"><strong>Data/Hora dor orçamento:</strong> {{ $orcamento->data }}</div>
            <div class="col-sm-9"><strong>Vendedor:</strong> {{ $orcamento->vendedor }}</div>
            <div class="col-sm-9"><strong>Descrição do pedido:</strong> {{ $orcamento->descricao }}</div>
            <div class="col-sm-9"><strong>Valor orçado:</strong> {{ $orcamento->valor }}</div>
            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                {!! Form::open(['method' => 'DELETE', 'route'=>['orcamento.destroy', $orcamento->id], 'style'=> '']) !!}
                {!! Form::submit('Deletar',['class'=> 'btn btn-xs btn-danger']) !!}
                {!! Form::close() !!}

                {!! Form::open(['method' => 'GET', 'route'=>['orcamento.edit', $orcamento->id], 'style'=> '']) !!}
                {!! Form::submit('Editar',['class'=> 'btn btn-xs btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <hr>
    @endforeach	
@endsection
@extends('orcamento.master')
@section('content')
    <h4>Alterar Orçamento</h4>
    <hr />
    {!! Form::model($orcamento, ['method'=>'PATCH','route'=>['orcamento.update', $orcamento->id]]) !!}
    @include('orcamento.form')
    {!! Form::close() !!}
@endsection
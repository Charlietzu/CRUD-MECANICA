@extends('orcamento.master')
@section('content')
    <h4>Novo Orçamento</h4>
    <hr />
    {!! Form::open(['route' => 'orcamento.store', 'method' => 'POST']) !!}
    @include('orcamento.form')
    {!! Form::close() !!}
@endsection
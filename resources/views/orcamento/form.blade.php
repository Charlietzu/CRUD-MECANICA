        <div class="form-group">
            <label>Cliente:</label>
            {!! Form::text('cliente', null, ['placeholder' => 'Nome do cliente', 'class' => 'form-control'])!!}
        </div>
        <div class="form-group">
            <label>Data:</label>
            {!! Form::input('text', 'data', \Carbon\Carbon::now(), ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <label>Vendedor:</label>
            {!! Form::text('vendedor', null, ['placeholder' => 'Nome do vendedor', 'class' => 'form-control'])!!}
        </div>
        <div class="form-group">
            <label>Descrição do serviço:</label>
            {!! Form::textarea('descricao', null, ['placeholder' => 'Exemplo: Troca de pastilhas de freio.', 'class' => 'form-control'])!!}
        </div>
        <div class="form-group">
            <label>Valor:</label>
            {!! Form::text('valor', null, ['placeholder' => 'Valor orçado', 'class' => 'form-control'])!!}
        </div>

        <button class="btn btn-primary" href="{{ route('orcamento.create') }}">Cadastrar</button>
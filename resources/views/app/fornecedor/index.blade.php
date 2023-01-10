<h3>Fornecedores</h3>

@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)
   interação atual: {{$loop->iteration}}
        Fornecedores: {{ $fornecedor['nome'] }}<br />
        Status: {{ $fornecedor['status'] }}<br />
        Cnpj: {{ $fornecedor['cnpj'] }}<br />
        Telefone: {{ $fornecedor['telefone'] }}<br /><br />
        @if ($loop->first)
            Primeira interação do loop
        @endif
        @if ($loop->last)
            Ultima interação do loop
        @endif
        <br/>
        Total de registros: {{ $loop->count}}
        <hr>
    @empty
    Não existem fornecedores cadastrados
    @endforelse
@endisset

<x-app>
    <x-slot:title>
        Lista
        </x-slot>
        <x-slot:nav>
            <x-nav>

            </x-nav>
            </x-slot>
            @if (count($produtos) > 0)
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Quantidade</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        </table>
                </div>
                <div class="tgl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td>{{ $produto->descricao }}</td>
                                    <td>{{ $produto->categoria }}</td>
                                    <td>{{ $produto->quantidade }}</td>
                                    <td>
                                        <a href="/edit/{{$produto->id}}">Editar</a> |
                                        <a href="/delete/{{$produto->id}}">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                No data
            @endif

            @if (session('status'))
                <x-alert type="{{ session('status')['type'] }}">
                    {{ session('status')['message'] }}
                </x-alert>
            @endif
</x-app>
<x-app>
    <x-slot:title>
        Lista
        </x-slot>
        <x-slot:nav>
            <x-nav>

            </x-nav>
            </x-slot>
            @if (count($produtos) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
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
            @else
            No data
            @endif
</x-app>
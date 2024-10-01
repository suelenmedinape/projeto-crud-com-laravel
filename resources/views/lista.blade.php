<x-app>
    <x-slot:title>
        Lista
        </x-slot>

        <x-slot:nav>
            <x-nav>

            </x-nav>
            </x-slot>
            @if (count($produtos) > 0)
                <ul>
                    @foreach ($produtos as $produto)
                        <li>
                            {{ $produto->description }}
                            {{ $produto->categoria }}
                            {{ $produto->quantidade }}
                            <a href="/edit/{{$produto->id}}"> edit </a>
                            <a href="/delete/{{$produto->id}}"> delete </a>
                        </li>
                    @endforeach
                </ul>
            @else
                No data
            @endif
</x-app>
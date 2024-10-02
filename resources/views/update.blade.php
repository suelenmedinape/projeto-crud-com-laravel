<x-app>
    <x-slot:title>
        Cadastro
        </x-slot>
        <x-slot:nav>
            <x-nav>

            </x-nav>
            </x-slot>
            <div class="form">
                <form method="post" action="/update/{{$produto->id}}">
                    @csrf
                    <label for="descricao"> Descrição: </label>
                    <input type="text" name="descricao" id="desc" required value="{{$produto->descricao}}">
                    <label for="categoria"> Categoria do Produto: </label>
                    <select name="categoria" id="categ" required>
                        <option value="" disabled>SELECIONE UMA CATEGORIA</option>
                        <option value="alimentacao" {{ $produto->categoria == 'alimentacao' ? 'selected' : '' }}>ALIMENTAÇÃO</option>
                        <option value="bebidas" {{ $produto->categoria == 'bebidas' ? 'selected' : '' }}>BEBIDAS</option>
                        <option value="higiene" {{ $produto->categoria == 'higiene' ? 'selected' : '' }}>HIGIENE</option>
                        <option value="limpeza" {{ $produto->categoria == 'limpeza' ? 'selected' : '' }}>LIMPEZA</option>
                        <option value="outros" {{ $produto->categoria == 'outros' ? 'selected' : '' }}>OUTROS</option>
                    </select>

                    <label for="quantidade"> Quantidade: </label>
                    <input type="number" name="quantidade" id="quant" required value="{{$produto->quantidade}}">
                    <input type="submit" class="btn" value="Cadastrar">
                </form>
            </div>
</x-app>
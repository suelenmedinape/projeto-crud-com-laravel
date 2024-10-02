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
                        <option value="" disabled selected>SELECIONE UMA CATEGORIA</option>
                        <option value="ALIMENTACAO" {{ $produto->categoria === 'ALIMENTACAO' ? 'selected' : '' }}>ALIMENTAÇÃO</option>
                        <option value="BEBIDAS" {{ $produto->categoria === 'BEBIDAS' ? 'selected' : '' }}>BEBIDAS</option>
                        <option value="HIGIENE" {{ $produto->categoria === 'HIGIENE' ? 'selected' : '' }}>HIGIENE</option>
                        <option value="LIMPEZA" {{ $produto->categoria === 'LIMPEZA' ? 'selected' : '' }}>LIMPEZA</option>
                        <option value="OUTROS" {{ $produto->categoria === 'OUTROS' ? 'selected' : '' }}>OUTROS</option>
                    </select>

                    <label for="quantidade"> Quantidade: </label>
                    <input type="number" name="quantidade" id="quant" required value="{{$produto->quantidade}}">
                    <input type="submit" class="btn" value="Cadastrar">
                </form>
            </div>
</x-app>
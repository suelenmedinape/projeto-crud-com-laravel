<x-app>
    <x-slot:title>
        Cadastro
        </x-slot>
        <x-slot:nav>
            <x-nav>

            </x-nav>
            </x-slot>
            <div class="form">
                <form method="post" action="/cadastro">
                    @csrf
                    <label for="descricao"> Descrição: </label>
                    <input type="text" name="descricao" id="desc" required>
                    <label for="categoria"> Categoria do Produto: </label>
                    <select name="categoria" id="categ" required>
                        <option value="categoria" disabled selected>SELECIONE UMA CATEGORIA</option>
                        <option value="alimentacao">ALIMENTAÇÃO</option>
                        <option value="bebidas">BEBIDAS</option>
                        <option value="higiene">HIGIENE</option>
                        <option value="limpeza">LIMPEZA</option>
                        <option value="outros">OUTROS</option>
                    </select>
                    <label for="quantidade"> Quantidade: </label>
                    <input type="number" name="quantidade" id="quant" required>
                    <input type="submit" class="btn" value="Cadastrar">
                </form>
            </div>

            @if (session('status'))
            <x-alert type="{{ session('status')['type'] }}">
                {{ session('status')['message'] }}
            </x-alert>
            @endif
</x-app>
<header class="container-nav">
    <div class="logotipo">
        <a href=""> Produtos </a>
    </div>
    <nav>
        <a href="/" class="{{ Request::is('/') ? 'active' : '' }}"> Home </a>
        <a href="/cadastro" class="{{ Request::is('cadastro') ? 'active' : '' }}"> Cadastro </a>
        <a href="/lista" class="{{ Request::is('lista') ? 'active' : '' }}"> Lista </a>
        </ul>
    </nav>
</header>
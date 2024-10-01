<header class="container-nav">
    <nav>
        <a href="#" class="logo"> Suelen </a>
        <a href="/" class="{{ Request::is('/') ? 'active' : '' }}"> Home </a>
        <a href="/cadastro" class="{{ Request::is('cadastro') ? 'active' : '' }}"> Cadastro </a>
        <a href="/lista" class="{{ Request::is('lista') ? 'active' : '' }}"> Lista </a>
        </ul>
    </nav>
</header>
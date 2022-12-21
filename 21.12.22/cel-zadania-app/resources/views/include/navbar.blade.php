<nav class="navbar navbar-toggleable-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Cele 2019</a>

    <ul class="nav d-flex justify-content-between">
        <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
            <a class="nav-link" href="/">Cele</a>
        </li>
        <li class="nav-item  {{Request::is('/cel/create') ? 'active' : ''}}">
            <a class="nav-link" href="/cel/create">Nowy</a>
        </li>
    </ul>

</nav>
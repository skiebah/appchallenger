<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">Contenido</li>
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                <i class="nav-icon fas fa-globe"></i>
                <p>
                    Inicio
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('personajes')}}" class="nav-link {{ request()->is('/personajes*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-bars"></i>
                <p>
                    Personajes
                </p>
            </a>
        </li>
    </ul>
</nav>

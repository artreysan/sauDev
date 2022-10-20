<nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
    <div class="container">
        <div class="collapse navbar-collapse" id="subenlaces">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/muro">{{ auth()->user()->name }} {{ auth()->user()->apellido_paterno }}
                        {{ auth()->user()->apellido_materno }}</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown"
                        role="button" aria-expanded="false"><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('perfil') }}">Perfil</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/') }}">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<aside id="sidebar" class="sidebar bg-dark">
    <ul class="sidebar-nav " id="sidebar-nav">

        <li class="nav-item"><a class="nav-link " href="/">
                <img src="{{asset('img/icone/dashboard.png')}}" class="mt-4" width="30px" alt="retornar"><span class="dropdown-menu-space">Voltar ao Dashboard</span></a>
        </li>

        <li class="nav-item  bg-light">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="">
                <img src="{{asset('img/icone/cep.png')}}" class="mt-4" width="30px" alt="users">
                <span class="dropdown-menu-space">Endereços</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('novoCep')}}">
                        <i class="bi bi-circle"></i>
                        <span>Inserir Novo Endereço</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

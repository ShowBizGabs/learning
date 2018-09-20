<li class="nav-item dropdown" >
    <a href="#"
       id="navbarDropdown"
       class="nav-link dropdown-toggle"
       role="button"
       data-toggle="dropdown"
       aria-haspopup="true"
       aria-expanded="false"
       >
        {{Auth::user()->name}} <span class="caret"></span>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('logout')}}"
           onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
           >
            {{__('Cerrar Sesión')}}
        </a>
        <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;" >
            @csrf
        </form>
    </div>

</li>
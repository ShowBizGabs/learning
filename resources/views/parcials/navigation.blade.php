<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 17/09/2018
 * Time: 09:24 AM
 */
?>

<header>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel " >
        <div class="container" >

        <a class="navbar-brand"  href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" >
                <span class="navbar-toggler-icon" ></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent" >
                {{--lista de la izquierda--}}
                <ul class="navbar-nav mr-auto" >



                </ul>
                {{--lista de la derecha--}}

                <ul class="navbar-nav ml-auto" >
                    @include('parcials.navigations.'.\App\User::navigation())

                    <li class="nav-item dropdown" >
                        <a class="nav-link  dropdown-toggle"
                           href="#"
                           id="navbarDropdownManuLink"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false"
                        >
                            {{__('Selectiona tu idioma')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownManuLink" >
                            <a class="dropdown-item"
                                   href="{{ route('set_language', ['es']) }}"
                            >
                                {{__('Español')}}
                            </a>
                            <a class="dropdown-item"
                               href="{{ route('set_language', ['en']) }}"
                            >
                                {{__('Inglés')}}
                            </a>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
    </nav>
</header>

<section class="menu-web">
    <div class="center-container">
        <div class="logo-container">
            <h1>Logo</h1>
        </div>
    </div>
    <nav>
        <div class="menu-text">
            <p>¡Hola!</p>
            {{--<p class="bold">{{Auth::user()->name}}</p>
            <p>{{Auth::user()->email}}</p>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <input type="submit" class="salir" value="Cerrar sesión">
            </form>--}}
        </div>
        <ul>
            <h5>Men&uacute;</h5>
            <li>
                <a href="{{route("dashboard.index")}}">
                    <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.63 31.63"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M31.32,5.46h2.91a4,4,0,0,1,4.15,4.15c0,1.93,0,3.85,0,5.78a4.05,4.05,0,0,1-4.14,4.16H28.43a4,4,0,0,1-4.13-4.13c0-1.94,0-3.88,0-5.82a4.07,4.07,0,0,1,4.16-4.14Zm4.67,7c0-1,0-1.93,0-2.9a1.67,1.67,0,0,0-1.72-1.72H28.42a1.67,1.67,0,0,0-1.74,1.71c0,2,0,3.92,0,5.89a1.66,1.66,0,0,0,1.73,1.71q2.93,0,5.85,0A1.65,1.65,0,0,0,36,15.42C36,14.44,36,13.46,36,12.47Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M38.38,30.06v2.87a4,4,0,0,1-4.14,4.16H28.43A4,4,0,0,1,24.3,33c0-2,0-3.93,0-5.89A4,4,0,0,1,28.38,23c2,0,3.95,0,5.93,0a4,4,0,0,1,4.07,4.11C38.39,28.1,38.38,29.08,38.38,30.06Zm-7,4.64h2.91A1.66,1.66,0,0,0,36,33q0-2.92,0-5.85a1.66,1.66,0,0,0-1.7-1.74c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72c0,1.95,0,3.91,0,5.86a1.67,1.67,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M13.8,37.09H10.93a4,4,0,0,1-4.17-4.16c0-1.92,0-3.85,0-5.78A4,4,0,0,1,10.9,23c1.93,0,3.85,0,5.78,0a4.06,4.06,0,0,1,4.16,4.18c0,1.91,0,3.83,0,5.74a4.05,4.05,0,0,1-4.17,4.17Zm0-2.39h2.95A1.65,1.65,0,0,0,18.45,33c0-2,0-4,0-5.93a1.64,1.64,0,0,0-1.7-1.7c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72V33a1.66,1.66,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M13.81,5.46h2.87a4.06,4.06,0,0,1,4.16,4.15c0,1.93,0,3.87,0,5.81a4.06,4.06,0,0,1-4.14,4.13H10.89a4,4,0,0,1-4.13-4.17c0-1.92,0-3.85,0-5.77a4,4,0,0,1,4.15-4.15Zm-4.67,7v2.95a1.66,1.66,0,0,0,1.69,1.71c2,0,3.95,0,5.93,0a1.64,1.64,0,0,0,1.69-1.7c0-2,0-3.93,0-5.89a1.65,1.65,0,0,0-1.72-1.72H10.88A1.66,1.66,0,0,0,9.14,9.59Z" transform="translate(-6.75 -5.46)"/></svg>
                    Life Board
                </a>
            </li>
        </ul>
    </nav>
</section>
<section class="menu">
    <nav>
        <div class="menu-text">
            <h5>Men&uacute;</h5>
            <p>¡Hola!</p>
            {{--<p class="bold">{{Auth::user()->name}}</p>
            <p><small>{{Auth::user()->email}}</small></p>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <input type="submit" class="salir" value="Cerrar sesión">
            </form>--}}
        </div>
        <ul>
            <h5>Men&uacute;</h5>
            <li>
                <a href="{{route("dashboard.index")}}">
                    <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.63 31.63"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M31.32,5.46h2.91a4,4,0,0,1,4.15,4.15c0,1.93,0,3.85,0,5.78a4.05,4.05,0,0,1-4.14,4.16H28.43a4,4,0,0,1-4.13-4.13c0-1.94,0-3.88,0-5.82a4.07,4.07,0,0,1,4.16-4.14Zm4.67,7c0-1,0-1.93,0-2.9a1.67,1.67,0,0,0-1.72-1.72H28.42a1.67,1.67,0,0,0-1.74,1.71c0,2,0,3.92,0,5.89a1.66,1.66,0,0,0,1.73,1.71q2.93,0,5.85,0A1.65,1.65,0,0,0,36,15.42C36,14.44,36,13.46,36,12.47Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M38.38,30.06v2.87a4,4,0,0,1-4.14,4.16H28.43A4,4,0,0,1,24.3,33c0-2,0-3.93,0-5.89A4,4,0,0,1,28.38,23c2,0,3.95,0,5.93,0a4,4,0,0,1,4.07,4.11C38.39,28.1,38.38,29.08,38.38,30.06Zm-7,4.64h2.91A1.66,1.66,0,0,0,36,33q0-2.92,0-5.85a1.66,1.66,0,0,0-1.7-1.74c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72c0,1.95,0,3.91,0,5.86a1.67,1.67,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M13.8,37.09H10.93a4,4,0,0,1-4.17-4.16c0-1.92,0-3.85,0-5.78A4,4,0,0,1,10.9,23c1.93,0,3.85,0,5.78,0a4.06,4.06,0,0,1,4.16,4.18c0,1.91,0,3.83,0,5.74a4.05,4.05,0,0,1-4.17,4.17Zm0-2.39h2.95A1.65,1.65,0,0,0,18.45,33c0-2,0-4,0-5.93a1.64,1.64,0,0,0-1.7-1.7c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72V33a1.66,1.66,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M13.81,5.46h2.87a4.06,4.06,0,0,1,4.16,4.15c0,1.93,0,3.87,0,5.81a4.06,4.06,0,0,1-4.14,4.13H10.89a4,4,0,0,1-4.13-4.17c0-1.92,0-3.85,0-5.77a4,4,0,0,1,4.15-4.15Zm-4.67,7v2.95a1.66,1.66,0,0,0,1.69,1.71c2,0,3.95,0,5.93,0a1.64,1.64,0,0,0,1.69-1.7c0-2,0-3.93,0-5.89a1.65,1.65,0,0,0-1.72-1.72H10.88A1.66,1.66,0,0,0,9.14,9.59Z" transform="translate(-6.75 -5.46)"/></svg>
                    Life Board
                </a>
            </li>
        </ul>
    </nav>
</section>

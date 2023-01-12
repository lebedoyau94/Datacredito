<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación financiera</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <script src="https://kit.fontawesome.com/2e3d4c9f14.js" crossorigin="anonymous"></script>
    <style>
        ul{
            height: 90px !important;
        }
    </style>
</head>
<body class="bodys">
    <section class="menu-section">
        <button class="cursor">
            <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="white" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
        </button>
        <div class="logo-container">
            <h1>Logo</h1>
        </div>
        <button class="cursor">
            <svg id="btn_menu" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="white" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </button>
    </section>

    <section class="menu-web">
        <div class="center-container">
            <div class="logo-container">
                <h1>Logo</h1>
            </div>
        </div>
        <nav>
            <div class="menu-text">
                <p>¡Hola!</p>
                <p class="bold">{{Auth::user()->name}}</p>
                <p>{{Auth::user()->email}}</p>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <input type="submit" class="salir" value="Cerrar sesión">
                </form>
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
                <p class="bold">{{Auth::user()->name}}</p>
                <p><small>{{Auth::user()->email}}</small></p>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <input type="submit" class="salir" value="Cerrar sesión">
                </form>
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
    <section class="content-section">
        <section class="center-container-c">

            <div class="m-box">
                <div  class="m-boxes">
                    <h5>Vida Financiera</h5>
                    <p>Estado de deudas y perﬁl ﬁnanciero en el sector</p>
                </div>
                <div class="mo-boxes">
                    <h5>Soluciones financieras</h5>
                    <p>Beneﬁcios, posibilidades de pago y crédito</p>
                </div>
            </div>

            <div class="perfil-financiero">
                <div class="center">
                    <p>Perfil Financiero:</p>
                </div>
                        <p>
                            Cuando compremos tu cartera recibir&aacute;s una notificaci&oacute;n 
                            con la confirmaci&oacute;n de la compra de tus deudas.
                        </p>
                        <br>
                        <p>
                            Adem&aacute;s gana descuentos en el pago de tus deudas y grandes recompensas por tu
                            buen comportamiento de pago. 
                        </p>
            </div>

            <div class="perfil-financiero">
                <p class="center">Score Datacr&eacute;dito</p>
                <div class="right-grid-sec">
                    <div class="color-circle">
                        <div class="white-circle">
                            <div class="circle">
                                <span class="number-white">?</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-right-grid">
                        <p>
                            Trae tus deudas con nosotros 
                            y recibe actualizaciones constantes de score y 
                            estado financiero.
                        </p>
                    </div>
                </div>
            </div>
            </div>
        
            <section class="white-section">
    
                <div class="first-line">
                    <h2>Vida Financiera</h2>
                    <p>Estado de deudas y perfil financiero en el sector</p>
                </div>
    
                <div class="grid-white-sec">
                    
                    <div class="left-grid-sec">
                        <p>Perfil Financiero:</p>
                        <p>
                            Cuando compremos tu cartera recibir&aacute;s una notificaci&oacute;n 
                            con la confirmaci&oacute;n de la compra de tus deudas.
                        </p>
                        <br>
                        <p>
                            Adem&aacute;s gana descuentos en el pago de tus deudas y grandes recompensas por tu
                            buen comportamiento de pago. 
                        </p>
                    </div>
    
                    <div class="right-grid-sec">
                        <div class="color-circle">
                            <div class="white-circle">
                                <div class="circle">
                                    <span class="number-white">?</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-right-grid">
                            <p>Score Datacr&eacute;dito</p>
                            <br>
                            <p>
                                Trae tus deudas con nosotros 
                                y recibe actualizaciones constantes de score y 
                                estado financiero.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
    
            <section class="gradient-section">
                <h4>Grandes beneficios por pagar tus deudas</h4>
    
                <div class="icon-text-container">
                    <div class="icon-text-box">
                        <span>Icon</span>
                        <p>
                            Recibe tips y consejos para mejorar tu score crediticio y as&iacute; mejorar tu perfil financiero.
                        </p>
                    </div>
                    <div class="icon-text-box">
                        <span>Icon</span>
                        <p>
                            Excelentes descuentos y variadas opciones de pago.
                        </p>
                    </div>
                    <div class="icon-text-box">
                        <span>Icon</span>
                        <p>
                            Grandes recompensas por tu comportamiento cumplido de pago.
                        </p>
                    </div>
                    <div class="icon-text-box">
                        <span>Icon</span>
                        <p>
                            Certificados al instante
                        </p>
                    </div>
                    <div class="icon-text-box">
                        <span>Icon</span>
                        <p>
                            Ofertas de empleo y educaci&oacute;n financiera.
                        </p>
                    </div>
                    <div class="icon-text-box">
                        <span>Icon</span>
                        <p>
                            Cr&eacute;ditos a tu medida para mejorar tu score.
                        </p>
                    </div>
                </div>
    
                <div class="card-section">
    
                    <div class="text-card-sec">
                        <p>Compramos tu cartera</p>
                        <p>¿Te gusta nuestra experiencia? trae tus otras deudas, nosotros te la compramos.</p>
                    </div>
    
                    <div class="tarjeta long-card">
                        <div class="mini-box">
                            <p>Tasa de inter&eacute;s desde</p>
                            <p class="bigger">1.5%</p>
                        </div>
                        <div class="mini-box">
                            <p>Sin comisi&oacute;n</p>
                        </div>
                        <div class="mini-box">
                            <p>Tasa preferencial</p>
                        </div>
                        <div class="mini-box">
                            <input type="submit" value="Lo Quiero" id="openModal">
                        </div>
                    </div>
                </div>
            </section>
        </section>
    
        <div class="modal" id="modal">
            <div class="exit">
                <span id="close">X</span>
            </div>
    
            <section class="form-box">
                <h2>Formulario de negociaci&oacute;n de cartera</h2>
    
                <form action="">
    
                    <div class="first-line">
                        <div class="mini-box">
                            <label for="Nombres">Nombres</label>
                            <input type="text" name="Nombres" id="">
                        </div>
                        <div class="mini-box">
                            <label for="Apellidos">Apellidos</label>
                            <input type="text" name="Apellidos" id="">
                        </div>
                        <div class="mini-box">
                            <label for="Id">Tipo de ID</label>
                            <input type="text" name="Tipo-Id" id="">
                        </div>
                        <div class="mini-box">
                            <label for="Id">N&uacute;mero de ID</label>
                            <input type="text" name="Numero-Id" id="">
                        </div>
                    </div>
    
                    <div class="second-line">
                        <div class="mini-box">
                            <label for="">N&uacute;mero de tel&eacute;fono</label>
                            <input type="text" name="Numero-telefono" id="">
                        </div>
                        <div class="mini-box">
                            <label for="">Email</label>
                            <input type="text" name="Email" id="">
                        </div>
                    </div>
    
                    <h3>Datos de deudas</h3>
    
                    <div class="third-line">
                        <div class="mini-box">
                            <label for="Banco">Banco</label>
                            <select name="" id="">
                                <option value="">Option</option>
                                <option value="">Option</option>
                                <option value="">Option</option>
                                <option value="">Option</option>
                            </select>
                        </div>
                        <div class="mini-box">
                            <label for="Tipo-credito">Tipo de cr&eacute;dito</label>
                            <select name="" id="">
                                <option value="">Option</option>
                                <option value="">Option</option>
                                <option value="">Option</option>
                                <option value="">Option</option>
                            </select>
                        </div>
                        <div class="mini-box">
                            <label for="Dias-mora">D&iacute;as de mora</label>
                            <select name="" id="">
                                <option value="">Option</option>
                                <option value="">Option</option>
                                <option value="">Option</option>
                                <option value="">Option</option>
                            </select>
                        </div>
                        <div class="mini-box">
                            <label for="Id">Monto deuda</label>
                            <input type="text" name="monto-deuda" id="">
                        </div>
                    </div>
    
                    <div class="fourth-line">
                        <div class="mini-box">
                            <label for="Id">Numero de producto</label>
                            <input type="text" name="monto-deuda" id="">
                        </div>
                    </div>
    
                    <div class="fifth-line">
                        <input type="button" value="Agregar otra deuda +">
                        <input type="submit" value="Enviar">
                    </div>
    
                    <div class="logo-box">
                        <div class="logo-container">
                            <p>Logo</p>
                        </div>
                    </div>
                </form>
    
            </section>
    
        </div>
    </section>
        @extends('right-side')

    <script>
        const button = document.getElementById('btn_menu');
        const menu = document.querySelector('.menu')
        let isMenuOpen = false;
        menu.style.display = 'none';
        button.addEventListener('click', function() {

            if(isMenuOpen === false){
                menu.style.display = 'block';
                isMenuOpen = true;
            } else{
                menu.style.display = 'none';
                isMenuOpen = false;
            }
        });

        let closeBtn = document.getElementById('close');
        let modal = document.getElementById('modal');
        let openBtn = document.getElementById('openModal');

        modal.style.display = 'none';

        closeBtn.addEventListener('click', function(){
            modal.style.display = 'none';
        })

        openBtn.addEventListener('click', function(){
            modal.style.display = 'block';
        })


    </script>
</body>
</html>

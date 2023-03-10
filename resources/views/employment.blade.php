<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleo | Crédito</title>
    <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="https://kit.fontawesome.com/2e3d4c9f14.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .bodyy{
            display: flex;
            background-color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            overflow-x: hidden;
            flex-direction: column;
            padding: 2rem;
            color: #324963;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .is-invalid {
        color: red;
        font-size: 10px;
        }

        .container{
            background-color: rgb(255, 255, 255);
            width: 60%;
            height: auto;
            padding: 0 2rem 2rem;
            color: #324963;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .first-p {
            width: 100%;
            margin: 1rem 0 2rem 0;
        }

        .first-p h3 {
            font-size: 23px;
            font-weight: bold;
        }

        .first-p p {
            font-size: 18px;
        }

        .sec-p {
            font-size: 23px;
        }

        .input-container {
            margin: 2rem 0 0 0;
            font-size: 12px;
        }

        .input-container select,
        .sec-input-box select {
            height: 2.3rem;
            width: 15rem;
            padding: 0px 90px;
        }

        .double-input-container {
            display: flex;
            margin: 1rem 0 0 0;
            align-items: center;
            font-size: 12px;
        }

        .first-input-box input[type="text"],
        .sec-input-box input[type="text"] {
            height: 2rem;
            width: 20rem;
            border: 0.5px solid #262650;
            border-radius: 5px;
        }

        .sec-input-box {
            margin-left: 1rem;
        }

        .adjuntar-box {
            width: 100%;
            margin: 1rem 0 0 0;
            display: flex;
        }

        .adjuntar-box h2 {
            font-size: 20px;
        }

        .archivo-box,
        .recibo-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .container h3 {
            margin: 1rem 0 0 0;
        }

        .archivo-box {
            margin: 0 0 0 1rem;
        }

        .recibo-box input[type="text"] {
            padding: 10px;
            background-color: transparent;
            border: 2px solid #262650;
            color: #262650;
            width: 10rem;
            text-align: center;
            font-size: 14px;
            text-transform: uppercase;
        }

        .gray {
            color: grey;
        }

        .upper {
            text-transform: uppercase;
        }

        .tiny {
            font-size: 9px;
        }

        .checkBox-container {
            text-align: center;
            font-size: 10px;
            margin: 0 1rem;
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 40%;
        }

        .checkBox-container label {
            margin: 0px;
            width: 83%;
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: start;
        }

        .btn-container {
            display: flex;
            margin: 2.5rem 0 0 0;
            align-items: center;
        }

        .modal {
            position: absolute;
            bottom: -50px;
            width: 500px;
            background-color: white;
            font-size: 25px;
            border: 1px solid #262650;
        }

        .exit-boxx{
            width: 100%;
            display: flex;
            justify-content: end;
            background-color: #262650;
            color: white;
        }

        .exit-box span {
            margin: 5px;
            font-size: 25px;
        }

        .text-content {
            padding-left: 2rem;
            width: 80%;
            margin: 1rem 0;
        }

        .box p{
            margin: 0px;
        }

        .life{
            font-size: 19px;
            margin-top: 1rem;
        }

        .submit{
            margin: 0px;
            border-radius: 0px;
            width: 18%;
        }

        select{
            background: none;
            border: 0.5px solid #262650;
            border-radius: 5px;
        }

        .terms-box{
            font-size: 9px;
            text-decoration: none;
            color: #262650;
        }

        @media only screen and (min-width: 1024px){
            .bodyy{
                width: 55%;
            }

            .sec-p {
            width: 40%;
            font-size: 18px;
            }

            .sec-p h3{
                width: 80%;
                margin-top: 2rem;
            }
            .sec-p p{
                margin-top: 20px;
            }
            .file-select {
                    position: relative;
                    display: inline-block;
                    cursor: pointer;
                    width: 25%;
                    height: 36px;
                }
                .file-select::before {
                    background-color: transparent;
                    color: #262650;
                    border: 2px solid #262650;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius: 3px;
                    content: 'ARJUNTAR ARCHIVO'; /* teXto por defecto */
                    position: absolute;
                    left: 0;
                    right: 0;
                    top: 0;
                    bottom: 0;
                    cursor: pointer;
                }     
                
                .file-select input[type="file"] {
                    opacity: 0;
                    width: 200px;
                    height: 32px;
                    display: inline-block;
                    cursor: pointer;
                }
        }

            @media only screen and (max-width: 800px){
            .bodyy{
                width: 100%;
                height: 100%;
                justify-content: center;
            }

            .double-input-container {               
                align-items: start;
                flex-direction: column;
            }

            .sec-input-box {
            margin-top: 1rem;
            margin-bottom: 1rem;
            margin-left: 0px;
            }

            .modal{
                width: 70%;
                height: 70%;
            }
        }

        @media only screen and (min-width: 1200px){

            .sec-p h3{
                width: 75%;
            }

            .sec-p {
                width: 50%;
                font-size: 16px;
            }

            .sec-p p{
                font-weight: 500;
            }

            .file-select::before{
                font-size: 12px;
            }

            .tiny {
                font-size: 7px;
            }

            .input-container, .double-input-container{
                font-weight: 600;
            }

            .checkBox-container{
                font-size: 9px;
                width: 60%;
            }
}
    </style>
</head>
<body>
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
                <p class="hello">¡Hola!</p>
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
                <li>
                    <a href="{{route("info.edit",Auth::user()->id)}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.84 31"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M14.16,36.78c-.36-.08-.73-.13-1.08-.24A4.84,4.84,0,0,1,9.4,31.91a16.54,16.54,0,0,1,1.08-7,6.46,6.46,0,0,1,2.87-3.47,5.67,5.67,0,0,1,2.82-.67,2.1,2.1,0,0,1,.92.31c.46.25.89.57,1.34.84a6.87,6.87,0,0,0,7.77,0,12.16,12.16,0,0,0,1.07-.69,2.59,2.59,0,0,1,2-.41A5.75,5.75,0,0,1,33.7,24a13,13,0,0,1,1.41,5c.08.9.13,1.81.12,2.72a5,5,0,0,1-4.58,5,1.52,1.52,0,0,0-.2.06ZM22.31,35h0c2.56,0,5.12,0,7.69,0a3.23,3.23,0,0,0,3.42-3.51c0-.81,0-1.61-.13-2.42a11.1,11.1,0,0,0-1.16-4.13,3.91,3.91,0,0,0-3.35-2.3.91.91,0,0,0-.42.11c-.39.23-.76.48-1.15.73a8.62,8.62,0,0,1-8.88.52c-.71-.35-1.36-.83-2-1.24a.72.72,0,0,0-.33-.13,3.7,3.7,0,0,0-2.56,1.06,6,6,0,0,0-1.29,2.07,15.58,15.58,0,0,0-.9,6.09,3,3,0,0,0,1.53,2.66,4.24,4.24,0,0,0,2.18.5Z" transform="translate(-9.38 -5.78)"/><path class="cls-1" d="M29.58,13.24a7.47,7.47,0,1,1-7.46-7.46A7.44,7.44,0,0,1,29.58,13.24ZM22.11,18.9a5.66,5.66,0,1,0-5.64-5.66A5.65,5.65,0,0,0,22.11,18.9Z" transform="translate(-9.38 -5.78)"/></svg>
                        Mis Datos
                    </a>
                </li>
                <li>
                    <a href="{{route("history.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.87 27.88"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M9.65,34.57A1.44,1.44,0,0,1,8,33v-22a4.14,4.14,0,0,1,4.26-4.24H31.63A4.14,4.14,0,0,1,35.9,11V33c-.07,1.08-.72,1.68-2,1.58Zm24.46-2.22V10.45c0-1.31-.56-1.89-1.83-1.89H11.7c-1.25,0-1.82.58-1.82,1.86V32.35Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.14,17.58H13.57a1.11,1.11,0,0,1-1.22-1.29,1.07,1.07,0,0,1,.9-.91,3.59,3.59,0,0,1,.47,0H30.56a2.4,2.4,0,0,1,.6.06A1.08,1.08,0,0,1,32,16.48a1.09,1.09,0,0,1-.85,1.06,2.42,2.42,0,0,1-.47,0Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.12,21.93H13.71a2.28,2.28,0,0,1-.58-.05,1.1,1.1,0,0,1-.8-1.07,1.07,1.07,0,0,1,.83-1.06,1.83,1.83,0,0,1,.47-.05h17a2.25,2.25,0,0,1,.44,0,1.06,1.06,0,0,1,.86,1.14,1.08,1.08,0,0,1-1,1,3.31,3.31,0,0,1-.44,0Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.25,26.23H13.84a2.28,2.28,0,0,1-.58-.05,1.1,1.1,0,0,1,0-2.13,1.83,1.83,0,0,1,.47-.05h17a2.25,2.25,0,0,1,.44,0,1.1,1.1,0,0,1-.11,2.17,3.31,3.31,0,0,1-.44,0Z" transform="translate(-8.03 -6.69)"/></svg>
                        Mi Historial
                    </a>
                </li>
                <li>
                    <a href="{{route("certificate.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.06 29.11"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M36.23,9.94V31a1.42,1.42,0,0,1-1.44.69c-.59,0-1.19,0-1.79,0H31.84V32c0,1.69,0,3.39,0,5.09a1.17,1.17,0,0,1-.7,1.16,1.16,1.16,0,0,1-1.35-.32l-2.2-2.21a2.11,2.11,0,0,1-.2-.29,3.67,3.67,0,0,0-.27.26L24.84,38a1.22,1.22,0,0,1-.8.39,1.15,1.15,0,0,1-1.23-1.22V31.66h-.38c-4.69,0-9.38,0-14.07,0a1.12,1.12,0,0,1-1.19-1.19v-20a1.42,1.42,0,0,1,0-.36A1.24,1.24,0,0,1,8,9.26H35.43A1.71,1.71,0,0,1,36.23,9.94ZM34,29.38V11.56H9.46V29.37H22.81V23.94a1.16,1.16,0,0,1,1.26-1.26c2.16,0,4.32,0,6.48,0a1.24,1.24,0,0,1,1.3,1.3c0,1.7,0,3.4,0,5.09v.32ZM25.12,25v9.48l.23-.21,1.13-1.13a1.13,1.13,0,0,1,1.73,0l1.15,1.14a1.41,1.41,0,0,0,.18.14V25Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M21.72,16H12.91a1.14,1.14,0,0,1-1.25-1.32,1.11,1.11,0,0,1,.92-.95,3.91,3.91,0,0,1,.49,0H30.38a3.18,3.18,0,0,1,.62.06,1.13,1.13,0,0,1,.81,1.11A1.11,1.11,0,0,1,30.93,16a1.91,1.91,0,0,1-.48,0Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M21.7,20.49H13.06a2.32,2.32,0,0,1-.59,0,1.13,1.13,0,0,1-.83-1.1,1.11,1.11,0,0,1,.86-1.09A1.83,1.83,0,0,1,13,18.2H30.46a1.71,1.71,0,0,1,.45,0,1.13,1.13,0,0,1-.11,2.23l-.46,0Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M16.15,22.68h3.27a1.14,1.14,0,1,1,0,2.27q-3.29,0-6.59,0a1.14,1.14,0,1,1,0-2.27Z" transform="translate(-7.17 -9.26)"/></svg>
                        Certificados
                    </a>
                </li>
                <li class="nav-link {{ Route::currentRouteName() == 'employment' ? 'active' : '' }}">
                    <a href="{{route("employment.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.66 31.66"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M5.83,35.11A4.59,4.59,0,0,1,7.31,33c1.2-1.17,2.38-2.36,3.56-3.56A2.82,2.82,0,0,1,14,28.63a.31.31,0,0,0,.27,0l1.94-1.93c-.44-.68-.91-1.31-1.3-2A12.06,12.06,0,0,1,21,7.58a11.86,11.86,0,0,1,3.31-.8l.24-.06h1.86l1.18.19A12.06,12.06,0,0,1,37.18,16c.14.6.22,1.21.32,1.81v1.86c-.1.61-.16,1.22-.32,1.82a11.74,11.74,0,0,1-9,9A11.6,11.6,0,0,1,17.72,28a1.12,1.12,0,0,1-.19-.15,2.37,2.37,0,0,1-.28.4c-.34.35-.67.71-1,1a1.21,1.21,0,0,0-.51,1.47A2.36,2.36,0,0,1,15,33.16c-1.46,1.49-3,3-4.43,4.44a3.24,3.24,0,0,1-1.51.79H8.18a2.79,2.79,0,0,1-1.68-1,9.84,9.84,0,0,1-.67-1.29ZM25.45,8.58A10.21,10.21,0,1,0,35.64,18.79,10.23,10.23,0,0,0,25.45,8.58ZM14,31.27a1,1,0,0,0-.59-.87.9.9,0,0,0-1,.18L8,35a.92.92,0,1,0,1.3,1.3c1.46-1.45,2.92-2.91,4.36-4.38A2.31,2.31,0,0,0,14,31.27Z" transform="translate(-5.83 -6.72)"/><path class="cls-1" d="M28.84,18.25a6,6,0,0,1,3.42,3.63,6.74,6.74,0,0,1,.28,2.6.89.89,0,0,1-.85.79,1.47,1.47,0,0,1-.21,0c-4,0-8.06,0-12.09,0a1,1,0,0,1-1.07-1.05,5.94,5.94,0,0,1,3.71-6,4.65,4.65,0,1,1,6.81,0Zm1.82,5.16a3.91,3.91,0,0,0-3.45-3.63,23.36,23.36,0,0,0-2.9-.06,5.4,5.4,0,0,0-1.48.25,3.91,3.91,0,0,0-2.6,3.44Zm-5.22-5.56a2.78,2.78,0,1,0-2.78-2.77A2.81,2.81,0,0,0,25.44,17.85Z" transform="translate(-5.83 -6.72)"/></svg>
                        Empleo
                    </a>
                </li>
                <li>
                    <a href="{{route("financial.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.34 29.79"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M9.75,36.17A3.62,3.62,0,0,1,9.28,36,3.1,3.1,0,0,1,7,33.38a3,3,0,0,1,1.47-3.1.42.42,0,0,0,.21-.4q0-8.09,0-16.17a.45.45,0,0,0-.26-.43A3.2,3.2,0,1,1,13,9a.39.39,0,0,0,.41.22H25.26a1.43,1.43,0,1,1,.2,2.85H13.34a.44.44,0,0,0-.44.24,3.1,3.1,0,0,1-1.1,1.06.41.41,0,0,0-.21.3q0,3.15,0,6.31a.48.48,0,0,0,0,.13h3.5a1.44,1.44,0,0,1,1.53,1.26A1.37,1.37,0,0,1,15.44,23c-.77.06-1.54,0-2.3.05H11.6c0,.13,0,.23,0,.33V29.8a.39.39,0,0,0,.23.41A3,3,0,0,1,13,31.33a.41.41,0,0,0,.28.19H20l.1,0V27a1.44,1.44,0,0,1,1.08-1.5A1.39,1.39,0,0,1,23,26.69c.05.56,0,1.12,0,1.68,0,1,0,2.08,0,3.16h6.85a.48.48,0,0,0,.42-.23,7.66,7.66,0,0,1,.81-.9.52.52,0,0,0,.23-.45q0-6.55,0-13.09a1.43,1.43,0,1,1,2.86-.19c0,.31,0,.62,0,.93q0,6,0,12.09a.39.39,0,0,0,.26.42,3.19,3.19,0,0,1-.78,6l-.18.06h-.94l-.15-.06a3.15,3.15,0,0,1-2.12-1.49.38.38,0,0,0-.37-.21q-8.28,0-16.57,0c-.19,0-.27.09-.39.23a4,4,0,0,1-.84.9,9.92,9.92,0,0,1-1.41.63ZM29.8,32.51H22.73c-.54,0-.69-.15-.69-.7,0-1.57,0-3.14,0-4.71a1.55,1.55,0,0,0,0-.37.42.42,0,0,0-.48-.29.45.45,0,0,0-.41.39,2.8,2.8,0,0,0,0,.29V31.8c0,.56-.16.71-.71.71h-7v.91H29.8ZM10.62,29.78V22.64c0-.43.17-.6.6-.6h3.49a4.69,4.69,0,0,0,.53,0,.48.48,0,0,0,.45-.48.46.46,0,0,0-.48-.44H11.36c-.61,0-.74-.13-.74-.72V13.8H9.7v16ZM35.24,33A2.24,2.24,0,1,0,33,35.2,2.23,2.23,0,0,0,35.24,33ZM10.19,35.21A2.24,2.24,0,1,0,8,32.93,2.22,2.22,0,0,0,10.19,35.21Zm2.25-24.58a2.24,2.24,0,1,0-2.26,2.22A2.25,2.25,0,0,0,12.44,10.63ZM33.22,29.76V17c0-.45-.18-.71-.49-.7s-.44.24-.44.69q0,6.27,0,12.53v.32ZM13.41,11.14H25.1a2.43,2.43,0,0,0,.38,0,.42.42,0,0,0,.36-.45.43.43,0,0,0-.39-.44h-12Z" transform="translate(-7 -6.38)"/><path class="cls-1" d="M36.34,9.39a3.93,3.93,0,0,1-.34.46l-2.8,2.8L22.36,23.46a1.69,1.69,0,0,1-.63.38c-1,.37-2.07.69-3.1,1.06a2.91,2.91,0,0,0-.72.5c-.13.1-.22.22-.34.32a.44.44,0,0,1-.61,0,.44.44,0,0,1-.06-.63c.18-.2.39-.38.56-.59a1.19,1.19,0,0,0,.26-.41c.36-1,.7-2.12,1.07-3.18a1.53,1.53,0,0,1,.34-.56L32.78,6.69c.41-.41.59-.41,1,0L36,8.92A3.82,3.82,0,0,1,36.34,9.39ZM21.82,22.56,35,9.38,33.27,7.62,20.05,20.79Zm-2.31-.8-.68,2,2.05-.69Z" transform="translate(-7 -6.38)"/></svg>
                        Educaci&oacute;n Financiera
                    </a>
                </li>
            </ul>
        </nav>

        <div class="last-part-menu">
            <div class="exit-box">
                <div class="exit">
                    <span>X</span>
                </div>
            </div>

            <div class="hello-box">
                <div class="blue-help-circle">
                    <span>P</span>
                </div>
                <div class="hello-content">
                    <p>Hola, ¿Necesitas Ayuda?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque eveniet eius a.</p>
                </div>
            </div>

            <div class="answer-box">
                <div class="answer">
                    <p>Hola buenos d&iacute;as</p>
                </div>
            </div>
        </div>
    </section>

    <section class="menu">
        <nav>
            <div class="menu-text">
                <h5>Men&uacute;</h5>
                <p class="hello">¡Hola!</p>
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
                <li>
                    <a href="{{route("info.edit",Auth::user()->id)}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.84 31"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M14.16,36.78c-.36-.08-.73-.13-1.08-.24A4.84,4.84,0,0,1,9.4,31.91a16.54,16.54,0,0,1,1.08-7,6.46,6.46,0,0,1,2.87-3.47,5.67,5.67,0,0,1,2.82-.67,2.1,2.1,0,0,1,.92.31c.46.25.89.57,1.34.84a6.87,6.87,0,0,0,7.77,0,12.16,12.16,0,0,0,1.07-.69,2.59,2.59,0,0,1,2-.41A5.75,5.75,0,0,1,33.7,24a13,13,0,0,1,1.41,5c.08.9.13,1.81.12,2.72a5,5,0,0,1-4.58,5,1.52,1.52,0,0,0-.2.06ZM22.31,35h0c2.56,0,5.12,0,7.69,0a3.23,3.23,0,0,0,3.42-3.51c0-.81,0-1.61-.13-2.42a11.1,11.1,0,0,0-1.16-4.13,3.91,3.91,0,0,0-3.35-2.3.91.91,0,0,0-.42.11c-.39.23-.76.48-1.15.73a8.62,8.62,0,0,1-8.88.52c-.71-.35-1.36-.83-2-1.24a.72.72,0,0,0-.33-.13,3.7,3.7,0,0,0-2.56,1.06,6,6,0,0,0-1.29,2.07,15.58,15.58,0,0,0-.9,6.09,3,3,0,0,0,1.53,2.66,4.24,4.24,0,0,0,2.18.5Z" transform="translate(-9.38 -5.78)"/><path class="cls-1" d="M29.58,13.24a7.47,7.47,0,1,1-7.46-7.46A7.44,7.44,0,0,1,29.58,13.24ZM22.11,18.9a5.66,5.66,0,1,0-5.64-5.66A5.65,5.65,0,0,0,22.11,18.9Z" transform="translate(-9.38 -5.78)"/></svg>
                        Mis Datos
                    </a>
                </li>
                <li>
                    <a href="{{route("history.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.87 27.88"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M9.65,34.57A1.44,1.44,0,0,1,8,33v-22a4.14,4.14,0,0,1,4.26-4.24H31.63A4.14,4.14,0,0,1,35.9,11V33c-.07,1.08-.72,1.68-2,1.58Zm24.46-2.22V10.45c0-1.31-.56-1.89-1.83-1.89H11.7c-1.25,0-1.82.58-1.82,1.86V32.35Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.14,17.58H13.57a1.11,1.11,0,0,1-1.22-1.29,1.07,1.07,0,0,1,.9-.91,3.59,3.59,0,0,1,.47,0H30.56a2.4,2.4,0,0,1,.6.06A1.08,1.08,0,0,1,32,16.48a1.09,1.09,0,0,1-.85,1.06,2.42,2.42,0,0,1-.47,0Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.12,21.93H13.71a2.28,2.28,0,0,1-.58-.05,1.1,1.1,0,0,1-.8-1.07,1.07,1.07,0,0,1,.83-1.06,1.83,1.83,0,0,1,.47-.05h17a2.25,2.25,0,0,1,.44,0,1.06,1.06,0,0,1,.86,1.14,1.08,1.08,0,0,1-1,1,3.31,3.31,0,0,1-.44,0Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.25,26.23H13.84a2.28,2.28,0,0,1-.58-.05,1.1,1.1,0,0,1,0-2.13,1.83,1.83,0,0,1,.47-.05h17a2.25,2.25,0,0,1,.44,0,1.1,1.1,0,0,1-.11,2.17,3.31,3.31,0,0,1-.44,0Z" transform="translate(-8.03 -6.69)"/></svg>
                        Mi Historial
                    </a>
                </li>
                <li>
                    <a href="{{route("certificate.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.06 29.11"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M36.23,9.94V31a1.42,1.42,0,0,1-1.44.69c-.59,0-1.19,0-1.79,0H31.84V32c0,1.69,0,3.39,0,5.09a1.17,1.17,0,0,1-.7,1.16,1.16,1.16,0,0,1-1.35-.32l-2.2-2.21a2.11,2.11,0,0,1-.2-.29,3.67,3.67,0,0,0-.27.26L24.84,38a1.22,1.22,0,0,1-.8.39,1.15,1.15,0,0,1-1.23-1.22V31.66h-.38c-4.69,0-9.38,0-14.07,0a1.12,1.12,0,0,1-1.19-1.19v-20a1.42,1.42,0,0,1,0-.36A1.24,1.24,0,0,1,8,9.26H35.43A1.71,1.71,0,0,1,36.23,9.94ZM34,29.38V11.56H9.46V29.37H22.81V23.94a1.16,1.16,0,0,1,1.26-1.26c2.16,0,4.32,0,6.48,0a1.24,1.24,0,0,1,1.3,1.3c0,1.7,0,3.4,0,5.09v.32ZM25.12,25v9.48l.23-.21,1.13-1.13a1.13,1.13,0,0,1,1.73,0l1.15,1.14a1.41,1.41,0,0,0,.18.14V25Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M21.72,16H12.91a1.14,1.14,0,0,1-1.25-1.32,1.11,1.11,0,0,1,.92-.95,3.91,3.91,0,0,1,.49,0H30.38a3.18,3.18,0,0,1,.62.06,1.13,1.13,0,0,1,.81,1.11A1.11,1.11,0,0,1,30.93,16a1.91,1.91,0,0,1-.48,0Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M21.7,20.49H13.06a2.32,2.32,0,0,1-.59,0,1.13,1.13,0,0,1-.83-1.1,1.11,1.11,0,0,1,.86-1.09A1.83,1.83,0,0,1,13,18.2H30.46a1.71,1.71,0,0,1,.45,0,1.13,1.13,0,0,1-.11,2.23l-.46,0Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M16.15,22.68h3.27a1.14,1.14,0,1,1,0,2.27q-3.29,0-6.59,0a1.14,1.14,0,1,1,0-2.27Z" transform="translate(-7.17 -9.26)"/></svg>
                        Certificados
                    </a>
                </li>
                <li class="nav-link {{ Route::currentRouteName() == 'employment' ? 'active' : '' }}">
                    <a href="{{route("employment.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.66 31.66"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M5.83,35.11A4.59,4.59,0,0,1,7.31,33c1.2-1.17,2.38-2.36,3.56-3.56A2.82,2.82,0,0,1,14,28.63a.31.31,0,0,0,.27,0l1.94-1.93c-.44-.68-.91-1.31-1.3-2A12.06,12.06,0,0,1,21,7.58a11.86,11.86,0,0,1,3.31-.8l.24-.06h1.86l1.18.19A12.06,12.06,0,0,1,37.18,16c.14.6.22,1.21.32,1.81v1.86c-.1.61-.16,1.22-.32,1.82a11.74,11.74,0,0,1-9,9A11.6,11.6,0,0,1,17.72,28a1.12,1.12,0,0,1-.19-.15,2.37,2.37,0,0,1-.28.4c-.34.35-.67.71-1,1a1.21,1.21,0,0,0-.51,1.47A2.36,2.36,0,0,1,15,33.16c-1.46,1.49-3,3-4.43,4.44a3.24,3.24,0,0,1-1.51.79H8.18a2.79,2.79,0,0,1-1.68-1,9.84,9.84,0,0,1-.67-1.29ZM25.45,8.58A10.21,10.21,0,1,0,35.64,18.79,10.23,10.23,0,0,0,25.45,8.58ZM14,31.27a1,1,0,0,0-.59-.87.9.9,0,0,0-1,.18L8,35a.92.92,0,1,0,1.3,1.3c1.46-1.45,2.92-2.91,4.36-4.38A2.31,2.31,0,0,0,14,31.27Z" transform="translate(-5.83 -6.72)"/><path class="cls-1" d="M28.84,18.25a6,6,0,0,1,3.42,3.63,6.74,6.74,0,0,1,.28,2.6.89.89,0,0,1-.85.79,1.47,1.47,0,0,1-.21,0c-4,0-8.06,0-12.09,0a1,1,0,0,1-1.07-1.05,5.94,5.94,0,0,1,3.71-6,4.65,4.65,0,1,1,6.81,0Zm1.82,5.16a3.91,3.91,0,0,0-3.45-3.63,23.36,23.36,0,0,0-2.9-.06,5.4,5.4,0,0,0-1.48.25,3.91,3.91,0,0,0-2.6,3.44Zm-5.22-5.56a2.78,2.78,0,1,0-2.78-2.77A2.81,2.81,0,0,0,25.44,17.85Z" transform="translate(-5.83 -6.72)"/></svg>
                        Empleo
                    </a>
                </li>
                <li>
                    <a href="{{route("financial.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.34 29.79"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M9.75,36.17A3.62,3.62,0,0,1,9.28,36,3.1,3.1,0,0,1,7,33.38a3,3,0,0,1,1.47-3.1.42.42,0,0,0,.21-.4q0-8.09,0-16.17a.45.45,0,0,0-.26-.43A3.2,3.2,0,1,1,13,9a.39.39,0,0,0,.41.22H25.26a1.43,1.43,0,1,1,.2,2.85H13.34a.44.44,0,0,0-.44.24,3.1,3.1,0,0,1-1.1,1.06.41.41,0,0,0-.21.3q0,3.15,0,6.31a.48.48,0,0,0,0,.13h3.5a1.44,1.44,0,0,1,1.53,1.26A1.37,1.37,0,0,1,15.44,23c-.77.06-1.54,0-2.3.05H11.6c0,.13,0,.23,0,.33V29.8a.39.39,0,0,0,.23.41A3,3,0,0,1,13,31.33a.41.41,0,0,0,.28.19H20l.1,0V27a1.44,1.44,0,0,1,1.08-1.5A1.39,1.39,0,0,1,23,26.69c.05.56,0,1.12,0,1.68,0,1,0,2.08,0,3.16h6.85a.48.48,0,0,0,.42-.23,7.66,7.66,0,0,1,.81-.9.52.52,0,0,0,.23-.45q0-6.55,0-13.09a1.43,1.43,0,1,1,2.86-.19c0,.31,0,.62,0,.93q0,6,0,12.09a.39.39,0,0,0,.26.42,3.19,3.19,0,0,1-.78,6l-.18.06h-.94l-.15-.06a3.15,3.15,0,0,1-2.12-1.49.38.38,0,0,0-.37-.21q-8.28,0-16.57,0c-.19,0-.27.09-.39.23a4,4,0,0,1-.84.9,9.92,9.92,0,0,1-1.41.63ZM29.8,32.51H22.73c-.54,0-.69-.15-.69-.7,0-1.57,0-3.14,0-4.71a1.55,1.55,0,0,0,0-.37.42.42,0,0,0-.48-.29.45.45,0,0,0-.41.39,2.8,2.8,0,0,0,0,.29V31.8c0,.56-.16.71-.71.71h-7v.91H29.8ZM10.62,29.78V22.64c0-.43.17-.6.6-.6h3.49a4.69,4.69,0,0,0,.53,0,.48.48,0,0,0,.45-.48.46.46,0,0,0-.48-.44H11.36c-.61,0-.74-.13-.74-.72V13.8H9.7v16ZM35.24,33A2.24,2.24,0,1,0,33,35.2,2.23,2.23,0,0,0,35.24,33ZM10.19,35.21A2.24,2.24,0,1,0,8,32.93,2.22,2.22,0,0,0,10.19,35.21Zm2.25-24.58a2.24,2.24,0,1,0-2.26,2.22A2.25,2.25,0,0,0,12.44,10.63ZM33.22,29.76V17c0-.45-.18-.71-.49-.7s-.44.24-.44.69q0,6.27,0,12.53v.32ZM13.41,11.14H25.1a2.43,2.43,0,0,0,.38,0,.42.42,0,0,0,.36-.45.43.43,0,0,0-.39-.44h-12Z" transform="translate(-7 -6.38)"/><path class="cls-1" d="M36.34,9.39a3.93,3.93,0,0,1-.34.46l-2.8,2.8L22.36,23.46a1.69,1.69,0,0,1-.63.38c-1,.37-2.07.69-3.1,1.06a2.91,2.91,0,0,0-.72.5c-.13.1-.22.22-.34.32a.44.44,0,0,1-.61,0,.44.44,0,0,1-.06-.63c.18-.2.39-.38.56-.59a1.19,1.19,0,0,0,.26-.41c.36-1,.7-2.12,1.07-3.18a1.53,1.53,0,0,1,.34-.56L32.78,6.69c.41-.41.59-.41,1,0L36,8.92A3.82,3.82,0,0,1,36.34,9.39ZM21.82,22.56,35,9.38,33.27,7.62,20.05,20.79Zm-2.31-.8-.68,2,2.05-.69Z" transform="translate(-7 -6.38)"/></svg>
                        Educaci&oacute;n Financiera
                    </a>
                </li>
            </ul>
        </nav>
    </section>
            <div class="bodyy">
                <div class="m-box">
                    <div  class="m-boxes">
                        <h5>Empleo</h5>
                        <p>Queremos ayudarte a mejorar tus ingresos</p>
                    </div>
                    <div class="mo-boxes">
                        <h5>Soluciones financieras</h5>
                        <p>Beneﬁcios, posibilidades de pago y crédito</p>
                    </div>
                </div>

        <div class="vida box">
            <h5>Empleo</h5>
            <p>Queremos ayudarte a mejorar tus ingresos.</p>
        </div>

        <div class="sec-p">
            <h3>Con&eacute;ctate con nuestra red de aliados</h3>
            <p>Para brindarte las mejores opciones de empleo necesitamos información y tu hoja de vida</p>
        </div>
<form role="form" action="{{route('employment.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="input-container">
            <p>¿Cu&aacute;l es tu nivel de escolaridad?</p>
            <select name="scholarship" id="" >
                <option value=""></option>
                <option value="option1" @if($scholarship == 'option1') selected @endif>option</option>
                <option value="option2" @if($scholarship == 'option2') selected @endif>option</option>
                <option value="option3" @if($scholarship == 'option3') selected @endif>option</option>
            </select>
            @error('scholarship')
                <div class="is-invalid">{{ $message }}</div>
            @enderror
        </div>

        <div class="double-input-container">
            <div class="first-input-box">
                <p>Escribe tu profesi&oacute;n o actividad laboral reciente</p>
                <input type="text" name="profession" value="{{$profession}}"/>
                @error('profession')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>

            <div class="sec-input-box">
                <p>Años de experiencia</p>
                <select name="year_experincie" id="" >
                    <option value=""></option>
                    <option value="option1" @if($year_experincie == 'option1') selected @endif>option</option>
                    <option value="option2" @if($year_experincie == 'option2') selected @endif>option</option>
                    <option value="option3" @if($year_experincie == 'option3') selected @endif>option</option>
                </select>
                @error('year_experincie')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="life">
                <h5>Adjunta tu hoja de vida en formato pdf o word</h5>
        </div>

        <div class="adjuntar-box">
            <div class="recibo-box  file-select">
                <input type="file" name="file" value="Adjuntar archivo" />
                <span class="gray tiny">El formato no debe superar un peso de 3 mb</span>
                @error('file')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>

            <div class="archivo-box">
                <p class="gray upper"> @if(isset($file) &&$file) {{$file}} @else Nombre archivo. @endif</p>
                <span>Eliminar</span>
            </div>
        </div>

        <div class="btn-container">
            
            <input type="submit" class="submit" value="Enviar" id="openModal">
            <div class="checkBox-container">
                
                <input type="checkbox" id="" name="tyc" @if($tyc == 1) checked @endif/>
                <label for="">Para continuar debes de aceptar t&eacute;rminos y
                    condiciones
                    <a href="" class="terms-box">Ver t&eacute;rminos y condiciones</a></label>
                @error('tyc')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </section>
</form>

    {{-- <div class="modal" id="modal">
        <div class="exit-boxx">
            <span id="close">X</span>
        </div>

        <div class="text-content">
            <div class="text-box">
                <p>¡Hola!</p>
                <p>
                    Ya hemos recibido tu hoja de vida, recibir&aacute;s noticias
                    prontamente.
                </p>
            </div>

            <div class="logo-container">
                <p>Logo</p>
            </div>
        </div>
    </div>--}}
            </div>
    <div class="content2">
        @extends('vista-casa')
    </div>

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
    /*let modal = document.getElementById('modal');
    let openBtn = document.getElementById('openModal');

    modal.style.display = 'none';

    closeBtn.addEventListener('click', function(){
        modal.style.display = 'none';
    });*/

    openBtn.addEventListener('click', function(){
        modal.style.display = 'block';
    });
    </script>
</body>
</html>

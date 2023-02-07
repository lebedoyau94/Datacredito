<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vida Financiera | {{config("app.name")}} </title>
    <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <script src="https://kit.fontawesome.com/2e3d4c9f14.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">  
    <style>

        ul{
            height: 90px !important;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 10rem;
            height: 6vh;
            border: 1px solid white;
            font-size: 2rem;
        }

        .menu-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 1rem;
            height: 40px;
            color: white;
        }

        .center-container{
            margin-top: 70px;
        }

        .modals {
            position: sticky;
            right: 30px;
            bottom: 100px;
            height: auto;
            background-color: #ffffff;
            border: 1px solid #324963;
            padding-bottom: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .deudas{
            height: 200px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .is-invalid {
            color: red;
            font-size: 9px;
        }

        input[type="text"] {
            background-color: white;
            border-radius: 6px;
            text-align: center;
    }

        h1 {
            text-transform: uppercase;
            color: white;
            font-size: 1.5rem;
    }

        .menu-text p{
            font-size: 20px;
        }

        ul h5{
            font-size: 18px;
        }

        .first-line-m{
            width: 100%;
}

        .left-grid-sec{
            padding: 1rem 4rem;
        }

        .left-grid-sec h5{
            font-size: 15px;
        }

        .right-grid-sec h5{
            font-size: 15px;
        }

        .text-right-grid{
            padding-right: 67px;
        }

        .right-grid-sec {
            margin-top: 20px;
        }

        .content-section-m{
            background-color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .menu-web{
            background: url('/assets/img/Fondo_menu.png');
        }

        .exit{
            border-radius: unset;
        }

        #close{
            cursor: pointer;
        }

        #Capa_2{
            width: 70px;
            height: 32px;
        }

        .icon{
            margin-left: 10px;
        }

        .ico{
            margin-left: 20px;
        }

        .m-left{
            margin-left: 10px;
        }

        @media only screen and (min-width: 1200px) {
            .left-grid-sec{
                font-size: 10px;
            }

            .first-line-m h2{
                font-size: 18px;
            }

            .first-line-m p{
                font-size: 13px;
            }

            .gradient-section h4{
                font-size: 16px;
            }

            .icon-text-box{
                padding-right: 48%;
                font-size: 13px;
                margin: .8rem 0;
            }

            #Capa_2{
                width: 45px;
            }

            .text-right-grid{
                padding-right: 25px;
            }

            .buy{
                font-weight: 900;
                font-size: 15px;
            }

            .buy-p{
                font-size: 14px;
            }

            .long-card{
                height: 63px;
            }

            input[type="text"]{
                width: 9rem;
                max-width: 9rem;
            }
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
    {{--<div>
        @include("menu");
    </div>--}}
    <section class="menu-web">
        <div class="center-container">
            <div class="logo-container">
                <h1>Logo</h1>
            </div>
        </div>
        <nav>
            <div class="menu-text">
                <p>¡Hola!</p>
            </div>
            <ul>
                <h5>Men&uacute;</h5>
                <li>
                    <a href="{{route("main.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.63 31.63"><defs><style>.cls-7{fill:#fff;}</style></defs><path class="cls-7" d="M31.32,5.46h2.91a4,4,0,0,1,4.15,4.15c0,1.93,0,3.85,0,5.78a4.05,4.05,0,0,1-4.14,4.16H28.43a4,4,0,0,1-4.13-4.13c0-1.94,0-3.88,0-5.82a4.07,4.07,0,0,1,4.16-4.14Zm4.67,7c0-1,0-1.93,0-2.9a1.67,1.67,0,0,0-1.72-1.72H28.42a1.67,1.67,0,0,0-1.74,1.71c0,2,0,3.92,0,5.89a1.66,1.66,0,0,0,1.73,1.71q2.93,0,5.85,0A1.65,1.65,0,0,0,36,15.42C36,14.44,36,13.46,36,12.47Z" transform="translate(-6.75 -5.46)"/><path class="cls-7" d="M38.38,30.06v2.87a4,4,0,0,1-4.14,4.16H28.43A4,4,0,0,1,24.3,33c0-2,0-3.93,0-5.89A4,4,0,0,1,28.38,23c2,0,3.95,0,5.93,0a4,4,0,0,1,4.07,4.11C38.39,28.1,38.38,29.08,38.38,30.06Zm-7,4.64h2.91A1.66,1.66,0,0,0,36,33q0-2.92,0-5.85a1.66,1.66,0,0,0-1.7-1.74c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72c0,1.95,0,3.91,0,5.86a1.67,1.67,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-7" d="M13.8,37.09H10.93a4,4,0,0,1-4.17-4.16c0-1.92,0-3.85,0-5.78A4,4,0,0,1,10.9,23c1.93,0,3.85,0,5.78,0a4.06,4.06,0,0,1,4.16,4.18c0,1.91,0,3.83,0,5.74a4.05,4.05,0,0,1-4.17,4.17Zm0-2.39h2.95A1.65,1.65,0,0,0,18.45,33c0-2,0-4,0-5.93a1.64,1.64,0,0,0-1.7-1.7c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72V33a1.66,1.66,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-7" d="M13.81,5.46h2.87a4.06,4.06,0,0,1,4.16,4.15c0,1.93,0,3.87,0,5.81a4.06,4.06,0,0,1-4.14,4.13H10.89a4,4,0,0,1-4.13-4.17c0-1.92,0-3.85,0-5.77a4,4,0,0,1,4.15-4.15Zm-4.67,7v2.95a1.66,1.66,0,0,0,1.69,1.71c2,0,3.95,0,5.93,0a1.64,1.64,0,0,0,1.69-1.7c0-2,0-3.93,0-5.89a1.65,1.65,0,0,0-1.72-1.72H10.88A1.66,1.66,0,0,0,9.14,9.59Z" transform="translate(-6.75 -5.46)"/></svg>
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
            </div>
            <ul>
                <h5>Men&uacute;</h5>
                <li>
                    <a href="{{route("dashboard.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.63 31.63"><defs><style>.cls-7{fill:#fff;}</style></defs><path class="cls-7" d="M31.32,5.46h2.91a4,4,0,0,1,4.15,4.15c0,1.93,0,3.85,0,5.78a4.05,4.05,0,0,1-4.14,4.16H28.43a4,4,0,0,1-4.13-4.13c0-1.94,0-3.88,0-5.82a4.07,4.07,0,0,1,4.16-4.14Zm4.67,7c0-1,0-1.93,0-2.9a1.67,1.67,0,0,0-1.72-1.72H28.42a1.67,1.67,0,0,0-1.74,1.71c0,2,0,3.92,0,5.89a1.66,1.66,0,0,0,1.73,1.71q2.93,0,5.85,0A1.65,1.65,0,0,0,36,15.42C36,14.44,36,13.46,36,12.47Z" transform="translate(-6.75 -5.46)"/><path class="cls-7" d="M38.38,30.06v2.87a4,4,0,0,1-4.14,4.16H28.43A4,4,0,0,1,24.3,33c0-2,0-3.93,0-5.89A4,4,0,0,1,28.38,23c2,0,3.95,0,5.93,0a4,4,0,0,1,4.07,4.11C38.39,28.1,38.38,29.08,38.38,30.06Zm-7,4.64h2.91A1.66,1.66,0,0,0,36,33q0-2.92,0-5.85a1.66,1.66,0,0,0-1.7-1.74c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72c0,1.95,0,3.91,0,5.86a1.67,1.67,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-7" d="M13.8,37.09H10.93a4,4,0,0,1-4.17-4.16c0-1.92,0-3.85,0-5.78A4,4,0,0,1,10.9,23c1.93,0,3.85,0,5.78,0a4.06,4.06,0,0,1,4.16,4.18c0,1.91,0,3.83,0,5.74a4.05,4.05,0,0,1-4.17,4.17Zm0-2.39h2.95A1.65,1.65,0,0,0,18.45,33c0-2,0-4,0-5.93a1.64,1.64,0,0,0-1.7-1.7c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72V33a1.66,1.66,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-7" d="M13.81,5.46h2.87a4.06,4.06,0,0,1,4.16,4.15c0,1.93,0,3.87,0,5.81a4.06,4.06,0,0,1-4.14,4.13H10.89a4,4,0,0,1-4.13-4.17c0-1.92,0-3.85,0-5.77a4,4,0,0,1,4.15-4.15Zm-4.67,7v2.95a1.66,1.66,0,0,0,1.69,1.71c2,0,3.95,0,5.93,0a1.64,1.64,0,0,0,1.69-1.7c0-2,0-3.93,0-5.89a1.65,1.65,0,0,0-1.72-1.72H10.88A1.66,1.66,0,0,0,9.14,9.59Z" transform="translate(-6.75 -5.46)"/></svg>
                        Life Board
                    </a>
                </li>
            </ul>
        </nav>
    </section>

    <section class="content-section-m">
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

                <div class="first-line-m">
                    <h2>Vida Financiera</h2>
                    <p>Estado de deudas y perfil financiero en el sector</p>
                </div>

                <div class="grid-white-sec">

                    <div class="left-grid-sec">
                        <h5>Perfil Financiero:</h5>
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
                            <h5>Score Datacr&eacute;dito</h5>
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
                    <div class="icon-text-box ico">
                        <svg id="Capa_2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.98 36.96"><defs><style>.cls-1{fill:#424b63;}</style></defs><path class="cls-1" d="M35.07,39.25H5.61l-.37-.14a3.06,3.06,0,0,1-2-1.55l-.57-1.28v-21A2,2,0,0,0,2.79,15,3.27,3.27,0,0,1,6,12.41c.63,0,1.26,0,1.88,0A3.4,3.4,0,0,0,9.56,12c.7-.44,1.42-.85,2.14-1.26l4.59-2.66,5.14-3C22.65,4.4,23.86,3.66,25.09,3a3.55,3.55,0,0,1,2.59-.62A3.07,3.07,0,0,1,29.8,3.72c.86,1.39,1.68,2.81,2.5,4.24s1.47,2.61,2.21,3.91a1.23,1.23,0,0,0,.84.65,3,3,0,0,1,2.21,1.73A4.78,4.78,0,0,1,37.94,16c.06,1.53,0,3.06,0,4.59a.5.5,0,0,0,.28.53,2.54,2.54,0,0,1,1.39,2.49c0,1.49,0,3,0,4.48a2.54,2.54,0,0,1-1.34,2.42.57.57,0,0,0-.33.58c0,1.72,0,3.44-.09,5.16a3,3,0,0,1-2,2.68C35.59,39,35.33,39.13,35.07,39.25ZM36.3,20.8c0-1.7,0-3.34,0-5A1.7,1.7,0,0,0,34.49,14H6.09a1.68,1.68,0,0,0-1.78,1.75q0,10,0,20.08a2,2,0,0,0,.15.76,1.62,1.62,0,0,0,1.65,1H29.5c1.67,0,3.35,0,5,0a1.62,1.62,0,0,0,1.76-1.75c0-1.56,0-3.11,0-4.67,0-.12,0-.23,0-.38H31.09A4.6,4.6,0,0,1,28,29.58a4.91,4.91,0,0,1-1.65-4.86,5,5,0,0,1,4.73-3.91c1.6,0,3.21,0,4.81,0Zm-2.21,8.39c.93,0,1.86,0,2.78,0,.74,0,1.11-.17,1.1-1.09,0-1.56,0-3.13,0-4.69,0-.75-.39-1-1-1H31.89a7.16,7.16,0,0,0-1.39.08A3.17,3.17,0,0,0,28,24.72a3.41,3.41,0,0,0,.78,3.43,3.37,3.37,0,0,0,2.55,1C32.26,29.22,33.18,29.19,34.09,29.19ZM12.37,12.25l0,.09c.75,0,1.51,0,2.27,0a3,3,0,0,0,1.76-.44C18,11,19.62,10.06,21.22,9.13l5.13-3,2.22-1.3a1,1,0,0,0-.05-.16,1.63,1.63,0,0,0-2.19-.55c-.72.36-1.39.8-2.08,1.2L21,7.2l-3.33,2L14.43,11Zm6.61,0a1.13,1.13,0,0,0,.2.07h3a.59.59,0,0,0,.26-.07c.52-.29,1-.57,1.55-.87l3.73-2.17L30.3,7.7l-.87-1.52Zm14,.06L31.09,9.09l-5.38,3.14.05.09Z" transform="translate(-2.65 -2.29)"/><path class="cls-1" d="M31.23,24.06A1.75,1.75,0,0,1,33,25.76a1.71,1.71,0,0,1-1.75,1.75,1.69,1.69,0,0,1-1.72-1.67A1.75,1.75,0,0,1,31.23,24.06Z" transform="translate(-2.65 -2.29)"/></svg>
                        <p class="m-left">
                            Recibe tips y consejos para mejorar tu score crediticio y as&iacute; mejorar tu perfil financiero.
                        </p>
                    </div>
                    <div class="icon-text-box icon">
                        <svg id="Capa_2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.52 38.51"><defs><style>.cls-1{fill:#424b63;}</style></defs><path class="cls-1" d="M1,25.76V23.35c.05-.39.1-.79.17-1.18a15.32,15.32,0,0,1,4.81-9,15,15,0,0,1,9.13-4.08.6.6,0,0,0,.53-.38A12.4,12.4,0,0,1,24,2c.62-.15,1.25-.24,1.87-.36H28c.59.1,1.18.18,1.77.31a12.59,12.59,0,0,1,9.55,14.4,12.38,12.38,0,0,1-6.9,9.14.59.59,0,0,0-.36.51,22.92,22.92,0,0,1-.39,2.32A15.54,15.54,0,0,1,17.51,40.1,15,15,0,0,1,9.3,38.31a15.37,15.37,0,0,1-8-10.71C1.19,27,1.12,26.37,1,25.76Zm13.5-13.55c-.12,0-.23,0-.34,0a12.54,12.54,0,1,0,14.94,12.6,12.29,12.29,0,0,0-3.91-9.38,12.73,12.73,0,0,0-3.4-2.32,1.51,1.51,0,1,1,1.24-2.75,15.45,15.45,0,0,1,8.56,10.13c.16.56.26,1.13.4,1.73l.21-.12a9.28,9.28,0,0,0,4.13-9.43,9.52,9.52,0,0,0-18.92,1.15A9.29,9.29,0,0,0,22,22.26a9,9,0,0,0,2.87,1.18,1.48,1.48,0,0,1,1.22,1.5,1.43,1.43,0,0,1-1.17,1.45,2.91,2.91,0,0,1-1.21-.09,12.89,12.89,0,0,1-5.82-3.52A12.33,12.33,0,0,1,14.52,12.21Z" transform="translate(-1.02 -1.63)"/></svg>
                        <p>
                            Excelentes descuentos y variadas opciones de pago.
                        </p>
                    </div>
                    <div class="icon-text-box icon">
                        <svg id="Capa_2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.33 40.06"><defs><style>.cls-1{fill:#424b63;}</style></defs><path class="cls-1" d="M.91,21.27A.91.91,0,0,0,1,21.1a2.3,2.3,0,0,1,2.2-1.59c.4,0,.81,0,1.21,0a.35.35,0,0,0,.41-.27A15,15,0,0,1,7,15.34a.9.9,0,0,0,.15-.51c0-1.58,0-3.15,0-4.72A1.47,1.47,0,0,1,9.45,8.77l3.35,1.94.14,0v-.43A8.63,8.63,0,0,1,30.13,9.1a12.62,12.62,0,0,1,0,2c0,.27.14.32.29.41a14.59,14.59,0,0,1,6,6.45,14.79,14.79,0,0,1,1.41,5.25c0,.08,0,.16,0,.27.54,0,1.08,0,1.61,0a1.22,1.22,0,0,0,0-2.43A1.66,1.66,0,0,1,39,21a.8.8,0,0,1-.41-.95.86.86,0,0,1,.91-.58A2.9,2.9,0,0,1,42.23,22,2.85,2.85,0,0,1,40,25.06a3.83,3.83,0,0,1-.67.08H37.93c-.16.91-.26,1.81-.47,2.67A14.48,14.48,0,0,1,32,36.09a.62.62,0,0,0-.29.56c0,1,0,2,0,3a1.75,1.75,0,0,1-1.92,1.93H27.07a1.7,1.7,0,0,1-1.63-1c-.26-.47-.48-1-.75-1.42a.49.49,0,0,0-.36-.21H17.47a.49.49,0,0,0-.35.2c-.27.45-.49.93-.73,1.39a1.76,1.76,0,0,1-1.69,1H12a1.71,1.71,0,0,1-1.87-1.84c0-1,0-2.05,0-3.07a.7.7,0,0,0-.31-.64,14.38,14.38,0,0,1-4.91-6.55.46.46,0,0,0-.53-.36,10.26,10.26,0,0,1-1.24,0A2.25,2.25,0,0,1,1,27.53a1,1,0,0,0-.09-.13ZM30.05,40c0-.19,0-.33,0-.47,0-1.11,0-2.21,0-3.31A1.3,1.3,0,0,1,30.68,35a12.74,12.74,0,0,0,5.51-11.76,12.67,12.67,0,0,0-4.57-8.9c-.57-.49-1.21-.91-1.83-1.36l-.7,1.54c.5.45,1,.87,1.46,1.31a.77.77,0,0,1,.13,1,.74.74,0,0,1-.85.39,1.36,1.36,0,0,1-.57-.35,11,11,0,0,0-14.49-.73c-.36.28-.68.61-1,.9a.8.8,0,0,1-1.32-.44,1.18,1.18,0,0,1,.3-.81,16.63,16.63,0,0,1,1.34-1.21l-.83-2a6.76,6.76,0,0,1-1.09-.41c-1-.56-2-1.15-3-1.73l-.38-.19v.49c0,1.51,0,3,0,4.52a1.51,1.51,0,0,1-.28.8A13.51,13.51,0,0,0,6.15,20.4c-.18.59-.43.76-1.07.77H3.19c-.35,0-.61.17-.63.5,0,.61,0,1.22,0,1.86.37,0,.71,0,1,0a.81.81,0,1,1,0,1.61H2.53c0,.59,0,1.11,0,1.63s.23.73.75.73,1.24,0,1.86,0a.88.88,0,0,1,1,.7,13,13,0,0,0,5.12,6.93,1,1,0,0,1,.47.92c0,1.16,0,2.31,0,3.47V40c1,0,2,0,3,0,.1,0,.23-.16.29-.28l1-1.93a.83.83,0,0,1,1-.48,2.71,2.71,0,0,0,.4,0c2,0,3.95.06,5.93.07a12.26,12.26,0,0,0,1.48-.1.88.88,0,0,1,1,.54c.33.62.64,1.24,1,1.86.06.11.19.27.29.28C28.06,40,29,40,30.05,40ZM27.69,13.6a7,7,0,0,0-1.52-8.68,7.05,7.05,0,0,0-9.19,0,6.94,6.94,0,0,0-1.51,8.68l3.61-1.3c0-.3-.14-.64-.17-1a.76.76,0,0,1,.7-.86.8.8,0,0,1,.91.76,1,1,0,0,0,1,.92,1,1,0,0,0,1.08-.84,1,1,0,0,0-.94-.92h-.32a2.68,2.68,0,0,1-2.44-2.06,2.47,2.47,0,0,1,1.53-2.73c.19-.08.3-.15.33-.38a.8.8,0,0,1,1.57,0c0,.24.14.31.33.39a2.43,2.43,0,0,1,1.56,2.24.79.79,0,0,1-.74.85.83.83,0,0,1-.88-.76,1.06,1.06,0,0,0-1.53-.83.83.83,0,0,0-.57.8.81.81,0,0,0,.61.77,2.19,2.19,0,0,0,.67.11,2.53,2.53,0,0,1,2.37,2,7.09,7.09,0,0,1-.05,1.6Z" transform="translate(-0.91 -1.56)"/><path class="cls-1" d="M11.72,19.51a.84.84,0,0,1-.85.79A.81.81,0,1,1,11,18.69.83.83,0,0,1,11.72,19.51Z" transform="translate(-0.91 -1.56)"/></svg>
                        <p class="m-left">
                            Grandes recompensas por tu comportamiento cumplido de pago.
                        </p>
                    </div>
                    <div class="icon-text-box">
                        <svg id="Capa_2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.33 40.06"><defs><style>.cls-1{fill:#424b63;}</style></defs><path class="cls-1" d="M.91,21.27A.91.91,0,0,0,1,21.1a2.3,2.3,0,0,1,2.2-1.59c.4,0,.81,0,1.21,0a.35.35,0,0,0,.41-.27A15,15,0,0,1,7,15.34a.9.9,0,0,0,.15-.51c0-1.58,0-3.15,0-4.72A1.47,1.47,0,0,1,9.45,8.77l3.35,1.94.14,0v-.43A8.63,8.63,0,0,1,30.13,9.1a12.62,12.62,0,0,1,0,2c0,.27.14.32.29.41a14.59,14.59,0,0,1,6,6.45,14.79,14.79,0,0,1,1.41,5.25c0,.08,0,.16,0,.27.54,0,1.08,0,1.61,0a1.22,1.22,0,0,0,0-2.43A1.66,1.66,0,0,1,39,21a.8.8,0,0,1-.41-.95.86.86,0,0,1,.91-.58A2.9,2.9,0,0,1,42.23,22,2.85,2.85,0,0,1,40,25.06a3.83,3.83,0,0,1-.67.08H37.93c-.16.91-.26,1.81-.47,2.67A14.48,14.48,0,0,1,32,36.09a.62.62,0,0,0-.29.56c0,1,0,2,0,3a1.75,1.75,0,0,1-1.92,1.93H27.07a1.7,1.7,0,0,1-1.63-1c-.26-.47-.48-1-.75-1.42a.49.49,0,0,0-.36-.21H17.47a.49.49,0,0,0-.35.2c-.27.45-.49.93-.73,1.39a1.76,1.76,0,0,1-1.69,1H12a1.71,1.71,0,0,1-1.87-1.84c0-1,0-2.05,0-3.07a.7.7,0,0,0-.31-.64,14.38,14.38,0,0,1-4.91-6.55.46.46,0,0,0-.53-.36,10.26,10.26,0,0,1-1.24,0A2.25,2.25,0,0,1,1,27.53a1,1,0,0,0-.09-.13ZM30.05,40c0-.19,0-.33,0-.47,0-1.11,0-2.21,0-3.31A1.3,1.3,0,0,1,30.68,35a12.74,12.74,0,0,0,5.51-11.76,12.67,12.67,0,0,0-4.57-8.9c-.57-.49-1.21-.91-1.83-1.36l-.7,1.54c.5.45,1,.87,1.46,1.31a.77.77,0,0,1,.13,1,.74.74,0,0,1-.85.39,1.36,1.36,0,0,1-.57-.35,11,11,0,0,0-14.49-.73c-.36.28-.68.61-1,.9a.8.8,0,0,1-1.32-.44,1.18,1.18,0,0,1,.3-.81,16.63,16.63,0,0,1,1.34-1.21l-.83-2a6.76,6.76,0,0,1-1.09-.41c-1-.56-2-1.15-3-1.73l-.38-.19v.49c0,1.51,0,3,0,4.52a1.51,1.51,0,0,1-.28.8A13.51,13.51,0,0,0,6.15,20.4c-.18.59-.43.76-1.07.77H3.19c-.35,0-.61.17-.63.5,0,.61,0,1.22,0,1.86.37,0,.71,0,1,0a.81.81,0,1,1,0,1.61H2.53c0,.59,0,1.11,0,1.63s.23.73.75.73,1.24,0,1.86,0a.88.88,0,0,1,1,.7,13,13,0,0,0,5.12,6.93,1,1,0,0,1,.47.92c0,1.16,0,2.31,0,3.47V40c1,0,2,0,3,0,.1,0,.23-.16.29-.28l1-1.93a.83.83,0,0,1,1-.48,2.71,2.71,0,0,0,.4,0c2,0,3.95.06,5.93.07a12.26,12.26,0,0,0,1.48-.1.88.88,0,0,1,1,.54c.33.62.64,1.24,1,1.86.06.11.19.27.29.28C28.06,40,29,40,30.05,40ZM27.69,13.6a7,7,0,0,0-1.52-8.68,7.05,7.05,0,0,0-9.19,0,6.94,6.94,0,0,0-1.51,8.68l3.61-1.3c0-.3-.14-.64-.17-1a.76.76,0,0,1,.7-.86.8.8,0,0,1,.91.76,1,1,0,0,0,1,.92,1,1,0,0,0,1.08-.84,1,1,0,0,0-.94-.92h-.32a2.68,2.68,0,0,1-2.44-2.06,2.47,2.47,0,0,1,1.53-2.73c.19-.08.3-.15.33-.38a.8.8,0,0,1,1.57,0c0,.24.14.31.33.39a2.43,2.43,0,0,1,1.56,2.24.79.79,0,0,1-.74.85.83.83,0,0,1-.88-.76,1.06,1.06,0,0,0-1.53-.83.83.83,0,0,0-.57.8.81.81,0,0,0,.61.77,2.19,2.19,0,0,0,.67.11,2.53,2.53,0,0,1,2.37,2,7.09,7.09,0,0,1-.05,1.6Z" transform="translate(-0.91 -1.56)"/><path class="cls-1" d="M11.72,19.51a.84.84,0,0,1-.85.79A.81.81,0,1,1,11,18.69.83.83,0,0,1,11.72,19.51Z" transform="translate(-0.91 -1.56)"/></svg>
                        <p>
                            Certificados al instante
                        </p>
                    </div>
                    <div class="icon-text-box">
                        <svg id="Capa_2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.33 40.06"><defs><style>.cls-1{fill:#424b63;}</style></defs><path class="cls-1" d="M.91,21.27A.91.91,0,0,0,1,21.1a2.3,2.3,0,0,1,2.2-1.59c.4,0,.81,0,1.21,0a.35.35,0,0,0,.41-.27A15,15,0,0,1,7,15.34a.9.9,0,0,0,.15-.51c0-1.58,0-3.15,0-4.72A1.47,1.47,0,0,1,9.45,8.77l3.35,1.94.14,0v-.43A8.63,8.63,0,0,1,30.13,9.1a12.62,12.62,0,0,1,0,2c0,.27.14.32.29.41a14.59,14.59,0,0,1,6,6.45,14.79,14.79,0,0,1,1.41,5.25c0,.08,0,.16,0,.27.54,0,1.08,0,1.61,0a1.22,1.22,0,0,0,0-2.43A1.66,1.66,0,0,1,39,21a.8.8,0,0,1-.41-.95.86.86,0,0,1,.91-.58A2.9,2.9,0,0,1,42.23,22,2.85,2.85,0,0,1,40,25.06a3.83,3.83,0,0,1-.67.08H37.93c-.16.91-.26,1.81-.47,2.67A14.48,14.48,0,0,1,32,36.09a.62.62,0,0,0-.29.56c0,1,0,2,0,3a1.75,1.75,0,0,1-1.92,1.93H27.07a1.7,1.7,0,0,1-1.63-1c-.26-.47-.48-1-.75-1.42a.49.49,0,0,0-.36-.21H17.47a.49.49,0,0,0-.35.2c-.27.45-.49.93-.73,1.39a1.76,1.76,0,0,1-1.69,1H12a1.71,1.71,0,0,1-1.87-1.84c0-1,0-2.05,0-3.07a.7.7,0,0,0-.31-.64,14.38,14.38,0,0,1-4.91-6.55.46.46,0,0,0-.53-.36,10.26,10.26,0,0,1-1.24,0A2.25,2.25,0,0,1,1,27.53a1,1,0,0,0-.09-.13ZM30.05,40c0-.19,0-.33,0-.47,0-1.11,0-2.21,0-3.31A1.3,1.3,0,0,1,30.68,35a12.74,12.74,0,0,0,5.51-11.76,12.67,12.67,0,0,0-4.57-8.9c-.57-.49-1.21-.91-1.83-1.36l-.7,1.54c.5.45,1,.87,1.46,1.31a.77.77,0,0,1,.13,1,.74.74,0,0,1-.85.39,1.36,1.36,0,0,1-.57-.35,11,11,0,0,0-14.49-.73c-.36.28-.68.61-1,.9a.8.8,0,0,1-1.32-.44,1.18,1.18,0,0,1,.3-.81,16.63,16.63,0,0,1,1.34-1.21l-.83-2a6.76,6.76,0,0,1-1.09-.41c-1-.56-2-1.15-3-1.73l-.38-.19v.49c0,1.51,0,3,0,4.52a1.51,1.51,0,0,1-.28.8A13.51,13.51,0,0,0,6.15,20.4c-.18.59-.43.76-1.07.77H3.19c-.35,0-.61.17-.63.5,0,.61,0,1.22,0,1.86.37,0,.71,0,1,0a.81.81,0,1,1,0,1.61H2.53c0,.59,0,1.11,0,1.63s.23.73.75.73,1.24,0,1.86,0a.88.88,0,0,1,1,.7,13,13,0,0,0,5.12,6.93,1,1,0,0,1,.47.92c0,1.16,0,2.31,0,3.47V40c1,0,2,0,3,0,.1,0,.23-.16.29-.28l1-1.93a.83.83,0,0,1,1-.48,2.71,2.71,0,0,0,.4,0c2,0,3.95.06,5.93.07a12.26,12.26,0,0,0,1.48-.1.88.88,0,0,1,1,.54c.33.62.64,1.24,1,1.86.06.11.19.27.29.28C28.06,40,29,40,30.05,40ZM27.69,13.6a7,7,0,0,0-1.52-8.68,7.05,7.05,0,0,0-9.19,0,6.94,6.94,0,0,0-1.51,8.68l3.61-1.3c0-.3-.14-.64-.17-1a.76.76,0,0,1,.7-.86.8.8,0,0,1,.91.76,1,1,0,0,0,1,.92,1,1,0,0,0,1.08-.84,1,1,0,0,0-.94-.92h-.32a2.68,2.68,0,0,1-2.44-2.06,2.47,2.47,0,0,1,1.53-2.73c.19-.08.3-.15.33-.38a.8.8,0,0,1,1.57,0c0,.24.14.31.33.39a2.43,2.43,0,0,1,1.56,2.24.79.79,0,0,1-.74.85.83.83,0,0,1-.88-.76,1.06,1.06,0,0,0-1.53-.83.83.83,0,0,0-.57.8.81.81,0,0,0,.61.77,2.19,2.19,0,0,0,.67.11,2.53,2.53,0,0,1,2.37,2,7.09,7.09,0,0,1-.05,1.6Z" transform="translate(-0.91 -1.56)"/><path class="cls-1" d="M11.72,19.51a.84.84,0,0,1-.85.79A.81.81,0,1,1,11,18.69.83.83,0,0,1,11.72,19.51Z" transform="translate(-0.91 -1.56)"/></svg>
                        <p>
                            Ofertas de empleo y educaci&oacute;n financiera.
                        </p>
                    </div>
                    <div class="icon-text-box">
                        <svg id="Capa_2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.98 36.96"><defs><style>.cls-1{fill:#424b63;}</style></defs><path class="cls-1" d="M35.07,39.25H5.61l-.37-.14a3.06,3.06,0,0,1-2-1.55l-.57-1.28v-21A2,2,0,0,0,2.79,15,3.27,3.27,0,0,1,6,12.41c.63,0,1.26,0,1.88,0A3.4,3.4,0,0,0,9.56,12c.7-.44,1.42-.85,2.14-1.26l4.59-2.66,5.14-3C22.65,4.4,23.86,3.66,25.09,3a3.55,3.55,0,0,1,2.59-.62A3.07,3.07,0,0,1,29.8,3.72c.86,1.39,1.68,2.81,2.5,4.24s1.47,2.61,2.21,3.91a1.23,1.23,0,0,0,.84.65,3,3,0,0,1,2.21,1.73A4.78,4.78,0,0,1,37.94,16c.06,1.53,0,3.06,0,4.59a.5.5,0,0,0,.28.53,2.54,2.54,0,0,1,1.39,2.49c0,1.49,0,3,0,4.48a2.54,2.54,0,0,1-1.34,2.42.57.57,0,0,0-.33.58c0,1.72,0,3.44-.09,5.16a3,3,0,0,1-2,2.68C35.59,39,35.33,39.13,35.07,39.25ZM36.3,20.8c0-1.7,0-3.34,0-5A1.7,1.7,0,0,0,34.49,14H6.09a1.68,1.68,0,0,0-1.78,1.75q0,10,0,20.08a2,2,0,0,0,.15.76,1.62,1.62,0,0,0,1.65,1H29.5c1.67,0,3.35,0,5,0a1.62,1.62,0,0,0,1.76-1.75c0-1.56,0-3.11,0-4.67,0-.12,0-.23,0-.38H31.09A4.6,4.6,0,0,1,28,29.58a4.91,4.91,0,0,1-1.65-4.86,5,5,0,0,1,4.73-3.91c1.6,0,3.21,0,4.81,0Zm-2.21,8.39c.93,0,1.86,0,2.78,0,.74,0,1.11-.17,1.1-1.09,0-1.56,0-3.13,0-4.69,0-.75-.39-1-1-1H31.89a7.16,7.16,0,0,0-1.39.08A3.17,3.17,0,0,0,28,24.72a3.41,3.41,0,0,0,.78,3.43,3.37,3.37,0,0,0,2.55,1C32.26,29.22,33.18,29.19,34.09,29.19ZM12.37,12.25l0,.09c.75,0,1.51,0,2.27,0a3,3,0,0,0,1.76-.44C18,11,19.62,10.06,21.22,9.13l5.13-3,2.22-1.3a1,1,0,0,0-.05-.16,1.63,1.63,0,0,0-2.19-.55c-.72.36-1.39.8-2.08,1.2L21,7.2l-3.33,2L14.43,11Zm6.61,0a1.13,1.13,0,0,0,.2.07h3a.59.59,0,0,0,.26-.07c.52-.29,1-.57,1.55-.87l3.73-2.17L30.3,7.7l-.87-1.52Zm14,.06L31.09,9.09l-5.38,3.14.05.09Z" transform="translate(-2.65 -2.29)"/><path class="cls-1" d="M31.23,24.06A1.75,1.75,0,0,1,33,25.76a1.71,1.71,0,0,1-1.75,1.75,1.69,1.69,0,0,1-1.72-1.67A1.75,1.75,0,0,1,31.23,24.06Z" transform="translate(-2.65 -2.29)"/></svg>
                        <p>
                            Cr&eacute;ditos a tu medida para mejorar tu score.
                        </p>
                    </div>
                </div>

                <div class="card-section">

                    <div class="text-card-sec">
                        <p class="buy">Compramos tu cartera</p>
                        <p class="buy-p">¿Te gusta nuestra experiencia? trae tus otras deudas, nosotros te la compramos.</p>
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

        <div class="modals" id="modals">
            <div class="exit">
                <span id="close">X</span>
            </div>

            <section class="form-box">
                <h2>Formulario de negociaci&oacute;n de cartera</h2>

                <form action="{{route('info.store')}}" method="POST">
                    @csrf

                    <div class="first-line">
                        <div class="mini-box">
                            <label for="Nombres">Nombres</label>
                            <input type="text" name="name" id="">
                            @error('name')
                                <div class="is-invalid">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mini-box">
                            <label for="Apellidos">Apellidos</label>
                            <input type="text" name="surnames" id="">
                            @error('surnames')
                                <div class="is-invalid">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mini-box">
                            <label for="Id">Tipo de ID</label>
                            <input type="text" name="id_type" id="">
                            @error('id_type')
                                <div class="is-invalid">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mini-box">
                            <label for="Id">N&uacute;mero de ID</label>
                            <input type="text" name="id_number" id="">
                            @error('id_number')
                                <div class="is-invalid">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="second-line">
                        <div class="mini-box">
                            <label for="">N&uacute;mero de tel&eacute;fono</label>
                            <input type="text" name="phone" id="">
                            @error('phone')
                                <div class="is-invalid">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mini-box">
                            <label for="">Email</label>
                            <input type="text" name="email" id="">
                            @error('email')
                                <div class="is-invalid">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="fifth-line">
                        <input type="button" value="Agregar otra deuda +" id="other_debts">
                        <input type="submit" value="Enviar">
                    </div>

                    <h3>Datos de deudas</h3>

        <div class="deudas">
            <div id="div-debts" style="margin-bottom: 1rem;">
                <div class="third-line">
                        <div class="mini-box">
                            <label for="Banco">Banco</label>
                            <select name="bank[]" id="">
                                <option value="bank_first">Banco 1</option>
                                <option value="bank_second">Banco 2</option>
                                <option value="bank_third">Banco 3</option>
                                <option value="bank_fourth">Banco 4</option>
                            </select>
                        </div>
                        <div class="mini-box">
                            <label for="Tipo-credito">Tipo de cr&eacute;dito</label>
                            <select name="type_credit[]" id="">
                                <option value="credit_one">Credito 1</option>
                                <option value="credit_twoe">Credito 2</option>
                                <option value="credit_three">Credito 3</option>
                                <option value="credit_four">Credito 4</option>
                            </select>
                        </div>
                        <div class="mini-box">
                            <label for="Dias-mora">D&iacute;as de mora</label>
                            <select name="past_due[]" id="">
                                <option value="60">60</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option>
                            </select>
                        </div>
                        <div class="mini-box">
                            <label for="Id">Monto deuda</label>
                            <input type="text" name="amount[]" id="">
                        </div>
                    </div>
                    <div class="fourth-line">
                        <div class="mini-box">
                            <label for="Id">Numero de producto</label>
                            <input type="text" name="product_number[]" id="">
                        </div>
                    </div>
                </div>
            </div>
                </form>
                <div class="logo-box">
                    <div class="logo-container">
                        <p>Logo</p>
                    </div>
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
        let modal = document.getElementById('modals');
        let openBtn = document.getElementById('openModal');

        modal.style.display = 'none';

        closeBtn.addEventListener('click', function(){
            modal.style.display = 'none';
        });

        openBtn.addEventListener('click', function(){
            modal.style.display = 'block';
        });

        document.getElementById('other_debts').onclick = duplicate;
        var i = 0;
        var original = document.getElementById('div-debts');
        function duplicate() {
        var clone = original.cloneNode(true);
        clone.id = "div-debts" + ++i;
        original.parentNode.appendChild(clone);
    }
    </script>
</body>
</html>

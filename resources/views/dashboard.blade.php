<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Credito</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            min-height: 100%;
        }

        body{
            background-color:#323f53;
        }

        .menu-section{
            width: 100vw;
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 9vh;
        }

        .logo-container{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 5rem;
            height: 6vh;
            border: 1px solid white;
        }

        h1{
            text-transform: uppercase;
            color: white;
            font-size: 1rem;
        }

        .content-section{
            background-color: white;
            height: 100vh;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            overflow-x: hidden;
        }

        .first-boxes{
            display: flex;
            margin:0 10px;
        }

        .box{
            border: 1px solid gray;
            width: 50%;
            margin: 10px 5px;
            padding: 5px;
            border-radius: 5px;
            color: #f7f6f9;
        }

        .box p, .text-perfil p{
            font-size: 12px;
            font-weight: lighter;
        }

        .vida{
            background-color: #652d91;
            cursor: pointer;
        }

        .soluciones{
            color: #46546a;
            cursor: pointer;
        }

        .perfil-box{
            display: flex;
            margin: 5px 10px;
        }

        .text-perfil{
            margin-left: 10px;
        }

        .text-perfil h5{
            color: #3c4b62;
        }

        .piloto-word{
            color: #f7992a;
            margin: 0 10px;
        }

        .circle-box{
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            align-items: center;
            margin-top: 1rem;
        }

        .circle{
            width: 100px;
            height: 100px;
            background-color: #652d91;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .white-circle{
            width: 110px;
            height: 110px;
            background-color: rgb(255, 255, 255);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .color-circle{
            background-color: rgb(60,140,203);
            background: linear-gradient(90deg, rgba(60,140,203,1) 0%, rgba(143,122,181,1) 50%, rgba(223,71,147,1) 100%);
            border-radius: 50%;
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 1rem 0;
        }

        .number-white{
            color: white;
            font-size: 30px;
        }

        .orange-box{
            background-color: #f7992a;
            width: 13rem;
            text-align: center;
            padding: 5px 10px;
            color: white;
        }

        .recomendaciones-box{
            margin: 1rem .5rem;
        }

        .recomendaciones-box h5, .deudas-box h5, .progress-box h5, .text-box h5{
            text-align: center;
            font-size: 16px;
            color: #3e4c63;
            font-weight: bold;
        }

        .recomendaciones-box .first-line, .recomendaciones-box .sec-line{
            display: flex;

        }

        .info-box{
            display: flex;
            font-size: 11px;
            margin: 1rem;
            color: #404e65;
            width: 120px;
            align-items: center;
        }

        .info-box p{
            margin-left: 10px;
        }

        .deudas-box{
            margin: 1rem 0.5rem 0 0.5rem;
        }

        .deudas-box h5{
            text-align: center;
        }

        .prestamo-box{
            display: flex;
            align-items: center;
            background-color: #3c4b62;
            width: 50%;
            justify-content: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            color: white;
            margin: 1rem 0 0 0;
            height: 30px;
            font-size: 18px;
        }

        .prestamo-box h6{
            margin-right: 10px;
        }

        .boxes-container{
            display: flex;

        }

        .estado-box{
            width: 50%;
            font-size: 12px;
            background-color: #f7992a;
            height: 25px;
            margin: 5px 5px 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            color: #414d60;
        }

        .acuerdo-box{
            width: 50%;
            font-size: 12px;
            background-color: #d1d2d4;
            height: 25px;
            margin: 5px 0 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            font-weight: bold;
            color: #414d60;
        }

        .atrazado{
            font-weight: bold;
        }

        .mini-text-box{
            margin: 0 0.5rem;
            border: 1px solid grey;
            height: 280px;
        }

        .container{
            display: flex;
            justify-content: space-around;
            width: 100%;
            text-align: center;
            height: 50px;
            color: #46556a;
            font-size: 12px;
            align-items: center;
        }

        .bold{
            font-weight: bold;
        }

        .horizontal-box{
            display: flex;
            font-size: 12px;
            justify-content: space-around;
            color: #414d60;
        }

        .progress-box{
            margin: 1rem 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .progress-bar{
            display: flex;
            align-items: center;
            background: rgb(0,212,255);
            background: linear-gradient(90deg, rgba(0,212,255,1) 0%, rgba(255,0,208,1) 100%);
            border-radius: 5px;
            height: 25px;
            font-size: 12px;
            color: white;
            font-weight: bold;
            width: 250px;
            justify-content: space-around;
            margin: 1rem 0 0 0;
        }

        .star{
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
            width: 60px;
            height: 60px;
            background-color: yellow;
            position: absolute;
            right: 0;
            top: 10px;
            font-size: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .progress-box .tiny{
            font-size: 8px;
            margin-top: 0;
            color: #455368;
            margin-top: 5px;
        }

        .progress-box .long{
            text-align: center;
            margin: 1rem 1rem;
            font-size: 12px;
            color: #455368;
        }

        .gradient-box{
            margin: 0 0.5rem;
            background: rgb(216,191,216);
            background: linear-gradient(0deg, rgba(216,191,216,1) 0%, rgba(223,239,253,1) 38%);
            padding: 1rem 0 0 0;
            height: auto;
        }

        .text-box{
            text-align: center;
        }

        .text-box p{
            color: #5f6d7f;
        }

        .blue-circle {
            height: 100px;
            border-radius: 50%;
            border: 3px solid #58677c;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100px;
        }

        .blue-circle span{
            font-size: 24px;
        }

        .blue-circle p{
            font-size: 12px;
            text-align: center;
        }

        .flex-container{
            display: flex;
            margin: 1rem 0 0 0;
        }

        .circles-container{
            display: flex;
            flex-wrap: wrap;
            width: 105px;
            height: 160px;
            margin: 1rem;
        }

        .little-circle{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            color: white;
        }

        .purple{
            background-color: #652d91;
        }

        .green{
            background-color: #8bc63e;
        }

        .orange{
            background-color: #fbb03f;
        }

        .recom-box{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 1rem;
            width: 70%;
        }

        .recom-box h6, .cuotas-box h6{
            font-size: 16px;
            color: #3c4b62;
        }

        .text-circle-box{
            text-align: center;
            font-size: 12px;
            color: #3c4b62;
        }


        .cuotas-box{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            margin: 1rem 10px 1rem 10px;
            height: 200px;
            width: 45%;
        }

        .last-container{
            display: flex;
            justify-content: center;
        }

        .big-circle{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            color: white;
        }

        .big-circle span{
            font-size: 30px;
        }

        .last{
            margin-bottom: 50px;
        }

        .menu{
            display: flex;
            flex-direction: column;
        }

        .menu nav{
            position: absolute;
            background-color: #323f53;
            width: 230px;
            height: 100vh;
            top: 54px;
            right: 0;
        }

        nav ul{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            margin: 1rem;
            height: 150px;
        }

        nav ul li{
            list-style: none;

        }

        nav ul li a{
            color: white;
            text-decoration: none;
        }

        .menu-text{
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 1rem;
            height: 150px;
            color: white;
        }

        .menu-text h5{
            margin: 1rem 0;
            color: white;
            font-size: 20px;
        }

        .menu-section button{
            background-color: transparent;
            width: 2rem;
            height: 2rem;
            border: none;
        }

        .menu-section button:active{
            transform: translateY(3px);
        }

        .menu-web{
            display: none;
        }

        .container-number-cuotas{
            width: 40%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .soluciones-financieras-web{
            display: none;
        }


        @media only screen and (min-width: 375px) {

            .perfil-box {
                display: flex;
                margin: 2rem;
                align-items: center;
            }

            .recomendaciones-box {
                margin: 2rem;
            }

            .info-box {
                display: flex;
                font-size: 14px;
                margin: 1rem 0;
                width: auto;
                align-items: center;
                justify-content: center;
            }

            .star {
                right: 14px;
                top: 10px;
            }


            .text-box {
                margin: 0 1rem;
            }

            .text-circle-box {
                font-size: 14px;
            }

            .recomendaciones-box h5, .deudas-box h5, .progress-box h5, .text-box h5 {
                font-size: 18px;
            }
        }

        @media only screen and (min-width: 425px){
            .recomendaciones-box h5, .deudas-box h5, .progress-box h5, .text-box h5 {
                font-size: 20px;
            }

            .text-perfil {
                margin-left: 1rem;
                font-size: 20px;
            }

            .text-perfil p {
                font-size: 14px;

            }

            .circle-box h4{
                font-size: 18px;
            }

            .circle {
                width: 120px;
                height: 120px;
            }

            .white-circle {
                width: 130px;
                height: 130px;
            }

            .color-circle {
                width: 140px;
                height: 140px;
            }

            .orange-box {
                width: 15rem;
                font-size: 18px;
            }

            .container,
            .horizontal-box,
            .progress-box .long {
                font-size: 14px;
            }

            .progress-box .tiny {
                font-size: 12px;
            }

            .star {
                width: 80px;
                height: 80px;
                right: 25px;
                top: 0;
                font-size: 10px;
            }

            .prestamo-box {
                font-size: 20px;
            }

            .estado-box, .acuerdo-box {
                font-size: 14px;
            }



            .menu nav {
                width: 290px;
            }

        }

        @media only screen and (min-width: 768px){

            .menu-web{
                height: 100vh;
                width: 250px;
                background-color: #323f53;
                display: block;
                grid-area: menu;
            }

            .menu-section {
                display: none;
            }

            body{
                display: grid;
                grid-template-areas: "menu content";
            }

            ul h5{
                margin: 1rem 0;
                color: white;
                font-size: 15px;
            }

            li a span:nth-child(2){
                margin-left: 5px;
            }

            .center-container{
                height: 100px;
                display: flex;
                justify-content: center;
                align-items: flex-end;
            }

            .logo-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 8rem;
                height: 9vh;
                border: 1px solid white;
            }

            .menu-text {
                height: 100px;
            }

            .last-part-menu{
                width: 100%;
                margin-top: 20px;
                display: flex;
                flex-direction: column;

            }

            .exit{
                width: 30px;
                height: 30px;
                background-color: white;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-right: 10px;
                font-size: 12px;
                color: #323f53;
            }

            .exit-box{
                width: 100%;
                display: flex;
                justify-content: end;
            }

            .hello-box{
                width: 100%;
                display: flex;
                align-items: center;
                padding: 1rem 0;
            }

            .blue-help-circle{
                width: 50px;
                max-width: 50px;
                height: 1rem;
                background-color: blue;
                margin: 0 1rem;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                font-size: 12px;
            }

            .hello-content{
                width: auto;
                font-size: 12px;
                background-color: #e1e1e5;
                margin: 0 10px 0 0;
                color: gray;
                border-radius: 5px;
                padding: 1rem 1rem;

            }

            .hello-content p{
                margin-bottom: 10px;
            }

            .answer-box{
                width: 100%;
                display: flex;
                align-items: center;
                background-color: transparent;
                display: flex;
                justify-content: end;
            }


            .answer{
                background-color: #bdd3e0;
                width: 75%;
                margin: 0 10px 0 0;
                height: 30px;
                display: flex;
                align-items: center;
                color: gray;
                border-radius: 5px;
                font-size: 12px;
                padding: 1rem 1rem;
            }


            .grid-box {
                display: grid;
                grid-template-columns: 300px 150px;
            }

            .perfil-box {
                margin: 1rem;
            }

            .orange-box {
                width: 14rem;
            }

            .info-box {
                margin: 20px;
            }

            .container, .horizontal-box, .progress-box .long {
                font-size: 15px;
            }

            .text-circle-box {
                margin: 0 1rem;
            }

            .soluciones{
                display: none;
            }

            .vida {
                background-color: transparent;
                cursor: none;
                color: #323f53;
                border: none;
                font-size: 30px;
            }

            .progress-bar {
                height: 25px;
                font-size: 20px;
                width: 380px;
            }

        }

        /* @media only screen and (min-width: 1440px){
            body{
                display: grid;
                grid-template-areas: "menu vida soluciones";
                grid-template-columns: 1fr 2fr 2fr;
            }

            .content-section{
                grid-area: vida;
            }

            .grid-box {
                display: grid;
                grid-template-columns: 300px 150px;
                justify-content: space-around;
            }
        } */

        @media only screen and (min-width: 1024px){

            .grid-box {
                display: grid;
                grid-template-columns: 400px 180px;
                justify-content: space-around;
            }

            .text-perfil {
                margin-left: 1rem;
                font-size: 26px;
            }

            .text-perfil p {
                font-size: 16px;
            }

            .vida {
                font-size: 40px;
            }

            .box p, .text-perfil p {
                font-size: 18px;
            }

            .info-box p {
                margin-left: 10px;
                font-size: 20px;
            }

            .recomendaciones-box h5, .deudas-box h5, .progress-box h5, .text-box h5 {
                font-size: 25px;
            }

            .container, .horizontal-box, .progress-box .long {
                font-size: 20px;
                margin-bottom: 1rem;
            }

            .mini-text-box {
                height: 380px;
            }

            .progress-bar {
                height: 30px;
                font-size: 20px;
                width: 580px;
            }

            .progress-box .tiny {
                font-size: 16px;
            }

            .grid-auto-columns {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
                /* align-content: center; */
                /* justify-content: center; */
                align-items: center;
                justify-items: center;
            }

            .container-number-cuotas {
                width: 50%;
            }

            .recom-box {
                width: 50%;
            }

            .text-circle-box {
                font-size: 18px;
            }

            .big-circle {
                width: 90px;
                height: 90px;
            }

            .blue-circle {
                height: 150px;
                width: 150px;
            }

            .blue-circle p {
                font-size: 18px;
            }

            .blue-circle span {
                font-size: 45px;
            }

            .recom-box h6, .cuotas-box h6, .text-box p {
                font-size: 20px;
            }

            .prestamo-flex-box {
                display: flex;
                align-items: center;
            }

            .prestamo-flex-box .estado-box, .prestamo-flex-box .acuerdo-box {
                display: flex;
                align-items: center;
                width: 200px;
                justify-content: center;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                height: 30px;
                margin-top: 1rem;
            }

            .prestamo-box {
                width:200px;
                margin-right: 10px;
                margin-left: 10px;
            }

            .prestamo-flex-box .acuerdo-box{
                margin-left: 5px;
            }
        }

    </style>
</head>
<body>
<section class="menu-section">
    <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="white" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
    <div class="logo-container">
        <h1>Logo</h1>
    </div>
    <button>
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
            <p class="bold">Francisco Ramirez Cardona</p>
            <p>francardona@gmail.com</p>
        </div>



        <ul>
            <h5>Men&uacute;</h5>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Life Board</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Mis Datos</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Mi Historial</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Certificados</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Empleo</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Educaci&oacute;n Financiera</span>
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
            <p>¡Hola!</p>
            <p class="bold">Francisco Ramirez Cardona</p>
            <p>francardona@gmail.com</p>
        </div>


        <ul>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Life Board</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Mis Datos</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Mi Historial</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Certificados</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Empleo</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>icon</span>
                    <span>Educaci&oacute;n Financiera</span>
                </a>
            </li>
        </ul>
    </nav>
</section>

<section class="content-section">

    <div class="first-boxes">
        <div class="vida box">
            <h5>Vida Financiera</h5>
            <p>Estado de deudas y perfil financiero en el sector</p>
        </div>

        <div class="soluciones box">
            <h5>Soluciones Financieras</h5>
            <p>Beneficios, posibilidades de pago y cr&eacute;dito</p>
        </div>
    </div>

    <div class="grid-box">
        <div class="perfil-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="rgb(153,121,179)" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
            <div class="text-perfil">
                <h5>Perfil Financiero: <span class="piloto-word">Piloto</span></h5>
                <p>
                    Sueñas con llegar m&aacute;s alto pero tus ingresos
                    y las deudas actuales no te lo permiten. Te brindaremos soluciones
                    financieras que le den aire a tus deudas y te permitan volar directo a tus sueños.
                </p>
            </div>
        </div>

        <div class="circle-box">
            <h4>Score Datacr&eacute;dito</h4>
            <div class="color-circle">
                <div class="white-circle">
                    <div class="circle">
                        <span class="number-white">450</span>
                    </div>
                </div>
            </div>
            <div class="orange-box">
                <p>¿Qu&eacute; significa este puntaje?</p>
            </div>
        </div>
    </div>

    <div class="recomendaciones-box">
        <h5>Recomendaciones para mejorar tu perfil</h5>

        <div class="first-line">
            <div class="info-box">
                <svg width="80" height="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="gray" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <p>Llega a un acuerdo r&aacute;pido con tus deudas para evitar reportes.</p>
            </div>

            <div class="info-box">
                <svg width="80" height="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="gray" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <p>Unifica tus deudas en una sola para mayor control financiero.</p>
            </div>
        </div>

        <div class="sec-line">
            <div class="info-box">
                <svg width="80" height="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="gray" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <p>Disminuye gastos y estiumla el ahorro, nosotros te ens&eacute;ñamos.</p>
            </div>

            <div class="info-box">
                <svg  width="80" height="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="gray" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <p>Abona a capital o vende tu cartera, tenemos la mejor taza del sector.</p>
            </div>
        </div>
    </div>

    <div class="deudas-box">
        <h5>Tus deudas con nosotros</h5>
        <div class="prestamo-box">
            <h6>Pr&eacute;stamo Bancario</h6>
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="orange" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
        </div>

        <div class="boxes-container">
            <div class="estado-box">
                <p>Estado: <span class="atrazado">Atrazado 120 d&iacute;as</span></p>
            </div>

            <div class="acuerdo-box">
                <p>Sin acuerdo con nosotros</p>
            </div>
        </div>
    </div>

    <div class="mini-text-box">
        <div class="banc container">
            <div class="banc">
                <p class="bold">Banco</p>
                <p>BBVA</p>
            </div>

            <div class="monto">
                <p class="bold">Monto pr&eacute;stamo</p>
                <p>$64.000.000</p>
            </div>

            <div class="cuotas">
                <p class="bold">N* Cuotas</p>
                <p>120</p>
            </div>
        </div>

        <div class="monto container">
            <div class="banc">
                <p class="bold">Monto pagado</p>
                <p>$34.000.000</p>
            </div>

            <div class="monto">
                <p class="bold">Cuotas pagadas</p>
                <p>55</p>
            </div>

            <div class="cuotas">
                <p class="bold">Cuotas atrazadas</p>
                <p>4</p>
            </div>
        </div>

        <div class="horizontal-box">
            <p><span class="bold">Fecha de pr&oacute;ximo: </span>00/00/2022</p>
            <p><span class="bold">Monto a pagar:</span>$1.300.000</p>
        </div>

        <div class="progress-box">
            <h5>Cumplimiento</h5>

            <div class="progress-bar">
                <span>20%</span>
                <span>40%</span>
                <span>60%</span>
                <span>80%</span>
                <span>100%</span>
            </div>

            <div class="star">
                <span class="bold">120</span>
                <span>cuotas</span>
            </div>

            <p class="bold tiny">55 cuotas a pagar</p>

            <p class="bold long">Est&aacute;s a la mitad de tu conquista, no te rindas, te ayudaremos con las mejores alternativas para que sigas cumpliendo.</p>
        </div>
    </div>


    <div class="gradient-box">

        <div class="text-box">
            <h5>Recompensas por cumplimiento</h5>
            <p>Al realizar un acuerdo con nosotros te damos beneficios por estar al d&iacute;a.</p>
        </div>

        <div class="grid-auto-columns">
            <div class="flex-container">

                <div class="container-number-cuotas">
                    <div class="blue-circle">
                        <span class="bold">55</span>
                        <p>Cuotas hasta la fecha</p>
                    </div>
                </div>

                <div class="recom-box">
                    <h6>Recompensa</h6>

                    <div class="circles-container">
                        <div class="little-circle purple">
                            <p>Cuota</p>
                            <span class="bold">63</span>
                        </div>
                        <div class="little-circle green">
                            <p>Cuota</p>
                            <span class="bold">76</span>
                        </div>
                        <div class="little-circle orange">
                            <p>Cuota</p>
                            <span class="bold">84</span>
                        </div>
                        <div class="little-circle purple purple-second">
                            <p>Cuota</p>
                            <span class="bold">63</span>
                        </div>
                        <div class="little-circle green green-second">
                            <p>Cuota</p>
                            <span class="bold">63</span>
                        </div>
                    </div>

                    <div class="text-circle-box">
                        <span class="bold">Mitad de cuota</span>
                        <p>cumpliendo sin faltar a una cuota, recibe un descuento del 50% en estas cuotas, el resto lo pagamos nosotros. </p>
                    </div>
                </div>
            </div>

            <div class="flex-container">

                <div class="cuotas-box">
                    <h6>Recompensa</h6>
                    <div class="big-circle green">
                        <span class="bold">90</span>
                        <p>Cuotas</p>
                    </div>
                    <div class="text-circle-box">
                        <span class="bold">Disminuci&oacute;n de % interes</span>
                        <p>Creemos en ti y queremos que sigas cumpliendo, gana una disminuci&oacute;n en el inter&eacute;s de 0.5%</p>
                    </div>
                </div>

                <div class="cuotas-box">
                    <h6>Recompensa</h6>
                    <div class="big-circle purple">
                        <span class="bold">100</span>
                        <p>Cuotas</p>
                    </div>
                    <div class="text-circle-box">
                        <span class="bold">Cuota libre</span>
                        <p>Por cumplimiento en estas cuotas sin faltar, tu monto de pago es de $0 pesos.</p>
                    </div>
                </div>

            </div>

            <div class="last-container">
                <div class="cuotas-box">
                    <h6>Recompensa</h6>
                    <div class="big-circle orange">
                        <span class="bold">108</span>
                        <p>Cuotas</p>
                    </div>
                    <div class="text-circle-box">
                        <span class="bold">Cr&eacute;dito al instante</span>
                        <p>Por tu cumplimiento te ofrecemos un cr&eacute;dito hasta de $200.000 pesos.</p>
                    </div>
                </div>
            </div>




        </div>



    </div>

    <div class="prestamo-flex-box">
        <div class="prestamo-box">
            <h6>Pr&eacute;stamo veh&iacute;culo</h6>
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="orange" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
        </div>

        <div class="boxes-container">
            <div class="estado-box green">
                <p>Estado: <span class="atrazado">Al d&iacute;a 0 d&iacute;as</span></p>
            </div>

            <div class="acuerdo-box">
                <p>Sin acuerdo con nosotros</p>
            </div>
        </div>
    </div>

    <div class="last prestamo-flex-box">
        <div class="prestamo-box">
            <h6>Pr&eacute;stamo tarjetas</h6>
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="orange" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
        </div>

        <div class="boxes-container">
            <div class="estado-box green">
                <p>Estado: <span class="atrazado">Al d&iacute;a 0 d&iacute;as</span></p>
            </div>

            <div class="acuerdo-box">
                <p>Sin acuerdo con nosotros</p>
            </div>
        </div>
    </div>

</section>

<section class="soluciones-financieras-web">
    <p>Hola</p>
</section>

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


</script>

</body>
</html>

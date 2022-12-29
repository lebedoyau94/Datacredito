<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .recomendaciones-box h5, .deudas-box h5{
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
            margin: 1rem 0.5rem;
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
            font-weight: bold;
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
        }
    </style>
</head>
<body>
    <section class="menu-section">
        <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="white" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
        <div class="logo-container">
            <h1>Logo</h1>
        </div>
        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="white" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
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
                    <p>Estado: Atrazado 120 d&iacute;as</p>
                </div>

                <div class="acuerdo-box">
                    <p>Sin acuerdo con nosotros</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
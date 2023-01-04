<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
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
                    <form class= "logout" action="{{route('index1')}}" method="POST">
                        @csrf
                    <input type="submit" value="Logout">
                </div>
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
                        y las deudas actuales no te lo permiten. <br>Te brindaremos soluciones
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

        <div class="recommed-box"
        <h5>Recomendaciones para mejorar tu perfil</h5>
        </div>
        <div class="recomendaciones-box">

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
                <div class="flex-container1">

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
                            <p class="leyendas">cumpliendo sin faltar a una cuota, recibe un descuento del 50% en estas cuotas, el resto lo pagamos nosotros. </p>
                        </div>
                    </div>
                </div>

                <div class="flex-container2">

                    <div class="cuotas-box">
                        <h6>Recompensa</h6>
                        <div class="big-circle green">
                            <span class="bold">90</span>
                            <p>Cuotas</p>
                        </div>
                        <div class="text-circle-box">
                            <span class="bold">Disminuci&oacute;n de % interes</span>
                            <p class="leyendas">Creemos en ti y queremos que sigas cumpliendo, gana una disminuci&oacute;n en el inter&eacute;s de 0.5%</p>
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
                            <p class="leyendas"p>Por cumplimiento en estas cuotas sin faltar, tu monto de pago es de $0 pesos.</p>
                        </div>
                    </div>

                
                    <div class="cuotas-box">
                        <h6>Recompensa</h6>
                        <div class="big-circle orange">
                            <span class="bold">108</span>
                            <p>Cuotas</p>
                        </div>
                        <div class="text-circle-box">
                            <span class="bold">Cr&eacute;dito al instante</span>
                            <p class="leyendas">Por tu cumplimiento te ofrecemos un cr&eacute;dito hasta de $200.000 pesos.</p>
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

        <div class="content2">
            Aca va el contenido 2
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

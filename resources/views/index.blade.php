<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio | Credito</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
		<style>
			  body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            width: 100vw; 
            height: 100vh; 
            background-image: url('https://cdn.glitch.global/4796cf83-89b2-4901-b670-e7515e355baf/girl-is-jumping.jpg?v=1671237362508');  
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;
						font-family: 'Roboto', sans-serif;
						background-color: #cfebf9;

        }

        .curtain{
            background: rgb(216,191,216);
            background: linear-gradient(0deg, rgba(216,191,216,1) 0%, rgba(223,239,253,1) 38%);
            width: 100vw; 
            height: 100vh; 
            position: absolute; 
            opacity: .8; 
            z-index: -4;
            top: 0;
            clip-path: polygon(91% 0, 83% 13%, 77% 27%, 72% 45%, 71% 64%, 75% 79%, 81% 90%, 90% 100%, 0 100%, 0 0);        
        }

        .text-container{
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            margin-top: 1rem;
            width: 100vw; 
            height: 100vh;
        }
				.logo{
            border: 3px solid white;
            margin: 50px 0;
            width: 200px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            color: white;
						text-transform: uppercase;
        }

        /*.logo-container{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 13rem; 
            height: 12vh; 
            border: 3px solid white;
				}*/

        h1{
            text-transform: uppercase;
            color: white;
            font-size: 2rem;
        }

        .title-container{
            text-align: center;
        }

        h2{
            color: #262650;
            letter-spacing: .5;
            font-size: 30px;
            margin-bottom: 1rem;
            height: 4rem;
        }

        p{
            color: #00001f;
            font-size: 15px;
        }

        .text{
            text-align: center;
            margin: -5px 2rem;
        }

        .btn-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 200px;
            height: 120px;
        }

        input[type=text]{
            width: inherit;
            padding: 20px 40px;
            height: 10px;
            border-radius: 20px;
            border: none;
            margin: 5px 0;
        }

        input[type=button]{
            height: 40px;
            border-radius: 20px;
            border: none;
            margin: 5px 0;
            padding: 5px 25px;
            color: white;
            background-color:  #262650;
        }

        .last-line{
            margin-top: 10px;
            color:  #262650;;
        }
				p {
            color: #314961;
            font-size: 15px;
        }



    </style>
</head>
<body>

    <div class="curtain"></div>
    

        <section class="text-container">
            
            <section class="logo">
                <p>Logo</p>
            </section>

            <section class="title-container">
                <h2>Felicidad es <br> vivir sin deudas</h2>
            </section>

            <section class="text">
                <p>Descubre opciones y facilidades de pago para tus deudas actuales.</p>
            </section>

            <section class="text">
                <p>Conoce tu estado financiero, puntaje en datacrédito y recompensas por tus pagos.</p>
            </section>

            <section class="text">
                <p>Aprende de educación financiera y te ayudamos a conseguir un empleo.</p>
            </section>

            <section class="btn-container">
                <input type="text" placeholder="Ingresa con tu número de cédula">
                <input type="button" value="Ingresar">
            </section>

            
            <section class="last-line">
                <i>Recupera tu vida financiera</i>
            </section>
        </section>

</body>
</html>

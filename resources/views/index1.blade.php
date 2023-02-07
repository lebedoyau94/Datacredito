<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio | Credito</title>
    <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
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
            background-image: url('/assets/img/index.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
			font-family: 'Rubik', sans-serif;
			background-color: #cfebf9;

        }

        .curtain{
            background: rgb(170,234,255);
            background: linear-gradient(127deg, rgba(170,234,255,1) 61%, rgba(179,175,240,0.9564138691077072) 80%);
            width: 100vw;
            height: 100vh;
            position: absolute;
            opacity: .8;
            z-index: -4;
            top: 0;
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

        input[type=submit]{
            height: 40px;
            border-radius: 20px;
            border: none;
            margin: 5px 0;
            padding: 5px 25px;
            color: white;
            background-color:  #262650;
            cursor: pointer;
            margin-left: 15px;
        }

        .last-line{
            margin-top: 10px;
            color:  #262650;;
        }
				p {
            color: #314961;
            font-size: 15px;
        }
		.mt-5 {
            margin-top: 100px;
        }
        .mt-3 {
            margin-top: 60px;
            text-align: center;
            padding-right: 140px;
        }
        .mt-2 {
            margin-top: 40px;
        }
        .mt-1 {
            margin-top: 20px;
        }
        .first-sec {
            margin-top: 250px;
            margin-left: 200px;
            margin-bottom: 250px;
        }
        .is-invalid {
            color: red;
            font-size: small;
        }
        .container-p{
        width: 80%;
        }
        .container-l{
        width: 80%;
        display: flex;
        align-items: center;
        flex-direction: column;
        }
        @media only screen and (min-width: 600px) {
            .curtain{
            background: linear-gradient(0deg, rgba(196,146,254,1) 0%, rgba(149,231,232,0.7931547619047619) 43%);
            width: 100vw;
            height: 100vh;
            position: absolute;
            opacity: .8;
            z-index: -4;
            top: 0;
            clip-path: circle(56.4% at 19% 48%);
                }
        }

        @media only screen and (max-width: 600px) {
            body{
                width: 100%;
                height: 100%;
                overflow-x: hidden;
                align-items: center;
            }

        .first-sec {
            margin-top: 20px;
            margin-left: 0px;
            margin-bottom: 0px;
            z-index: 10;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        h2{
            color: #262650;
            letter-spacing: .5;
            font-size: 30px;
            margin-bottom: 1rem;
			height: 4rem;
            text-align: start;
        }
        .logo{
            border: 3px solid white;
            margin: 50px 90px;
            width: 200px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            color: white;
			text-transform: uppercase;
        }
        .mt-3 {
            margin-top: 60px;
            text-align: center;
            padding-right: 0px;
        }

        .curtain{
                background: linear-gradient(127deg, rgba(170,234,255,1) 61%, rgba(179,175,240,0.9564138691077072) 80%);
                height: 136%;
                width: 100%;
        }

        .container-p{
            text-align: center;
        }

        .container-l{
            text-align: center;
        }

        .mt-1{
            align-items: center;
        }

        input[type="text"]{
            display: flex;
        }

        form {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

    }

    @media only screen and (min-width: 1200px) {

        input[type="submit"]{
            padding: 5px 35px;
            height: 45px;
            border-radius: 28px;
        }

        .container-p{
            width: 71%;
        }

        .first-sec{
            margin-left: 6rem;
        }

        input[type="text"]{
            width: 17rem;
            text-align: center;
        }
    }


    </style>
</head>
<body>

    <div class="curtain"></div>

		<section class="first-sec">
            <div class="container-l">
                <div class="logo">
                    <p>Logo</p>
                </div>
            </div>      
        <h2>Felicidad es <br> vivir sin deudas</h2>
        <div class="container-p">
			<p>Descubre opciones y facilidades de pago para tus deudas actuales. </p>
            <p>Conoce tu estado financiero, puntaje en datacrédito y recompesas por tus pagos. </p>
            <p>Aprende de educación financiera y te ayudamos a conseguir un empleo.</p>
        </div>
				<div class="mt-1">
					<form action="{{route('redirect.second')}}" method="POST">
						@csrf
                        <input type="text"
                                placeholder="Ingresa con tu celular"
                                name="phone"
                        >
						<input type="submit" value="Ingresar">
                        @error('phone')
                            <div class="is-invalid">{{ $message }}</div>
                        @enderror
					</form>
        </div>
        <p class="mt-3">Recupera tu vida financiera </p>
    </section>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oportunity | Credito</title>
    <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">

    <style>

        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            font-size: 62.5%;
        }

        html, body {
            min-height: 100%;
        }

        body{
            background: rgb(216,191,216);
            background: linear-gradient(0deg, rgba(216,191,216,1) 0%, rgba(223,239,253,1) 38%);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            width: 100vw;
        }


        .logo-box{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 22.0rem;
            height: 10.0rem;
            border: 3px solid white;
            color: white;
            text-transform: uppercase;
            font-size: 2.5rem;
            margin: 8.0rem 0 0 0;
        }

        .text-container{
            text-align: center;
            margin: 0 3.0rem 3.0rem 3.0rem;
            display: flex;
            flex-direction: column;
            height: auto;
            color: #334a64;
            width: 80%;
        }

        .text-container .title{
            margin: 2.0rem 0;
            font-size: 2.0rem;
        }

        .text-container .paragraph{
            font-size: 1.3rem;
        }

        .inputs-container{
            width: 80%;
            height: auto;
            display: flex;
            flex-direction: column;
        }

        .recomendado-box{
            width: 8.0rem;
            height: 2.0rem;
            margin: 0 2.5rem;
            background-color: #334a64;
            color: white;
            border: none;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        input[type=text]{
            background-color: transparent;
            border-radius: 5px;
            padding: 1.0rem;
            text-align: center;
            border: 2px solid #334a64;
        }

        .btn-link{
            background-color: transparent;
            border-radius: 5px;
            padding: 1.0rem;
            text-align: center;
            border: 2px solid #334a64;
            cursor: pointer;
        }

        .inputs-container .btn-link:nth-child(2){
            margin: 0rem 2.0rem;
        }

        .inputs-container .btn-link:nth-child(3){
            margin: 2.0rem 2.0rem;
        }


        @media only screen and (min-width: 768px) {

            .text-container .title {
                font-size: 3.0rem;
            }

            .text-container{
                margin: 0 3.0rem 3.0rem 3.0rem;
            }

            .text-container .paragraph {
                font-size: 2.0rem;
            }

            .inputs-container{
                width: 50%;
            }
        }

        @media only screen and (min-width: 1024px) {

            .text-container .title {
                font-size: 4.0rem;
            }

            .text-container .paragraph {
                font-size: 2.5rem;
            }

            .inputs-container{
                width: 50%;
            }

            .inputs-container{
                display: inline;
                justify-content: center;
                width: auto;
            }

            .inputs-container .btn-link:nth-child(2){
                width: auto;
                margin: 0rem 2.0rem;
                font-size: 2.0rem;
            }

            .inputs-container .btn-link:nth-child(3){
                width: auto;
                margin: 0rem 2.0rem;
                font-size: 2.0rem;
            }

            .recomendado-box {
                width: 10rem;
                height: 3.0rem;
                font-size: 1.5rem;
            }

            .btn-link{
                padding: 2.0rem;
            }
        }

        @media only screen and (min-width: 1440px){
            .text-container .title {
                font-size: 5.0rem;
            }

            .text-container .paragraph {
                font-size: 3.5rem;
            }

            .logo-box{
                width: 30.0rem;
                height: 13.0rem;
                font-size: 3.5rem;
            }

            .recomendado-box {
                width: 15rem;
                height: 4rem;
                font-size: 2.0rem;
            }


        }

    </style>
</head>
<body>

<section class="logo-box">
    <h1>Logo</h1>
</section>

<section class="text-container">
    <p class="title">¡Una oportunidad para ti!</p>
    <p class="paragraph">Actualmente no estamos administrando tus deudas, pero lo queremos hacer, registra tus datos y los de tus deudas para negociar la compra de tu cartera.</p>
</section>

<section class="inputs-container">
    <div class="recomendado-box">
        <span>Recomendado</span>
    </div>
    <button class="btn-link">
        <a  href="{{route('information.index')}}">
            Solicitar compra de cartera
        </a>
    </button>
    <button class="btn-link">
        <a  href="#">
            Continuar a página principal
        </a>
    </button>
    {{--<input type="text" value="Solicitar compra de cartera">
    <input type="text" value="Continuar a página principal">--}}
</section>

</body>
</html>

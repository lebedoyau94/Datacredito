<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Crédito</title>
    <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <style>

        .submit{
            margin: 1rem 0;
        }

        .text-container{
            color: #262650;
        }

        .third-sec p{
            margin-left: 10px;
        }

        .checkBox-container{
            margin: 0 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .terms-box{
            font-size: 10px;
            display: flex;
            justify-content: end;
            width: 20%;
            margin-top: -5px;
        }

        .terms-box a{
            text-decoration: none;
            color: #262650;
        }

        .second-sec{
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 18px;
            text-align: center;
            width: 35%;
        }

        .third-sec{
            text-align: start;
            font-size: 15px;
            color: #262650;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 1rem;
        }

        @media only screen and (min-width: 800px) {
        .question-container h3{
            width: 40%;
        }

        .third-sec p{
            width: 37%;
        }

        .logo-container{
            margin-top: 8rem;
        }
    }

        @media only screen and (max-width: 600px) {
            .percent{
            border: 3px solid #262650;
            width: 6rem;
            height: 3rem;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 25px;
            padding: 5px;
        }

        .second-sec{
            width: 90%;
        }

        .third-sec p {
            width: 100%;
        }

        .question-container h3{
            width: 90%:
        }

        .terms-box{
            width: 90%;
        }
    }

        .third-sec p{
            font-size: 23px;
        }

        .question-container{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .question-container h3{
            font-size: 23px;
        }

        .selection-container{
            display: flex;
            align-items: center;
            height: 60px;
            width: 100%;
            justify-content: center;
        }

        input[type=submit]{
            height: 45px;
            border-radius: 30px;
            width: 7rem;
            margin-left: 12px;
        }

        input[type=checkbox]{
            width: 30px;
            height: 30px;
            border: 4px solid #262650;
        }

        .checkBox-container label{
            font-size: 12px;
        }

        .is-invalid {
        color: red;
        font-size: small;
        display: flex !important;
        justify-content: center !important;
        }

        /* select */

        select {
            -webkit-appearance:none;
            -moz-appearance:none;
            -ms-appearance:none;
            appearance:none;
            outline:0;
            box-shadow:none;
            border:0!important;
            /* background: white; */
            background-image: none;
            flex: 1;
            padding: 0 .5em;
            color: #262650;
            cursor:pointer;
            font-size: 1em;
            font-family: 'Open Sans', sans-serif;
        }
        select::-ms-expand {
            display: none;
        }
        .select {
            position: relative;
            display: flex;
            width: 16em;
            height: 3em;
            line-height: 3;
            overflow: hidden;
            border-radius: 10px;
            color:  #262650;
        }
        .select::after {
            content: '\25BC';
            position: absolute;
            left: 0;
            padding: 0 1em;
            background: white;
            cursor:pointer;
            pointer-events:none;
            transition:.25s all ease;
            color:  #262650;
        }
        .select:hover::after {
            color:  #262650;
        }

        select { 
            direction: rtl; 
            text-align: center;
        }

        


        @media only screen and (min-width: 1200px) {
            .logo-container {
            margin-top: 3rem;
            margin-bottom: 1rem;
            }

            .third-sec p{
                font-weight: 600;
            }

            body{
                overflow: hidden;
            }

            .question-container h3{
                width: 52%;
            }

            .second-sec {
            font-size: 21px;
            text-align: center;
            font-weight: 900;
            width: 44%;
            }

            .percent {
            font-weight: 700;
            font-size: 43px;
            }

            select{
            width: 16rem;
            }

            .question-container h3 {
            font-size: 26px;
            font-weight: 700;
            width: 53%;
            }

            .submit{
                height: 43px;
            }
            
        }

    </style>
</head>
<body>
    <section class="text-container">

        <section class="logo-container">
            <h1>Logo</h1>
        </section>

        <section class="second-sec">
            <h2>Para brindarte las mejores soluciones y descuentos necesitamos conocerte</h2>
        </section>

        <section class="third-sec">
            <div class="percent">
                <span>20%</span>
            </div>
            <p>Responde una serie de preguntas y g&aacute;nate un descuento de hasta el 20% en tus deudas.</p>
        </section>


        <form action="{{route('redirect.fifth')}}" method="POST">
            @csrf
            <section class="question-container">
                <h3>¿C&uacute;al ha sido el motivo que le ha impedido continuar con sus pagos?</h3>
            </section>

            <section class="selection-container">


                <div class="select">
                    <select name="reason" id="">
                        <option value="" >Seleccione una opción</option>
                        <option value="none">Ninguno</option>
                        <option value="cash">Efectivo</option>
                        <option value="problem">Problemas</option>
                    </select>
                </div>

                @error('motive')
                <div class="is-invalid">{{ $message }}</div>
                @enderror
                <input type="submit" class="submit" value="Continuar">
            </section>

            <section class="checkBox-container">
                <input type="checkbox" type="checkbox" name="tyc">
                <label for="">Para continuar debes de aceptar t&eacute;rminos y condiciones</label><br>
            </section>

            @error('tyc')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
        </form>


        <section class="terms-box">
            <a href="">Ver t&eacute;rminos y condiciones</a>
        </section>
    </section>
</body>
</html>

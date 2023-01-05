<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Crédito</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <style>

        input[type=submit]{
            margin: 1rem 0;
        }

        .text-container{
            color: #262650;
        }

        .third-sec p{
            margin-left: 10px;
        }

        .checkBox-container{
            text-align: center;
            font-size: 15px;
            margin: 0 1rem;
        }

        .terms-box{
            font-size: 10px;
            display: flex;
            justify-content: end;
            width: 70%;
            margin-top: 10px;
        }

        .terms-box a{
            text-decoration: none;
            color: #262650;
        }

        .second-sec{
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 15px;
            text-align: center;
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
                <select id="" name="reason">
                    <option value="">Seleccione una opción</option>
                    <option value="none">Ninguno</option>
                    <option value="cash">Efectivo</option>
                    <option value="problem">Problemas</option>
                </select> <br>
                @error('motive')
                <div class="is-invalid">{{ $message }}</div>
                @enderror
                <input type="submit" value="Continuar">
            </section>
            <section class="checkBox-container">
                <input type="checkbox" type="checkbox" name="tyc">
                <label for="">Para continuar debes de aceptar t&eacute;rminos y condiciones</label><br>
                @error('active')
                <div class="is-invalid">{{ $message }}</div>
                @enderror
            </section>
        </form>


        <section class="terms-box">
            <a href="">Ver t&eacute;rminos y condiciones</a>
        </section>
    </section>
</body>
</html>

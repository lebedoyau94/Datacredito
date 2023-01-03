<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rango | Crédito</title>
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
            font-family: 'Roboto', sans-serif;
            background-color:  rgba(223,239,253,1);
        }

        .text-container{
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            margin-top: 1rem;
            width: 100vw;
            height: 100vh;
            color: #262650;
        }

        .percent-sec{
            text-align: start;
            font-size: 15px;
            color: #262650;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 1rem;
        }

        .logo-container{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 13rem;
            height: 12vh;
            border: 3px solid white;
        }

        h1{
            text-transform: uppercase;
            color: white;
            font-size: 2rem;
        }

        .percent{
            border: 3px solid #262650;
            width: 7rem;
            height: 7rem;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 35px;
            margin-right: 10px;
        }

        .question-container{
            text-align: center;
            margin: 0 1rem;
        }

        .question-container select{
            border: none;
            padding: 13px 30px;
            border-radius: 15px;
        }

        input[type=submit]{
            height: 35px;
            border-radius: 15px;
            border: none;
            margin: 1rem 10px;
            padding: 5px 25px;
            color: white;
            background-color:  #262650;
            font-weight: bold;
            cursor: pointer;
        }
        .btn-container{
            display: flex;
            width: 250px;
            height: 100px;
        }

        @media only screen and (max-width: 600px) {
            .percent{
            border: 3px solid #262650;
            width: 8rem;
            height: 3rem;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 25px;
        }
    }

    </style>
</head>
<body>
<form action="{{route('redirect.sixth')}}" method="POST">
    @csrf
    <section class="text-container">
    <section class="logo-container">
        <h1>Logo</h1>
    </section>
    <section class="percent-sec">
        <div class="percent">
            <span>5%</span>
        </div>
        <p>Gana este descuento en tus deudas respondiendo las siguientes preguntas</p>
    </section>
    <section class="question-container">
        <h3>¿C&uacute;al es su rango de ingresos actualmente?</h3>
        <select id="" name="income">
            <option value="">Seleccione una opción</option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
        </select>
        @error('income')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
    </section>
    <section class="question-container">
        <h3>¿De sus ingresos actuales cuánto puede destinar al pago de su deuda?</h3>
        <select id="" name="be_assigned">
            <option value="">Seleccione una opción</option>
            <option value="50">50</option>
            <option value="150">150</option>
            <option value="250">250</option>
        </select>
        @error('be_assigned')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
    </section>
    <section class="btn-container">
        <input type="submit" value="Continuar">
        <a href="{{route('login')}}">Omitir</a>
    </section>
    </section>
</form>
</body>
</html>

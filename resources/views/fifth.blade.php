<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Rango | Crédito</title>
            <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
            <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">  
            <style>

                .text-container{
                    color: #262650;
                }

                .percent-sec{
                    margin: 0 1rem;
                }

                .percent{
                    margin-right: 10px;
                }

                .submit{
                    margin: 1rem 10px;
                }

                @media only screen and (min-width: 800px) {

                .percent-sec p{
                    width: 34%;
                    font-size: 23px;
                }

                .grid-question{
                display: grid;
                grid-template-columns: repeat(2, minmax(300px, 355px));
                }

                .question-container {
                text-align: center;
                margin: 0 1rem;
                display: flex;
                flex-direction: column;
                }

                .question-container select{
                    padding: 13px 90px;
                }

                .logo-container{
                    width: 250px;
                    height: 90px;
                    margin-top: 8rem;
                }
            }

                @media only screen and (max-width: 600px) {
                    .percent{
                    border: 3px solid #262650;
                    width: 4rem;
                    height: 4rem;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-weight: bold;
                    font-size: 25px;
                }

                .percent-sec{
                    width: 100%;
                }

                .percent-sec p{
                    width: 40%;
                    font-size: 23px;
                }

                .question-container{
                    width: 100%;
                }

                .question-container h3{
                    width: 92%;
                    text-align: center;
                    font-size: 12px;
                }
            }

            @media only screen and (min-width: 1200px) {
                .logo-container{
                    margin-top: 4rem;
                    margin-bottom: 2rem;
                }

                .question-container{
                    align-self: end;
                }

                .percent-sec p{
                    font-weight: 600;
                }

                .question-container select{
                    padding: 13px 70px;
                }

                body{
                    overflow: hidden;
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
    <div class="grid-question">
    <section class="question-container">
        <h3>¿C&uacute;al es su rango de ingresos actualmente?</h3>
        <select id="question" name="income_range">
            <option value="">Seleccione una opción</option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
        </select>
        @error('income_range')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
    </section>
    <section class="question-container">
        <h3>¿De sus ingresos actuales cuánto puede destinar al pago de su deuda?</h3>
        <select id="" name="allocate_payment">
            <option value="">Seleccione una opción</option>
            <option value="50">50</option>
            <option value="150">150</option>
            <option value="250">250</option>
        </select>
        @error('allocate_payment')
            <div class="is-invalid">{{ $message }}</div>
        @enderror
    </section>
</div>
    <section class="btn-container">
        <input type="submit" class="submit" value="Continuar">
    </form>
    <form action="{{route('view.sixth')}}" method="GET">
        @csrf
        <input type="submit" class="submit" value="Omitir">
    </form>
    </section>
    </section>
</body>
</html>

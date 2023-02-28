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
            <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
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
                    font-family: 'Rubik';
                    font-size: 17px;
                }

                .question-container a {
                    height: 25px;
                    border-radius: 15px;
                    border: none;
                    padding: 5px 25px;
                    color: white;
                    background-color: #262650;
                    cursor: pointer;
                    margin: 1rem 10px;
                    width: 90px;
                    align-self: flex-start;
                    text-decoration: none;
                    align-content: center;
                    justify-content: center;
                    display: flex;
                    align-items: center;
                    font-weight: normal;
                    font-family: 'Rubik';
                }

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

                /* submit */

                input[type='submit']{
                    width: 150px;
                    align-self: end;
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

                .question-container {
                font-weight: bold;
                font-size: 20px;
                }

                .submit{
                    height: 42px;
                }
            }

            a{
                height: 25px;
                border-radius: 15px;
                border: none;
                padding: 5px 25px;
                color: white;
                background-color: #262650;
                cursor: pointer;
                margin: 1rem 10px;
                width: 46px;
                text-decoration: none;
                align-items: center;
                text-align: center;
                display: flex;
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

            <div class="select">
                <select id="question" name="income_range">
                    <option value="" >Seleccione una opción</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                    <option value="300">300</option>
                </select>
            </div>
            @error('income_range')
                <div class="is-invalid">{{ $message }}</div>
            @enderror
            <input type="submit" class="submit" value="Continuar">
        </section>
        <section class="question-container">
            <h3>¿De sus ingresos actuales cuánto puede destinar al pago de su deuda?</h3>

            <div class="select">
                <select id="question" name="allocate_payment">
                    <option value="" >Seleccione una opción</option>
                    <option value="50">50</option>
                    <option value="150">150</option>
                    <option value="250">250</option>
                </select>
            </div>
            @error('allocate_payment')
                <div class="is-invalid">{{ $message }}</div>
            @enderror
            <a href="{{route('view.sixth')}}">Omitir</a>
        </section>
    </div>
    </form>
    </section>
</body>
</html>

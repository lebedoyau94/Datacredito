<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sueño | Crédito</title>
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
                    margin: 2rem 2rem 0 2rem;
                }

                .percent{
                    margin-right: 10px;
                }

                .submit{
                    margin: 1rem 0;
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

                @media only screen and (max-width: 600px) {
                    .percent{
                    border: 3px solid #262650;
                    width: 5rem;
                    height: 3rem;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-weight: bold;
                    font-size: 25px;
                    margin-right: 10px;
                }
            }

            @media only screen and (min-width: 800px) {

                .second-sec {
                    font-size: 12px;
                    width: 25rem;
                }

                .percent-sec p{
                    font-size: 1.5rem;
                    width: 18rem;
                }

                .question-container {
                    font-size: 1.2rem;
                }


                .logo-container{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 13rem; 
                    height: 10vh; 
                    border: 3px solid white;
                    margin-top: 7rem;
                }
}
    </style>
</head>
<body>
<form action="{{route('dashboard.store')}}" method="POST">
    @csrf
    <section class="text-container">
        <section class="logo-container">
            <h1>Logo</h1>
        </section>
        <section class="percent-sec">
            <div class="percent">
                <span>5%</span>
            </div>
            <p>Obten este descuento adicional en tus deudas</p>
        </section>
        <section class="question-container">
            <h3>¿C&uacute;entanos c&uacute;al es tu sueño?</h3>

            <div class="select">
                <select name="dreams" id="">
                    <option value="">Seleccione una opción</option>
                    <option value="car">Carro</option>
                    <option value="home">Casa</option>
                    <option value="travel">Viaje</option>
                </select>
            </div>
            @error('dreams')
                <div class="is-invalid">{{ $message }}</div>
            @enderror
        </section>
        <section class="btn-container">
            <input type="submit" class="submit" value="Continuar">
        </section>
    </section>
</form>
</body>
</html>

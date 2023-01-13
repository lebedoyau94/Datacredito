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
            <select id="" name="dreams">
                <option value="">Seleccione una opción</option>
                <option value="car">Carro</option>
                <option value="home">Casa</option>
                <option value="travel">Viaje</option>
            </select>
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

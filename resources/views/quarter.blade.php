
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Crédito</title>
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

        .third-sec p{
            margin-left: 10px;
        }

        .percent{
            border: 3px solid #262650;
            width: 6rem;
            height: 6rem;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 35px;
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
            margin: 1rem 0;
            padding: 5px 25px;
            color: white;
            background-color:  #262650;
            font-weight: bold;
            cursor: pointer;
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

        
        
        <section class="question-container">
            <h3>¿C&uacute;al ha sido el motivo que le ha impedido continuar con sus pagos?</h3>
            {{-- <form action="{{route('fifth')}}" method="POST">
                @csrf --}}
            <select id="" name=""> 
                <option value="">Seleccione una opción</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select> <br>
       {{-- </form>--}}
            <form action="{{route('box')}}" method="POST">
                @csrf
            <input type="submit" value="Continuar">
        </form>
        </section>
    

        <section class="checkBox-container">
            <input type="checkbox" type="checkbox" name="active">
            </form>
            <label for="">Para continuar debes de aceptar t&eacute;rminos y condiciones</label>
        </section>

        <section class="terms-box">
            <a href="">Ver t&eacute;rminos y condiciones</a>
        </section>
    </section>
</body>
</html>
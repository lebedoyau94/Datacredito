
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        input[type=submit]{
            height: 35px;
            border-radius: 15px;
            border: none;
            margin: 1rem 0;
            padding: 5px 25px;
            color: white;
            background-color:  #262650;
            font-weight: bold;
        }

        .percent-sec{
            text-align: start;
            font-size: 15px;
            color: #262650;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 2rem;
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

        .upload-box{
            width: 16rem;
            max-width: 25rem;
            display: flex;
            justify-content: end;
            margin-bottom: 2rem;
            height: 110px;
        }

        .first-box, .sec-box{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        button{
            margin-top: 1rem;
            padding: 5px 20px;
            background-color: transparent;
            border: 2px solid #262650;
            color: #262650;
            font-weight: bold;
        }

        .second-sec{
            margin: 0 1rem;
            font-size: 12px;
        }

        .sec-box button{
            margin-top: 0;
        }

        .sec-box p{
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 16px;
            text-align: end;
        }

        .sec-box span{
            font-size: 8px;
            color: rgb(100, 100, 100);
            margin-top: 5px;
        }

        .first-box{
            width: 78px;
            margin-right: 8px;
        }

        .sec-box{
            width: auto;
            margin-left: 10px;
        }

        .first-box p{
            text-transform: uppercase;
            margin-bottom: 10px;
            color: rgb(100, 100, 100);
            text-align: start;
        }

        .first-box span{
            font-size: 10px;
            text-align: end;
            margin-top: 0;
            font-weight: bold;
        }

        form{
            display: flex;
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
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <section class="text-container">
            
        <section class="logo-container">
            <h1>Logo</h1>
        </section>

        <section class="percent-sec">
            <div class="percent">
                <span>10%</span>
            </div>
            <p>Obten este descuento adicional en tus deudas</p>
        </section>

        <section class="second-sec">
            <h2>Adjunta una imagen o pdf de tu &uacute;ltimo recibo de electricidad y agua</h2>
        </section>

        <section class="upload-box">            
            <form action="{{route('seventh')}}" method="POST">
                @csrf
            <div class="first-box">
                <p>Nombre archivo.</p>
                <span>Eliminar</span>
            </div>

            <div class="sec-box">
                <p>Recibo de electricidad</p>
                <button>Ajuntar archivo</button>
                <span>El formato no debe superar un peso de 3 mb</span>
            </div>
        </section>

        <section class="upload-box">
            <div class="first-box">
                <p>Nombre archivo.</p>
                <span>Eliminar</span>
            </div>

            <div class="sec-box">
                <p>Recibo de agua</p>
                <button>Ajuntar archivo</button>
                <span>El formato no debe superar un peso de 3 mb</span>
            </div>
        </section>


        <section class="btn-container">
            <input type="submit" value="Continuar"></form>
            <input type="submit" value="Omitir">
        </section>
    </section>
</body>
</html>
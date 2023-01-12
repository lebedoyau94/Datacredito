<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
            <title>Recibo | Crédito</title>
            <style>
        
                .text-container{
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
        
                .submit{
                    margin: 1rem 10px;
                }
        
                .percent-sec{
                    margin: 0 2rem;
                }
        
                .percent{
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
                    cursor: pointer;
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
        
                .recibos{
                    margin-right: 45px;
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
                }
    </style>
</head>
<body>
<form action="{{route('redirect.seventh')}}" method="POST">
    @csrf
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
            <input type="submit" class="submit" value="Continuar">            
        </form>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <input type="submit" class="submit" value="Omitir">
            </form>
        </section>
    </section>
</body>
</html>

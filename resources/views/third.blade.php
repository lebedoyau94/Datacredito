
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo | Credito</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
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
        }

        h2{
            color:  #262650;
        }

        .second-sec p{
            margin: 0 25px;
            text-align: center;
        }

        .third-sec{
            font-weight: bold;
            margin: 1rem 20px;
            text-align: center;
            font-size: 15px;
            color: #262650;
        }

        input[type=text]{
            padding: 13px 80px;
            height: 10px;
            border-radius: 10px;
            border: none;
            margin: 5px 0;
            text-align: center;
        }

        .btn-box button{
            margin-top: 1rem;
            padding: 5px 10px;
            background-color: transparent;
            border: 2px solid #262650;
            color: #262650;
            font-weight: bold;
        }

        input[type=button]{
            height: 35px;
            border-radius: 15px;
            border: none;
            margin: 5px 0;
            padding: 5px 25px;
            color: white;
            background-color:  #262650;
            font-weight: bold;
        }

        
    </style>
</head>
<body>
    <section class="text-container">
            
        <section class="logo-container">
            <h1>Logo</h1>
        </section>

        <section class="second-sec">
            <h2>Tu tranquilidad es primero</h2>
            <p>Para brindarte las mejores soluciones debemos confirmar tu identidad, enviaremos un c&oacute;digo de acceso al email o n&uacute;mero telef&oacute;nico registrado</p>
        </section>

        <section class="third-sec">
            <p>Hemos enviado un c&oacute;digo de acceso a tu email</p>
            <input type="text" placeholder="Ingresar código">
        </section>

        <section class="btn-box">
            <button>ICON Solicitar nuevo c&oacute;digo</button>
            <input type="button" value="Ingresar">
        </section>
    
    </section>
</body>
</html>
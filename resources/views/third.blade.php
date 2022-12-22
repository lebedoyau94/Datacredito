
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
            background-color: #cfebf9;
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
            width: 15rem; 
            height: 8vh; 
            border: 3px solid white;
            margin-top: 5rem;
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
            color: #314961;
            font-size: 2rem;
            text-align: center;
        }
        
        p {
            color: #314961;
            font-size: 1rem;
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
            width: 7rem;
            border-radius: 10px;
            border: none;
            margin: 5px 0;
            text-align: center;
        }

        .btn-box button{
            margin-top: 1rem;
            padding: 5px 10px;
            background-color: transparent;
            border: 1px solid #262650;
            color: #262650;
            font-weight: bold;
            cursor: pointer;
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
        input[type=submit]{
            height: 35px;
            border-radius: 15px;
            border: none;
            margin: 5px 0;
            padding: 5px 25px;
            color: white;
            background-color:  #262650;
            font-weight: bold;
            cursor: pointer;
        }

        .mt-5 {
            margin-top: 100px;
        }
        .mt-3 {
            margin-top: 60px;
        }
        .mt-2 {
            margin-top: 40px;
        }
        .mt-1 {
            margin-top: 20px;
        }
        .is-invalid {
            color: red;
            font-size: small;
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
            <p>Para brindarte las mejores soluciones debemos confirmar tu identidad,</p> 
            <p>enviaremos un c&oacute;digo de acceso al email o n&uacute;mero telef&oacute;nico registrado</p>
        </section>

        <section class="third-sec">
        <form action="{{route('validate')}}" method="POST">
			@csrf
            <p>Hemos enviado un c&oacute;digo de acceso a tu email</p>
            <input type="text" placeholder="Ingresar código" name="code">
            <input type="submit" value="Ingresar">
            @error('code')
                <div class="is-invalid">{{ $message }}</div>
            @enderror
        </form>
        </section>

        <section class="btn-box">
            <button >Solicitar nuevo c&oacute;digo</button>
            
        </section>
    
    </section>
</body>
</html>
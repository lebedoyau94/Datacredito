<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranquilidad | Credito</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        
        body {
            background-color: #cfebf9;
        }

        .first-sec{
            background-color: #cfebf9;
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: center;
            padding: 20px;
            border-top-right-radius: 60%;
        }
        
        .logo{
            border: 3px solid white;
            margin: 50px 0;
            width: 200px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            color: white;
            text-transform: uppercase;
        }
        
        .data{
            border: 2px solid #445a71;
            margin: 50px 0;
            width: 250px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            color: #445a71;
        }

        .letter-sec{
            padding: 70px;
            font-size: 20px;
            color: darkblue;
        }

        .input-box{
            margin-top: -40px;
        }
        
        input[type=text]{
            width: 300px;
            height: 40px;
            border-radius: 10px;
            border: none;
            text-align: center;
        }
        input[type=email]{
            width: 300px;
            height: 40px;
            border-radius: 10px;
            border: none;
            text-align: center;
        }

        input[type=submit]{
            width: 120px;
            height: 40px;
            border-radius: 20px;
            border: none;
            background-color: #314961;
            color: white;
            text-align: center;
            float: right;
            cursor: pointer;
            margin-top: 8px;
        }

        h1{
            color: #314961;
            font-size: 30px;
            margin-bottom: 15px;
        }
        p {
            color: #314961;
            font-size: 15px;
        }
        .line-box{
            color: darkblue;
            margin-top: 20px;
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
    <section class="first-sec">
        <div class="logo">
            <p>Logo</p>
        </div>
        <h1>Tu tranquilidad es primero</h1>
        <p> Para brindar las mejores soluciones debemos confirmar tu identidad, enviaremos un codigo</p>
        <p>de acceso al email o numero telefonico registrado</p>
        <p class="mt-5">Selecciona una de las opciones y </p>
        <p>completa la información</p>
        <p class="mt-2">franc******@*****.com</p>
        <form action="{{route('code')}}" method="POST">
			@csrf
            <div class="mt-1">
                <input type="email" placeholder="Ingresar email" name="email">
                @error('email')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
                <p>
                    <input type="submit" value="Ingresar">
                </p>
            </div>
            <p class="mt-2">316*********</p>
            <div class="mt-1">
                <input type="text" placeholder="Ingresar numero telefonico" value="{{$phone}}" name="phone">
                @error('phone')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
                <p>
                    <input type="submit" value="Ingresar">
                </p>
                
            </div>
        </form>
        <div class="data">
            <p>No son mis datos</p>
        </div>
        
    </section>
</body>
</html>
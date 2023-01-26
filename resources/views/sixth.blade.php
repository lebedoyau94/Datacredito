<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
            <title>Recibo | Crédito</title>
            <!-- icon -->
            <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">  
            <style>
        
                .text-container{
                    color: #262650;
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
                    width: 50rem;
                    max-width: 50rem;
                    display: flex;
                    justify-content: end;
                    height: 160px;
                }
        
                .first-box, .sec-box{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
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
                    width: 9rem;
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
                    width: 10rem;
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

            @media only screen and (min-width: 800px) {

                .file-select {
                    position: relative;
                    display: inline-block;
                    cursor: pointer;
                }

                .file-select::before {
                    background-color: transparent;
                    color: #262650;
                    border: 2px solid #262650;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius: 3px;
                    content: 'ARJUNTAR ARCHIVO'; /* teXto por defecto */
                    position: absolute;
                    left: 0;
                    right: 0;
                    top: 0;
                    bottom: 0;
                    cursor: pointer;
                }     
                
                .file-select input[type="file"] {
                    opacity: 0;
                    width: 200px;
                    height: 32px;
                    display: inline-block;
                    cursor: pointer;
                }

                .second-sec {
                    font-size: 12px;
                    width: 25rem;
                }

                .percent-sec p{
                    font-size: 1.5rem;
                    width: 18rem;
                }
            }
    </style>
</head>
<body>
<form action="{{route('redirect.seventh')}}" method="POST" enctype="multipart/form-data">
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
                    <div class="file-select" id="src-file1" >
                        <input type="file" name="receipt" id="">
                    </div>
                    <span>El formato no debe superar un peso de 3 mb</span>
                    @error('receipt')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
                </div>
        <section class="upload-box">
            <div class="first-box">
                <p>Nombre archivo.</p>
                <span>Eliminar</span>
            </div>

            <div class="sec-box">
                <p>Recibo de agua</p>
                <div class="file-select" id="src-file1" >
                    <input type="file" name="receipt_two" id="">
                </div>
                <span>El formato no debe superar un peso de 3 mb</span>
                @error('receipt_two')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
        </section>
    
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

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

        .percent-sec{
            text-align: start;
            font-size: 15px;
            color: #262650;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 1rem;
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

        .question-container{
            text-align: center;
            margin: 0 1rem;
        }

        .question-container select{
            border: none;
            padding: 13px 30px;
            border-radius: 15px;
        }

        input[type=button]{
            height: 35px;
            border-radius: 15px;
            border: none;
            margin: 1rem 0;
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

        <section class="percent-sec">
            <div class="percent">
                <span>5%</span>
            </div>
            <p>Gana este descuento en tus deudas respondiendo las siguientes preguntas</p>
        </section>

        <section class="question-container">
            <h3>¿C&uacute;al es su rango de ingresos actualmente?</h3>
            <select id="" name=""> 
                <option value="">Seleccione una opción</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select> 
        </section>

        <section class="question-container">
            <h3>¿De sus ingresos actuales cuánto puede destinar al pago de su deuda?</h3>
            <select id="" name=""> 
                <option value="">Seleccione una opción</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select> 
        </section>

        <section class="btn-container">
            <input type="button" value="Continuar">
            <input type="button" value="Omitir">
        </section>
        
    </section>
</body>
</html>
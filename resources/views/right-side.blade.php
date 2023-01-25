<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .body{
            display: flex;
            justify-content: end;
        }

        .right-container{
            width: 30%;
            background-image: url('/assets/img/Fondo4.png');
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .first-sec{
            color: white;
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 25%;
            justify-content: end;
        }

        .first-sec h1{
            font-size: 40px;
            width: 250px;
        }

        .first-sec p{
            font-size: 20px;
            width: 251px;
            font-weight: bold;
            margin-top: 10px;
        }

        .text-first{
            width: 350px;
            height: auto;
            font-size: 26px;
            margin-left: 2rem;
        }

        .second-sec{
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            padding: 5rem 0;
            align-self: center;
        }

        .second-sec p{
            font-size: 15px;
            font-weight: bold;
        }

        @media only screen and (max-width: 800px){
    .right-container{
        width: 100%;
    }

    .text-first {
    width: 250px;
    height: auto;
    font-size: 20px;
    margin-left: 2rem;
}

    .second-sec {
    align-items: start;
    font-size: 14px;
}

.right-container{
    background-size: cover;
    }
}

    </style>
</head>
<body class="body">
    <section class="right-container">

        <section class="first-sec">

            <div class="text-first">
                <h1>Es hora de ser feliz</h1>
                <p>Queremos que recuperes tu vida financiera.</p>
            </div>
        </section>


        <section class="second-sec">
            <h3>Premiamos tu cumplimiento</h3>
            <p>Creemos en las segundas oportunidades</p>
        </section>
    </section>
</body>
</html>

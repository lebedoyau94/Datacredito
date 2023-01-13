<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-image: url('https://images.pexels.com/photos/1906658/pexels-photo-1906658.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-repeat: no-repeat;
            background-size:contain;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 95vh;
        }

        .first-sec{
            color: white;
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 30%;
            justify-content: end;
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

    <script>
        const button = document.getElementById('btn_menu');
        const menu = document.querySelector('.menu')
        let isMenuOpen = false;
        menu.style.display = 'none';
        button.addEventListener('click', function() {

            if(isMenuOpen === false){
                menu.style.display = 'block';
                isMenuOpen = true;
            } else{
                menu.style.display = 'none';
                isMenuOpen = false;
            }
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación financiera | Créditos</title>
    <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            display: flex;
            justify-content: center;
        }

        .hello {
        font-size: 1.5rem;
        }

        .container{
            background-color: white;
            width: 60%;
            height: auto;
            color:  #324963;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 2rem;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            overflow-y: scroll;
            justify-content: normal;
        }

        .text-container{
            font-size: 18px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .videos-container{
            margin: 1rem 0 0 0;
            width: 100%;
            height: 350px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .video-box{
            margin-top: 5px;
            display: flex;
        }

        .titles{
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }

        .description{
            margin: 20px;
        }

        .description p{
            font-size: 15px;
            text-align: justify;
        }

        .vida {
            background-color: transparent;
            cursor: none;
            color: #323f53;
            border: none;
            font-size: 30px;
        }

        .box {
            width: 50%;
            margin: 10px 5px;
            padding: 5px;
            border-radius: 5px;
        }

        iframe{
            width: 500px;
            height: 300px;
        }

        @media only screen and (max-width: 800px){
                .container{
                    width: 100%;
                    padding-top: -2rem;
            }

                .video-box {
                    flex-direction: column;
                    padding-left: 2rem;
                    padding-right: 2rem;
            }

                .vida {
                    background-color: transparent;
                    cursor: none;
                    color: #323f53;
                    border: none;
                    font-size: 30px;
            }
        }

        @media only screen and (min-width: 1024px){
                .vida {
                    font-size: 40px;
                    display: flex;
                    flex-direction: column;
                    align-self: start;
        }

        .box p{
            text-align: start;
            margin-left: 15px;
        }
    }

        /*View 1366x768px*/

        @media only screen and (min-width: 1200px){
            .container{
                width: 55%;
            }

    }

    </style>
</head>
<body>
    <section class="container">

        <div class="m-box">
            <div  class="m-boxes">
                <h5>Educación financiera</h5>
                <p>Contenido especializado para mejorar tu perfil financiero</p>
            </div>
            <div class="mo-boxes">
                <h5>Soluciones financieras</h5>
                <p>Beneﬁcios, posibilidades de pago y crédito</p>
            </div>
        </div>

        <div class="videos-container">
            <div class="video-box">
                    <iframe width="800" height="300" src="https://www.youtube.com/embed/5PAIPVjGMt4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
            </div>

            <div class="videos-container">
                <div class="video-box">
                    <iframe width="800" height="300" src="https://www.youtube.com/embed/9sCVcWD1Svs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>

                <div class="videos-container">
                    <div class="video-box">
                        <iframe width="800" height="300" src="https://www.youtube.com/embed/TA-9TLQcVzg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
        </div>
    </section>
</body>
</html>
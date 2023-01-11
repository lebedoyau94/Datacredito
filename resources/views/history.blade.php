<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi historial</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="https://kit.fontawesome.com/2e3d4c9f14.js" crossorigin="anonymous"></script>

    <style>
        .history-box{
        display: flex;
        width: 100%;
        margin: 10px 5px;
        padding: 5px;
        justify-content: center;
    }

    .historias-box{
        display: grid;
        grid-template-columns: repeat(4,minmax(100px, 300px));
        width: 85%;
    }

    .history-info-box{
        display: flex;
        font-size: 12px;
        margin: 1rem 0;
        width: auto;
        align-items: center;
        justify-content: center;
    }

    .mini-history-box{
        margin: 0 0.5rem;
        border: 1px solid grey;
        height: 180px;
        overflow-y: scroll;
        display: grid;
        grid-template-columns: repeat(4,minmax(100px, 300px));
        width: 90%;
    }

    .history-information{
        font-size: 12px;
        margin: 1rem 0;
        width: auto;
        align-items: center;
        justify-content: center;
    }

    .prestamo-boxs{
    display: flex;
    align-items: center;
    background-color: #3c4b62;
    width: 50%;
    justify-content: center;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    color: white;
    margin: 1rem 8px 0;
    height: 30px;
    font-size: 16px;
}

    .acuerdo-box{
    display: flex;
    align-items: center;
    background-color: #800080;
    width: 50%;
    justify-content: center;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    color: white;
    margin: 1rem 5px 0;
    height: 30px;
    font-size: 16px;
}

    .boxes{
        background-color: transparent;
        cursor: none;
        color: #323f53;
        border: none;
        font-size: 30px;
        display: flex;
        width: 40%;
    }

    .grid-tres{
        display: grid;
        grid-template-columns: repeat(3,minmax(50px, 150px));
        width: 40%;
    }

    .histories{
        justify-content: space-around;
        text-align: center;
        height: 50px;
        color: #46556a;
        font-size: 12px;
        align-items: center;
        margin-top: 10px
    }

    .osc{
        font-weight: bold;
    }

    .maxi-history-box{
        margin: 0 0.5rem;
        border: 1px solid grey;
        height: 180px;
        overflow-y: scroll;
        display: grid;
        grid-template-columns: repeat(5,minmax(100px, 200px));
        width: 90%;
    }

    .estate-box{
    display: flex;
    align-items: center;
    background-color: #48e120;
    width: 70%;
    justify-content: center;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    color: white;
    margin: 1rem 5px 0;
    height: 30px;
    font-size: 16px;
}

.recomendate-box{
    display: flex;
    align-items: center;
    background-color: #f6a700;
    width: 70%;
    justify-content: center;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    color: white;
    margin: 1rem 5px 0;
    height: 30px;
    font-size: 16px;
}

.boxess{
        background-color: transparent;
        cursor: none;
        color: #323f53;
        border: none;
        font-size: 30px;
        display: flex;
        width: 80%;
    }

    .history-informations{
        display: flex;
        font-size: 12px;
        margin: 1rem 0;
        width: auto;
        align-items: center;
        justify-content: center;
    }

    .acuerdos-box{
        display: flex;
        align-items: center;
        background-color: transparent;
        width: 70%;
        justify-content: center;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        color: #3c4b62;
        margin: 1rem 5px 0;
        height: 30px;
        font-size: 16px;
        border: 1px solid #3c4b62;
    }

    .vehicle-box{
    display: flex;
    align-items: center;
    background-color: #3c4b62;
    width: 20%;
    justify-content: center;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    color: white;
    margin: 1rem 5px 0;
    height: 30px;
    font-size: 16px;
}

.m-box{
    display: flex;
}

.mo-boxes{
    background: transparent;
    border: 1px solid #3c4b62;
    margin: 10px 5px;
    padding: 5px;
    border-radius: 5px;
    color: #3c4b62;
    font-size: 10px;
}

.m-boxes{
    border: 1px solid #800080;
    background: #800080;
    margin: 10px 5px;
    padding: 5px;
    border-radius: 5px;
    color: #f7f6f9;
    font-size: 10px;
}

.mo-boxes, .m-boxes h5{
    font-size: 15px;
}

.mo-boxes, .m-boxes p{
    font-size: 10px;
}

.center{
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    color: #3c4b62;
    margin-top: 35px;
}

.dot-container{
    background: linear-gradient(90deg, rgba(179,175,240,1) 0%, rgba(232,136,219,1) 100%);
    height: auto;
    margin: 10px;
    padding: 5px;
}

.dot-his{
    display: grid;
    grid-template-columns: repeat(3,minmax(50px, 150px));
}

@media only screen and (max-width: 760px){
    .grid-dos{
        display: grid;
        grid-template-columns: repeat(2,minmax(50px, 150px));
        width: 100%;
    }

    .historias-box {
    display: grid;
    grid-template-columns: repeat(4,minmax(50px, 80px));
    width: 100%;
    }
    
    .mini-history-box {
    grid-template-columns: repeat(4,minmax(50px, 80px));
    width: 100%;
    }

    .grid-tres {
    grid-template-columns: repeat(3,minmax(100px, 150px));
}

    .vida, .historias-box, .mini-history-box, .maxi-history-box, .boxes, .boxess, .vehicle-box{
        display: none;
    }

    .history-info-box{
    flex-direction: column;
    text-align: center;
}

    .history-info-box h5{
    font-size: 15px;
}

    .grid-tres {
    width: 100%;
    }

    .prestamo-boxs{
        height: 40px;
    }

    .acuerdo-box{
        height: 25px;
        width: 40%;
    }

    .boxesss{
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: center;
    }

    .boxessss{
        display: flex;
        width: 100%;
        align-items: center;
    }

    .estate-box{
        width: 50%;
    }

    .recomendate-box{
        width: 50%;
    }

    .dot-container2{
    border: 1px solid gray;
    background: transparent;
    height: auto;
    margin: 10px;
    padding: 5px;
    }

    .grid-dos2{
    display: grid;
    grid-template-columns: repeat(2,minmax(150px, 200px));
    width: 100%;
}

.prestamo-boxs2{
    display: flex;
    align-items: center;
    background-color: #3c4b62;
    width: 50%;
    justify-content: center;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    color: white;
    margin: 1rem 8px 0;
    height: 30px;
    font-size: 16px;
}

.acuerdo-box2{
    display: flex;
    align-items: center;
    background-color: #800080;
    width: 50%;
    justify-content: center;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    color: white;
    margin: 1rem 5px 0;
    height: 30px;
    font-size: 16px;
}
}

@media only screen and (min-width: 800px){
    .history-box{
        height: 50%;
    }

    .m-box, .center, .dot-container, .boxessss, .dot-his, .dot-container2, .prestamo-boxs2, .acuerdo-box2{
        display: none;
    }
}

    #Capa_4{
        width: 60px;
        height: 60px;
        display: flex;
        justify-content: center;
    }

    #Capa_5{
        width: 120px;
        height: 60px;
    }

    </style>
</head>
<body>
    <section class="menu-section">
        <button class="cursor">
            <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="white" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
        </button>
        <div class="logo-container">
            <h1>Logo</h1>
        </div>
        <button class="cursor">
            <svg id="btn_menu" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="white" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </button>
    </section>

    <section class="menu-web">
        <div class="center-container">
            <div class="logo-container">
                <h1>Logo</h1>
            </div>
        </div>
        <nav>
            <div class="menu-text">
                <p>¡Hola!</p>
                <p class="bold">{{Auth::user()->name}}</p>
                <p>{{Auth::user()->email}}</p>
                <form class= "logout" action="{{route('logout')}}" method="POST">
                    @csrf
                    <input type="submit" value="Cerrar sesión">
                </form>
            </div>
            <ul>
                <h5>Men&uacute;</h5>
                <li>
                    <a href="{{route("dashboard.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.63 31.63"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M31.32,5.46h2.91a4,4,0,0,1,4.15,4.15c0,1.93,0,3.85,0,5.78a4.05,4.05,0,0,1-4.14,4.16H28.43a4,4,0,0,1-4.13-4.13c0-1.94,0-3.88,0-5.82a4.07,4.07,0,0,1,4.16-4.14Zm4.67,7c0-1,0-1.93,0-2.9a1.67,1.67,0,0,0-1.72-1.72H28.42a1.67,1.67,0,0,0-1.74,1.71c0,2,0,3.92,0,5.89a1.66,1.66,0,0,0,1.73,1.71q2.93,0,5.85,0A1.65,1.65,0,0,0,36,15.42C36,14.44,36,13.46,36,12.47Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M38.38,30.06v2.87a4,4,0,0,1-4.14,4.16H28.43A4,4,0,0,1,24.3,33c0-2,0-3.93,0-5.89A4,4,0,0,1,28.38,23c2,0,3.95,0,5.93,0a4,4,0,0,1,4.07,4.11C38.39,28.1,38.38,29.08,38.38,30.06Zm-7,4.64h2.91A1.66,1.66,0,0,0,36,33q0-2.92,0-5.85a1.66,1.66,0,0,0-1.7-1.74c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72c0,1.95,0,3.91,0,5.86a1.67,1.67,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M13.8,37.09H10.93a4,4,0,0,1-4.17-4.16c0-1.92,0-3.85,0-5.78A4,4,0,0,1,10.9,23c1.93,0,3.85,0,5.78,0a4.06,4.06,0,0,1,4.16,4.18c0,1.91,0,3.83,0,5.74a4.05,4.05,0,0,1-4.17,4.17Zm0-2.39h2.95A1.65,1.65,0,0,0,18.45,33c0-2,0-4,0-5.93a1.64,1.64,0,0,0-1.7-1.7c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72V33a1.66,1.66,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M13.81,5.46h2.87a4.06,4.06,0,0,1,4.16,4.15c0,1.93,0,3.87,0,5.81a4.06,4.06,0,0,1-4.14,4.13H10.89a4,4,0,0,1-4.13-4.17c0-1.92,0-3.85,0-5.77a4,4,0,0,1,4.15-4.15Zm-4.67,7v2.95a1.66,1.66,0,0,0,1.69,1.71c2,0,3.95,0,5.93,0a1.64,1.64,0,0,0,1.69-1.7c0-2,0-3.93,0-5.89a1.65,1.65,0,0,0-1.72-1.72H10.88A1.66,1.66,0,0,0,9.14,9.59Z" transform="translate(-6.75 -5.46)"/></svg>
                        Life Board
                    </a>
                </li>
                <li>
                    <a href="{{route("information.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.84 31"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M14.16,36.78c-.36-.08-.73-.13-1.08-.24A4.84,4.84,0,0,1,9.4,31.91a16.54,16.54,0,0,1,1.08-7,6.46,6.46,0,0,1,2.87-3.47,5.67,5.67,0,0,1,2.82-.67,2.1,2.1,0,0,1,.92.31c.46.25.89.57,1.34.84a6.87,6.87,0,0,0,7.77,0,12.16,12.16,0,0,0,1.07-.69,2.59,2.59,0,0,1,2-.41A5.75,5.75,0,0,1,33.7,24a13,13,0,0,1,1.41,5c.08.9.13,1.81.12,2.72a5,5,0,0,1-4.58,5,1.52,1.52,0,0,0-.2.06ZM22.31,35h0c2.56,0,5.12,0,7.69,0a3.23,3.23,0,0,0,3.42-3.51c0-.81,0-1.61-.13-2.42a11.1,11.1,0,0,0-1.16-4.13,3.91,3.91,0,0,0-3.35-2.3.91.91,0,0,0-.42.11c-.39.23-.76.48-1.15.73a8.62,8.62,0,0,1-8.88.52c-.71-.35-1.36-.83-2-1.24a.72.72,0,0,0-.33-.13,3.7,3.7,0,0,0-2.56,1.06,6,6,0,0,0-1.29,2.07,15.58,15.58,0,0,0-.9,6.09,3,3,0,0,0,1.53,2.66,4.24,4.24,0,0,0,2.18.5Z" transform="translate(-9.38 -5.78)"/><path class="cls-1" d="M29.58,13.24a7.47,7.47,0,1,1-7.46-7.46A7.44,7.44,0,0,1,29.58,13.24ZM22.11,18.9a5.66,5.66,0,1,0-5.64-5.66A5.65,5.65,0,0,0,22.11,18.9Z" transform="translate(-9.38 -5.78)"/></svg>
                        Mis Datos
                    </a>
                </li>
                <li>
                    <a href="{{route("history.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.87 27.88"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M9.65,34.57A1.44,1.44,0,0,1,8,33v-22a4.14,4.14,0,0,1,4.26-4.24H31.63A4.14,4.14,0,0,1,35.9,11V33c-.07,1.08-.72,1.68-2,1.58Zm24.46-2.22V10.45c0-1.31-.56-1.89-1.83-1.89H11.7c-1.25,0-1.82.58-1.82,1.86V32.35Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.14,17.58H13.57a1.11,1.11,0,0,1-1.22-1.29,1.07,1.07,0,0,1,.9-.91,3.59,3.59,0,0,1,.47,0H30.56a2.4,2.4,0,0,1,.6.06A1.08,1.08,0,0,1,32,16.48a1.09,1.09,0,0,1-.85,1.06,2.42,2.42,0,0,1-.47,0Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.12,21.93H13.71a2.28,2.28,0,0,1-.58-.05,1.1,1.1,0,0,1-.8-1.07,1.07,1.07,0,0,1,.83-1.06,1.83,1.83,0,0,1,.47-.05h17a2.25,2.25,0,0,1,.44,0,1.06,1.06,0,0,1,.86,1.14,1.08,1.08,0,0,1-1,1,3.31,3.31,0,0,1-.44,0Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.25,26.23H13.84a2.28,2.28,0,0,1-.58-.05,1.1,1.1,0,0,1,0-2.13,1.83,1.83,0,0,1,.47-.05h17a2.25,2.25,0,0,1,.44,0,1.1,1.1,0,0,1-.11,2.17,3.31,3.31,0,0,1-.44,0Z" transform="translate(-8.03 -6.69)"/></svg>
                        Mi Historial
                    </a>
                </li>
                <li>
                    <a href="{{route("certificate.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.06 29.11"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M36.23,9.94V31a1.42,1.42,0,0,1-1.44.69c-.59,0-1.19,0-1.79,0H31.84V32c0,1.69,0,3.39,0,5.09a1.17,1.17,0,0,1-.7,1.16,1.16,1.16,0,0,1-1.35-.32l-2.2-2.21a2.11,2.11,0,0,1-.2-.29,3.67,3.67,0,0,0-.27.26L24.84,38a1.22,1.22,0,0,1-.8.39,1.15,1.15,0,0,1-1.23-1.22V31.66h-.38c-4.69,0-9.38,0-14.07,0a1.12,1.12,0,0,1-1.19-1.19v-20a1.42,1.42,0,0,1,0-.36A1.24,1.24,0,0,1,8,9.26H35.43A1.71,1.71,0,0,1,36.23,9.94ZM34,29.38V11.56H9.46V29.37H22.81V23.94a1.16,1.16,0,0,1,1.26-1.26c2.16,0,4.32,0,6.48,0a1.24,1.24,0,0,1,1.3,1.3c0,1.7,0,3.4,0,5.09v.32ZM25.12,25v9.48l.23-.21,1.13-1.13a1.13,1.13,0,0,1,1.73,0l1.15,1.14a1.41,1.41,0,0,0,.18.14V25Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M21.72,16H12.91a1.14,1.14,0,0,1-1.25-1.32,1.11,1.11,0,0,1,.92-.95,3.91,3.91,0,0,1,.49,0H30.38a3.18,3.18,0,0,1,.62.06,1.13,1.13,0,0,1,.81,1.11A1.11,1.11,0,0,1,30.93,16a1.91,1.91,0,0,1-.48,0Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M21.7,20.49H13.06a2.32,2.32,0,0,1-.59,0,1.13,1.13,0,0,1-.83-1.1,1.11,1.11,0,0,1,.86-1.09A1.83,1.83,0,0,1,13,18.2H30.46a1.71,1.71,0,0,1,.45,0,1.13,1.13,0,0,1-.11,2.23l-.46,0Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M16.15,22.68h3.27a1.14,1.14,0,1,1,0,2.27q-3.29,0-6.59,0a1.14,1.14,0,1,1,0-2.27Z" transform="translate(-7.17 -9.26)"/></svg>
                        Certificados
                    </a>
                </li>
                <li>
                    <a href="{{route("employment.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.66 31.66"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M5.83,35.11A4.59,4.59,0,0,1,7.31,33c1.2-1.17,2.38-2.36,3.56-3.56A2.82,2.82,0,0,1,14,28.63a.31.31,0,0,0,.27,0l1.94-1.93c-.44-.68-.91-1.31-1.3-2A12.06,12.06,0,0,1,21,7.58a11.86,11.86,0,0,1,3.31-.8l.24-.06h1.86l1.18.19A12.06,12.06,0,0,1,37.18,16c.14.6.22,1.21.32,1.81v1.86c-.1.61-.16,1.22-.32,1.82a11.74,11.74,0,0,1-9,9A11.6,11.6,0,0,1,17.72,28a1.12,1.12,0,0,1-.19-.15,2.37,2.37,0,0,1-.28.4c-.34.35-.67.71-1,1a1.21,1.21,0,0,0-.51,1.47A2.36,2.36,0,0,1,15,33.16c-1.46,1.49-3,3-4.43,4.44a3.24,3.24,0,0,1-1.51.79H8.18a2.79,2.79,0,0,1-1.68-1,9.84,9.84,0,0,1-.67-1.29ZM25.45,8.58A10.21,10.21,0,1,0,35.64,18.79,10.23,10.23,0,0,0,25.45,8.58ZM14,31.27a1,1,0,0,0-.59-.87.9.9,0,0,0-1,.18L8,35a.92.92,0,1,0,1.3,1.3c1.46-1.45,2.92-2.91,4.36-4.38A2.31,2.31,0,0,0,14,31.27Z" transform="translate(-5.83 -6.72)"/><path class="cls-1" d="M28.84,18.25a6,6,0,0,1,3.42,3.63,6.74,6.74,0,0,1,.28,2.6.89.89,0,0,1-.85.79,1.47,1.47,0,0,1-.21,0c-4,0-8.06,0-12.09,0a1,1,0,0,1-1.07-1.05,5.94,5.94,0,0,1,3.71-6,4.65,4.65,0,1,1,6.81,0Zm1.82,5.16a3.91,3.91,0,0,0-3.45-3.63,23.36,23.36,0,0,0-2.9-.06,5.4,5.4,0,0,0-1.48.25,3.91,3.91,0,0,0-2.6,3.44Zm-5.22-5.56a2.78,2.78,0,1,0-2.78-2.77A2.81,2.81,0,0,0,25.44,17.85Z" transform="translate(-5.83 -6.72)"/></svg>
                        Empleo
                    </a>
                </li>
                <li>
                    <a href="{{route("financial.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.34 29.79"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M9.75,36.17A3.62,3.62,0,0,1,9.28,36,3.1,3.1,0,0,1,7,33.38a3,3,0,0,1,1.47-3.1.42.42,0,0,0,.21-.4q0-8.09,0-16.17a.45.45,0,0,0-.26-.43A3.2,3.2,0,1,1,13,9a.39.39,0,0,0,.41.22H25.26a1.43,1.43,0,1,1,.2,2.85H13.34a.44.44,0,0,0-.44.24,3.1,3.1,0,0,1-1.1,1.06.41.41,0,0,0-.21.3q0,3.15,0,6.31a.48.48,0,0,0,0,.13h3.5a1.44,1.44,0,0,1,1.53,1.26A1.37,1.37,0,0,1,15.44,23c-.77.06-1.54,0-2.3.05H11.6c0,.13,0,.23,0,.33V29.8a.39.39,0,0,0,.23.41A3,3,0,0,1,13,31.33a.41.41,0,0,0,.28.19H20l.1,0V27a1.44,1.44,0,0,1,1.08-1.5A1.39,1.39,0,0,1,23,26.69c.05.56,0,1.12,0,1.68,0,1,0,2.08,0,3.16h6.85a.48.48,0,0,0,.42-.23,7.66,7.66,0,0,1,.81-.9.52.52,0,0,0,.23-.45q0-6.55,0-13.09a1.43,1.43,0,1,1,2.86-.19c0,.31,0,.62,0,.93q0,6,0,12.09a.39.39,0,0,0,.26.42,3.19,3.19,0,0,1-.78,6l-.18.06h-.94l-.15-.06a3.15,3.15,0,0,1-2.12-1.49.38.38,0,0,0-.37-.21q-8.28,0-16.57,0c-.19,0-.27.09-.39.23a4,4,0,0,1-.84.9,9.92,9.92,0,0,1-1.41.63ZM29.8,32.51H22.73c-.54,0-.69-.15-.69-.7,0-1.57,0-3.14,0-4.71a1.55,1.55,0,0,0,0-.37.42.42,0,0,0-.48-.29.45.45,0,0,0-.41.39,2.8,2.8,0,0,0,0,.29V31.8c0,.56-.16.71-.71.71h-7v.91H29.8ZM10.62,29.78V22.64c0-.43.17-.6.6-.6h3.49a4.69,4.69,0,0,0,.53,0,.48.48,0,0,0,.45-.48.46.46,0,0,0-.48-.44H11.36c-.61,0-.74-.13-.74-.72V13.8H9.7v16ZM35.24,33A2.24,2.24,0,1,0,33,35.2,2.23,2.23,0,0,0,35.24,33ZM10.19,35.21A2.24,2.24,0,1,0,8,32.93,2.22,2.22,0,0,0,10.19,35.21Zm2.25-24.58a2.24,2.24,0,1,0-2.26,2.22A2.25,2.25,0,0,0,12.44,10.63ZM33.22,29.76V17c0-.45-.18-.71-.49-.7s-.44.24-.44.69q0,6.27,0,12.53v.32ZM13.41,11.14H25.1a2.43,2.43,0,0,0,.38,0,.42.42,0,0,0,.36-.45.43.43,0,0,0-.39-.44h-12Z" transform="translate(-7 -6.38)"/><path class="cls-1" d="M36.34,9.39a3.93,3.93,0,0,1-.34.46l-2.8,2.8L22.36,23.46a1.69,1.69,0,0,1-.63.38c-1,.37-2.07.69-3.1,1.06a2.91,2.91,0,0,0-.72.5c-.13.1-.22.22-.34.32a.44.44,0,0,1-.61,0,.44.44,0,0,1-.06-.63c.18-.2.39-.38.56-.59a1.19,1.19,0,0,0,.26-.41c.36-1,.7-2.12,1.07-3.18a1.53,1.53,0,0,1,.34-.56L32.78,6.69c.41-.41.59-.41,1,0L36,8.92A3.82,3.82,0,0,1,36.34,9.39ZM21.82,22.56,35,9.38,33.27,7.62,20.05,20.79Zm-2.31-.8-.68,2,2.05-.69Z" transform="translate(-7 -6.38)"/></svg>
                        Educaci&oacute;n Financiera
                    </a>
                </li>
            </ul>
        </nav>

        <div class="last-part-menu">
            <div class="exit-box">
                <div class="exit">
                    <span>X</span>
                </div>
            </div>

            <div class="hello-box">
                <div class="blue-help-circle">
                    <span>P</span>
                </div>
                <div class="hello-content">
                    <p>Hola, ¿Necesitas Ayuda?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque eveniet eius a.</p>
                </div>
            </div>

            <div class="answer-box">
                <div class="answer">
                    <p>Hola buenos d&iacute;as</p>
                </div>
            </div>
        </div>
    </section>

    <section class="menu">
        <nav>
            <div class="menu-text">
                <h5>Men&uacute;</h5>
                <p>¡Hola!</p>
                <p class="bold">{{Auth::user()->name}}</p>
                <p><small>{{Auth::user()->email}}</small></p>
                <form class= "logout" action="{{route('logout')}}" method="POST">
                    @csrf
                    <input type="submit" value="Cerrar sesión">
                </form>
            </div>
            <ul>
                <h5>Men&uacute;</h5>
                <li>
                    <a href="{{route("dashboard.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.63 31.63"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M31.32,5.46h2.91a4,4,0,0,1,4.15,4.15c0,1.93,0,3.85,0,5.78a4.05,4.05,0,0,1-4.14,4.16H28.43a4,4,0,0,1-4.13-4.13c0-1.94,0-3.88,0-5.82a4.07,4.07,0,0,1,4.16-4.14Zm4.67,7c0-1,0-1.93,0-2.9a1.67,1.67,0,0,0-1.72-1.72H28.42a1.67,1.67,0,0,0-1.74,1.71c0,2,0,3.92,0,5.89a1.66,1.66,0,0,0,1.73,1.71q2.93,0,5.85,0A1.65,1.65,0,0,0,36,15.42C36,14.44,36,13.46,36,12.47Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M38.38,30.06v2.87a4,4,0,0,1-4.14,4.16H28.43A4,4,0,0,1,24.3,33c0-2,0-3.93,0-5.89A4,4,0,0,1,28.38,23c2,0,3.95,0,5.93,0a4,4,0,0,1,4.07,4.11C38.39,28.1,38.38,29.08,38.38,30.06Zm-7,4.64h2.91A1.66,1.66,0,0,0,36,33q0-2.92,0-5.85a1.66,1.66,0,0,0-1.7-1.74c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72c0,1.95,0,3.91,0,5.86a1.67,1.67,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M13.8,37.09H10.93a4,4,0,0,1-4.17-4.16c0-1.92,0-3.85,0-5.78A4,4,0,0,1,10.9,23c1.93,0,3.85,0,5.78,0a4.06,4.06,0,0,1,4.16,4.18c0,1.91,0,3.83,0,5.74a4.05,4.05,0,0,1-4.17,4.17Zm0-2.39h2.95A1.65,1.65,0,0,0,18.45,33c0-2,0-4,0-5.93a1.64,1.64,0,0,0-1.7-1.7c-2,0-3.93,0-5.89,0a1.67,1.67,0,0,0-1.72,1.72V33a1.66,1.66,0,0,0,1.74,1.73Z" transform="translate(-6.75 -5.46)"/><path class="cls-1" d="M13.81,5.46h2.87a4.06,4.06,0,0,1,4.16,4.15c0,1.93,0,3.87,0,5.81a4.06,4.06,0,0,1-4.14,4.13H10.89a4,4,0,0,1-4.13-4.17c0-1.92,0-3.85,0-5.77a4,4,0,0,1,4.15-4.15Zm-4.67,7v2.95a1.66,1.66,0,0,0,1.69,1.71c2,0,3.95,0,5.93,0a1.64,1.64,0,0,0,1.69-1.7c0-2,0-3.93,0-5.89a1.65,1.65,0,0,0-1.72-1.72H10.88A1.66,1.66,0,0,0,9.14,9.59Z" transform="translate(-6.75 -5.46)"/></svg>
                        Life Board
                    </a>
                </li>
                <li>
                    <a href="{{route("information.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.84 31"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M14.16,36.78c-.36-.08-.73-.13-1.08-.24A4.84,4.84,0,0,1,9.4,31.91a16.54,16.54,0,0,1,1.08-7,6.46,6.46,0,0,1,2.87-3.47,5.67,5.67,0,0,1,2.82-.67,2.1,2.1,0,0,1,.92.31c.46.25.89.57,1.34.84a6.87,6.87,0,0,0,7.77,0,12.16,12.16,0,0,0,1.07-.69,2.59,2.59,0,0,1,2-.41A5.75,5.75,0,0,1,33.7,24a13,13,0,0,1,1.41,5c.08.9.13,1.81.12,2.72a5,5,0,0,1-4.58,5,1.52,1.52,0,0,0-.2.06ZM22.31,35h0c2.56,0,5.12,0,7.69,0a3.23,3.23,0,0,0,3.42-3.51c0-.81,0-1.61-.13-2.42a11.1,11.1,0,0,0-1.16-4.13,3.91,3.91,0,0,0-3.35-2.3.91.91,0,0,0-.42.11c-.39.23-.76.48-1.15.73a8.62,8.62,0,0,1-8.88.52c-.71-.35-1.36-.83-2-1.24a.72.72,0,0,0-.33-.13,3.7,3.7,0,0,0-2.56,1.06,6,6,0,0,0-1.29,2.07,15.58,15.58,0,0,0-.9,6.09,3,3,0,0,0,1.53,2.66,4.24,4.24,0,0,0,2.18.5Z" transform="translate(-9.38 -5.78)"/><path class="cls-1" d="M29.58,13.24a7.47,7.47,0,1,1-7.46-7.46A7.44,7.44,0,0,1,29.58,13.24ZM22.11,18.9a5.66,5.66,0,1,0-5.64-5.66A5.65,5.65,0,0,0,22.11,18.9Z" transform="translate(-9.38 -5.78)"/></svg>
                        Mis Datos
                    </a>
                </li>
                <li>
                    <a href="{{route("history.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.87 27.88"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M9.65,34.57A1.44,1.44,0,0,1,8,33v-22a4.14,4.14,0,0,1,4.26-4.24H31.63A4.14,4.14,0,0,1,35.9,11V33c-.07,1.08-.72,1.68-2,1.58Zm24.46-2.22V10.45c0-1.31-.56-1.89-1.83-1.89H11.7c-1.25,0-1.82.58-1.82,1.86V32.35Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.14,17.58H13.57a1.11,1.11,0,0,1-1.22-1.29,1.07,1.07,0,0,1,.9-.91,3.59,3.59,0,0,1,.47,0H30.56a2.4,2.4,0,0,1,.6.06A1.08,1.08,0,0,1,32,16.48a1.09,1.09,0,0,1-.85,1.06,2.42,2.42,0,0,1-.47,0Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.12,21.93H13.71a2.28,2.28,0,0,1-.58-.05,1.1,1.1,0,0,1-.8-1.07,1.07,1.07,0,0,1,.83-1.06,1.83,1.83,0,0,1,.47-.05h17a2.25,2.25,0,0,1,.44,0,1.06,1.06,0,0,1,.86,1.14,1.08,1.08,0,0,1-1,1,3.31,3.31,0,0,1-.44,0Z" transform="translate(-8.03 -6.69)"/><path class="cls-1" d="M22.25,26.23H13.84a2.28,2.28,0,0,1-.58-.05,1.1,1.1,0,0,1,0-2.13,1.83,1.83,0,0,1,.47-.05h17a2.25,2.25,0,0,1,.44,0,1.1,1.1,0,0,1-.11,2.17,3.31,3.31,0,0,1-.44,0Z" transform="translate(-8.03 -6.69)"/></svg>
                        Mi Historial
                    </a>
                </li>
                <li>
                    <a href="{{route("certificate.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.06 29.11"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M36.23,9.94V31a1.42,1.42,0,0,1-1.44.69c-.59,0-1.19,0-1.79,0H31.84V32c0,1.69,0,3.39,0,5.09a1.17,1.17,0,0,1-.7,1.16,1.16,1.16,0,0,1-1.35-.32l-2.2-2.21a2.11,2.11,0,0,1-.2-.29,3.67,3.67,0,0,0-.27.26L24.84,38a1.22,1.22,0,0,1-.8.39,1.15,1.15,0,0,1-1.23-1.22V31.66h-.38c-4.69,0-9.38,0-14.07,0a1.12,1.12,0,0,1-1.19-1.19v-20a1.42,1.42,0,0,1,0-.36A1.24,1.24,0,0,1,8,9.26H35.43A1.71,1.71,0,0,1,36.23,9.94ZM34,29.38V11.56H9.46V29.37H22.81V23.94a1.16,1.16,0,0,1,1.26-1.26c2.16,0,4.32,0,6.48,0a1.24,1.24,0,0,1,1.3,1.3c0,1.7,0,3.4,0,5.09v.32ZM25.12,25v9.48l.23-.21,1.13-1.13a1.13,1.13,0,0,1,1.73,0l1.15,1.14a1.41,1.41,0,0,0,.18.14V25Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M21.72,16H12.91a1.14,1.14,0,0,1-1.25-1.32,1.11,1.11,0,0,1,.92-.95,3.91,3.91,0,0,1,.49,0H30.38a3.18,3.18,0,0,1,.62.06,1.13,1.13,0,0,1,.81,1.11A1.11,1.11,0,0,1,30.93,16a1.91,1.91,0,0,1-.48,0Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M21.7,20.49H13.06a2.32,2.32,0,0,1-.59,0,1.13,1.13,0,0,1-.83-1.1,1.11,1.11,0,0,1,.86-1.09A1.83,1.83,0,0,1,13,18.2H30.46a1.71,1.71,0,0,1,.45,0,1.13,1.13,0,0,1-.11,2.23l-.46,0Z" transform="translate(-7.17 -9.26)"/><path class="cls-1" d="M16.15,22.68h3.27a1.14,1.14,0,1,1,0,2.27q-3.29,0-6.59,0a1.14,1.14,0,1,1,0-2.27Z" transform="translate(-7.17 -9.26)"/></svg>
                        Certificados
                    </a>
                </li>
                <li>
                    <a href="{{route("employment.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.66 31.66"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M5.83,35.11A4.59,4.59,0,0,1,7.31,33c1.2-1.17,2.38-2.36,3.56-3.56A2.82,2.82,0,0,1,14,28.63a.31.31,0,0,0,.27,0l1.94-1.93c-.44-.68-.91-1.31-1.3-2A12.06,12.06,0,0,1,21,7.58a11.86,11.86,0,0,1,3.31-.8l.24-.06h1.86l1.18.19A12.06,12.06,0,0,1,37.18,16c.14.6.22,1.21.32,1.81v1.86c-.1.61-.16,1.22-.32,1.82a11.74,11.74,0,0,1-9,9A11.6,11.6,0,0,1,17.72,28a1.12,1.12,0,0,1-.19-.15,2.37,2.37,0,0,1-.28.4c-.34.35-.67.71-1,1a1.21,1.21,0,0,0-.51,1.47A2.36,2.36,0,0,1,15,33.16c-1.46,1.49-3,3-4.43,4.44a3.24,3.24,0,0,1-1.51.79H8.18a2.79,2.79,0,0,1-1.68-1,9.84,9.84,0,0,1-.67-1.29ZM25.45,8.58A10.21,10.21,0,1,0,35.64,18.79,10.23,10.23,0,0,0,25.45,8.58ZM14,31.27a1,1,0,0,0-.59-.87.9.9,0,0,0-1,.18L8,35a.92.92,0,1,0,1.3,1.3c1.46-1.45,2.92-2.91,4.36-4.38A2.31,2.31,0,0,0,14,31.27Z" transform="translate(-5.83 -6.72)"/><path class="cls-1" d="M28.84,18.25a6,6,0,0,1,3.42,3.63,6.74,6.74,0,0,1,.28,2.6.89.89,0,0,1-.85.79,1.47,1.47,0,0,1-.21,0c-4,0-8.06,0-12.09,0a1,1,0,0,1-1.07-1.05,5.94,5.94,0,0,1,3.71-6,4.65,4.65,0,1,1,6.81,0Zm1.82,5.16a3.91,3.91,0,0,0-3.45-3.63,23.36,23.36,0,0,0-2.9-.06,5.4,5.4,0,0,0-1.48.25,3.91,3.91,0,0,0-2.6,3.44Zm-5.22-5.56a2.78,2.78,0,1,0-2.78-2.77A2.81,2.81,0,0,0,25.44,17.85Z" transform="translate(-5.83 -6.72)"/></svg>
                        Empleo
                    </a>
                </li>
                <li>
                    <a href="{{route("financial.index")}}">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.34 29.79"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M9.75,36.17A3.62,3.62,0,0,1,9.28,36,3.1,3.1,0,0,1,7,33.38a3,3,0,0,1,1.47-3.1.42.42,0,0,0,.21-.4q0-8.09,0-16.17a.45.45,0,0,0-.26-.43A3.2,3.2,0,1,1,13,9a.39.39,0,0,0,.41.22H25.26a1.43,1.43,0,1,1,.2,2.85H13.34a.44.44,0,0,0-.44.24,3.1,3.1,0,0,1-1.1,1.06.41.41,0,0,0-.21.3q0,3.15,0,6.31a.48.48,0,0,0,0,.13h3.5a1.44,1.44,0,0,1,1.53,1.26A1.37,1.37,0,0,1,15.44,23c-.77.06-1.54,0-2.3.05H11.6c0,.13,0,.23,0,.33V29.8a.39.39,0,0,0,.23.41A3,3,0,0,1,13,31.33a.41.41,0,0,0,.28.19H20l.1,0V27a1.44,1.44,0,0,1,1.08-1.5A1.39,1.39,0,0,1,23,26.69c.05.56,0,1.12,0,1.68,0,1,0,2.08,0,3.16h6.85a.48.48,0,0,0,.42-.23,7.66,7.66,0,0,1,.81-.9.52.52,0,0,0,.23-.45q0-6.55,0-13.09a1.43,1.43,0,1,1,2.86-.19c0,.31,0,.62,0,.93q0,6,0,12.09a.39.39,0,0,0,.26.42,3.19,3.19,0,0,1-.78,6l-.18.06h-.94l-.15-.06a3.15,3.15,0,0,1-2.12-1.49.38.38,0,0,0-.37-.21q-8.28,0-16.57,0c-.19,0-.27.09-.39.23a4,4,0,0,1-.84.9,9.92,9.92,0,0,1-1.41.63ZM29.8,32.51H22.73c-.54,0-.69-.15-.69-.7,0-1.57,0-3.14,0-4.71a1.55,1.55,0,0,0,0-.37.42.42,0,0,0-.48-.29.45.45,0,0,0-.41.39,2.8,2.8,0,0,0,0,.29V31.8c0,.56-.16.71-.71.71h-7v.91H29.8ZM10.62,29.78V22.64c0-.43.17-.6.6-.6h3.49a4.69,4.69,0,0,0,.53,0,.48.48,0,0,0,.45-.48.46.46,0,0,0-.48-.44H11.36c-.61,0-.74-.13-.74-.72V13.8H9.7v16ZM35.24,33A2.24,2.24,0,1,0,33,35.2,2.23,2.23,0,0,0,35.24,33ZM10.19,35.21A2.24,2.24,0,1,0,8,32.93,2.22,2.22,0,0,0,10.19,35.21Zm2.25-24.58a2.24,2.24,0,1,0-2.26,2.22A2.25,2.25,0,0,0,12.44,10.63ZM33.22,29.76V17c0-.45-.18-.71-.49-.7s-.44.24-.44.69q0,6.27,0,12.53v.32ZM13.41,11.14H25.1a2.43,2.43,0,0,0,.38,0,.42.42,0,0,0,.36-.45.43.43,0,0,0-.39-.44h-12Z" transform="translate(-7 -6.38)"/><path class="cls-1" d="M36.34,9.39a3.93,3.93,0,0,1-.34.46l-2.8,2.8L22.36,23.46a1.69,1.69,0,0,1-.63.38c-1,.37-2.07.69-3.1,1.06a2.91,2.91,0,0,0-.72.5c-.13.1-.22.22-.34.32a.44.44,0,0,1-.61,0,.44.44,0,0,1-.06-.63c.18-.2.39-.38.56-.59a1.19,1.19,0,0,0,.26-.41c.36-1,.7-2.12,1.07-3.18a1.53,1.53,0,0,1,.34-.56L32.78,6.69c.41-.41.59-.41,1,0L36,8.92A3.82,3.82,0,0,1,36.34,9.39ZM21.82,22.56,35,9.38,33.27,7.62,20.05,20.79Zm-2.31-.8-.68,2,2.05-.69Z" transform="translate(-7 -6.38)"/></svg>
                        Educaci&oacute;n Financiera
                    </a>
                </li>
            </ul>
        </nav>
    </section>
    <section class="content-section">
    <div class="m-box">
        <div  class="m-boxes">
            <h5>Mi historial</h5>
            <p>Actualizar y modificar datos</p>
        </div>
        <div class="mo-boxes">
            <h5>Soluciones financieras</h5>
            <p>Beneﬁcios, posibilidades de pago y crédito</p>
        </div>
    </div>

        <div class="center">
            Evolución de mi perﬁl ﬁnanciero
        </div>

        <div class="vida box">
            <h5>Mi historial</h5>
            <p>Conoce tu comportamiento y evolución financiera</p>
        </div>
        <div class="vida box">
            <p class="osc">Evolución de mi perfil financiero</p>
        </div>
    
        <div class="history-box">
            <svg id="Capa_4" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 140.43 140.42"><defs><style>.cls-1{fill:url(#Degradado_sin_nombre_16);}.cls-2{fill:url(#Degradado_sin_nombre_16-2);}.cls-3{fill:url(#Degradado_sin_nombre_16-3);}.cls-4{fill:url(#Degradado_sin_nombre_16-4);}</style><linearGradient id="Degradado_sin_nombre_16" x1="39.44" y1="-14.98" x2="140.48" y2="208.33" gradientUnits="userSpaceOnUse"><stop offset="0.17" stop-color="#458ecc"/><stop offset="0.28" stop-color="#4a8bca"/><stop offset="0.41" stop-color="#5882c3"/><stop offset="0.56" stop-color="#7074b9"/><stop offset="0.71" stop-color="#9160aa"/><stop offset="0.86" stop-color="#bb4797"/><stop offset="1" stop-color="#e82c83"/></linearGradient><linearGradient id="Degradado_sin_nombre_16-2" x1="31.92" y1="-11.57" x2="132.96" y2="211.74" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-3" x1="90.36" y1="-38.01" x2="191.4" y2="185.3" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-4" x1="45.9" y1="-17.9" x2="146.94" y2="205.41" xlink:href="#Degradado_sin_nombre_16"/></defs><path class="cls-1" d="M111.13,18c.85-1.74,1.72-3.48,2.59-5.23.17-.35.33-.7.51-1A4.25,4.25,0,0,1,120.38,10q5.53,3.4,11,6.89a4.25,4.25,0,0,1,1.07,6.3c-1.4,1.85-2.84,3.67-4.29,5.56a6.35,6.35,0,0,1,2,3.27,5.5,5.5,0,0,1-.67,4.14c-1.05,1.73-2.1,3.45-3.2,5.14a5.46,5.46,0,0,1-5.14,2.6.86.86,0,0,0-.92.48c-1.89,3-3.8,6.1-5.7,9.14a10.44,10.44,0,0,0-1.2,8.75c.7,2.47,1.53,4.9,2.22,7.37A17.29,17.29,0,0,1,113.49,84c-1.45,2.35-2.93,4.69-4.39,7l-.43.73a28,28,0,0,1,3.07,1.22c1.7.92,3.34,1.94,5,3q9.14,5.65,18.26,0c1.13-.7,2.22-1.44,3.36-2.13a19,19,0,0,1,10.13-2.63,2.17,2.17,0,0,1,2.27,2.14,2.23,2.23,0,0,1-2.15,2.28,24,24,0,0,0-5,.76A25.58,25.58,0,0,0,138.36,99a22.88,22.88,0,0,1-7.7,3.55c-5.88,1.14-11.42.4-16.47-3a21,21,0,0,0-6.66-3.46c-1.39-.34-1.38-.36-2.13.84l-31.18,49.9a5.86,5.86,0,0,1-6.31,2.8,65.63,65.63,0,0,1-21.72-9.08,66.58,66.58,0,0,1-16.8-14.63c-2.18-2.72-2.32-5-.49-8l8.78-14c.18-.28.34-.56.54-.89-1.61,0-3.15,0-4.68,0A18.25,18.25,0,0,1,24.35,100c-.87-.54-1.74-1.09-2.58-1.67a15.22,15.22,0,0,0-8.94-2.8,2.35,2.35,0,0,1-2.05-.87,2.21,2.21,0,0,1,1.8-3.55,19.11,19.11,0,0,1,10.35,2.74c1.28.78,2.5,1.63,3.78,2.41A16.21,16.21,0,0,0,41,97.63a2.57,2.57,0,0,0,1.22-1c8.48-13.53,17-27,25.38-40.62a18.49,18.49,0,0,1,14-9c2.27-.3,4.54-.66,6.78-1.13a9.85,9.85,0,0,0,6.36-4.56q2.92-4.62,5.78-9.29a1.1,1.1,0,0,0,0-.94,5.76,5.76,0,0,1,.25-6.06c.92-1.47,1.84-3,2.77-4.42A5.68,5.68,0,0,1,110.8,18,2.91,2.91,0,0,0,111.13,18ZM50,92.56l.55-.16a22,22,0,0,1,11.83-.82.88.88,0,0,0,1.11-.51c1.65-2.68,3.33-5.34,5-8,4.14-6.63,8.26-13.28,12.43-19.88A11.24,11.24,0,0,1,93.18,58c4.12,1,7.14,3.73,9.62,7.06a2.09,2.09,0,0,1,0,2.49c-1,1.57-2,3.13-2.92,4.72a1.51,1.51,0,0,0-.12,1.12,5.92,5.92,0,0,1-.65,5.23q-4.84,7.71-9.67,15.45l-1.72,2.78.14.16c1.1-.69,2.23-1.35,3.3-2.1a20.33,20.33,0,0,1,12.12-3.8,1.2,1.2,0,0,0,.84-.47q2.88-4.55,5.71-9.13a12.61,12.61,0,0,0,1.61-10.33c-.62-2.26-1.35-4.49-2-6.73a15.71,15.71,0,0,1,1.91-14.08c1.83-2.76,3.53-5.61,5.32-8.48l-12.19-7.62c-.22.33-.41.6-.58.88-1.74,2.79-3.47,5.58-5.23,8.36a14.27,14.27,0,0,1-9.14,6.63,63.6,63.6,0,0,1-6.85,1.16,14.55,14.55,0,0,0-11.42,7.26c-3.67,6.11-7.52,12.1-11.3,18.14C56.6,82,53.33,87.17,50,92.56Zm10.5,3.27a1.74,1.74,0,0,0-.32-.13A16.05,16.05,0,0,0,49.4,97.88c-1.4.89-2.8,1.76-4.19,2.67a2.13,2.13,0,0,0-.67.7q-6.06,9.66-12.08,19.32a1.57,1.57,0,0,0,.14,2.25,56.14,56.14,0,0,0,10.84,10.44,65.69,65.69,0,0,0,24.73,11.9c1.41.32,1.75.18,2.52-1.06l29.69-47.5.53-.88c-.53.08-.88.11-1.23.18a16.78,16.78,0,0,0-6.49,3,21.14,21.14,0,0,1-8.47,3.79,1.69,1.69,0,0,0-1.26.9c-5.09,8.19-10.22,16.35-15.3,24.54A7.79,7.79,0,0,1,64,131.5c-5.19,1.82-9.77.54-13.73-3a10.13,10.13,0,0,1-1.78-13.56c2-3,3.85-6.12,5.77-9.19ZM65,97.07c-.18.26-.33.46-.46.66-4.17,6.67-8.32,13.36-12.51,20a5.19,5.19,0,0,0-.21,5.49,9.3,9.3,0,0,0,9.4,4.55,4.86,4.86,0,0,0,3.47-2.37c4.44-7.22,9-14.39,13.45-21.58.15-.25.3-.5.51-.87-4.4-.21-8-2.16-11.44-4.54C66.46,97.94,65.71,97.53,65,97.07Zm15-24L67.29,93.26c1.52,1,3,1.9,4.44,2.86a15.4,15.4,0,0,0,8.94,2.52,1.1,1.1,0,0,0,1-.6c3-4.9,6.11-9.78,9.17-14.68.32-.52.63-1,1-1.64C86.27,81.05,82.16,78.48,79.91,73.06Zm28.6-51.24a5.32,5.32,0,0,0-1.06.93c-1,1.52-2,3.08-2.9,4.63a1.32,1.32,0,0,0,.49,2.09q7.74,4.86,15.5,9.7c1,.61,1.58.46,2.21-.54,1-1.49,1.88-3,2.81-4.5a1.35,1.35,0,0,0-.51-2.16q-7.74-4.84-15.51-9.68A9.76,9.76,0,0,0,108.51,21.82Zm15.92,4.55,4.49-5.82-10.78-6.74-3.26,6.59ZM85,73.3l3.68-5.89c1.07-1.71,1.88-2,3.72-1.16,1.49.72,2.89,1.66,4.37,2.53.37-.58.84-1.26,1.23-2a.82.82,0,0,0-.11-.75,49.29,49.29,0,0,0-4.21-3.17,5.7,5.7,0,0,0-4.17-.66C84.28,63.25,82,68.59,85,73.3Zm6.77-2.47-3.47,5.54c1.2.31,2.23.66,3.3.83a4.4,4.4,0,0,0,3-.45c1-.63,1.22-1.21.7-2.28A9.14,9.14,0,0,0,91.76,70.83Z" transform="translate(-10.31 -9.32)"/><path class="cls-2" d="M44.76,24.29c-3.68-.52-4.41-.94-4.38-2.47s.85-2,4.44-2.35c0-.64,0-1.31,0-2a2.28,2.28,0,0,1,2.28-2.34,2.34,2.34,0,0,1,2.2,2.43c0,.6,0,1.2,0,1.89,1.79.29,4.38-.43,4.36,2.42s-2.5,2.14-4.32,2.32c-.13,1.84.42,4.3-2.32,4.29S44.88,26.1,44.76,24.29Z" transform="translate(-10.31 -9.32)"/><path class="cls-3" d="M136.58,71.64c-3.68-.52-4.41-.94-4.38-2.47s.85-2,4.44-2.35c0-.64,0-1.31,0-2a2.28,2.28,0,0,1,2.28-2.34,2.34,2.34,0,0,1,2.2,2.43c0,.6,0,1.2,0,1.89,1.79.29,4.38-.43,4.36,2.41s-2.5,2.15-4.32,2.33c-.13,1.83.42,4.3-2.32,4.29S136.7,73.45,136.58,71.64Z" transform="translate(-10.31 -9.32)"/><path class="cls-4" d="M112.62,137.05c-3.68-.51-4.41-.93-4.38-2.47s.85-2,4.44-2.35c0-.64,0-1.31,0-2a2.29,2.29,0,0,1,2.28-2.34,2.34,2.34,0,0,1,2.2,2.43c0,.61,0,1.21,0,1.9,1.79.28,4.38-.44,4.36,2.41s-2.5,2.14-4.31,2.32c-.14,1.84.41,4.3-2.33,4.3S112.74,138.86,112.62,137.05Z" transform="translate(-10.31 -9.32)"/></svg>
            <svg version="1.1" id="Capa_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 290.658 290.658" xml:space="preserve" fill="#c0bfbc"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <rect y="139.474" style="fill:#c0bfbc;" width="290.658" height="11.711"></rect> </g> </g> </g></svg>
            <svg id="Capa_4" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 146.29 148.13"><defs><style>.cls-1{fill:url(#Degradado_sin_nombre_16);}.cls-2{fill:url(#Degradado_sin_nombre_16-2);}.cls-3{fill:url(#Degradado_sin_nombre_16-3);}.cls-4{fill:url(#Degradado_sin_nombre_16-4);}.cls-5{fill:url(#Degradado_sin_nombre_16-5);}.cls-6{fill:url(#Degradado_sin_nombre_16-6);}.cls-7{fill:url(#Degradado_sin_nombre_16-7);}</style><linearGradient id="Degradado_sin_nombre_16" x1="26.6" y1="5.96" x2="147.17" y2="204.08" gradientUnits="userSpaceOnUse"><stop offset="0.17" stop-color="#458ecc"/><stop offset="0.28" stop-color="#4a8bca"/><stop offset="0.41" stop-color="#5882c3"/><stop offset="0.56" stop-color="#7074b9"/><stop offset="0.71" stop-color="#9160aa"/><stop offset="0.86" stop-color="#bb4797"/><stop offset="1" stop-color="#e82c83"/></linearGradient><linearGradient id="Degradado_sin_nombre_16-2" x1="81.35" y1="-27.36" x2="201.92" y2="170.76" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-3" x1="82.54" y1="-28.09" x2="203.11" y2="170.03" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-4" x1="47.41" y1="-6.71" x2="167.98" y2="191.41" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-5" x1="84.75" y1="-29.43" x2="205.32" y2="168.69" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-6" x1="48.7" y1="55.83" x2="169.27" y2="253.95" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-7" x1="-0.58" y1="5.61" x2="119.99" y2="203.73" xlink:href="#Degradado_sin_nombre_16"/></defs><path class="cls-1" d="M85.94,22.35a45.57,45.57,0,0,1,.64,4.95,1.32,1.32,0,0,0,1,1.3,5.94,5.94,0,0,1,3.85,6.65,6,6,0,0,1-5.31,5c-.33,0-.67.12-1.12.2A24.52,24.52,0,0,1,82,53l2.82.55c1.64.32,2.25,1.25,1.81,2.88-1.07,3.95-2.17,7.9-3.23,11.86a1.72,1.72,0,0,0,0,1.09,21.45,21.45,0,0,1,1.94,10.23,4.41,4.41,0,0,0,.12.53H87.9c3.21,0,6.43,0,9.64,0a1.26,1.26,0,0,0,1.39-.8,3.21,3.21,0,0,1,3.1-1.9c1.72,0,3.43,0,5.14,0a3.53,3.53,0,0,1,3.29,2.06,1.81,1.81,0,0,0,1.17.88c3.1.36,6.21.75,9.32.88,1.77.07,3.56-.47,5.35-.51,9.4-.26,17.44,2.87,23.88,9.82a21.69,21.69,0,0,1,4.69,8.17,4,4,0,0,0,.28.54v44.23a3.59,3.59,0,0,1-3,1.05c-3.56-.07-7.11,0-10.67,0-1.81,0-2.53-.66-2.5-2.45A103.29,103.29,0,0,0,137.66,124,64.13,64.13,0,0,0,132,105.14c-2.35-4.66-5.39-8.74-9.9-11.56a2.79,2.79,0,0,0-1.51-.51c-3.28.25-6.55.59-9.33.85-2.17,1.64-1.83,3.55-1.59,5.49a6.11,6.11,0,0,1-.2,2.16c-1.08,4.41-4.64,7.15-9.4,7.19-4.46,0-8.91,0-13.37,0-.45,0-.9,0-1.43.07,0,4.16,0,8.18,0,12.2a3.6,3.6,0,0,0,.41,1.33c1.43,3.39,2.88,6.77,4.3,10.16.77,1.83,0,3-2,3.14-.88,0-1.77,0-2.76,0,0,2.23,0,4.28,0,6.33s-.59,2.54-2.49,2.54H48.18c-1.87,0-2.52-.66-2.53-2.56,0-2.05,0-4.1,0-6.31-.91,0-1.71,0-2.52,0-2.14-.06-2.92-1.25-2.13-3.22l.74-1.79a49.2,49.2,0,0,1-5.3,0,14.89,14.89,0,0,1-12.93-14.49q0-22.5,0-45A15,15,0,0,1,45.05,57.82,41.16,41.16,0,0,1,50,61.17a1.74,1.74,0,0,0,0-.45c-.62-3.32-1.24-6.64-1.9-9.95-.45-2.3-.21-2.8,1.84-3.62l-.57-6.73c-.2-.05-.48-.15-.77-.2a6.07,6.07,0,0,1-5.25-5.33,6.19,6.19,0,0,1,4.21-6.48,2,2,0,0,0,1.06-1.16A19.43,19.43,0,0,1,58.86,14.91c6.31-3.25,14.54-.93,16.23-.45a.86.86,0,0,0,.79-.2C81,8.88,85.11,18.61,85.94,22.35ZM81.32,94.16h-3c-1.82,0-2.37-.41-2.79-2.15-1.15-4.64-2.26-9.29-3.43-13.93a30.37,30.37,0,0,0-1.57-5.26A5.07,5.07,0,0,0,64,70.46,5.32,5.32,0,0,0,60.83,77c.59,2.49,1.25,5,1.84,7.46a1.9,1.9,0,0,1-1.38,2.38A1.86,1.86,0,0,1,59,85.51a10.57,10.57,0,0,1-.39-1.36,67.81,67.81,0,0,1-1.82-8.24c-.5-4.79,3.07-8.89,8-9.68a9.27,9.27,0,0,1,10.08,6.91c.67,2.47,1.24,5,1.86,7.46.79,3.21,1.6,6.43,2.38,9.6h2.27c0-4,0-7.86,0-11.75a24.11,24.11,0,0,0-.24-3.06C79.94,66.9,71,60.64,62.63,62.38a15.88,15.88,0,0,0-13,16c0,10.8,0,21.6,0,32.39,0,.42,0,.83.07,1.28H81.27v-3.33c-3.09,0-6.08,0-9.08,0a9.24,9.24,0,0,1-9.21-7c-.69-2.51-1.3-5-1.89-7.58-.34-1.45.24-2.44,1.45-2.68s2,.42,2.35,1.8c.62,2.44,1.19,4.9,1.82,7.33a5.29,5.29,0,0,0,5.23,4.12c1.07,0,2.14,0,3.21,0h6.17Zm70,46.49c0-5.46,0-10.77,0-16.08a11.42,11.42,0,0,0-.43-2.78c-2.13-8.23-5.27-15.91-11.8-21.76a2,2,0,0,1-.29-2.67,1.94,1.94,0,0,1,2.75-.31A11.49,11.49,0,0,1,143,98.3a38,38,0,0,1,7.6,11c.17.35.38.69.74,1.35,0-3.17.06-6,0-8.73a10.34,10.34,0,0,0-.66-3.35,20.81,20.81,0,0,0-10.08-10.71,26.66,26.66,0,0,0-17-3c0,1.52,0,2.93,0,4.33a1.5,1.5,0,0,0,.67,1,30.3,30.3,0,0,1,10.16,11.2c5.26,9.48,7.21,19.86,8.18,30.48.26,2.89.35,5.79.52,8.73ZM27.67,117.81c.81,6,7.21,10.26,13.1,8.87,1.13-.27,2.65-.59,3.16-1.41a10.25,10.25,0,0,0,1.65-5c.13-13.89.07-27.77.07-41.65a21.13,21.13,0,0,1,2.7-10.56,2.17,2.17,0,0,0,0-1.73,11.09,11.09,0,0,0-12.73-5.79c-4.12,1.1-7.56,4.83-8,8.76,1.84,0,3.68,0,5.51,0a7,7,0,0,1,7.25,7.31q0,7.59,0,15.17a6.93,6.93,0,0,1-7.26,7.26c-1.91,0-3.83,0-5.75,0v3.61h1.1a41,41,0,0,1,6.28.16c4,.67,6.09,4.19,5.61,8.75a7.07,7.07,0,0,1-7.14,6.23C31.43,117.82,29.56,117.81,27.67,117.81Zm53.22-77.5c-1.29,0-2.4.06-3.51,0a1.9,1.9,0,0,1-1.9-1.89,2,2,0,0,1,1.92-2,11.22,11.22,0,0,1,1.16,0c2.31,0,4.63,0,6.94,0a2,2,0,0,0,2-2,2.06,2.06,0,0,0-2-2.13,13.28,13.28,0,0,0-1.41,0h-21c-4.37,0-8.74,0-13.11,0a3.08,3.08,0,0,0-1.93.42,3.21,3.21,0,0,0-.85,2.19,1.89,1.89,0,0,0,2.13,1.63H63.73c1.63,0,3.26,0,4.89,0,.93,0,1.78.46,1.87,1.42a2.82,2.82,0,0,1-.64,2,2.91,2.91,0,0,1-1.9.49c-3.3,0-6.6,0-9.9,0H53.46a19.69,19.69,0,0,0,.6,6.58,1.67,1.67,0,0,0,1.59,1.46c7.11,1.25,14.21,2.55,21.32,3.79a1.36,1.36,0,0,0,1.15-.44A18,18,0,0,0,80.89,40.31Zm4.49,91.43c-.8-1.91-1.5-3.59-2.22-5.27-1.14-2.69-1.14-2.68-4.1-2.67a1.56,1.56,0,0,0-1.61.7c-3.51,5.35-10.44,5.33-14,0a1.85,1.85,0,0,0-1.29-.71c-4.11,0-8.23,0-12.34,0-.34,0-.89.13-1,.35-1.11,2.47-2.14,5-3.25,7.58h1.75q11.25,0,22.5,0c1.47,0,2.34.76,2.34,2s-.77,1.88-2.21,2c-.38,0-.77,0-1.15,0H51.2c-.5,0-1,0-1.49.07v4.84H81.29v-4.92c-.67,0-1.26,0-1.85,0-1.53-.06-2.48-.88-2.42-2.06s1-1.88,2.45-1.89C81.36,131.73,83.24,131.74,85.38,131.74Zm-58-36.59c2.17,0,4.26.1,6.33,0A2.91,2.91,0,0,0,36.55,92c.06-5.22.05-10.44,0-15.66a2.83,2.83,0,0,0-2.46-3c-2.2-.11-4.41,0-6.67,0ZM54.13,61.7a20.13,20.13,0,0,1,26.15,3l2.1-7.63L52.22,51.68Zm19-43.76A15.55,15.55,0,0,0,52.45,28.06H71.24C71.89,24.68,72.51,21.39,73.16,17.94Zm22.07,86.83c1.9,0,3.68,0,5.46,0a5.21,5.21,0,0,0,5.09-4.67,5.05,5.05,0,0,0-3.93-5.65,51.37,51.37,0,0,0-6.62-.35Zm-9.87-20.6v6H98.48v-6ZM27.47,106.53v7.33c2,0,4,.08,6,0s3.11-1.45,3.07-3.77c0-2.17-1.18-3.46-3.22-3.53S29.51,106.53,27.47,106.53Zm63.63-1.82V94.27H85.36v10.44ZM82.73,28.07a21.71,21.71,0,0,0-.37-3.38,60.94,60.94,0,0,0-2.22-6.9c-.55-1.33-1.4-1.3-2.13-.07-1.87,3.17-2.32,6.7-2.58,10.35Zm-8,92.25a4.24,4.24,0,0,0-4.22-4.27,4.38,4.38,0,0,0-4.28,4.27,4.24,4.24,0,0,0,4.27,4.21A4.15,4.15,0,0,0,74.7,120.32Zm-11.4-4.21H49.71v3.73H62.15ZM106.72,92.4v-11H102.5v8.86Zm4-2.37c2.75-.26,5.38-.48,8-.77a1,1,0,0,0,.7-.66c.08-1.13,0-2.27,0-3.47l-8.74-.83Zm-29.5,29.8v-3.72h-3.6l1.11,3.72Z" transform="translate(-8.87 -12.68)"/><path class="cls-2" d="M155.15,71.29a3.71,3.71,0,0,1-2.92,1.25A56.41,56.41,0,0,0,133,77.28c-1.46.66-2.51.4-3-.73s-.05-2.12,1.41-2.8a59.49,59.49,0,0,1,19.47-5c.47,0,.94-.09,1.4-.18a2.62,2.62,0,0,1,3,1.2Z" transform="translate(-8.87 -12.68)"/><path class="cls-3" d="M155.15,81.31c-1,1.13-2.13,1.17-3.53.65a18.92,18.92,0,0,0-7.94-1c-1.51.09-2.52-.61-2.61-1.82s.89-2,2.37-2.12a24.34,24.34,0,0,1,9.69,1.37,9.37,9.37,0,0,1,2,1.42Z" transform="translate(-8.87 -12.68)"/><path class="cls-4" d="M65.23,20.56c.72,0,1.45,0,2.17,0a1.78,1.78,0,0,1,1.88,1.84,1.82,1.82,0,0,1-1.72,2,41.46,41.46,0,0,1-4.73,0,1.93,1.93,0,0,1,.09-3.86C63.69,20.52,64.46,20.56,65.23,20.56Z" transform="translate(-8.87 -12.68)"/><path class="cls-5" d="M112.87,23c-3.68-.52-4.4-.94-4.37-2.47s.85-2,4.43-2.35c0-.64,0-1.31,0-2a2.28,2.28,0,0,1,2.27-2.34,2.34,2.34,0,0,1,2.21,2.43c0,.6,0,1.21,0,1.89,1.8.29,4.39-.43,4.36,2.42s-2.49,2.14-4.31,2.32c-.14,1.84.42,4.3-2.32,4.29S113,24.82,112.87,23Z" transform="translate(-8.87 -12.68)"/><path class="cls-6" d="M106.23,156.59c-3.68-.51-4.41-.93-4.38-2.47s.86-2,4.44-2.35c0-.64,0-1.31,0-2a2.28,2.28,0,0,1,2.27-2.34,2.36,2.36,0,0,1,2.21,2.43c0,.61,0,1.21,0,1.9,1.79.28,4.38-.44,4.36,2.41s-2.49,2.14-4.31,2.32c-.14,1.84.42,4.3-2.32,4.3S106.36,158.4,106.23,156.59Z" transform="translate(-8.87 -12.68)"/><path class="cls-7" d="M13.25,34.57c-3.68-.52-4.41-.94-4.38-2.47s.85-2,4.44-2.35c0-.64,0-1.31,0-2a2.28,2.28,0,0,1,2.28-2.34,2.34,2.34,0,0,1,2.2,2.43c0,.6,0,1.2,0,1.89,1.79.29,4.38-.43,4.36,2.41s-2.5,2.15-4.32,2.33c-.13,1.83.42,4.3-2.32,4.29S13.37,36.38,13.25,34.57Z" transform="translate(-8.87 -12.68)"/></svg>
            <svg version="1.1" id="Capa_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 290.658 290.658" xml:space="preserve" fill="#c0bfbc"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <rect y="139.474" style="fill:#c0bfbc;" width="290.658" height="11.711"></rect> </g> </g> </g></svg>
            <svg id="Capa_4" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 125.32 141.78"><defs><style>.cls-1{fill:url(#Degradado_sin_nombre_16);}.cls-2{fill:url(#Degradado_sin_nombre_16-2);}.cls-3{fill:url(#Degradado_sin_nombre_16-3);}.cls-4{fill:url(#Degradado_sin_nombre_16-4);}.cls-5{fill:url(#Degradado_sin_nombre_16-5);}.cls-6{fill:url(#Degradado_sin_nombre_16-6);}.cls-7{fill:url(#Degradado_sin_nombre_16-7);}.cls-8{fill:url(#Degradado_sin_nombre_16-8);}.cls-9{fill:url(#Degradado_sin_nombre_16-9);}</style><linearGradient id="Degradado_sin_nombre_16" x1="25.49" y1="0.17" x2="174.93" y2="181.88" gradientUnits="userSpaceOnUse"><stop offset="0.17" stop-color="#458ecc"/><stop offset="0.28" stop-color="#4a8bca"/><stop offset="0.41" stop-color="#5882c3"/><stop offset="0.56" stop-color="#7074b9"/><stop offset="0.71" stop-color="#9160aa"/><stop offset="0.86" stop-color="#bb4797"/><stop offset="1" stop-color="#e82c83"/></linearGradient><linearGradient id="Degradado_sin_nombre_16-2" x1="14.62" y1="9.12" x2="164.05" y2="190.82" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-3" x1="3.78" y1="18.03" x2="153.22" y2="199.73" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-4" x1="46.21" y1="-16.87" x2="195.65" y2="164.83" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-5" x1="14.91" y1="8.87" x2="164.35" y2="190.58" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-6" x1="33.24" y1="-6.2" x2="182.68" y2="175.5" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-7" x1="5.97" y1="-8.7" x2="155.41" y2="173.01" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-8" x1="-9.98" y1="4.42" x2="139.46" y2="186.13" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-9" x1="21.16" y1="-21.19" x2="170.6" y2="160.51" xlink:href="#Degradado_sin_nombre_16"/></defs><path class="cls-1" d="M48.78,152.67a3,3,0,0,1-1.33-2.83c0-5.55,0-11.09,0-16.63a22.29,22.29,0,0,1,16.27-21.36c1.48-.44,2.61-2,3.95-3a28.6,28.6,0,0,1,2.68-1.49c-.13-.17-.35-.76-.77-1A31.61,31.61,0,0,1,56.43,94.23a2.06,2.06,0,0,0-2.12-1.16c-1.77.09-3.54.05-5.32,0a9.55,9.55,0,0,1-5.66-17.22,2,2,0,0,0,.69-1.4c.06-4.21.08-8.42,0-12.63a2.76,2.76,0,0,0-1.07-1.75,22.17,22.17,0,0,1-7-8.24c-2.34-5.2-1.41-10.12,1.47-14.79a39.16,39.16,0,0,1,3.3-4.32c1-1.23,2.14-1.37,3.12-.56s.89,2,0,3.18a41.61,41.61,0,0,0-3.3,4.48c-3.26,5.71-2,11.58,3.43,15.67.08-1.28.17-2.49.23-3.7.23-4.67,4.31-9,10.31-9,12.68.06,25.36,0,38,0,2.79,0,5.59,0,8.38,0,.52,0,1.21,0,1.51.3.51.52,1.13,1.34,1,1.92s-.89,1.3-1.53,1.7c-.43.26-1.13.11-1.7.11H54.6c-3.19,0-5.32,1.4-6.16,4-.13.41-.17.85-.28,1.39h70.78A5.23,5.23,0,0,0,114.48,47c-1.44-.2-2.92-.14-4.38-.2s-2.44-.84-2.39-2.08,1-1.94,2.41-1.95c2.47,0,5-.22,7.31.91,3.9,1.9,5.67,5.15,5.78,9.4,0,.75,0,1.5,0,2.29,3-1.53,5.69-6.81,5.32-10.08-.49-4.29-2.72-7.62-5.65-10.55-5.61-5.61-12.49-9.08-20-11.4A64.54,64.54,0,0,0,76.65,20.9a61.33,61.33,0,0,0-22.59,6.79c-1.36.72-2.65,1.6-4,2.38s-2.49.59-3.14-.47-.26-2.14,1.06-3a63.46,63.46,0,0,1,27.52-9.66,68.09,68.09,0,0,1,30,3c7.78,2.59,14.89,6.4,20.65,12.37,3.68,3.82,6.38,8.19,6.4,13.73,0,4.74-2.29,8.44-5.52,11.67a8.75,8.75,0,0,1-1.9,1.66c-1.73.93-2.05,2.32-2,4.17.15,3.59,0,7.18.08,10.77a2.36,2.36,0,0,0,.8,1.6,9.59,9.59,0,0,1,3.22,10.72,9.41,9.41,0,0,1-8.73,6.42c-2,.05-4,0-6,.06a2,2,0,0,0-1.45.8,32.82,32.82,0,0,1-13.56,12.55c-.37.19-.55.72-.66.87a16.86,16.86,0,0,1,3,1.81,14.19,14.19,0,0,0,5.41,3.37,21.77,21.77,0,0,1,14.52,20.15c.08,5.8,0,11.61,0,17.42a2.88,2.88,0,0,1-1.33,2.57ZM56,62.76a7.37,7.37,0,0,0-.09.75q0,7.11,0,14.23a27.23,27.23,0,0,0,1.68,9.62,27.75,27.75,0,0,0,53.8-8.29c.15-5.14.06-10.29.07-15.43a8.26,8.26,0,0,0-.09-.85C102.9,68.46,93.46,70,83.7,70S64.47,68.51,56,62.76Zm8.52,53a44.07,44.07,0,0,0-4.66,2.36c-4.81,3.19-7.74,7.66-8.08,13.46-.29,5-.16,9.92-.22,14.88,0,.69,0,1.39,0,2.16H76.05c.55-6.53,1.39-13,1.79-19.64a2.9,2.9,0,0,0-.58.18c-.79.78-1.57,1.57-2.37,2.34-1.42,1.37-2.83,1.14-3.7-.65-.6-1.23-1.11-2.5-1.67-3.75Zm51.2,32.89a5.36,5.36,0,0,0,.08-.63c0-4.83,0-9.66,0-14.49a18.24,18.24,0,0,0-1.8-8.08,18,18,0,0,0-11.2-9.52c-.28.6-.52,1.11-.75,1.63-1.92,4.32-3.83,8.64-5.77,13-1,2.24-2.33,2.47-4.06.76l-2.34-2.33-.46.24q.93,9.7,1.87,19.46Zm-4.3-92.1H56c1,1.92,3.36,3.87,6.17,5.19a47.27,47.27,0,0,0,18.26,4.1c8.5.38,16.81-.48,24.64-4.12A13.65,13.65,0,0,0,111.37,56.54ZM81.85,130.88c-.59,6-1.15,11.81-1.73,17.7h7c-.58-6-1.16-11.85-1.74-17.7ZM74.59,108.4c0,1.15-.53,2.19.63,3q3.7,2.58,7.35,5.24a1.59,1.59,0,0,0,2.13,0c2.24-1.65,4.47-3.34,6.81-4.84,1.38-.87,1.42-1.93,1.12-3.37A33.3,33.3,0,0,1,74.59,108.4ZM53.48,89.06l-2-10.94c-.78,0-1.67,0-2.55,0A5.46,5.46,0,0,0,48.6,89C50.28,89.16,52,89.06,53.48,89.06Zm60.31,0a48.24,48.24,0,0,0,5.09,0,5.38,5.38,0,0,0,4.72-6.58c-.78-3.42-3.78-5-7.79-4.15C115.13,81.91,114.46,85.46,113.79,89ZM97.57,112.39,87,120l6.54,6.55,5.51-12.39Zm-27.77.09c-1.67,1.45-1.68,1.45-.85,3.32,1.13,2.54,2.25,5.09,3.38,7.63.48,1.08,1,2.16,1.41,3.14L80.33,120ZM48.26,56.57v17.3h3.48V59.29C51.74,56,51.74,56,48.26,56.57ZM119,73.91V56.42a13.1,13.1,0,0,1-1.78,0c-1.36-.2-1.74.34-1.71,1.68.08,4.25,0,8.5,0,12.75v3.07ZM80.48,126a6.33,6.33,0,0,0,6.14.06l-3-3.14Zm53-2.15c-3.68-.52-4.4-.94-4.37-2.47s.85-2,4.43-2.35c0-.65,0-1.32,0-2a2.29,2.29,0,0,1,2.27-2.35,2.36,2.36,0,0,1,2.21,2.44c0,.6,0,1.2,0,1.89,1.8.29,4.39-.43,4.36,2.41s-2.49,2.15-4.31,2.33c-.14,1.83.42,4.29-2.32,4.29S133.6,125.67,133.47,123.86Zm-112-61.79c-3.68-.52-4.41-.94-4.38-2.47s.85-2,4.44-2.35c0-.64,0-1.31,0-2a2.28,2.28,0,0,1,2.28-2.34A2.34,2.34,0,0,1,26,55.36c0,.6,0,1.21,0,1.89,1.79.29,4.38-.43,4.36,2.42s-2.5,2.14-4.31,2.32c-.14,1.84.41,4.3-2.33,4.29S21.57,63.88,21.45,62.07ZM132.39,20c-3.68-.52-4.41-.94-4.38-2.47s.86-2,4.44-2.35c0-.64,0-1.31,0-2a2.27,2.27,0,0,1,2.27-2.34,2.34,2.34,0,0,1,2.21,2.43c0,.6,0,1.2,0,1.89,1.79.29,4.39-.43,4.36,2.42S138.81,19.77,137,20c-.14,1.84.42,4.3-2.32,4.29S132.52,21.84,132.39,20Z" transform="translate(-17.07 -10.89)"/><path class="cls-2" d="M83.78,98.11A9.78,9.78,0,0,1,76,94.39c-.85-1-.84-2.11,0-2.81a1.76,1.76,0,0,1,2.73.48,6.2,6.2,0,0,0,9.83,0,1.75,1.75,0,0,1,2.65-.5c.85.68.87,1.74.07,2.81A9.77,9.77,0,0,1,83.78,98.11Z" transform="translate(-17.07 -10.89)"/><path class="cls-3" d="M103.59,141.45c-1.42,0-2.83,0-4.25,0s-2.41-.84-2.39-2.08.83-2,2.33-2c2.87-.06,5.75-.06,8.62,0,1.5,0,2.31.81,2.33,2s-.86,2-2.4,2.08S105,141.45,103.59,141.45Z" transform="translate(-17.07 -10.89)"/><path class="cls-4" d="M92.64,32.86h-3c-.91,0-1.23-.31-1.28-1.2a4.23,4.23,0,0,0-8.41-.26,4.25,4.25,0,0,0,3.49,4.69c.24,0,.5,0,.75.06A.93.93,0,1,1,84,38a6.26,6.26,0,0,1-3.37-1.1,1.74,1.74,0,0,0-.83-.27c-.88,0-1.76,0-2.63,0a3.64,3.64,0,0,1-3.24-3.46.53.53,0,0,0-.38-.54,3.65,3.65,0,0,1-2.41-3.43c0-.37,0-.75,0-1.13A1,1,0,0,1,72.23,27c2.64,0,5.27,0,7.91,0a1.57,1.57,0,0,0,.74-.2,6.07,6.07,0,0,1,6.47,0,1.65,1.65,0,0,0,.75.2c2.58,0,5.16,0,7.74,0,1,0,1.29.3,1.27,1.29A8.91,8.91,0,0,1,97,30.12,3.43,3.43,0,0,1,94.7,32.6a.53.53,0,0,0-.39.53,3.65,3.65,0,0,1-3.06,3.45,3.29,3.29,0,0,1-.54.05,1,1,0,0,1-1-.86,1,1,0,0,1,.86-1,3.09,3.09,0,0,0,1.3-.54A5,5,0,0,0,92.64,32.86Zm-19.57-4a1.72,1.72,0,0,0,1.41,2.1c1.19.07,2.39,0,3.55,0l.76-2.11Zm22.1,0H89.46L90.21,31c1.08,0,2.16,0,3.25,0A1.74,1.74,0,0,0,95.17,28.85ZM78.66,34.71l-.61-1.81H75.8C75.9,34.38,76.89,35,78.66,34.71Z" transform="translate(-17.07 -10.89)"/><path class="cls-5" d="M81,68.85V80.23s0,4.09-3.68,4.2H62.55a4.85,4.85,0,0,1-4.74-5.05l-.16-17.2,5.19,2.09V77.06a2.67,2.67,0,0,0,3,2.79l8.15,0s2.26.28,2.11-2.34V67.54Z" transform="translate(-17.07 -10.89)"/><path class="cls-6" d="M86,68.85V80.23s0,4.09,3.69,4.2h14.75a4.84,4.84,0,0,0,4.73-5.05l.17-17.2-5.19,2.09V77.06a2.67,2.67,0,0,1-3,2.79l-8.15,0s-2.26.28-2.11-2.34V67.54Z" transform="translate(-17.07 -10.89)"/><rect class="cls-7" x="61.72" y="62.42" width="8.35" height="3.49"/><rect class="cls-8" x="34.61" y="61.98" width="8.35" height="3.49"/><rect class="cls-9" x="87.19" y="62.42" width="8.35" height="3.49"/></svg>
            <svg version="1.1" id="Capa_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 290.658 290.658" xml:space="preserve" fill="#c0bfbc"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <rect y="139.474" style="fill:#c0bfbc;" width="290.658" height="11.711"></rect> </g> </g> </g></svg>
            <svg id="Capa_4" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 129.35 118.91"><defs><style>.cls-1{fill:url(#Degradado_sin_nombre_16);}.cls-2{fill:url(#Degradado_sin_nombre_16-2);}.cls-3{fill:url(#Degradado_sin_nombre_16-3);}.cls-4{fill:url(#Degradado_sin_nombre_16-4);}.cls-5{fill:url(#Degradado_sin_nombre_16-5);}</style><linearGradient id="Degradado_sin_nombre_16" x1="45.86" y1="17.4" x2="122.57" y2="177.42" gradientUnits="userSpaceOnUse"><stop offset="0.17" stop-color="#458ecc"/><stop offset="0.28" stop-color="#4a8bca"/><stop offset="0.41" stop-color="#5882c3"/><stop offset="0.56" stop-color="#7074b9"/><stop offset="0.71" stop-color="#9160aa"/><stop offset="0.86" stop-color="#bb4797"/><stop offset="1" stop-color="#e82c83"/></linearGradient><linearGradient id="Degradado_sin_nombre_16-2" x1="29.7" y1="25.15" x2="106.41" y2="185.17" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-3" x1="107.87" y1="-12.32" x2="184.58" y2="147.7" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-4" x1="11.88" y1="33.7" x2="88.59" y2="193.71" xlink:href="#Degradado_sin_nombre_16"/><linearGradient id="Degradado_sin_nombre_16-5" x1="64.24" y1="8.59" x2="140.95" y2="168.61" xlink:href="#Degradado_sin_nombre_16"/></defs><path class="cls-1" d="M50.27,124.6a26.31,26.31,0,0,1,5.83-11.3,23,23,0,0,0-10.6,0,25,25,0,0,0-9.25,4.2c-3.88,2.79-8.12,3-11.36.5a9.92,9.92,0,0,1-2.57-3c-2.12-4-4.09-8-6.07-12.07a6.46,6.46,0,0,1,3.6-9.21A11.27,11.27,0,0,1,33.74,98l.53.82a37.31,37.31,0,0,1,29.39-7L65.52,87a26.52,26.52,0,0,1-4.81,0,7.75,7.75,0,0,1-5.62-4.32Q50.63,73.86,46.27,65a8.71,8.71,0,0,1,5.54-12.16v-4.5H50.44c-5.62,0-11.23,0-16.84,0-1.66,0-3-.46-3.71-2.07s0-2.92,1.18-4.06c1.58-1.52,3.12-3.07,4.85-4.77-1.83-1.79-3.59-3.47-5.3-5.2a3.06,3.06,0,0,1-.72-3.6,3.3,3.3,0,0,1,3.1-2H53.5c1.91,0,2.7.78,2.7,2.68q0,11,0,21.9v1.65c3.6.88,5.29,3.67,6.74,6.77s3,5.94,4.47,9l6.19-1.37c-4.42-7-5.63-14.44-3.22-22.32A25.06,25.06,0,0,1,79.47,32a26,26,0,0,1,38.62,8.53,25.52,25.52,0,0,1,3,11.88,26.47,26.47,0,0,1-2.8,12.06c4.52,1.53,7.17,4.44,7.15,9.52l4.6-2.14c2-.91,3.86-2,6.18-2a8.72,8.72,0,0,1,8.26,6.27,8.32,8.32,0,0,1-3.84,9.7c-4.45,2.29-9,4.32-13.64,6.26a30.75,30.75,0,0,1-5.34,1.26c1.53,1.65,3.21,3.3,4.7,5.1,3,3.69,5.33,7.76,5.86,12.64a15.14,15.14,0,0,1-1.75,9.17c-3.09,5.55-7.6,9.41-13.95,10.75a19,19,0,0,1-12-1.76A16.91,16.91,0,0,1,102,128c-2-1.33-3.82-2.39-6.49-2.23-1.86.11-3.86-1.19-5.73-2a3.91,3.91,0,0,0-2.7-.3c-2.17.49-4.43.54-6.63.91-5.85,1-11.2,3.08-14.87,8a41.83,41.83,0,0,0-3.92,7.44,8.94,8.94,0,0,1-6.51,5.45,7.32,7.32,0,0,1-4.94-.52c-4.45-2.3-8.94-4.54-13.3-7a6.33,6.33,0,0,1-2.1-8.84c3.15-5.31,8.37-7.07,14.12-4.79Zm14.6-18.38,1.21-.62a52.14,52.14,0,0,1,15.17-5.34c1.63-.29,2.81.33,3,1.63.24,1.45-.58,2.37-2.29,2.71a46,46,0,0,0-16.77,6.7c-6.13,4.1-10.28,9.52-11.12,17.09-.22,1.93-2,2.59-3.69,1.54A17.37,17.37,0,0,0,46.74,128c-3.34-1.12-6.11-.14-7.82,2.57-1.05,1.67-.78,2.8.95,3.73,3.29,1.79,6.69,3.41,9.88,5.36,4.12,2.51,7,1.49,8.49-3a22.52,22.52,0,0,1,4.19-7.59c5.62-6.5,13.07-8.94,21.31-9.52a10.41,10.41,0,0,0,5.84-2.09,13.92,13.92,0,0,0,4.81-7.82c.59-2.23.87-4.54,1.49-6.77,1.83-6.56,5.6-12,10.05-17,1.48-1.68,2.31-1.73,4.09-.45,5.19,3.7,10.83,4.55,16.75,2.17,3.9-1.56,7.66-3.47,11.46-5.28a3.82,3.82,0,0,0,2.14-4.08,4.25,4.25,0,0,0-6.13-3.39c-3.49,1.56-6.93,3.25-10.45,4.76a8.3,8.3,0,0,1-9.09-1.4c-1.66-1.37-3.29-2.76-4.86-4.09-11,6.56-21.58,6-31.81-1.75C71.68,82.81,66.34,93.61,64.87,106.22Zm22.65-66.5a21.75,21.75,0,0,0-10.7,2.52,2.43,2.43,0,0,0-1.08,1,21.06,21.06,0,0,0-.07,18.64A2.78,2.78,0,0,0,76.88,63a21.28,21.28,0,0,0,8.67,2.48c5.73.41,11.1-.71,15.72-4.29,6.22-4.82,6.13-12.51-.15-17.25A22.25,22.25,0,0,0,87.52,39.72ZM62.22,96.16A.74.74,0,0,0,62,96a32.25,32.25,0,0,0-25.72,6.82c-3.16,2.51-3.64,2.47-5.46-1-1.94-3.74-5.46-5.39-9-4.2-1.88.63-2.41,1.85-1.54,3.62,1.9,3.85,3.8,7.7,5.73,11.53a4.3,4.3,0,0,0,6.27,2c1.41-.76,2.74-1.66,4.15-2.42,7.18-3.9,14.69-5.23,22.66-2.78,1.06.33,1.25-.21,1.32-1.05.17-1.93.27-3.87.56-5.79C61.31,100.51,61.8,98.34,62.22,96.16ZM81.8,69.38c7.22,6.2,20.43,6.84,28.81-2a21.51,21.51,0,0,0-1-30.71c-8.91-8-21.55-6.49-27.8-.74a31.3,31.3,0,0,1,10.35-.18c5.89.94,11,3.34,14.9,8a13.24,13.24,0,0,1,1.49,15.44c-2.5,4.55-6.45,7.38-11.21,9.15A29.06,29.06,0,0,1,81.8,69.38ZM73.22,72,67.51,73.2c-2.05.44-2.58.18-3.52-1.66-2-4-4-8-6.08-11.92a4.28,4.28,0,1,0-7.68,3.76c2.82,5.74,5.7,11.45,8.57,17.16a3.41,3.41,0,0,0,2.87,2.22,20.78,20.78,0,0,0,5.93-.9c.73-.24,1.09-1.69,1.6-2.59.33-.59.62-1.2.94-1.78C71.13,75.7,72.13,73.92,73.22,72Zm43.13,22.78A28.68,28.68,0,0,1,115,97.5c-.56.93-.38,1.5.44,2.2a26.4,26.4,0,0,1,7.2,8.85c1.61,3.49,1.36,6.8-1.2,9.78-2.75,3.2-6.1,5.16-10.45,4a46.8,46.8,0,0,1-6.2-2.56l-1.95,3.38c7.11,5.32,14.93,5,20.74-.83,3.38-3.4,5.15-7.4,4-12.26C126,103.42,121.33,99.05,116.35,94.74Zm-8-5c-.82,1-1.7,2-2.49,3.13-3.3,4.5-5.85,9.31-6.5,15A19.89,19.89,0,0,1,95,118.21c-.6.75-1.26,1.45-1.9,2.18,3.56,2.12,5.9,1.41,7.58-2.23q4.91-10.59,9.8-21.18c.77-1.67,1.55-3.34,2.33-5ZM35.56,43.83H51.78V31.18H36l-.2.3c1.15,1.09,2.33,2.15,3.45,3.27,1.94,1.93,1.93,3.6,0,5.54C38.11,41.41,37,42.49,35.56,43.83Zm77.13,59.07c-1.92,4.14-3.77,8.1-5.55,12.08a1.11,1.11,0,0,0,.45,1,32,32,0,0,0,4.65,2.15c2.6.83,4.27-.81,5.87-2.53a4.17,4.17,0,0,0,.69-4.91C117.5,107.59,115.2,105.32,112.69,102.9Zm.53-31.65c1.38,1.16,2.64,2.28,4,3.3a9.65,9.65,0,0,0,2.19,1.19,1,1,0,0,0,.93-.3,4.14,4.14,0,0,0-1-5.53,8.17,8.17,0,0,0-3.3-1.44c-.48-.07-1.15,1-1.72,1.63C113.94,70.43,113.64,70.78,113.22,71.25Z" transform="translate(-15.48 -26.65)"/><path class="cls-2" d="M86.56,136.73c3.36.34,4.22.8,4.27,2.26s-.85,2-4.23,2.38c-.21,1.69.38,4-2.36,4.18-1.45.1-1.93-.88-2.26-4.21-1.69-.19-4.18.38-4.13-2.35,0-2.53,2.34-2.1,4.15-2.21.2-1.75-.35-4.24,2.37-4.18C86.89,132.65,86.47,135,86.56,136.73Z" transform="translate(-15.48 -26.65)"/><path class="cls-3" d="M127.45,35.54c-3.57-.5-4.28-.91-4.25-2.4s.83-1.94,4.31-2.28c0-.62,0-1.28,0-1.92a2.22,2.22,0,0,1,2.21-2.28A2.28,2.28,0,0,1,131.87,29c0,.59,0,1.17,0,1.84,1.75.28,4.26-.42,4.24,2.35s-2.42,2.08-4.19,2.26c-.13,1.78.41,4.17-2.25,4.17S127.58,37.3,127.45,35.54Z" transform="translate(-15.48 -26.65)"/><path class="cls-4" d="M28,74.28c-1.74-.19-4.19.54-4.19-2.2s2.42-2,4.19-2.19c.22-1.75-.57-4.25,2.29-4.22s1.92,2.5,2.23,4.19c1.68.23,4.14-.57,4.15,2.19s-2.42,2-4.13,2.24c-.35,1.68.54,4.25-2.36,4.19C27.48,78.42,28.24,76,28,74.28Z" transform="translate(-15.48 -26.65)"/><path class="cls-5" d="M75.69,51.29a8.9,8.9,0,0,1,3.8-6.66,14.93,14.93,0,0,1,9-2.8A2.22,2.22,0,0,1,90.83,44c0,1.14-.9,1.94-2.16,2.2A33.81,33.81,0,0,0,83,47.67a5,5,0,0,0-3,4.5c-.21,1.9-.92,2.7-2.35,2.6S75.64,53.78,75.69,51.29Z" transform="translate(-15.48 -26.65)"/></svg>
        </div>
        <div class="vida box">
            <p>Historial de soluciones tomadas</p>
        </div>

        <div class="center">
            Historial de soluciones tomadas
        </div>
    <div class="dot-container">
        <div class="dot-his">
            <div class="history-info-box">
                <h5>Fecha</h5>
                <p>00/00/2021</p>
            </div>
            <div class="history-info-box">
                <h5>Solución para</h5>
                <p>Préstamo bancario</p>
            </div>
            <div class="history-info-box">
                <h5>Tipo de solución</h5>
                <p>Promoción</p>
            </div>
        </div>  
        <div class="history-info-box">
            <h5>Descripción</h5>
                <p>Pago de contado, disminución del 20%, antes saldo a pagar
                    $32.000.000, monto a pagado después del descuento,
                    $25.000.000</p>
        </div>        
    </div>

    <div class="dot-container">
        <div class="dot-his">
            <div class="history-info-box">
                <h5>Fecha</h5>
                <p>00/00/2021</p>
            </div>
            <div class="history-info-box">
                <h5>Solución para</h5>
                <p>Préstamo bancario</p>
            </div>
            <div class="history-info-box">
                <h5>Tipo de solución</h5>
                <p>Promoción</p>
            </div>
        </div>  
        <div class="history-info-box">
            <h5>Descripción</h5>
                <p>Pago de contado, disminución del 20%, antes saldo a pagar
                    $32.000.000, monto a pagado después del descuento,
                    $25.000.000</p>
        </div>        
    </div>

    <div class="center">
        Historial de pagos
    </div>

    <div class="boxesss">
        <div class="prestamo-boxs2">
            <h6>Préstamo Bancario</h6>
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="orange" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
        </div>
        <div class="acuerdo-box2">
            <h6>Acuerdo PROMOCIÓN</h6>
        </div>
    </div>

        <div class="historias-box">
            <div class="history-info-box">
                Fecha
            </div>
            <div class="history-info-box">
                Solución para
            </div>
            <div class="history-info-box">
                Tipo de solución
            </div>
            <div class="history-info-box">
                Descripción
            </div>
        </div>
        
            <div class="mini-history-box">
                <div class="history-information">
                    00/00/2021
                </div>
                <div class="history-information">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam vitae laborum cupiditate quod sint quibusdam dignissimos ut perspiciatis nam minima magnam nesciunt, vel odio, eaque omnis dolor laudantium quo velit!
                </div>
                <div class="history-information">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquid officiis eveniet nisi quidem doloribus eaque laborum magnam hic vel optio sunt iusto voluptates, quod earum. Ea delectus ut molestias?
                </div>
                <div class="history-information">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore veniam repellendus, sapiente laborum, modi libero animi molestiae dicta, velit mollitia officia! Aut facere consectetur esse saepe repellat fugit laborum atque.
                </div>

                <div class="history-information">
                    00/00/2021
                </div>
                <div class="history-information">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam vitae laborum cupiditate quod sint quibusdam dignissimos ut perspiciatis nam minima magnam nesciunt, vel odio, eaque omnis dolor laudantium quo velit!
                </div>
                <div class="history-information">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquid officiis eveniet nisi quidem doloribus eaque laborum magnam hic vel optio sunt iusto voluptates, quod earum. Ea delectus ut molestias?
                </div>
                <div class="history-information">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore veniam repellendus, sapiente laborum, modi libero animi molestiae dicta, velit mollitia officia! Aut facere consectetur esse saepe repellat fugit laborum atque.
                </div>
        </div>

        <div class="vida box">
            <p>Historial de pagos</p>        
        </div>

        <div class="boxes">
            <div class="prestamo-boxs">
                <h6>Préstamo Bancario</h6>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="orange" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
            </div>
            <div class="acuerdo-box">
                <h6>Acuerdo PROMOCIÓN</h6>
            </div>
        </div>
        

        <div class="grid-tres">
            <div class="histories">
                <p class="osc">Fecha</p>
                <p>00/00/2021</p>
                
            </div>
            <div class="histories">
                <p class="osc">Monto pagado</p>
                <p>$25.000.00</p>
            </div>
            <div class="histories">
                <p class="osc">Deuda</p>
                <p>$0.00</p>
            </div>
        </div>

        <div class="boxesss">
            <div class="prestamo-boxs2">
                <h6>Préstamo Vehículo</h6>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="orange" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
            </div>

        <div class="boxessss">
            <div class="estate-box">
                <h6>Estado de pago: Al día 0 días</h6>
            </div>
            <div class="recomendate-box">
                <h6>RECOMENDADA</h6>
            </div>
        </div>

        <div class="dot-container2">
            <div class="dot-his">
                <div class="history-info-box">
                    <h5>Fecha</h5>
                    <p>00/00/2021</p>
                </div>
                <div class="history-info-box">
                    <h5>Solución para</h5>
                    <p>Préstamo bancario</p>
                </div>
                <div class="history-info-box">
                    <h5>Tipo de solución</h5>
                    <p>Promoción</p>
                </div>
            </div>
            <div class="grid-dos2">
                <div class="history-info-box">
                    <h5>Número de cuota</h5>
                    <p>24</p>
                </div>
                <div class="history-info-box">
                    <h5>Número de cuota</h5>
                    <p>24</p>
                </div>
            </div>
        </div>

        <div class="dot-container2">
            <div class="dot-his">
                <div class="history-info-box">
                    <h5>Fecha</h5>
                    <p>00/00/2021</p>
                </div>
                <div class="history-info-box">
                    <h5>Solución para</h5>
                    <p>Préstamo bancario</p>
                </div>
                <div class="history-info-box">
                    <h5>Tipo de solución</h5>
                    <p>Promoción</p>
                </div>
            </div>
            <div class="grid-dos2">
                <div class="history-info-box">
                    <h5>Número de cuota</h5>
                    <p>24</p>
                </div>
                <div class="history-info-box">
                    <h5>Número de cuota</h5>
                    <p>24</p>
                </div>
            </div>
        </div>

        <div class="boxesss">
            <div class="prestamo-boxs2">
                <h6>Préstamo Tarjetas</h6>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="orange" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
            </div>

        <div class="boxess">
            <div class="prestamo-boxs">
                <h6>Préstamo Vehículo</h6>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="orange" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
            </div>
            <div class="estate-box">
                <h6>Estado de pago: Al día 0 días</h6>
            </div>
            <div class="recomendate-box">
                <h6>RECOMENDADA</h6>
            </div>
        </div>
        <div class="maxi-history-box">
            <div class="history-informations">
                Fecha
            </div>
            <div class="history-informations">
                Monto pagado
            </div>
            <div class="history-informations">
                Monto deuda
            </div>
            <div class="history-informations">
                Número de cuota
            </div>
            <div class="history-informations">
                Monto cuota
            </div>

            <div class="history-informations">
                00/00/2021
            </div>
            <div class="history-informations">
                $23.000.000
            </div>
            <div class="history-informations">
                $47.000.000
            </div>
            <div class="history-informations">
                24
            </div>
            <div class="history-informations">
                $1.100.000
            </div>

            <div class="history-informations">
                00/00/2022
            </div>
            <div class="history-informations">
                $23.000.000
            </div>
            <div class="history-informations">
                $47.000.000
            </div>
            <div class="history-informations">
                25
            </div>
            <div class="history-informations">
                $1.100.000
            </div>

            <div class="history-informations">
                00/00/2023
            </div>
            <div class="history-informations">
                $23.000.000
            </div>
            <div class="history-informations">
                $47.000.000
            </div>
            <div class="history-informations">
                26
            </div>
            <div class="history-informations">
                $1.100.000
            </div>

            <div class="history-informations">
                00/00/2023
            </div>
            <div class="history-informations">
                $23.000.000
            </div>
            <div class="history-informations">
                $47.000.000
            </div>
            <div class="history-informations">
                27
            </div>
            <div class="history-informations">
                $1.100.000
            </div>

            <div class="history-informations">
                00/00/2023
            </div>
            <div class="history-informations">
                $23.000.000
            </div>
            <div class="history-informations">
                $47.000.000
            </div>
            <div class="history-informations">
                28
            </div>
            <div class="history-informations">
                $1.100.000
            </div>
    </div>
    <div class="boxess">
        <div class="prestamo-boxs">
            <h6>Préstamo Tarjetas</h6>
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="orange" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
        </div>
        <div class="estate-box">
            <h6>Estado de pago: Al día 0 días</h6>
        </div>
        <div class="acuerdos-box">
            <h6>Tenemos un acuerdo</h6>
        </div>
    </div>
    <div class="vehicle-box">
        <h6>Préstamo Vehículo</h6>
        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="orange" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
    </div>
    </section>
    <div class="content2">
        @extends('vista-casa')
    </div>

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

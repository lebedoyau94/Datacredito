<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oportunity | Credito</title>
    <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
    <link rel="stylesheet" href="{{asset('css/oportunity.css')}}">
</head>
<body>

<section class="logo-box">
    <h1>Logo</h1>
</section>

<section class="text-container">
    <p class="title">¡Una oportunidad para ti!</p>
    <p class="paragraph">Actualmente no estamos administrando tus deudas, pero lo queremos hacer, registra tus datos y los de tus deudas para negociar la compra de tu cartera.</p>
</section>

<section class="inputs-container">
    <div class="recomendado-box">
        <span>Recomendado</span>
    </div>
    <button class="btn-link">
        <a  href="{{route('information.index')}}">
            Solicitar compra de cartera
        </a>
    </button>
    <button class="btn-link">
        <a  href="#">
            Continuar a página principal
        </a>
    </button>
    {{--<input type="text" value="Solicitar compra de cartera">
    <input type="text" value="Continuar a página principal">--}}
</section>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Credito </title>
    <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">

    <style>

        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            font-size: 62.5%;
        }

        html, body {
            min-height: 100%;
        }

        body{
            background: rgb(216,191,216);
            background: linear-gradient(0deg, rgba(216,191,216,1) 0%, rgba(223,239,253,1) 38%);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            width: 100vw;
        }

        .logo-box{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 22.0rem;
            height: 10.0rem;
            border: 3px solid white;
            color: white;
            text-transform: uppercase;
            font-size: 2.5rem;
            margin: 1.0rem 0 0 0;
        }

        .text-container{
            text-align: center;
            margin: 2.0rem 3.0rem 3.0rem 3.0rem;
            display: flex;
            flex-direction: column;
            height: auto;
            color: #334a64;
            width: 50%;
        }

        .text-container .title {
            font-size: 3.0rem;
        }

        .text-container .paragraph {
            font-size: 2.0rem;
            margin: 1rem 0 0 0;
        }

        .tasa-big-box{
            width: 50%;
            border: 2px solid #334a64;
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-size: 2.0rem;
        }

        .box{
            width: 30%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .bigger{
            font-size: 3.0rem;
        }

        .form-box{
            margin: 2rem 0 0 0;
            width: 70%;
            height: auto;
        }

        .form-box h2{
            text-align: center;
            font-size: 18px;
            color: #334a64;
        }

        .first-line{
            display: flex;
            width: 100%;
            margin: 2rem 0 0 0;
            justify-content: space-between;
        }

        .mini-box{
            text-align: start;
            display: flex;
            flex-direction: column;
            font-size: 16px;
            color: #334a64;
        }

        .second-line{
            display: flex;
            margin: 2rem 0 0 0;
        }

        .second-line .mini-box:nth-child(1){
            margin: 0 9rem 0 0;
        }

        input[type=text], select{
            width: 20rem;
            height: 3rem;
        }

        .third-line{
            display: flex;
            justify-content: space-between;
            margin: 1rem 0 0 0;
        }

        .form-box h3{
            margin: 2rem 0 0 0;
            font-size: 16px;
            color: #334a64;
        }

        .fourth-line{
            margin: 2rem 0 0 0;
            margin-bottom: 2rem;
        }

        .fourth-line input[type=text]{
            width: 25rem;
        }

        .fifth-line{
            margin: 3rem 0 0 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .fifth-line input[type=button]{
            background-color: transparent;
            border: 2px solid #334a64;
            padding: 1rem;
            font-size: 14px;
            cursor: pointer;
        }

        .fifth-line input[type=submit]{
            background-color: #334a64;
            padding: 1rem 3rem;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type=text]{
            background-color: transparent;
            border-radius: 2px;
            padding: 1.0rem;
            text-align: center;
            border: 2px solid #334a64;
        }
        input[type=email]{
            background-color: transparent;
            border-radius: 2px;
            padding: 1.0rem;
            text-align: center;
            border: 2px solid #334a64;
        }
        .is-invalid {
            color: red;
            font-size: small;
        }

    </style>
</head>
<body>
<section class="logo-box">
    <h1>Logo</h1>
</section>

<section class="text-container">
    <p class="title">¡Una oportunidad para ti!</p>
    <p class="paragraph">Actualmente no estamos administrando tus deudas, pero lo queremos hacer, registra tus datos y los de tus deudas para negociar la compra de tu cartera.</p>
</section>

<section class="tasa-big-box">
    <div class="tasa-interes box">
        <p>Tasas de interes desde</p>
        <span class="bigger">1.5%</span>
    </div>

    <div class="comision box">
        <p>Sin comision</p>
    </div>

    <div class="tasa-preferencial box">
        <p>Tasa preferencial</p>
    </div>
</section>

<section class="form-box">
    <h2>Formulario de negociaci&oacute;n de cartera</h2>

    <form action="{{route('information.store')}}" method="POST">
        @csrf
        <div class="first-line">
            <div class="mini-box">
                <label for="Nombres">Nombres</label>
                <input type="text" name="name" value="{{$name}}">
                @error('name')
                <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="mini-box">
                <label for="Apellidos">Apellidos</label>
                <input type="text" name="surnames" value="{{$surnames}}">
                @error('surnames')
                <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="mini-box">
                <label for="Id">Tipo de ID</label>
                <input type="text" name="id_type" value="{{$type}}">
                @error('id_type')
                <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="mini-box">
                <label for="Id">N&uacute;mero de ID</label>
                <input type="text" name="id_number" value="{{$number}}">
                @error('id_number')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="second-line" >
            <div class="mini-box">
                <label for="">N&uacute;mero de tel&eacute;fono</label>
                <input type="text" name="phone" value="{{$phone}}">
                @error('phone')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="mini-box">
                <label for="">Email</label>
                <input type="email" name="email" value="{{$email}}">
                @error('email')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{--<h3>Datos de deudas</h3>
        <div id="div-debts" style="margin-bottom: 2rem;">
            <div class="third-line">
                <div class="mini-box">
                    <label for="Banco">Banco</label>
                    <select name="bank" id="">
                        <option value="">Option</option>
                        <option value="">Option</option>
                        <option value="">Option</option>
                        <option value="">Option</option>
                    </select>
                </div>
                <div class="mini-box">
                    <label for="Tipo-credito">Tipo de cr&eacute;dito</label>
                    <select name="type_credit" id="">
                        <option value="">Option</option>
                        <option value="">Option</option>
                        <option value="">Option</option>
                        <option value="">Option</option>
                    </select>
                </div>
                <div class="mini-box">
                    <label for="Dias-mora">D&iacute;as de mora</label>
                    <select name="past_due" id="">
                        <option value="">Option</option>
                        <option value="">Option</option>
                        <option value="">Option</option>
                        <option value="">Option</option>
                    </select>
                </div>
                <div class="mini-box">
                    <label for="Id">Monto deuda</label>
                    <input type="text" name="monto-deuda" id="">
                </div>
            </div>
            <div class="fourth-line">
                <div class="mini-box">
                    <label for="Id">Numero de producto</label>
                    <input type="text" name="product_number" id="">
                </div>
            </div>
            <hr>
        </div>--}}
        <div class="fifth-line">
            <input type="button" value="Agregar otra deuda +" id="other_debts">
            <input type="submit" value="Enviar">
        </div>
    </form>
</section>


<script>
    document.getElementById('other_debts').onclick = duplicate;
    var i = 0;
    var original = document.getElementById('div-debts');

    function duplicate() {
        alert("Agregando Modal")
        var clone = original.cloneNode(true);
        clone.id = "div-debts" + ++i;
        original.parentNode.appendChild(clone);
    }
</script>


</body>
</html>

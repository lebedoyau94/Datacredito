<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Credito </title>
    <!-- icon -->
    <link rel="icon" href="https://www.itsolutionsengly.com/images/Ite-icon.png">
    <link rel="stylesheet" href="{{asset('css/information.css')}}">
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
            <div class="mini-box nombreApellido">
                <label for="Nombres">Nombres</label>
                <input type="text" name="name" value="{{$name}}">
                @error('name')
                <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="mini-box nombreApellido">
                <label for="Apellidos">Apellidos</label>
                <input type="text" name="surnames" value="{{$surnames}}">
                @error('surnames')
                <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
            <div class="mini-box typeId">
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

        <h3>Datos de deudas</h3>
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
        </div>
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

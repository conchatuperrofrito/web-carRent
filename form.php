<?php
include("db.php");
$ide = $_GET["id"];
$consulta = "SELECT*FROM tusuario where correo_cliente ='$ide'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
$datos = $resultado->fetch_object();
$datos->nombre_usuario;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/stylesForm.css" />
</head>

<body>
  <div class="contact_form">
    <div class="formulario">
      <h1>Formulario de evalución</h1>
      <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>
      <form action="registrarForm.php?id=<?php echo $ide; ?>" method="post">
        <p>
          <label for="email" class="colocar_email">no editable
            <span class="obligatorio">*</span>
          </label>
        <h4>su correo o identificador unico de usuario es : <b class="log"><?php echo $datos->correo_cliente; ?></b></h4>
        </p>
        <p>
          <label for=" email" class="colocar_email">no editable
            <span class="obligatorio">*</span>
          </label>
        <h4>su nombre de usuario es: <b class="log"><?php echo $datos->nombre_usuario; ?></b></h4>
        </p>
        <p>
          <label for="email" class="colocar_email">elija la fecha que quiera enviar esta solicitud, enviara automaticamente
            <span class="obligatorio">*</span>
          </label>
          <?php $fcha = date("Y-m-d");
          echo $fcha . ""; ?>
          <input type="date" id="fechaEntrega" name="fechaEntrega" min="<?php echo $fcha; ?>" />
        </p>
        <p>
          <label for="apellido" class="colocar_apellido">Apellido
            <span class="obligatorio">*</span>
          </label>
          <input type="text" name="introducir_apellido" id="introducir_apellido" required="obligatorio" placeholder="Escribe tu apellido">
        </p>
        <p>
          <label for="edad" class="colocar_edad">Edad
            <span class="obligatorio">*</span>
          </label>
          <input type="number" name="introducir_edad" id="introducir_edad" placeholder="Escribe tu edad" minlength="18" maxlength="80">
        </p>
        <p>
          <label for="" class="colocar_telefono">DNI
            <span class="obligatorio">*</span>
          </label>
          <input type="number" name="introducir_dni" id="introducir_dni" placeholder="Escriba su DNI" maxlength="8">
        </p>
        <p>
          <label for="" class="colocar_telefono">Teléfono
            <span class="obligatorio">*</span>
          </label>
          <input type="number" name="introducir_telefono" id="introducir_telefono" placeholder="Escribe tu teléfono" maxlength="10">
        </p>
        <p>
          <label for="" class="ruta_cliente">Ruta
            <span class="obligatorio">*</span>
          </label>
          <input type="tel" name="ruta_cliente" id="ruta_cliente" placeholder="Escribe que ruta tomara">
        </p>
        <p>
          <label for="" class="residencia_cliente">residencia
            <span class="obligatorio">*</span>
          </label>
          <input type="tel" name="residencia_cliente" id="residencia_cliente" placeholder="Escribe donde reside">
        </p>

        <p>
          <label for="" class="colocar_telefono">para cuantos dias quiere alquidar
            <span class="obligatorio">*</span>
          </label>
          <input type="number" name="numeroDioas" id="numeroDioas" placeholder="Escribe tu teléfono">
        </p>

        <p>
          <label for="" class="residencia_cliente">lugar entrega del auto
            <span class="obligatorio">*</span>
          </label>
          <br>
          <select name="menu" id="menu" class="menuPlase">
            <option value="0">...</option>
            <option value="tanburco">tanburco</option>
            <option value="patibanba">patibanba</option>
            <option value="publo joven" selected>publo joven</option>
          </select>
        </p>
        <p>
          <label for="" class="residencia_cliente">oficio
            <span class="obligatorio">*</span>
          </label>
          <input type="tel" name="oficio" id="oficio" placeholder="Escribe cual es su oficio">
        </p>
        <p>
          <label for="asunto" class="colocar_asunto">Asunto
            <span class="obligatorio">*</span>
          </label>
          <input type="text" name="introducir_asunto" id="introducir_asunto" required="obligatorio" placeholder="Escribe un asunto">
        </p>

        <p class="check">
        <div> segunda entrevista se realizara el mismo dia que enviee el formulario a las oras 8:00 pm </div>
        <span class="obligatorio">:</span>virtual
        <input type="radio" name="check" value="virtual" class="check_2" /> precencia
        <input type="radio" name="check" value="precencia" class="check_2" />
        </p>
        <p>
          <button type="submit" name="enviar_formulario" id="enviarCorreo">
        </p>
        <p>Enviar</p>
        </button>
        <p class="aviso">
          <span class="obligatorio"> * </span>los campos son obligatorios.
        </p>
      </form>
      <script>
        const btnEnvio = document.getElementById('enviarCorreo');
        btnEnvio.addEventListener('click', function(e) {
          const fechaEntrega = document.getElementById('fechaEntrega').value;
          const introducir_apellido = document.getElementById('introducir_apellido').value;
          const introducir_edad = document.getElementById('introducir_edad').value;
          const introducir_dni = document.getElementById('introducir_dni').value;
          const introducir_telefono = document.getElementById('introducir_telefono').value;
          const residencia_cliente = document.getElementById('residencia_cliente').value;
          const numeroDioas = document.getElementById('numeroDioas').value;
          const menu = document.getElementById('menu').value;
          const oficio = document.getElementById('oficio').value;
          window.location.href = `mailto:<?php echo $ide; ?>?subject=envioDesdeFormulario&body=fecha%20entrega%20%3A${fechaEntrega}%0AApellido%20%3A${introducir_apellido}%0AEdad%20%3A${introducir_edad}%0AIntroduce%20DNI%20%3A${introducir_dni}%0AIntroduce%20telefono%20%3A${introducir_telefono}%0ARecidencia%20cliente%20%3A${residencia_cliente}%0ANumero%20de%20dias%20que%20se%20alquilara%3A${numeroDioas}%0AMenu%20%3A${menu}%0AOficio%20%3A${oficio}`;
        });
      </script>
    </div>
  </div>
</body>

</html>
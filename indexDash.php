<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styleDash.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/css/all.min.js"></script>

  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script src="grafig.js"></script>
  <link rel="stylesheet" href="grafig.css">
</head>


<body>
  <div class="grid-container">
    <div class="menu-icon">
      <i class="fas fa-bars header__menu"></i>
    </div>
    <header class="header">
      <div class="header__search">DASHBOARD->ADMINISTRADOR</div>
      <div class="header__avatar"><img src="assets/img/FOTO-CV.png" alt="" height="85px" width="73px"></div>
    </header>
    <aside class="sidenav">
      <div class="sidenav__close-icon">
        <i class="fas fa-times sidenav__brand-close">hola </i>
      </div>
      <ul class="sidenav__list ">
        <li class="sidenav__list-item" data-tabs="a">USUARIO</li>
        <li class="sidenav__list-item" data-tabs="b">AUTOS</li>
        <li class="sidenav__list-item" data-tabs="c">GRAFICA</li>
        <li class="sidenav__list-item" data-tabs="d">...</li>
        <li class="sidenav__list-item" data-tabs="e">...</li>
      </ul>
    </aside>
    <main class="main">

      <div class="tabs a">

        <h5>Registro de autos</h5>
        <div class="main-cards">
          <div class="card">
            <script>
              function eliminar() {
                var respuesta = confirm("seguro que desea eliminar?");
                return respuesta;
              }
            </script>

            <div class="container-fluid row">
              <form class="col-4 px-5" action="" method="POST">
                <?php
                include "modelo/conexion.php";
                include "controlador/registrar_clienteU.php";
                ?>
                <table class="table">
                  <thead>
                    <tr>

                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">correo_cliente</label>
                          <input type="text" class="form-control" name="correo_cliente">
                        </div>
                      </th>
                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">nombre_usuario</label>
                          <input type="text" class="form-control" name="nombre_usuario">
                        </div>
                      </th>
                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">contraseña_usuario</label>
                          <input type="text" class="form-control" name="contraseña_usuario">
                        </div>
                      </th>
                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">estado_usuario</label>
                          <input type="text" class="form-control" name="estado_usuario">
                        </div>
                      </th>
                      <!-- <th scope="col"></th> -->
                      <th scope="col"><button type="submit" class="btn btn-primary" name="registrar">Registrar</button></th>
                    </tr>
                  </thead>
                </table>
              </form>
            </div>
            <!-- <div class="card">Card</div> -->
            <!-- <div class="card">Card</div> -->
          </div>
        </div>
        <h5>eliminar y actualizar clientes</h5>
        <!-- <h5>Registro de autos</h5> -->
        <div class="main-cards">
          <div class="card">
            <div class="col-8">

              <!-- <h1 class="text-left">Pagina principal</h1> -->
              <!-- ///cabezera -->
              <?php
              include "controlador/eliminar_clienteU.php";
              ?>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">correo_cliente</th>
                    <th scope="col">nombre_cliente</th>
                    <th scope="col">contraseña_cliente</th>
                    <th scope="col">estado_cliente</th>
                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  include "modelo/conexion.php";
                  $sql = $conexion1->query("select * from tusuario");
                  while ($datos = $sql->fetch_object()) {
                  ?>
                    <script>
                      console.log("1");
                    </script>
                    <tr>
                      <td><?= $datos->correo_cliente ?></td>
                      <td><?= $datos->nombre_usuario ?></td>
                      <td><?= $datos->contraseña_usuario ?></td>
                      <td><?= $datos->estado_usuario ?></td>
                      <td>
                        <a href="actualizarclienteU.php?id=<?= $datos->correo_cliente ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a onclick="return eliminar()" href="indexDash.php?id=<?= $datos->correo_cliente ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>



          </div>
        </div>
      </div>


      <div class="tabs b">

        <h5>Registro de autos</h5>
        <div class="main-cards">
          <div class="card">
            <script>
              function eliminar() {
                var respuesta = confirm("seguro que desea eliminar?");
                return respuesta;
              }
            </script>

            <div class="container-fluid row">
              <form class="col-4 px-5" action="" method="POST">
                <?php
                include "modelo/conexion.php";
                include "controlador/registrar_cliente.php";
                ?>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">imges_Auto</label>
                          <input type="text" class="form-control" name="imagenCar">
                        </div>
                      </th>

                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">matricula_veiculo</label>
                          <input type="text" class="form-control" name="matricula_veiculo">
                        </div>
                      </th>
                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">marca_veiculo</label>
                          <input type="text" class="form-control" name="marca_veiculo">
                        </div>
                      </th>
                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">modelo_veiculo</label>
                          <input type="text" class="form-control" name="modelo_veiculo">
                        </div>
                      </th>
                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">color_veiculo</label>
                          <input type="text" class="form-control" name="color_veiculo">
                        </div>
                      </th>
                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">stock_veiculo</label>
                          <input type="text" class="form-control" name="stock_veiculo">
                        </div>
                      </th>
                      <th scope="col">
                        <div class="mb-6">
                          <label class="form-label">costo_diari</label>
                          <input type="text" class="form-control" name="costo_diari_veiculo">
                        </div>
                      </th>
                      <!-- <th scope="col"></th> -->
                      <th scope="col"><button type="submit" class="btn btn-primary" name="registrar">Registrar</button></th>
                    </tr>
                  </thead>
                </table>
              </form>
            </div>
            <!-- <div class="card">Card</div> -->
            <!-- <div class="card">Card</div> -->
          </div>
        </div>
        <h5>eliminar y actualizar autos</h5>
        <!-- <h5>Registro de autos</h5> -->
        <div class="main-cards">
          <div class="card">
            <div class="col-8">

              <!-- <h1 class="text-left">Pagina principal</h1> -->
              <!-- ///cabezera -->
              <?php
              include "controlador/eliminar_cliente.php";
              ?>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">imagenCar</th>
                    <th scope="col">matricula</th>
                    <th scope="col">marca</th>
                    <th scope="col">modelo</th>
                    <th scope="col">color</th>
                    <th scope="col">stock</th>
                    <th scope="col">costoXdia</th>
                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  include "modelo/conexion.php";
                  $sql = $conexion1->query("select * from tveiculo");
                  while ($datos = $sql->fetch_object()) {
                  ?>
                    <script>
                      console.log("1");
                    </script>
                    <tr>
                      <td><img src="<?= $datos->imagenCar ?>" alt="NO hay imagen AUN" height="50px" width="auto"></td>
                      <script>
                        console.log("<?= $datos->imagenCar ?>");
                      </script>
                      <td><?= $datos->matricula_veiculo ?></td>
                      <td><?= $datos->marca_veiculo ?></td>
                      <td><?= $datos->modelo_veiculo ?></td>
                      <td><?= $datos->color_veiculo ?></td>
                      <td><?= $datos->stock_veiculo ?></td>
                      <td><?= $datos->costo_diario_veiculo ?></td>
                      <td>
                        <a href="actualizarcliente.php?id=<?= $datos->matricula_veiculo ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a onclick="return eliminar()" href="indexDash.php?id=<?= $datos->matricula_veiculo ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>



          </div>
        </div>

      </div>
      <div class="tabs c">
        <div id="resumeProficiencies">

          <div id="resumeProficienciesTop" class="resumeProficienciesTop1">Cadillac</div>
          <!--END resumeProficienciesTop-->
          <div id="resumeProficienciesBottom">
            <div class="progress">
              <div class="adobe progress-bar progress-bar-info" role="progressbar" style="width: 0%">
              </div>
            </div>
          </div>
          <!--END resumeProficienciesBottom-->

          <div id="resumeProficienciesTop">Alfa Romeo</div>
          <!--END resumeProficienciesTop-->

          <div id="resumeProficienciesBottom">
            <div class="progress">
              <div class="html progress-bar progress-bar-info" role="progressbar" style="width: 0%">
              </div>
            </div>
          </div>
          <!--END resumeProficienciesBottom-->

          <div id="resumeProficienciesTop">Acura</div>
          <!--END resumeProficienciesTop-->

          <div id="resumeProficienciesBottom">
            <div class="progress">
              <div class="css progress-bar progress-bar-info" role="progressbar" style="width: 0%">
              </div>
            </div>
          </div>
          <!--END resumeProficienciesBottom-->

          <div id="resumeProficienciesTop">Jeep</div><!-- END resumeProficienciesTop -->

          <div id="resumeProficienciesBottom">
            <div class="progress">
              <div class="jquery progress-bar progress-bar-info" role="progressbar" style="width: 0%"></div>
            </div>
          </div>
          <!--END resumeProficienciesBottom-->

          <div id="resumeProficienciesTop">Chevrover</div>
          <!--END resumeProficienciesTop-->

          <div id="resumeProficienciesBottom">
            <div class="progress">
              <div class="javascript progress-bar progress-bar-info" role="progressbar" style="width: 0%">
              </div>
            </div>
          </div>
          <!--END resumeProficienciesBottom-->
        </div>
      </div>
      <div class="tabs d">
        <div class="main-header">
          <div class="main-header__heading">Hello User</div>
          <div class="main-header__updates">Recent Items</div>
        </div>


        <div class="main-cards">
          <div class="card">Card</div>
          <div class="card">Card</div>
          <div class="card">Card</div>
        </div>
      </div>
      <div class="tabs e">
        <div class="main-header">
          <div class="main-header__heading">Hello User</div>
          <div class="main-header__updates">Recent Items</div>
        </div>


        <div class="main-cards">
          <div class="card">Card</div>
          <div class="card">Card</div>
          <div class="card">Card</div>
        </div>
      </div>


    </main>

    <footer class="footer">
      <div class="footer__copyright">&copy; 2022</div>
      <div class="footer__signature">create Stifelr</div>
    </footer>
  </div>

</body>
<script src="scriptDash.js"></script>

</html>
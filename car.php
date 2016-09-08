
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <script type="text/javascript">
        


      </script>

    </head>

    <body>
      <!--Import jQuery before materialize.js-->



            <nav>
              <div class="nav-wrapper #00796b teal darken-2">
                <a href="profile.html" class="brand-logo">HOKEN</a>
                <a href="profile.html" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="https://hoken2016.wordpress.com/2016/08/04/universitarios-vs-transporte/">Blog</a></li>
                  <li><a href="usser.html">Perfil</a></li>
                  <li><a href="mobile.html">Contacto</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="https://hoken2016.wordpress.com/2016/08/04/universitarios-vs-transporte/">Blog</a></li>
                  <li><a href="usser.html">Perfil</a></li>
                  <li><a href="mobile.html">Contacto</a></li>
                </ul>
              </div>
            </nav>


<?php 
$link = mysqli_connect("localhost:3306","root","3a8xNbNo7Ij1frLB");
mysqli_select_db($link, "maps");
echo '<form method="POST" action="delete.php">';
$result = mysqli_query($link, "SELECT * FROM automovil");

?>
          <div >

                  <div class="row">
                    <div class="col s10 offset-s1">
                      <a id="addcar" href="addcar.html" class="btn-floating btn-large waves-effect waves-light #00796b"><i class="material-icons">add</i> </a>
                  
                 

                  <table class="striped responsive-table">
                    <thead>
                      <tr>
                          <th data-field="id">Conductor</th>
                          <th data-field="name">Marca</th>
                          <th data-field="model">Modelo</th>
                          <th data-field="plates">Placas</th>
                          <th data-field="color">Color</th>
                          <th data-field="card">T.C.</th>
                          <th data-field="assurance">Seguro</th>
                          <th data-field="actions"></th>

                      </tr>
                    </thead>
                      <?php
                      while ($extraido = mysqli_fetch_array($result)) {
                      ?>
                    <tbody>
                      <tr>
                        <td><?=$extraido['conductor']?></td>
                        <td><?=$extraido['marca']?></td>
                        <td><?=$extraido['modelo']?></td>
                        <td><?=$extraido['placas']?></td>
                        <td><?=$extraido['color']?></td>
                        <td><?=$extraido['TC']?></td>
                        <td><?=$extraido['seguro']?></td>
                        <td><a id="addcar"  class="btn-floating btn-large waves-effect waves-light #00796b" href="config.php?id=<?php echo $extraido['car']?>"><i class="material-icons">settings</i></a>
                        <a id="addcar" class="btn-floating btn-large waves-effect waves-light #00796b" href="delete.php?id=<?php echo $extraido['car']?>"><i class="material-icons">delete</i></a></td>
                      </tr>
                      <?php
                        }
                        mysqli_close($link);
                      ?>

                    </tbody>
                  </table>
                    </div>
                  

          </div>

        </div>

  </div>
  <style type="text/css">
      body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
  </style>
          <footer class="page-footer #00796b teal darken-2">
            <div class="container">
              <div class="row">
                <div class="col l6 s10">
                  <h5 class="white-text">www.hoken.com.mx</h5>
                  <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Inicio</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Blog</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Login</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Registro</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2016 Copyright Text
              <a class="grey-text text-lighten-4 right" href="#!"><>TabSlash</a>
              </div>
            </div>
          </footer>


      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        
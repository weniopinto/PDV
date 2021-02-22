<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/css.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     
      
    </head>

      <!--NAVBAR-->
      <nav>
        <div class="nav-wrapper purple">
          <a href="#!" class="brand-logo center" style="font-family: arial;">CONTROLE DE ESTOQUE</a>
          <ul class="right hide-on-med-and-down">
            <li class="active"><a href="#">Produtos<i class="material-icons left">add_box</i></a></li>
            <li><a href="#">Venda<i class="material-icons left">local_atm</i></a></li>
            <li><a href="#">Relatórios<i class="material-icons left">insert_chart</i></a></li>
          </ul>
          <ul class="left hide-on-med-and-down">
            <li><a href="index.php">Início<i class="material-icons left">home</i></a></li>
          </ul>
        </div>
      </nav>   
      <!--NAVBAR-->  

    <body>

    <div class="container">
    <table>

        <thead>
          <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Categoria</th>
              <th>Quantidade</th>
              <th>Editar/Apagar</th>
          </tr>
        </thead>

        <tbody>

          <tr>
            <td>01</td>
            <td>Arroz Realengo</td>
            <td>Arroz</td>
            <td>10</td>
            <td><a class="btn-small blue" href="#"><i class="material-icons center">edit</i></a><a class="btn-small red" href="#"><i class="material-icons center">delete</i></a></td>
           

        </tbody>
      </table>
      </div>

      <div class="fixed-action-btn">
        <a class="btn-floating btn-large purple">
          <i class="large material-icons">add</i>
        </a>
      </div>
        
    
      <!--JavaScript-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
    </body>

  </html>
        
<?php
   error_reporting(E_ALL);
   ini_set('display_errors', 'on');
 
   require_once 'vendor/autoload.php';
   
   if(empty($_GET)) {
         header('Location: ?path=inicio');
   }

 
?>

<!-- HTML -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

  <div id="head">
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Agenda</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="?path=area">Áreas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?path=tarefas">Tarefas</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div id="body">
    <div class="position-relative" style="margin-top: 20px">
        <?php
              if(!empty($_GET['path'])) { 
                if(($_GET['path'] == "inicio") || ($_GET['path'] == "area") || ($_GET['path'] == "editar") || ($_GET['path'] == "adicionar") || ($_GET['path'] == "excluir") || ($_GET['path'] == "agenda") || ($_GET['path'] == "tarefas") || ($_GET['path'] == "msmanutencao")) {
                  require_once ('views/'. $_GET['path'] . '.php');
                
                }else{
                  require_once ('views/erro.php'); 
                  exit;
                }
               
              }else{
                require_once ('views/erro.php'); 
                exit;
              }
              require_once ('views/'. $_GET['path'] . '.php');
              
        ?>
    </div>
  </div>

  <div id="footer">
    
  </div>    

</body>
</html> 



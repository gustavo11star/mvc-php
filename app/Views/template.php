<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Cadastro em MVC - ULTIAMTE PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </head>
 
    <body>
        <header style="margin-bottom: 30px;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
              <a class="navbar-brand" href="#">MVC</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link" href="/user">Usuarios</a></li>
                </ul>
              </div>
            </nav>
        </header><!-- /header -->
        <div class="container">
          <!-- Content here -->
            <div class="row">
                <?php 
                	if (isset($viewName)) { 
                		$path = viewsPath() . $viewName . '.php';
                		if (file_exists($path)) { 
                			require_once $path; 
                		} 
                	} 
                ?>
            </div>
        </div>
        <footer>
            
        </footer>
 
    </body>
</html>
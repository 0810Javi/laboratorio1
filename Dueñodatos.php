<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Login form Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="principal.php">Veterinaria SV</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Dueñodatos.php">Dueño</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="medicamentosvet.php">Medicamento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mascotasv.php">Mascota</a>
        </li>
        
         
          
      
    </div>
  </div>
</nav>



<br>

<br>

<br>
<br>

<br>

<br>

<br>
<br>




    <div class="vh-100 d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="card bg-white">
              <div class="card-body p-5">
                <form action ="recibirdatosdueño.php" method ="post" class="mb-3 mt-md-4">
                  <h2 class="fw-bold mb-2 text-uppercase ">Veterinaria Dueño</h2>
                  <p class=" mb-5">Please enter your login and password!</p>
                  <div class="mb-3">
                    <label for="email" class="form-label ">Nombre</label>
                    <input type="text" class="form-control" name ="name" id="name" placeholder="Nombre">
                  </div>
                  <div class="mb-3">
                    <label for="text" class="form-label ">apellidos</label>
                    <input type="text" class="form-control" id="ape" placeholder="" name ="ape">
                  </div>

                  <div class="mb-3">
                    <label for="text" class="form-label ">email</label>
                    <input type="text" class="form-control" id="email" placeholder="" name ="email">
                  </div>

                  <div class="mb-3">
                    <label for="text" class="form-label ">ciudad</label>
                    <input type="text" class="form-control" id="ciudad" placeholder="" name ="ciudad">
                  </div>

                  <div class="mb-3">
                    <label for="text" class="form-label ">es su mascota?</label>
                    <input type="text" class="form-control" id="masc" placeholder="" name ="masc">
                  </div>

                  <div class="mb-3">
                    <label for="text" class="form-label ">departamento</label>
                    <input type="text" class="form-control" id="dep" placeholder="" name ="dep">
                  </div>
                  <div class="mb-3">
                    <label for="text" class="form-label ">nacionalidad</label>
                    <input type="text" class="form-control" id="nac" placeholder="" name ="nac">
                  </div>





                  <p class="small"><a class="text-primary" href="">Forgot password?</a></p>
                  <div class="d-grid">
                    <button class="btn btn-dark" type="submit">Enviar</button>
                  </div>
                </form>
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
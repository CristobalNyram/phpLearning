<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <h1 class="text-center m-3">
        Registro de alumnos
    </h1>
    <div class="container m-5">
        <form>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="email" class="form-control" id="nombre" aria-describedby="nombre">

            </div>

            <div class="mb-3">
                <label for="ApellidoM" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="ApellidoM" aria-describedby="ApellidoM">
               
              </div>

              <div class="mb-3">
                <label for="ApellidoP" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="ApellidoP" aria-describedby="emailHelp">

              </div>

            <div class="mb-3">
              <label for="Matricula" class="form-label">Matricula</label>
              <input type="number" class="form-control" id="Matricula">
            </div>
        
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>

    </div>

    <div class="container m-5 mt-5">
        <h1 class="text-center m-3 mt-5">
            Registro de profesores
        </h1>

        <form>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="email" class="form-control" id="nombre" aria-describedby="nombre">

            </div>

            <div class="mb-3">
                <label for="ApellidoM" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="ApellidoM" aria-describedby="ApellidoM">
               
              </div>

              <div class="mb-3">
                <label for="ApellidoP" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="ApellidoP" aria-describedby="emailHelp">

              </div>

            <div class="mb-3">
              <label for="Cedula" class="form-label">Cedula Profesional</label>
              <input type="number" class="form-control" id="Cedula">
            </div>
        
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>

    </div>



    <div class="container m-5 mt-5">
        <h1 class="text-center m-3 mt-5">
            Registro de escuelas
        </h1>

        <form>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="email" class="form-control" id="nombre" aria-describedby="nombre">

              <label for="direccion" class="form-label">Direccion</label>
              <input type="email" class="form-control" id="direccion" aria-describedby="nombre">

            </div>

       
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>

    </div>
    
</body>
</html>



<div class="container m-5 mt-5">
        <h1 class="text-center m-3 mt-5">
            Registro de profesores
        </h1>

        <form method="POST" action="recibir.php">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre">

            </div>

            <div class="mb-3">
                <label for="apellidom" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidom" name="apellidom" aria-describedby="apellidom">
               
              </div>

              <div class="mb-3">
                <label for="apellidop" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidop" name="apellidop" aria-describedby="emailHelp">

              </div>

            <div class="mb-3">
              <label for="cedula" class="form-label">Cedula Profesional</label>
              <input type="number" class="form-control" name="cedula" id="cedula">
            </div>
        
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>

    </div>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGMED</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="register.css" media="screen">
    <style>

html, body {
  height: 100%;
  margin: 0; }

.full-height {
  height: 100%;}

</style>
</head>
<body>

<section id="A" style=" width: 40%; height: 100%; text-align: center; color: #f0f8ff; float: right; background-color: blue; margin-top: 0%;">
    <h1> Registro de Usuario </p></p></h1>
    <p> ALGO CREATIVO AQUI</p>
  </section> 

<section id="B" style=" width: 60%; height: 15%; text-align: center; float: left; text-overflow: inherit; margin-top: 0%;">
    <h2> Ingrese los datos para registarse a SIGMED </h2></p></p></h1>
  </section> 

<form action=" " method="POST">
<section id="C" style="width: 60%; height: 50%; float: right; text-overflow: inherit;  margin-top: 0%;">
          <div class="cedUsuario" style="display: table; width:70%;  height:8%;" >
            <label for="IDdeUsuario" class="form-label">No° de Cédula/Pasaporte</label>
            <input type="cedula" class="form-control" id="IDdeUsuario" name="cedUsuario">  
          </div>
          <div class="nombrePaciente" style="display: table; width:70%;  height:8%;" >
            <label for="Nom" class="form-label">Nombre</label>
            <input type="nombre" class="form-control" id="Nom" name="nombrePaciente">  
          </div>
          <div class="apellidoPaciente" style="display: table; width:70%;  height:8%;" >
            <label for="Apel" class="form-label">Apellido</label>
            <input type="apell" class="form-control" id="Apel" name="apellidoPaciente">  
          </div>
          <div class="emailUser" style="display: table; width:70%;  height:8%;" >
            <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="emailUser">  
          </div>
          <div class="passwd" style="display: table; width:70%;  height:8%;" >
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="passwd">
          </div><p></p>
          <a class="btn btn-primary" href="http://localhost/SIGMED/app/Views/Paciente/calendario/agendar.php" role="button">Registarse</a><p></p>
</section>
</form>

<section id="D">
    <h7> ¿Ya tiene cuenta? Inicie sesión</h7>
    <style> h7 {  text-decoration-line: underline; }    </style>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
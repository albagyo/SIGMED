<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGMED</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

html, body {
  height: 100%;
  margin: 0; }

.full-height {
  height: 100%;}

</style>
</head>
<body>

<section id="A" style="border-radius: 35px 0px 0px 35px; width: 40%; height: 100%; text-align: center; color: #f0f8ff; float: right; background-color: blue; margin-top: 0%;">
    </p></p><h1> Registro de Usuario </p></p></h1>
    <img src="usuario.png" alt="sigmed" width="450" height="450"></p></p>
  </section> 

<section id="B" style=" width: 60%; height: 10%; text-align: center; float: left; text-overflow: inherit; margin-top: 2%;">
    <h2> Ingrese los datos para registarse a SIGMED </h2></p></p></h1>
  </section> 

<form action="?controller=Register&&action=registrar" method="POST">
  <section id="C" style="width: 60%; height: 35%; float: right; text-overflow: inherit;  margin-top: 0%;">
    <div style="padding: 0% 15% 10% 15%;"></p></p>
      <div class="cedula" style=" height:8%;" >
        <label for="IDdeUsuario" class="form-label">No° de Cédula</label>
        <input type="cedula" class="form-control" id="IDdeUsuario" name="cedula"
        placeholder="Formato de cédula (x-xxx-xxx)" required>  
      </div>
      <div class="nombre" style=" height:8%;" >
        <label for="Nom" class="form-label">Nombre</label>
        <input type="nombre" class="form-control" id="Nom" name="nombre">  
      </div>
      <div class="apellido" style=" height:8%;" >
        <label for="Apel" class="form-label">Apellido</label>
        <input type="apell" class="form-control" id="Apel" name="apellido">  
      </div>
      <div class="email" style=" height:8%;" >
        <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email">  
      </div>
      <div class="passwd" style=" height:8%;" >
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="passwd">
      </div><p></p>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary" value="Registrarse">
 </div>
  </section>
</form>

<section id="D" style="width: 60%; height: 5%; text-align: center; float: right; text-overflow: inherit; ">
  <a href="login.php">¿Ya tiene cuenta? Inicie sesión </a>
  <style>  {  text-align: center; text-decoration-line: underline; float: left; }    </style>
  </section> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
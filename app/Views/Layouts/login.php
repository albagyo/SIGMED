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
  height: 100%; }

</style>
</head>
<body>

<section id="A" style="border-radius: 0px 35px 35px 0px; width: 40%;  height: 100%; text-align: center; color: #f0f8ff ; float: left; background-color: blue; margin-top: 0%;">
  
  </p></p><h1> Bienvenido a SIGMED </p></p></h1>
  <img class="img-fluid" src="doctor.png" alt="sigmed" width="500" height="450"></p></p>
  <p> La salud es la mayor posesión. La alegría es el mayor tesoro.</p>
  </section> 

  <section id="B" style="padding: 3% 0% 3% 0%; width: 60%; height: 10%; text-align: center; float: right; text-overflow: inherit;">
  </p></p><h1> INICIO DE SESIÓN</h1></h1>
  </section> 

<form action="?controller=Login&&action=acceder"  method="POST">
  <section id="C" style=" width: 60%; height: 45%; text-align: left; float: right; text-overflow: inherit; ">
        <div style="padding: 5% 30% 4% 30%;">
          <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
          <input type="email"  class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"> 
          <p></p>  <p></p>
          
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name=passwd>
        </div>
        <div style="padding: 0% 30% 5% 30%;">
        <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary" value="Iniciar Sesión">
        </div>
    </section>
</form> 

<section id="D" style="width: 60%; height: 10%; text-align: center; float: right; text-overflow: inherit;">
  </p><hr></p>
  </section> 

<section id="E" style="width: 60%; height: 5%; text-align: center; float: right;">
<div style="padding: 0% 30% 0% 30%;">
      <div class="d-grid gap-2">
      <h7> Cree una cuenta nueva</h7>
          <a class="btn btn-success" href="?controller=Register&&action=index" role="button">Registrarse</a><p></p> 
      </div>
      </div>
    </section> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


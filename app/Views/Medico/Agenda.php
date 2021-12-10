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
  margin: 0;
}

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<div class=row style="height: 10%; width: 100%; margin:0">
    <div class="col" style="Width: 50%; height:100%; float:left;"><h1 style="padding:2%">xxxxxxxxxxxxxxxxx</h1></div>
    <div class="col" style="Width: 50%; height:100%; float:right; text-align:right;"><h1 style="padding:2%">xxxxxxxxxxxxxxxxx</h1></div>
</div>

<hr style="margin: 0; ">
<div class=row style="height: 90%; width: 100%; margin:0">
  <div class="col-md-8 col-sm-6 col-lg-8 col-xl-8" style="height:100%;  float:left;">
    <div class="row" style="padding:3%">
      <div class="col" style="text-align:center;">xxxxxxxx</div>
      <div class="col" style="text-align:center;">
        <a class="btn btn-primary" href="http://localhost/SIGMED/app/Views/Layouts/register.php" role="button">Nueva Cita</a>
      </div>
    </div>
    <iframe src="citas.php" frameborder="0" style="width:100%; height: 60%;">
    <div style="padding:1%; background:#B9FFFF"></div>
  </iframe>
  </div>

  <div class="col-md-4 col-sm-6 col-lg-4 col-xl-4" style="height:100%;  background: #B9FFFF; float:right">
  <br>
  <iframe src="..\Paciente\calendario\index.html" frameborder="0" style="width:100%; height: 60%; border: none "></iframe>
</div>

</div>
    

</body> 
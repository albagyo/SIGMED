

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
<header>
		<?php require_once('C:\xampp\htdocs\SIGMED\app\Views\Layouts\menu.php'); ?>
	</header>
    
<div class="row" style=" height:100%">
    <div class="col-md-3 ml-sm-12 col-lg-3 col-xl-2 px-0" style="height:100%; background: #B9FFFF; ">
        <div style="display: table; width:100%;  height:8%;" >
            <div  style="display: table-cell; background: #033FAC; width:100%; height:100%; color: #ffffff; text-align:center; vertical-align:middle">
                <h2 >Agendar Cita</h2>
            </div>
        </div>
        <main role="main" class="col px-3">
        
            <div class="mb-3" style="padding: 5% 0%">
                <?php echo 'xxxxxxxxxx' ?>
            </div>                 
            <div class="mb-3" style="padding: 5% 0%">
            <?php echo 'xxxxxxxxxx' ?>
            </div>
            <div class="mb-3" style="padding: 5% 0%">
            <?php echo 'xxxxxxxxxx' ?>
            </div>
            
            <a class="btn btn-primary" href="http://localhost/SIGMED/app/Views/Paciente/horas.php" role="button" type="submit">Continuar</a>
        
        </main>
    </div>
    <div class="col-md-9 ml-sm-12 col-lg-9 col-xl-10 px-0">
        <iframe src="index.html" style="padding: 2%; width: 100%; height: 100%; border: none"></iframe>
    </div>
</div>

</body>
</html>
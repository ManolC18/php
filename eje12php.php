<?php
$nom ="Jose Esteban \n";
$npel ="Meneses Licona \n";
$tdoc ="TI\n";
$ndoc ="1045148978\n";
$nmovil ="3167411979\n";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-sm">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del aprendiz:</label>
            <input type="" class="form-control" id="" value="<?php echo $nom ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido del aprendiz:</label>
            <input type="" class="form-control" id="" value="<?php echo $npel ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tipo de documento del aprendiz:</label>
            <input type="" class="form-control" id="" value="<?php echo $tdoc ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numero de documento del aprendiz:</label>
            <input type="" class="form-control" id="" value="<?php echo $ndoc ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telefono del aprendiz:</label>
            <input type="" class="form-control" id="" value="<?php echo $nmovil ?>">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
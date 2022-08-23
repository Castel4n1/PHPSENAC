<?php    
    $resultado = '';


    //print_r($_POST);




    //USO DE $_GET
    if( isset($_GET['btnCalcular']) )
    {        
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $resultado = $n1+$n2;
    }

    //USO DE $_POST
    if( isset($_POST['btnCalcular']) )
    {        
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $resultado = $n1+$n2;
    }

    //USO DE REQUEST
    if( isset($_REQUEST['btnCalcular']) )
    {        
        $n1 = $_REQUEST['n1'];
        $n2 = $_REQUEST['n2'];
        $resultado = $n1+$n2;
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">

        <form action="?" method="post">
            <div class="row">
                <div class="col-md-5">
                    <label for="n1" class="form-label">N1</label>
                    <input type="number" name="n1" id="n1" class="form-control">
                </div>

                <div class="col-md-5 offset-2">
                    <label for="n2" class="form-label">N2</label>
                    <input type="number" name="n2" id="n2" class="form-control">
                </div>
            </div>
            <hr>
            <div class="col-md-2">
                <input class= "btn btn-success" name="btnCalcular" type="submit" value="Calcular">
            </div>
        </form>
        <br>
        <!-- RESULTADO -->
        <div class="row alert alert-success">
            <?php
                echo $resultado;
            ?>
        </div>
        <!-- /RESULTADO -->

    </div>

</body>
</html>
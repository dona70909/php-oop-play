<?php 
/* here create the obj type Calc and call the method on the input values */
    include '../modello/Calc.php';


    $operator = $_POST["operator"];
    $numberOne = $_POST["numberOne"];
    $numberTwo = $_POST["numberTwo"];

    $calcolatrice = new Calc($operator,$numberOne,$numberTwo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>RESULT</title>
</head>
<body>
    <main>
        <section class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-5 box-green d-flex flex-column justify-content-center">
                <div class="text-center">
                    <h1>Operator:</h1>
                    <p class="text-uppercase"><?php echo $calcolatrice->operator ?></p>
                    <h1>Calculation</h1>
                    <p class="text-uppercase"><?php echo $calcolatrice->numberOne?> <?php echo $calcolatrice->getOperator($operator) ?>
                    <?php echo $calcolatrice->numberTwo ?></p> 
                </div>     
                <div class="text-center">
                    <h1>Result</h1>
                    <p class="text-uppercase"> <?php echo $calcolatrice->calcolo($operator,$numberOne,$numberTwo); ?></p>
                </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>


<?php 

    include '../modello/Calc.php';
    include '../controllo/calculator.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>RESULT</title>
</head>
<body>
    <main>
        <section class="container-fluid">
            <div class="row">
                <div class="col-7">
                <h1>
                    <?php 
                        $calcolatrice = new Calc($operator,$numberOne,$numberTwo);
                        echo $calcolatrice->calcolo($operator,$numberOne,$numberTwo);
                    ?>
                </h1>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

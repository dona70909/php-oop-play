<?php
    include '../modello/Calc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Calcolatrice</title>
</head>
<body>
    <main>
        <section class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-5 box-green">

                    <!-- action to the file that creates a new obj Calc- post is the method that render a newpage? -->
                    <form action="../controllo/calculator.php" method="post">
                        <input type="number" name="numberOne" placeholder="Inserisci primo numero">
                        <select name="operator">
                            <option value="add">Addition</option>
                            <option value="sub">Substraction</option>
                            <option value="div">Division</option>
                            <option value="mult">Multiplication</option>
                        </select>
                        <input  name="numberTwo" type="number" placeholder="Inserisci primo numero">
                        <button type="submit" > Calculate</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
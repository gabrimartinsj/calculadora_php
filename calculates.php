<?php
    require_once 'class/calculator.php';
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operat = $_POST['operat'];

    $calculator = new Calculator();

    $calculator->setNum1($num1);
    $calculator->setNum2($num2);

    if($operat == "sum"){
        $calculator->sum();
        echo $calculator->getTotal();
    } else if($operat == "sub"){
        $calculator->sub();
        echo $calculator->getTotal();
    } else if($operat == "multi"){
        $calculator->multi();
        echo $calculator->getTotal();
    } else if($operat == "divi"){
        $calculator->divi();
        echo $calculator->getTotal();
    }
?>

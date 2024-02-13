<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
         $equation = 'x * 7 = 49';
        $elements = explode(" ", $equation);
        $operator = $elements[1];
        $operand = $elements[2];
        $result = $elements[4];
        $x = 0;
        switch ($operator) {
            case '+':
                $x = $result - $operand;
                echo $x; break;
            case '-':
                $x = $result + $operand;
                echo $x; break;
            case '/':
                $x = $result * $operand;
                echo $x; break;
            case '*':
                $x = $result / $operand;
                echo $x; break;
            case '**':
                $x = $result ** (1 / $operand);
                echo $x; break;
            default:
                echo 'Оператор введен неверно';
        };





        
        ?>
    </h1>
</body>
</html>
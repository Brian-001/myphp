<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Function| Example Two</title>
</head>
<body>
    <?php 
        $factor = 10;

        $multiply = function ($number) use ($factor) {
            return $number * $factor;
        };
        echo $multiply (9);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array|Ex 2.</title>
</head>
<style>
    .parent{
        display: flex;
    }
    .child{
        margin: auto;
    }
    .child li{
        list-style: none;
    }
</style>
<body>
    <?php

    $cars = 
    [
        $car1 = 
        [
            'model' =>'Civic',
            'make' => 'Honda',
            'year' => 2022,
            'color' => 'Blue',
            'price' => 25000,
        ],
        $car2 = 
        [
            'model' =>'Prado',
            'make' => 'Toyota',
            'year' => 2023,
            'color' => 'White',
            'price' => 50000,
        ],
        $car3 =
        [
            'model' => 'Ferrari',
            'make' => 'Itallian',
            'year' => 2021,
            'color' => 'Red',
            'price' => 75000,
        ]

    ];
     ?>

    <div class="parent">
        <div class="child">
         <!-- 1. Display details of each car  -->
         <h2>Details of each car</h2>
         <?php 
            foreach ($cars as $car)
            {
                echo "<h3>$key</h3>";
                echo "<ul>";
                    foreach ($car as $attribute => $value)
                    {
                        echo "<li>$attribute: $value</li>";
                    }
                echo "</ul>";
            }

            //2. Calculate and display the average price of the cars

            $prices = array_column($cars, 'price');
            $averagePrice = array_sum($prices) / count($prices);
            echo "<h4>Average price of cars: $averagePrice</h4>";

            //3. Check if a car with a specific model exists
            $targetModel = 'Civic';
            if (in_array($targetModel, array_column($cars, 'model')))
            {
                echo "<h4>$targetModel exists in the array. </h4>";
            }else{
                echo "<h4>$targetModel does not exist in the array.</h4>";
            }

            //4. Add a new car to the array and display the updated 
            
            $newCar = [
                'model' => 'Mustang',
                'make' => 'Ford',
                'year' => 2022,
                'color' => 'Yellow',
                'price' => 35000,
            ];
            $cars['car4'] = $newCar;

            echo "<h4>Updated car Details:</h4>";
            foreach ($cars as $key=> $car)
            {
                echo "<h3>$key</h3>";
                echo "<ul>";
                foreach ($car as $attribute => $value)
                {
                    echo "<li> $attribute: $value </li>";
                }
                echo "</ul>";
            }
         ?>
        </div>
    </div>    
</body>
</html>
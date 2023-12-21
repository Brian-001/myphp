# PHP Nitty Gritty Concepts
## Associative Array
#### Definition: Associative array is an array which has both key and value ie. $bookName => 'The River and The Source' respectively.
#### Normal array ie ``` $colors = ['red', 'blue', 'green'] ```  can be accessed via index ``` $book[0] ``` whereas Associative array 
``` 
$books =
[
        ['
            'bookName' => 'Kidagaa Kimemwozea',
            'bookArthor' => 'Ken Walibora',
            'bookPurchaseUrl' => 'http://ken.com',
        ],

        [
            'bookName' => 'River Between',
            'bookArthor' => 'Said A. Mohamed',
            'bookPurchaseUrl' => 'http://said.com',
        ], 
],
```

#### A short hand for writing php tags ie ``` <?php?> ``` is ``` <?= ?> ```
##### A single equal sign is used when you want to assign a value ie ``` $book['author'] = 'Magaret' ``` (Assigns all the book author to Margaret) <br> <br> while tripple equal sign is used when you want to check a quality ie ```$book['author'] === 'Magaret' ``` (Checks if there is a book whose author is Margaret)

#### Associative Array Questions 
><strong>Quiz one</strong>: <br>
You are tasked with managing information about a collection of cars. Each car has the following  details: model, make, year of manufacture, color, and price. Implement a PHP associative array to store information about three cars and then perform the following tasks: <br>
> 1. Display the details of each car in a structured format. <br>
> 2. Calculate and display the average price of the cars
> 3. Check if a car with specific model exists in the array and display a message accordingly.
> 4. Add a new car to the array and display the updated information.

#### Solution to <strong> Quiz one</strong> to be found in ``` ass2_array.php ```
> <strong>Explanation of ass2_array.php</strong><br>
> Outer loop
> ``` foreach($cars as $key = $car)```
>This loop iterates through each element of the <strong>$cars </strong> array. For each iteration it assigns it assigns the current key to the variable $key and the current variable <strong> $key </strong> and the current value which is an associative array representing details of a car to the variable <strong> $car </strong>.

> ``` <h3>$key</h3> ``` This line outputs HTML heading <strong>h3</strong> containg the current key which represents the identifier for the car (e.g., '$car1', '$car2').

> ```foreach ($car as $attribute => $value)``` <br>
>This is a foreach loop that iterates through each attribute-value pair of the current car. For each iteration, it assigns the attribute name to the variable ``` attribute``` and the attribute value to the variable ``` $value ```

> ``` echo "<li>$attribute: $value</li>"; ``` <br>
This line outputs an HTML list item ``` <li> ``` for each attribute-value pair, displaying the attribute name followed by its corresponding value.

### Lambda Functions
><strong>Lambda Function</strong> - is a way to create anonymous functions which are functions without a specified name.
>In ../lambdafunctions folder, <strong> ex1 </strong>  ``` function ($a, $b),  return $a + $b ``` is a <strong>Lambda Function</strong>

#### Lambda Characteristics
> <strong>Anonymous</strong> - Lambda functions do not have a name, making them suitable for short-term use or situations where function name is not critical.<br>
> <strong>Variables from enclosing scope</strong> - Lambda functions can use variables from surrounding(enclosing) scope.<br> This behavior is called <b>closure</b> and it allows the lambda function to 'capture' variables even after parent function has finished execution.
> ``` ref: ../lambdafunctions/ex2.php ```
><b>Passing as Arguement</b> - Lambda functions can be passed as arguement to other functions. This is particulary useful for functions that expect a callback. <br>
> ***Function Callback*** - is a reference to a function, and it can be used as an arguement in another function or method.<br>

***Regular Function***<br>

        function myCallbackFunction($value)
        { 
            return value*2; 
        }
***Lambda Function*** <br>

        $mycallback = function ($value)
        {
            return $value *2;
        };








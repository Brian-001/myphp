<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function One| Movies</title>
</head>
<style>
    .parent{
        display: flex;
    }
    .child{
        margin: auto;
    }
    /* .child li{
        list-style: none;
        padding: 8px;
    } */
</style>
<body>
    <!-- Create an array of your favorites movies, including their respective 
    release dates. Then, write a function that filters your list of movies down 
    to only those that were released in the year 2000 or higher and then whose rating is greater than  or equal to 7.0
    . Display the results 
    in an unordered list. -->

    <?php 
        $movies = 
        [
            [
                "name" => "Home Alone",
                "releaseYear" => 1990,
                "duration" => "1h 43min",
                "rating" => 7.7
            ],

            [
                "name" => "The Santa Clause",
                "releaseYear" => 1994,
                "duration" => "1h 37min",
                "rating" => 6.6
            ],

            [
                "name" => "American Beauty",
                "releaseYear" => 1999,
                "duration" => "2h 2min",
                "rating" => 8.3,
            ],

            [
                "name" => "Wrong Turn 1",
                "releaseYear" => 2003,
                "duration" => "1h 24min",
                "rating" => 6.1
            ],

            [
                "name" => "Wrath of Man",
                "releaseYear" => 2021,
                "duration" => "1h 59min",
                "rating" => 7.1
            ],
            [
                "name" => "Extraction II",
                "releaseYear" => 2023,
                "duration" => "2h 2min",
                "rating" => 7.0
            ]
        ];

        $filteredMovies = array_filter($movies, function($movie){

            return $movie["releaseYear"] >= 2000 && $movie["rating"] >= 7.0;
        });
        // 
    ?>
    <div class="parent">
        <div class="child">
            <h1>Filtered Movies</h1>

            <h4>
                Movies whose release year is greater than or equal to 2000
            </h4>
            <ul>
                <?php foreach($filteredMovies as $movie): ?>
                    <li><?= $movie['name']; ?>,  <?= $movie['releaseYear'] ?> </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</body>
</html>